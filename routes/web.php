<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


route::get('/dashboard', [ServiceController::class, 'index']);
Route::get('/mobile-recharge', [ServiceController::class, 'mobileRech'])->name('mobile-recharge');


