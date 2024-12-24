<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 
    public function master_admin_layout(){
        return view('admin.master_admin_layout');
    }

    public function admin_Dashboard(){
        return view('admin.admin_dashboard');
    }

    public function commission_slot(){
        return view('admin.commission_slot');
    }

    public function add_commission_slot(){
        return view('admin.add_commission_slot');
    }

    public function application_setting(){
        return view('admin.application_setting');
    }

    public function announcement(){
        return view('admin.announcement');
    }

    public function add_announce(){
        return view('admin.add_announce');
    }

    public function ticket_department(){
        return view('admin.ticket_department');
    }

    public function add_ticket_department(){
        return view('admin.add_ticket_department');
    }

    public function company_bank(){
        return view('admin.company_bank');
    }

    public function add_new_bank(){
        return view('admin.add_new_bank');
    }

    public function user_manager(){
        return view('admin.user_manager');
    }

    public function add_new_user(){
        return view('admin.add_new_user');
    }

    public function admin_account_history(){
        return view('admin.admin_account_history');
    }

    public function admin_fund_request(){
        return view('admin.admin_fund_request');
    }

    public function payout_bank(){
        return view('admin.payout_bank');
    }

    public function admin_fund_transfer(){
        return view('admin.admin_fund_transfer');
    }

    // public function mobile_recharge_report(){
    //     return view('admin_service_report.mobile_recharge_report');
    // }

    public function dth_recharge_report(){
        return view('admin_service_report.dth_recharge_report');
    }

    public function bill_payment_report(){
        return view('admin_service_report.bill_payment_report');
    }

    public function admin_aeps_report(){
        return view('admin_service_report.admin_aeps_report');
    }

    public function admin_mobile_recharge_report(){
        return view('admin_service_report.admin_mobile_recharge_report');
    }

    public function admin_money_transfer_report(){
        return view('admin_service_report.admin_money_transfer_report');
    }

    public function admin_fund_request_report(){
        return view('admin_service_report.admin_fund_request_report');
    }
    
    public function admin_aadhar_pay_report(){
        return view('admin_service_report.admin_aadhar_pay_report');
    }

    public function admin_commission_slab(){
        return view('admin_service_report.admin_commission_slab');
    }

    public function admin_gst_report(){
        return view('admin_service_report.admin_gst_report');
    }

    public function admin_tds_report(){
        return view('admin_service_report.admin_tds_report');
    }

    public function admin_commission_report(){
        return view('admin_service_report.admin_commission_report');
    }

    public function admin_wallet_add_fund(){
        return view('admin.admin_wallet_add_fund');
    }

    public function admin_view_all(){
        return view('admin.admin_view_all');
    }

    public function admin_change_password(){
        return view('admin.admin_change_password');
    }

    public function service_category(){
        return view('modules.service_category');
    }
    
    public function service_master(){
        return view('modules.service_master');
    }

    public function city_master(){
        return view('modules.city_master');
    }

    public function user_type_master(){
        return view('modules.user_type_master');
    }

    public function plain_master(){
        return view('modules.plain_master');
    }

    public function application_banner(){
        return view('modules.application_banner');
    }

    public function add_new_service_category(){
        return view('modules.add_new_service_category');
    }

    public function all_fund_transfer(){
        return view('admin.all_fund_transfer');
    }

    public function add_new_city(){
        return view('modules.add_new_city');
    }

    public function add_new_service_master(){
        return view('modules.add_new_service_master');
    }
}
