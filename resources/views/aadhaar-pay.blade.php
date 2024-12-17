@extends('layouts.app')

@section('title', 'Aadhaar Pay Cash Withdrawal')

@section('content')
<style>
    .form-control:focus,
    .form-select:focus,
    .btn:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .form-control,
    .form-select {
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0;
    }

    .form-control:focus,
    .form-select:focus {
        border-bottom: 1px solid #007bff;
    }

    .btn {
        outline: none;
        box-shadow: none;
    }

    .biometrics-box img {
        max-width: 100%;
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        width: 200px;
    }

    .card-header.bg-primary {
        background-color: #007bff !important;
    }
</style>

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-4">
            <div class="sidebar bg-light p-3 rounded" style="position: fixed; left: 0; top: 0; height: 100vh; width: 200px;">
                <div class="logo text-center mb-4">
                    <img src="assets/img/codegraphi-logo.png" alt="Logo" class="img-fluid w-50">
                </div>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-home me-2"></i> Dashboard</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-id-card me-2"></i> KYC</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-cogs me-2"></i> Services</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-file-alt me-2"></i> Service Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-history me-2"></i> Account History</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-percent me-2"></i> My Commission Slab</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-file-invoice me-2"></i> GST Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-clipboard me-2"></i> TDS Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-chart-bar me-2"></i> Commission Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-cog me-2"></i> Account Settings</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9 col-md-8 offset-lg-3 offset-md-4">
            <div class="card">
                <div class="card-header" style="background-color: white; color: #007bff;">
                    <h3 class="mb-0">Aadhaar Pay Cash Withdrawal</h3>
                </div>

                <div class="card-body">
                    <form>
                        <!-- Device Type, Mobile No, Aadhaar No, Biometrics -->
                        <div class="row mb-4">
                            <div class="col-md-3 col-sm-6 mb-3">
                                <label for="device-type" class="form-label">Device Type</label>
                                <select class="form-select" id="device-type" required>
                                    <option value="" disabled selected>Select Device Type *</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <label for="mobile-number" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile-number" placeholder="Enter 10 Digit Mobile No *" required>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <label for="aadhaar-number" class="form-label">Aadhaar Number</label>
                                <input type="text" class="form-control" id="aadhaar-number" placeholder="Enter 12 Digit Aadhaar No *" required>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3 text-center">
                                <div class="biometrics-box border p-3 rounded bg-light">
                                    <img src="assets/img/biometric-placeholder.png" alt="Biometrics" class="img-fluid rounded" style="max-width: 100px;">
                                    <p class="mt-2 mb-0">Biometrics *</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bank Name & Withdrawal Amount -->
                        <div class="row mb-4">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="bank-name" class="form-label">Bank Name</label>
                                <select class="form-select" id="bank-name" required>
                                    <option value="" disabled selected>- Select Bank - *</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="withdrawal-amount" class="form-label">Withdrawal Amount</label>
                                <input type="text" class="form-control" id="withdrawal-amount" placeholder="Enter the Withdrawal Amount *" required>
                            </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="row mb-4">
                            <div class="col-12">
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
                                <p class="text-muted mt-3 border-top pt-3">
                                    <strong>Note:</strong> You are restricted to performing no more than <strong>5 transactions</strong> per mode for the same Aadhaar number.
                                </p>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row">
                            <div class="col-12 text-left">
                                <button type="submit" class="btn btn-primary text-black px-4">Capture Fingerprint</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection