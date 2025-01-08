<?php

use App\Http\Middleware\CheakAuth;
use Illuminate\Contracts\View\View;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KycController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

Route::get('fundtransfer', function () {
    return view('services.fundtransfr');
})->name('user.fundtransferpaisa');

Route::get('user/dashboard', [ViewController::class,'dashboard'])->name('user.dashboard');
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
Route::post('/kyc', [KycController::class, 'store'])->name('kyc.store');
Route::get('registration',[LoginController::class,'registration'])->name('user.registration');
Route::post('dataregister',[LoginController::class,'dataregistration'])->name('user.dataregistr');
Route::get('/',[ViewController::class,'login'])->name('user.login');
// Route::post('athenticate',[LoginController::class,'userlogin'])->name('user.login');
Route::post('auhtentication', [LoginController::class, 'auhtentication'])->name('user.auhtentication');


Route::get('/good1', function () {
    return view('good1');
});

// Route::get('frogetvew',[ViewController::class,'frogetvew'])->name('user.frogetvew');
// Route::post('user/cheak',[ViewController::class,'passwordvalidate'])->name('user.passwordvalidate');




// Route::middleware('auth')->group(function () {
 
// });
Route::get('addbalace',[ViewController::class,'addbialance'])->name('user.addbialance');


  Route::get('changepassword',[ViewController::class,'changepassword'])->name('user.changepassword');
  Route::post('updatepassword',[ViewController::class,'updatepassword'])->name('user.updatepassword');
  


Route::get('frogetvew',[ViewController::class,'frogetvew'])->name('user.frogetvew');

Route::get('logoutuser',[ViewController::class,'logoutuser'])->name('user.logout1');

Route::post('submitpassword',[LoginController::class,'submitpassword'])->name('auth.submitpassword');
Route::get('resetpaswrd/{token}',[ViewController::class,'changepassword'])->name('auth.resetpaswrd');
Route::get('movetobnk',[ViewController::class,'movetobnk'])->name('user.movetobnk');
Route::get('addbankaccont',[ViewController::class,'addbankaccont'])->name('user.addbankaccont');
Route::get('addharpay',[ViewController::class,'addharpay'])->name('user.addharpay');
Route::get('microatm',[ViewController::class,'microatm'])->name('user.microatm');
// Route::get('fundtransfr',[LoginControlle::class,'fundTransferusr'])->name('user.fundtransfrresq');
Route::get('fastag',[ViewController::class,'fastag'])->name('user.fastag');
Route::get('upicollection',[ViewController::class,'upicollection'])->name('user.upicollection');
Route::get('finocms',[ViewController::class,'finocms'])->name('user.finocms');
Route::get('licbillpayment',[ViewController::class,'licbillpayment'])->name('user.licbillpayment');
Route::get('nsdlapayment',[ViewController::class,'nsdlapayment'])->name('user.nsdlapayment');




//Admin Route

Route::get('servicereport',[AdminController::class,'servicereport'])->name('admin.servicereport');
Route::get('citymaster',[AdminController::class,'citymaster'])->name('admin.citymaster');
Route::get('Addnewcity',[AdminController::class,'Addnewcity'])->name('admin.Addnewcity');
Route::get('Usertypemaster',[AdminController::class,'Usertypemaster'])->name('admin.Usertypemaster');
Route::get('service_master',[AdminController::class,'service_master'])->name('admin.service_master');
Route::get('add_new_service_master',[AdminController::class,'add_new_service_master'])->name('admin.add_new_service_master');
Route::get('plain_master',[AdminController::class,'plain_master'])->name('admin.plain_master');
Route::get('commission_slot',[AdminController::class,'commission_slot'])->name('admin.commission_slot');
Route::get('add_commission',[AdminController::class,'add_commission'])->name('admin.add_commission');
Route::get('application_setting',[AdminController::class,'application_setting'])->name('admin.application_setting');
Route::get('application_banner',[AdminController::class,'application_banner'])->name('admin.application_banner');
Route::get('announcement',[AdminController::class,'announcement'])->name('admin.announcement');
Route::get('add_announce',[AdminController::class,'add_announce'])->name('admin.add_announce');
Route::get('ticket_department',[AdminController::class,'ticket_department'])->name('admin.ticket_department');
Route::get('add_ticket_department',[AdminController::class,'add_ticket_department'])->name('admin.add_ticket_department');
Route::get('company_bank',[AdminController::class,'company_bank'])->name('admin.company_bank');
Route::get('user_manager',[AdminController::class,'user_manager'])->name('admin.user_manager');
Route::get('companyhistry',[AdminController::class,'companyhistry'])->name('admin.companyhistry');
Route::get('fundreq',[AdminController::class,'fundreq'])->name('admin.fundreq');
Route::get('payoutbnk',[AdminController::class,'payoutbnk'])->name('admin.payoutbnk');
Route::get('fundtransfr',[AdminController::class,'fundtransfr'])->name('admin.fundtransfr');
Route::get('allfundtrnsfr',[AdminController::class,'allfundtrnsfr'])->name('admin.allfundtrnsfr');
Route::get('mobilerecharge',[AdminController::class,'adminmobilerecharge'])->name('admin.mobilerecharge');
Route::get('dthrechrage',[AdminController::class,'dthrechrage'])->name('admin.dthrechrage');
Route::get('billpaymnt',[AdminController::class,'billpaymnt'])->name('admin.billpaymnt');
Route::get('adminaeps',[AdminController::class,'adminaeps'])->name('admin.adminaeps');
Route::get('menytransfr',[AdminController::class,'menytransfr'])->name('admin.menytransfr');
Route::get('fundrequest',[AdminController::class,'fundrequest'])->name('admin.fundrequest');
Route::get('admnaddharpay',[AdminController::class,'admnaddharpay'])->name('admin.admnaddharpay');
Route::get('commisnslanadm',[AdminController::class,'commisnslanadm'])->name('admin.commisnslanadm');
Route::get('gstadmn',[AdminController::class,'gstadmn'])->name('admin.gstadmn');
Route::get('tdsadm',[AdminController::class,'tdsadm'])->name('admin.tdsadm');
Route::get('commsnreportadm',[AdminController::class,'commsnreportadm'])->name('admin.commsnreportadm');
Route::get('admnaddunds',[AdminController::class,'admnaddunds'])->name('admin.admnaddunds');
Route::get('viewalladmn',[AdminController::class,'viewalladmn'])->name('admin.viewalladmn');
Route::get('changepassword',[AdminController::class,'changepassword'])->name('admin.changepassword');
Route::get('add_new_bank',[AdminController::class,'add_new_bank'])->name('admin.add_new_bank');
Route::get('add_new_user',[AdminController::class,'add_new_user'])->name('admin.add_new_user');

Route::get('admin_profile',[AdminController::class,'admin_profile'])->name('admin.admin_profile');
Route::get('admin_certificate',[AdminController::class,'admin_certificate'])->name('admin.admin_certificate');

