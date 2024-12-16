<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }


    public function dataregistration(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',  // Added 'email' validation rule
            'phone' => 'required|unique:users,phone', // Add phone validation if required
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
        return redirect()->route('user.page')->with('success', 'You are successfully registered');
    }

}



