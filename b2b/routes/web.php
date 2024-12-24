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
Route::get('/announcement',[AdminController::class,'announcement'])->name('admin.announcement');
Route::get('/add_announce',[AdminController::class,'add_announce'])->name('admin.add_announce');
Route::get('/ticket_department',[AdminController::class,'ticket_department'])->name('admin.ticket_department');
Route::get('/add_ticket_department',[AdminController::class,'add_ticket_department'])->name('admin.add_ticket_department');
Route::get('/company_bank',[AdminController::class,'company_bank'])->name('admin.company_bank');
Route::get('/add_new_bank',[AdminController::class,'add_new_bank'])->name('admin.add_new_bank');
Route::get('/user_manager',[AdminController::class,'user_manager'])->name('admin.user_manager');
Route::get('/add_new_user',[AdminController::class,'add_new_user'])->name('admin.add_new_user');
Route::get('/admin_account_history',[AdminController::class,'admin_account_history'])->name('admin.admin_account_history');
Route::get('/admin_fund_request',[AdminController::class,'admin_fund_request'])->name('admin.admin_fund_request');
Route::get('/payout_bank',[AdminController::class,'payout_bank'])->name('admin.payout_bank');
Route::get('/admin_fund_transfer',[AdminController::class,'admin_fund_transfer'])->name('admin.admin_fund_transfer');



// Admin service report 
Route::get('/mobile_rechage_report',[AdminController::class,'admin_mobile_recharge_report'])->name('admin.mobile_recharge_report');
Route::get('/dth_recharge_report',[AdminController::class,'dth_recharge_report'])->name('admin.dth_recharge_report');
Route::get('/bill_payment_report',[AdminController::class,'bill_payment_report'])->name('admin.bill_payment_report');
Route::get('/admin_aeps_report',[AdminController::class,'admin_aeps_report'])->name('admin.admin_aeps_report');
Route::get('/admin_money_transfer_report',[AdminController::class,'admin_money_transfer_report'])->name('admin.admin_money_transfer_report');
Route::get('/admin_fund_request_report',[AdminController::class,'admin_fund_request_report'])->name('admin.admin_fund_request_report');
Route::get('/admin_aadhar_pay_report',[AdminController::class,'admin_aadhar_pay_report'])->name('admin.admin_aadhar_pay_report');
Route::get('/admin_commission_slab',[AdminController::class,'admin_commission_slab'])->name('admin.admin_commission_slab');
Route::get('/admin_gst_report',[AdminController::class,'admin_gst_report'])->name('admin.admin_gst_report');
Route::get('/admin_tds_report',[AdminController::class,'admin_tds_report'])->name('admin.admin_tds_report');
Route::get('/admin_commission_report',[AdminController::class,'admin_commission_report'])->name('admin.admin_commission_report');


Route::get('/admin_wallet_add_fund',[AdminController::class,'admin_wallet_add_fund'])->name('admin.admin_wallet_add_fund');
Route::get('admin_view_all',[AdminController::class,'admin_view_all'])->name('admin.admin_view_all');

Route::get('/admin_user_type',[AdminController::class,'admin_user_type'])->name('admin.admin_user_type');
Route::get('/admin_change_password',[AdminController::class,'admin_change_password'])->name('admin.admin_change_password');

// Modules 
Route::get('/service_category',[AdminController::class,'service_category'])->name('admin.service_category');
Route::get('/service_master',[AdminController::class,'service_master'])->name('admin.service_master');
Route::get('/city_master',[AdminController::class,'city_master'])->name('admin.city_master');
Route::get('/user_type_master',[AdminController::class,'user_type_master'])->name('admin.user_type_master');
Route::get('/plain_master',[AdminController::class,'plain_master'])->name('admin.plain_master');
Route::get('/application_banner',[AdminController::class,'application_banner'])->name('admin.application_banner');
Route::get('/add_new_service_category',[AdminController::class,'add_new_service_category'])->name('admin.add_new_service_category');
Route::get('/all_fund_transfer',[AdminController::class,'all_fund_transfer'])->name('admin.all_fund_transfer');
Route::get('/add_new_city',[AdminController::class,'add_new_city'])->name('admin.add_new_city');
Route::get('/add_new_service_master',[AdminController::class,'add_new_service_master'])->name('admin.add_new_service_master');



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

