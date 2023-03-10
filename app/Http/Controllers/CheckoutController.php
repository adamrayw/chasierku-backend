<?php

namespace App\Http\Controllers;

use Midtrans;
use Exception;
use App\Models\User;
use App\Models\Package;
use App\Models\Checkout;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CheckoutController extends Controller
{

    public function dashboard()
    {
        $data = Checkout::where('user_id', Auth::User()->id)->get();

        return view('dashboard', compact('data'));
    }

    public function __construct()
    {
        Midtrans\Config::$serverKey = env('MIDTRANS_SERVERKEY');
        Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Midtrans\Config::$isSanitized = env('MIDTRANS_IS_SANITIZED');
        Midtrans\Config::$is3ds = env('MIDTRANS_IS_3DS');
    }

    public function store(Request $request, Package $package)
    {
        // mapping request data
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['package_id'] = $package->id;

        // create checkout
        $checkout = Checkout::create($data);
        $this->getSnapRedirect($checkout);

        return redirect(route('checkout'));
    }

    public function create(Package $package)
    {
        return view('checkout', compact('package'));
    }


    public function success()
    {
        return view('berhasil-berlangganan');
    }

    public function getSnapRedirect(Checkout $checkout)
    {
        $orderId = $checkout->id . '-' . Str::random(5);
        $price = $checkout->package->price * 1000;

        $checkout->midtrans_booking_code = $orderId;

        $transaction_details = [
            'order_id' => $orderId,
            'gross_amount' => $price, // no decimal allowed for creditcard
        ];

        $item_details[] = [
            'id' => $orderId,
            'price' => $price,
            'quantity' => 1,
            'name' => $checkout->package->title,
        ];

        $userData = [
            'first_name' => $checkout->User->name,
            'last_name' => '',
            'address' => $checkout->User->address,
            'city' => '',
            'postal_code' => '',
            'phone' => $checkout->User->phone,
            "country_code" => 'IDN',
        ];

        $customer_details = [
            'first_name' => $checkout->User->name,
            'last_name' => '',
            'email' => $checkout->User->email,
            'phone' => $checkout->User->phone,
            'billing_address' => $userData,
            'shipping_address' => $userData,
        ];

        $midtrans_params = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        ];

        try {
            // get snap payment page url
            $paymentUrl = Midtrans\Snap::createTransaction($midtrans_params)->redirect_url;
            $checkout->midtrans_url = $paymentUrl;
            $checkout->save();

            return $paymentUrl;
        } catch (Exception $e) {
            $checkout->midtrans_url = $e;
            $checkout->save();

            return $e;
        }
    }

    public function midtransCallback(Request $request)
    {
        $notif = $request->method() === 'POST' ? new Midtrans\Notification() : Midtrans\Transaction::status($request->order_id);

        $transaction_status = $notif->transaction_status;
        $fraud = $notif->fraud_status;

        $checkout_id = explode('-', $notif->order_id)[0];
        $checkout = Checkout::find($checkout_id);
        $user = User::find(Auth::User()->id);

        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
                // TODO Set payment status in merchant's database to 'challenge'
                $checkout->payment_status = 'pending';
            } else if ($fraud == 'accept') {
                // TODO Set payment status in merchant's database to 'success'
                $checkout->payment_status = 'paid';
                $user->expired = Carbon::now()->addMonths($checkout->package->month);
            }
        } else if ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
                // TODO Set payment status in merchant's database to 'failure'
                $checkout->payment_status = 'failed';
            } else if ($fraud == 'accept') {
                // TODO Set payment status in merchant's database to 'failure'
                $checkout->payment_status = 'failed';
            }
        } else if ($transaction_status == 'deny') {
            // TODO Set payment status in merchant's database to 'failure'
            $checkout->payment_status = 'failed';
        } else if ($transaction_status == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $checkout->payment_status = 'paid';
            $user->expired = Carbon::now()->addMonths($checkout->package->month);
        } else if ($transaction_status == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $checkout->payment_status = 'pending';
        } else if ($transaction_status == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $checkout->payment_status = 'failed';
        }

        $checkout->save();
        $user->save();
        return view('berhasil-berlangganan');
    }
}