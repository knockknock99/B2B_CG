<?php

namespace App\Http\Controllers;

use App\Models\Kyc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ViewController extends Controller
{
    public function kycform(){
        return view('kyc.kycdtail');
    }
    public function merchant(){
        return view('kyc.merchant');
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

    public function my_profile()
{
    
   
    return view('my_profile');
       
}


    // public function logout(){
    //     return view('logout');
    // }

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

    public function movetobnk(){
        return view('services.movetobnk');
    }
    public function addbankaccont(){
        return view('services.addnewbankacc');
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
    public function frogetvew(){
        return view('auth.forget');
    }
    public function changepassword($token){
        return view('auth.changepassword',['token'=>$token]);
    }
    public function addharpay(){
        return view('services.adharpay');
    }
   public function microatm(){
    return view('services.microatm');
   }

  
   public function fastag(){
    return view('services.fastag');
   }
    
public function updatepassword(Request $request)
{
 $request->validate([
    'email'=>'required|email|exists:users,email',
    'password'=>'required|min:8|confirmed',
    'password_confirmation'=>'required,'
 ]);
 $uptodatepass=DB::table('password_reset_tokens')->where([
    'email'=>$request->email,
    'token'=>$request->token,
 ])->frist();
 if(!$uptodatepass){
    return back()->withInput()->with('error','Invalid Token');
 }
 $user=User::where('email',$request->email)->update(['password'=>Hash::make($request->password)]);
 DB::table('password_reset_tokens')->where(['email'=>$request->email])->delete();
 return redirect()->route('user.login');


}

public function addbialance(){
    return view('addbalance');
}

public function upicollection(){
    return view('services.upicollection');
}
public function finocms(){
    return view('services.finocms');
}
public function licbillpayment(){
    return view('services.bill_payment');
}

public function nsdlapayment(){
    return view('services.nsdlplaincard');
}

public function updateProfilePic(Request $request)
{
    // Validate the incoming request to ensure an image file is uploaded
    $request->validate([
        'profilePicture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handle the file upload
    if ($request->hasFile('profilePicture')) {
        // Get the uploaded file
        $file = $request->file('profilePicture');
        
        // Store the file in the 'profile_pics' directory inside storage/app/public
        $filePath = $file->store('profile_pics', 'public');

        // Optionally, update the user's profile with the new image path
        auth()->user()->update(['frontpic' => $filePath]);

        // Return a success response with the new image path
        return response()->json([
            'success' => true,
            'imageUrl' => Storage::url($filePath),
        ]);
    }

    // Return an error response if no file was uploaded
    return response()->json(['success' => false, 'message' => 'No file uploaded']);
}
public function logoutuser()
{
    Auth::logout(); // Logs the user out
    
    return redirect()->route('user.login'); // Redirect the user to the login page (or any other route)
}



}