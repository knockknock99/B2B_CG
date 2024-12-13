<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

route::get('/dashboard', [ServiceController::class, 'index']);
Route::get('/mobile-recharge', [ServiceController::class, 'mobileRech'])->name('mobile-recharge');
Route::get('/dth-recharge', [ServiceController::class, 'showDTHRechargePage'])->name('dth-recharge');
Route::post('/dth-recharge', [ServiceController::class, 'processDTHRecharge'])->name('dth-recharge.process');
Route::get('/bill-payment', [ServiceController::class, 'showBillPayment'])->name('bill-payment');
Route::get('/aeps', [ServiceController::class, 'showAEPS'])->name('aeps');
Route::get('/money-transfer', [ServiceController::class, 'showTransfer'])->name('money-transfer');
Route::post('/check-mobile', [ServiceController::class, 'checkMobile'])->name('check.mobile');
Route::get('/move-to-bank', [ServiceController::class, 'moveBank'])->name('move-to-bank');
Route::get('/add-bank-account', [ServiceController::class, 'createBank'])->name('add-bank-account');
Route::get('/fund-request', [ServiceController::class, 'showForm'])->name('fund.request.form');
Route::post('/fund-request', [ServiceController::class, 'submitForm'])->name('fund.request.submit');
Route::get('/aadhaar-pay', [ServiceController::class, 'showAadhaar'])->name('aadhaar-pay');
Route::get('/fund-transfer', [ServiceController::class, 'showFundTransfer'])->name('fund.transfer');
Route::get('/fast-tag', [ServiceController::class, 'showFastTag'])->name('fast-tag');
Route::get('/lic-bill', [ServiceController::class, 'showLIC'])->name('lic-bill-payment');