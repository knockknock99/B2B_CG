<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;





// Route::get('/', function () {
//     return view('masterLayout');
// });

Route::get('/', [ViewController::class,'dashboard'])->name('user.dashboard');

// iftekhar bhai
Route::get('/kycform',[ViewController::class,'kycform'])->name('user.kyc');
Route::get('/merchant',[ViewController::class,'merchant'])->name('user.merchant');
Route::get('/mobilerecharge',[ViewController::class,'mobilerecharge'])->name('user.mobilerecharge');
Route::get('/Aeps',[ViewController::class,'aeps'])->name('user.aeps');
Route::get('/account_histry',[ViewController::class,'account_histry'])->name('user.account_histry');
Route::get('/commission_slab',[ViewController::class,'commission_slab'])->name('user.commission_slab');

Route::get('/gstreport',[ViewController::class,'gstreport'])->name('user.gstreport');
Route::get('tdsreport',[ViewController::class,'tdsreport'])->name('user.tds');
Route::get('/my_profile',[ViewController::class,'my_profile'])->name('user.my_profile');
Route::get('/logout',[ViewController::class,'logout'])->name('user.logout');
Route::get('/certificate',[ViewController::class,'certificate'])->name('user.certificate');

Route::get('/commissionReport',[ViewController::class,'commissionReport'])->name('user.commissionReport');
Route::get('/account_setting', [ViewController::class,'account_setting'])->name('user.account_setting');
Route::get('/commissionReport',[ViewController::class,'commissionReport'])->name('user.commissionReport');
Route::get('/dth_report',[ViewController::class,'dth_report'])->name('user.dth_report');
Route::get('/bill_payment_report',[ViewController::class,'bill_payment_report'])->name('user.bill_payment_report');
Route::get('/aeps_report',[ViewController::class,'aeps_report'])->name('user.aeps_report');
Route::get('/money_transfer_report',[ViewController::class,'money_transfer_report'])->name('user.money_transfer_report');
Route::get('/fund_request',[ViewController::class,'fund_request'])->name('user.fund_request');
Route::get('/aadhar_pay_report',[ViewController::class,'aadhar_pay_report'])->name('user.aadhar_pay_report');
Route::get('/service',[ViewController::class,'service'])->name('user.service');


Route::get('/add_balance',[ViewController::class,'add_balance'])->name('user.add_balance');

// services 
Route::get('/aeps',[ViewController::class,'aeps_service'])->name('user.aeps_service');
Route::get('/mobile_recharge_service',[ViewController::class,'mobile_recharge_service'])->name('user.mobile_recharge_service');
Route::get('/bill_payment_service',[ViewController::class,'bill_payment_service'])->name('user.bill_payment_service');
Route::get('/dth_service',[ViewController::class,'dth_service'])->name('user.dth_service');
Route::get('/fund_request_service',[ViewController::class,'fund_request_service'])->name('user.fund_request_service');
Route::get('/money_transfer_service',[ViewController::class,'money_transfer_service'])->name('user.money_transfer_service');

// AdminController 
Route::get('/master_admin_layout',[AdminController::class,'master_admin_layout'])->name('admin.master_admin_layout');
Route::get('/adminDashboard',[AdminController::class,'admin_Dashboard'])->name('admin.admin_dashboard');

// Admin Pages 
Route::get('/commission_slot',[AdminController::class,'commission_slot'])->name('admin.commission_slot');
Route::get('/add_commission_slot',[AdminController::class,'add_commission_slot'])->name('admin.add_commission_slot');
Route::get('/application_setting',[AdminController::class,'application_setting'])->name('admin.application_setting');








// Login & Register 
// Route::get('/',[AuthController::class,'login'])->name('user.login');
// Route::get('/register',[AuthController::class,'register'])->name('user.register');

// Route::post('/dataregistration',[ViewController::class,'dataregistration'])->name('user.dataregistration');

// Route::get('/good', function () {
//     return view('good');
// });

// Route::get('/good1', function () {
//     return view('good1');
// });

// Route::get('/', function () {
//     return view('auth.login');
// });

