<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VoucherController extends Controller
{

    public function getAllVoucher(User $user)
    {
        $data = User::with('vouchers')->find($user->id);

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function delete($id)
    {
        $data = Voucher::where('id', $id)->delete();

        return response()->json([
            'status' => 'Voucher Successfully Deleted!',
            'data' => $data
        ]);
    }

    public function edit(Request $request)
    {
        $data = Voucher::where('id', $request->id)->update([
            'voucher_name' => $request->voucher_name,
            'voucher_code' => $request->voucher_code,
            'disc' => $request->disc,
        ]);

        return response()->json([
            'status' => 'Voucher Successfully Updated!',
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'voucher_name' => 'required',
            'voucher_code' => 'required',
            'disc' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }


        $store_voucher = Voucher::create([
            'user_id' => $request->user_id,
            'voucher_name' => $request->voucher_name,
            'voucher_code' => $request->voucher_code,
            'disc' => $request->disc,
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $store_voucher,
        ]);
    }
}