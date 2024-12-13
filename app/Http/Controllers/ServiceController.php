<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function mobileRech()
    {
        return view('mobile-recharge');
    }
    public function showDTHRechargePage()
    {
        return view('dth-recharge');
    }
    public function showBillPayment()
    {
        return view('bill-payment');
    }
    public function showAEPS()
    {
        return view('aeps');
    }
    public function showTransfer()
    {
        return view('money-transfer');
    }
    public function checkMobile(Request $request)
    {
        $mobileNumber = $request->input('mobile_number');

        if ($mobileNumber === '0000000000') {
            // Example data to pass to the view
            $userData = [
                'name' => 'ABCD XYZ',
                'mobile' => '1234567890',
                'available_limit' => 25000.00,
                'used_limit' => 0.00,
                'beneficiaries' => [
                    [
                        'name' => 'XYZ ABCD',
                        'bank' => 'HDFC BANK',
                        'account' => '123456',
                        'ifsc' => 'HDFC0000XXX'
                    ]
                ]
            ];

            return view('beneficiary-view', compact('userData'));
        }

        return redirect()->back()->with('error', 'Invalid Mobile Number');
    }

    public function moveBank()
    {
        return view('move-to-bank');
    }
    public function createBank()
    {
        return view('add-bank-account');
    }
    public function showForm()
    {
        return view('fund-request');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'company_bank' => 'required',
            'deposit_date' => 'required|date',
            'payment_mode' => 'required',
            'amount' => 'required|numeric|min:1',
            'remark' => 'nullable|string|max:255',
        ]);

        return redirect()->route('fund.request.form')->with('success', 'Fund request submitted successfully!');
    }
    public function showAadhaar()
    {
        return view('aadhaar-pay');
    }
    public function showFundTransfer()
    {
        return view('fund-transfer');
    }
    public function showFastTag()
    {
        return view('fast-tag');
    }
    public function showLIC()
    {
        return view('lic-bill-payment');
    }
}
