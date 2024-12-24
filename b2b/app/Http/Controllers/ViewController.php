<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function kycform(){
        return view('kyc.kycdtail');
    }
    public function merchant(){
        return view('kyc.merchant');
    }
    public function mobilerecharge(){
        return view('service-report.mobile_recharge');
    }
    public function aeps(){
        return view('service-report.Aeps');
    }
    public function account_histry(){
        return view('service-report.account_histry');
    }
    public function commission_slab(){
        return view('service-report.commission_slab');
    }
    public function gstreport(){
        return view('service-report.gst_report');
    }
    public function tdsreport(){
        return view('tds_report');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function my_profile(){
        return view('my_profile');
    }

    public function logout(){
        return view('logout');
    }

    public function certificate(){
        return view('certificate');
    }

    public function commissionReport(){
        return view('service-report.commission_report');
    }

    public function account_setting(){
        return view('account_setting');
    }

    public function dth_report(){
        return view('service-report.dth_report');
    }

    public function bill_payment_report(){
        return view('service-report.bill_payment');
    }

    public function aeps_report(){
        return view('service-report.aeps_report');
    }

    public function money_transfer_report(){
        return view('service-report.money_transfer_report');
    }

    public function fund_request(){
        return view('service-report.fund_request');
    }

    public function aadhar_pay_report(){
        return view('service-report.aadhar_pay_report');
    }
    
    public function service(){
        return view('service');
    }

    public function aeps_service(){
        return view('services.aeps');
    }

    public function mobile_recharge_service(){
        return view('services.mobile_recharge_service');
    }

    public function bill_payment_service(){
        return view('services.bill_payment');
    }

    
    public function dth_service(){
        return view('services.dth_service');
    }

    public function fund_request_service(){
        return view('services.fund_request_service');
    }

    public function money_transfer_service(){
        return view('services.money_transfer_service');
    }
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function add_balance(){
        return view('add_balance');
    }

 
}
