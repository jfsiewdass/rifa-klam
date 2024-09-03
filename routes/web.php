<?php

use App\Http\Controllers\DayRateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LotteryController;
use App\Models\DayRate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
  
Route::get('/admin', function () {
    if(Auth::guest())
        return redirect()->route('login');
    return view('welcome');
});
  
Auth::routes();
  
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
Route::get('/payment/{id}', [HomeController::class, 'payment'])->name('payment');
Route::post('/payment/store', [HomeController::class, 'store'])->name('payment.store');
Route::post('/numbers/check', [HomeController::class, 'numbers_check'])->name('numbers.check');
Route::post('/numbers/remove', [HomeController::class, 'numbers_remove'])->name('numbers.remove');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('lotteries', LotteryController::class);
    
    Route::get('dayrate/index', [DayRateController::class, 'index'])->name('dayrate.index');
    Route::post('dayrate/store', [DayRateController::class, 'store'])->name('dayrate.store');
    Route::post('lotteries/voucher/accept', [LotteryController::class, 'lotteries_voucher_accept'])->name('lotteries.voucher.accept');
    Route::post('lotteries/voucher/reject', [LotteryController::class, 'lotteries_voucher_reject'])->name('lotteries.voucher.reject');
    Route::post('lotteries/select/winner', [LotteryController::class, 'lotteries_select_winner'])->name('lotteries.select.winner');
});
