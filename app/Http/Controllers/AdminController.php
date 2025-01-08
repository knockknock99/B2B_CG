<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
 
    public function master_admin_layout(){
        return view('admin.master_admin_layout');
    }

    public function admin_Dashboard(){
        return view('admin.admindashbrd');
    }
    public function servicereport(){
        return view('admin.Modules.service_category');
    }
    public function citymaster(){
        return view('admin.Modules.city_master');
    }
    public function Addnewcity(){
        return view('admin.Modules.add_newcity');
    }
    public function Usertypemaster(){
        return view('admin.Modules.user_type_master');
    }
    public function service_master(){
        return view('admin.Modules.service_master');
    }
    public function add_new_service_master(){
        return view('admin.Modules.add_new_service_master');
    }
    public function plain_master(){
        return view('admin.modules.plain_master');
    }
    public function commission_slot(){
        return view('admin.Modules.commission_slot');
    }
    public function add_commission(){
        return view('admin.Modules.add_commission_slot');
    }
    public function application_setting(){
        return view('admin.Modules.application_setting');
    }
    public function application_banner(){
        return view('admin.Modules.application_banner');
    }
    public function announcement(){
        return view('admin.Modules.announcement');
    }
    public function add_announce(){
        return view('admin.Modules.add_announce');
    }
    public function ticket_department(){
        return view('admin.Modules.ticket_department');
    }
    

   public function add_ticket_department(){
    return view('admin.Modules.add_ticket_department');
   }
   public function company_bank(){
    return view('admin.external.compny_bank');
   }
    public function user_manager(){
        return view('admin.external.user_manager');
    }
    public function companyhistry(){
        return view('admin.external.account_histry');
    }
    public function fundreq(){
        return view('admin.external.fundreq');
    }
    ///
    public function payoutbnk(){
        return view('admin.external.payoutbnk');
    }
    public function fundtransfr(){
        return view('admin.external.fundtransfr');
    }
    public function allfundtrnsfr(){
        return view('admin.external.allfundtrnsfr');
    }
    public function adminmobilerecharge(){
        return view('admin.servicerepo.mobilerech');
    }
    public function dthrechrage(){
        return view('admin.servicerepo.dthrechrge');
    }
    public function billpaymnt(){
        return view('admin.servicerepo.billpaymnt');
    }
    public function adminaeps(){
        return view('admin.servicerepo.admn_aeps');

    }
    public function menytransfr(){
        return view('admin.servicerepo.moneytrnsfradn'); 
    }
    public function fundrequest(){
        return view('admin.servicerepo.fundrequ');
    }
    public function admnaddharpay(){
        return view('admin.servicerepo.admnaddharpay');
    }
    public function commisnslanadm(){
        return view('admin.servicerepo.commisonslabadm');
    }
    public function gstadmn(){
        return view('admin.servicerepo.gstadm');
    }
    public function tdsadm(){
        return view('admin.servicerepo.tdsadm');
    }
    public function commsnreportadm(){
        return view('admin.servicerepo.commisonrepotadm');
    }
    public function admnaddunds(){
        return view('admin.adminwallet.amnwaltaddfund');
    }
    public function viewalladmn(){
        return view('admin.adminwallet.admnviewall');
    }
    public function changepassword(){
        return view('admin.adminwallet.admnchangepasswrd');
    }
    public function add_new_bank(){
        return view('admin.external.add_new_bank');
    }
    public function add_new_user(){
        return view('admin.external.add_new_user');
    }

    public function admin_profile(){
        return view('admin.admin_profile');
    }

    public function admin_certificate(){
        return view('admin.admin_certificate');
    }
}
