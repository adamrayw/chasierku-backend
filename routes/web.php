<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PackageController::class, 'index'])->name('home');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('berhasil-berlangganan', function () {
    return view('berhasil-berlangganan');
})->name('berlangganan');

Route::get('berhasil-checkout', function () {
    return view('selesaikan-pembayaran');
})->name('checkout');

// Route::middleware(['Auth'])->group(function () {
Route::get('checkout/success', [CheckoutController::class, 'success'])->middleware(['auth']);
Route::get('checkout/{package:slug}', [CheckoutController::class, 'create'])->middleware(['auth']);
Route::post('checkout/{package}', [CheckoutController::class, 'store'])->middleware(['auth'])->name('checkout.store');
// });

Route::get('/dashboard', [CheckoutController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

// midtrans routes
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);

require __DIR__ . '/auth.php';