<?php

namespace App\Http\Controllers;

use App\Models\Kyc;
use App\Models\User;
use Illuminate\Http\Request;

class KycController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric|',
            'dob' => 'required|date',
            'password' => 'required|string|min:8',
            'state' => 'required|string',
            'city' => 'required|string',
            'pin' => 'required|string|size:6',
            'firm_name' => 'required|string|max:255',
            'address' => 'required|string',
            'aadhar_number' => 'required|string|max:12|unique:kycs,aadhar_number',
            'pan_number' => 'required|string|max:10|unique:kycs,pan_number',
            'aadhar_front' => 'required|file|mimes:jpg,jpeg,png,pdf|max:10240', // 10 MB max
            'aadhar_back' => 'required|file|mimes:jpg,jpeg,png,pdf|max:10240', // 10 MB max
            'pan_upload' => 'required|file|mimes:jpg,jpeg,png|max:10240',
            'frontpic' => 'required|file|mimes:jpg,jpeg,png|max:10240',
        ]);
    
        // Handle file uploads and check if files exist
        if ($request->hasFile('aadhar_front') && $request->hasFile('aadhar_back') && $request->hasFile('pan_upload') && $request->hasFile('frontpic')) {
            $aadharFrontPath = $request->file('aadhar_front')->store('uploads/aadhar', 'public');
            $aadharBackPath = $request->file('aadhar_back')->store('uploads/aadhar', 'public');
            $panUploadPath = $request->file('pan_upload')->store('uploads/pan', 'public');
            $frontPicPath = $request->file('frontpic')->store('uploads/frontpics', 'public');
        } else {
            return back()->withErrors(['file_upload' => 'Please upload all the required files.']);
        }
    
        // Save the form data into the database
        try {
            $kyc = new Kyc();
            $kyc->first_name = $request->input('first_name');
            $kyc->last_name = $request->input('last_name');
            $kyc->gender = $request->input('gender');
            $kyc->email = $request->input('email');
            $kyc->phone = $request->input('phone');
            $kyc->dob = $request->input('dob');
            $kyc->password = bcrypt($request->input('password')); // Hash the password
            $kyc->state = $request->input('state');
            $kyc->city = $request->input('city');
            $kyc->pin = $request->input('pin');
            $kyc->firm_name = $request->input('firm_name');
            $kyc->address = $request->input('address');
            $kyc->aadhar_number = $request->input('aadhar_number');
            $kyc->pan_number = $request->input('pan_number');
            $kyc->aadhar_front = $aadharFrontPath;
            $kyc->aadhar_back = $aadharBackPath;
            $kyc->pan_upload = $panUploadPath;
            $kyc->frontpic = $frontPicPath;
            $kyc->save();
            return redirect()->route('user.certificate')->with('status', 'KYC Information Submitted Successfully!');
        } catch (\Exception $e) {
            // Handle any errors and return the error message
            return back()->withErrors(['error' => 'There was an error processing your request. Please try again later.']);
        }
    }
}
