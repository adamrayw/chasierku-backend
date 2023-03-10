<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VoucherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('/voucher/store', [VoucherController::class, 'store']);
Route::get('/voucher/{user}', [VoucherController::class, 'getAllVoucher']);
Route::delete('/voucher/{id}/delete', [VoucherController::class, 'delete']);
route::post('/voucher/{id}/edit', [VoucherController::class, 'edit']);
route::post('/category', [CategoryController::class, 'store']);
route::get('/category/{user}', [CategoryController::class, 'getCategory']);
Route::delete('/category/{category}/delete', [CategoryController::class, 'delete']);
route::get('/category/{user}/{category}', [CategoryController::class, 'findMenuById']);
route::post('/menu', [MenuController::class, 'store']);
route::get('/menu/{user}', [MenuController::class, 'getMenu']);
Route::delete('/menu/{menu}/delete', [MenuController::class, 'delete']);
Route::post('/transaction', [TransactionController::class, 'store']);
Route::get('/transactions/{user}', [TransactionController::class, 'getTransaction']);
Route::get('/transactions/today/{user}', [TransactionController::class, 'getTotalTransactionToday']);
Route::post('/income', [IncomeController::class, 'updateIncome']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });


    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});