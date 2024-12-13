@extends('layouts.app')

@section('title', 'Aadhaar Pay Cash Withdrawal')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="sidebar bg-light p-3 rounded shadow-sm" style="position: absolute; left: 0; top: 0; height: 100vh; width: 200px;">
                <div class="logo text-center mb-4">
                    <img src="assets/img/codegraphi-logo.png" alt="Logo" class="img-fluid w-25">
                </div>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-home me-2"></i> Dashboard</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-id-card me-2"></i> KYC</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-cogs me-2"></i> Services</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-file-alt me-2"></i> Service Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-history me-2"></i> Account History</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-percent me-2"></i> My Commission Slab</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-file-invoice me-2"></i> GST Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-clipboard me-2"></i> TDS Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-chart-bar me-2"></i> Commission Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-cog me-2"></i> Account Settings</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9 col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-black bg-primary">
                    Aadhaar Pay Cash Withdrawal
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-3 col-sm-12 mb-3">
                                <select
                                    class="form-select border-0 border-bottom rounded-0"
                                    id="device-type"
                                    style="box-shadow: none; outline: none;"
                                    required>
                                    <option value="" disabled selected>Select Device Type *</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <input
                                    type="text"
                                    class="form-control border-0 border-bottom rounded-0"
                                    id="mobile-number"
                                    placeholder="Enter 10 Digit Mobile No *"
                                    style="box-shadow: none; outline: none;"
                                    required />
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <input
                                    type="text"
                                    class="form-control border-0 border-bottom rounded-0"
                                    id="aadhaar-number"
                                    placeholder="Enter 12 Digit Aadhaar No *"
                                    style="box-shadow: none; outline: none;"
                                    required />
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="biometrics-box border p-3 text-center rounded" style="background-color: #f8f9fa;">
                                    <img
                                        src="assets/img/biometric-placeholder.png"
                                        alt="Biometrics"
                                        class="img-fluid rounded"
                                        style="max-width: 100px;" />
                                    <p class="mt-2 mb-0">Biometrics *</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <select
                                    class="form-select border-0 border-bottom rounded-0"
                                    id="bank-name"
                                    style="box-shadow: none; outline: none;"
                                    required>
                                    <option value="" disabled selected>- Select Bank - *</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <input
                                    type="text"
                                    class="form-control border-0 border-bottom rounded-0"
                                    id="withdrawal-amount"
                                    placeholder="Enter the Withdrawal Amount *"
                                    style="box-shadow: none; outline: none;"
                                    required />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="terms-customer"
                                        required />
                                    <label class="form-check-label" for="terms-customer">
                                        I, the Customer, hereby accept and confirm all the terms & conditions to the best of my knowledge.
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="terms-retailer"
                                        required />
                                    <label class="form-check-label" for="terms-retailer">
                                        I, the Retailer, hereby accept and confirm all the terms & conditions to the best of my knowledge.
                                    </label>
                                </div>
                                <p class="text-muted mt-3 border-top pt-3">
                                    <strong>Note:</strong> You are restricted to performing no more than <strong>5 transactions</strong> per mode for the same Aadhaar number.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn  w-40 bg-primary">Capture Fingerprint</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection