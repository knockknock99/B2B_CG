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
}
