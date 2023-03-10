<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class IncomeController extends Controller
{
    public function updateIncome(Request $request)
    {
        $data = User::where('id', $request->user_id)->update([
            'income' => $request->income,
        ]);

        return response()->json(['status' => 'income success updated!', 'data' => $request->income], 200);
    }
}