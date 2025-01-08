@extends('masterLayout')
@section('content')
@extends('layouts.app')

@section('title', 'Aadhaar Pay Cash Withdrawal')

@section('content')

<div class="container-fluid mt-4">
    <div class="flex flex-row">
        <!-- Sidebar -->
        <div class="w-1/4 lg:w-1/5 p-4 bg-light rounded fixed h-full top-0 left-0">
            <div class="text-center mb-4">
                <img src="assets/img/codegraphi-logo.png" alt="Logo" class="w-1/2 mx-auto">
            </div>
            <ul class="list-none space-y-3">
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-home mr-2"></i> Dashboard</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-id-card mr-2"></i> KYC</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-cogs mr-2"></i> Services</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-file-alt mr-2"></i> Service Report</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-history mr-2"></i> Account History</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-percent mr-2"></i> My Commission Slab</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-file-invoice mr-2"></i> GST Report</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-clipboard mr-2"></i> TDS Report</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-chart-bar mr-2"></i> Commission Report</a></li>
                <li><a href="#" class="text-dark flex items-center"><i class="fas fa-cog mr-2"></i> Account Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-full lg:w-3/4 lg:ml-1/5 p-4">
            <div class="card border-0 shadow">
                <h4 class="text-primary font-bold text-xl mb-4 ml-3">Aadhaar Pay Cash Withdrawal</h4>
                <div class="card-body">
                    <form>
                        <!-- Device Type, Mobile No, Aadhaar No, Biometrics -->
                        <div class="flex flex-wrap mb-4">
                            <div class="w-full sm:w-1/2 md:w-1/4 mb-3">
                                <select class="form-select w-full border-b-2 border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" id="device-type" required>
                                    <option value="" disabled selected>Select Device Type *</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/4 mb-3">
                                <input type="text" class="form-control w-full border-b-2 border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" id="mobile-number" placeholder="Enter 10 Digit Mobile No *" required>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/4 mb-3">
                                <input type="text" class="form-control w-full border-b-2 border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" id="aadhaar-number" placeholder="Enter 12 Digit Aadhaar No *" required>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/4 mb-3 text-center">
                                <div class="biometrics-box border p-3 rounded bg-light">
                                    <img src="assets/img/biometric-placeholder.png" alt="Biometrics" class="w-24 mx-auto">
                                    <p class="mt-2 mb-0">Biometrics *</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-4">
                            <div class="w-full sm:w-1/2 md:w-1/2 mb-3">
                                <select class="form-select w-full border-b-2 border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" id="bank-name" required>
                                    <option value="" disabled selected>- Select Bank - *</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/2 mb-3">
                                <input type="text" class="form-control w-full border-b-2 border-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" id="withdrawal-amount" placeholder="Enter the Withdrawal Amount *" required>
                            </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="mb-4">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="terms-customer" required>
                                <label class="form-check-label" for="terms-customer">
                                    I, the Customer, hereby accept and confirm all the terms & conditions to the best of my knowledge.
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="terms-retailer" required>
                                <label class="form-check-label" for="terms-retailer">
                                    I, the Retailer, hereby accept and confirm all the terms & conditions to the best of my knowledge.
                                </label>
                            </div>
                            <p class="text-muted mt-3 border-t pt-3">
                                <strong>Note:</strong> You are restricted to performing no more than <strong>5 transactions</strong> per mode for the same Aadhaar number.
                            </p>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-left">
                            <button type="submit" class="btn bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Capture Fingerprint</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


  
@endsection