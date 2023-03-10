<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function store(Request $request)
    {
        $data = Transaction::create([
            'user_id' => $request->user_id,
            'customer_name' => $request->customer_name,
            'menu' => $request->menu,
            'subtotal' => $request->subtotal,
            'ppn' => $request->ppn,
            'kode_voucher' => $request->kode_voucher,
            'discount' => $request->discount,
            'total' => $request->total,
            'payment_method' => $request->payment_method,
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getTransaction(User $user)
    {
        $data = Transaction::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        return response()->json(['status' => 'success', 'data' => $data], 200);
    }

    public function getTotalTransactionToday(User $user)
    {
        $data = Transaction::where('user_id', $user->id)->whereDate('created_at', date('Y-m-d', time()))->get();

        return response()->json(['status' => 'success', 'data' => $data], 200);
    }
}