<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\IndianMobileNumber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{
    public function registration(){
        return view('auth.register');
    }
    public function dataregistration(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',  // Added 'email' validation rule
            'phone' => ['required', 'string', new IndianMobileNumber], // Add phone validation if required
            'password' => 'required|confirmed',  // Password validation (at least 6 characters)
        ]);
    
        // Check if the validation passes
        if ($validator->fails()) {
            return redirect()->route('user.registration')
                ->withInput()  
                ->withErrors($validator);  
        }
    
        // If validation passes, create the user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
    
        // Redirect to login page with a success message
        return redirect()->route('user.login')->with('success', 'You are successfully registered');
    }

    
    public function auhtentication(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone' => 'required|numeric',
        ]);

        // Check if the user exists
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Log the user in
            Auth::login($user);

            // Redirect to the dashboard or home page
            return redirect()->route('user.dashboard')->with('success', 'Login successful!');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }
    }
    public function submitpassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
        ]);
        $token=Str::random(32);
        DB::table('password_reset_tokens')->where('email',$request->email)->delete();
        DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=> Carbon::now()

        ]);
        Mail::send('auth.emailfr',['token'=>$token],function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');

        });
        return redirect()->route('user.login');
    }


   
    
    
}
