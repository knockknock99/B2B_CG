<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .biometrics-box img {
            max-width: 100%; /* Ensure the image size adjusts properly */
            height: auto;
        }

        .form-label {
            font-size: 16px; /* Slightly larger label font size for readability */
        }

        .form-control {
            border-radius: 5px;
        }

        .terms label {
            font-size: 16px; /* Consistent font size for terms */
        }

        .note {
            font-size: 14px; /* Adjust note text size for better readability */
        }

        .card-header {
            background-color: #007bff;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004089;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .sidebar {
                display: none; /* Hide sidebar on medium to small screens */
            }

            main {
                padding-left: 0;
            }

            .form-select {
                border-radius: 0; /* Remove rounded corners on select dropdowns */
            }
        }

        @media (max-width: 768px) {
            .card-header {
                text-align: center;
                font-size: 18px; /* Adjust the card header font size for smaller screens */
            }

            .biometrics-box img {
                max-width: 150px;
            }
        }

        @media (max-width: 576px) {
            .card-header {
                font-size: 16px; /* Adjust header size for extra small screens */
            }

            .form-control {
                padding: 8px; /* Ensure form control padding fits smaller screens */
            }
        }
    </style>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4 col-12 mb-4">
                <div class="sidebar bg-light p-3 rounded shadow-sm">
                    <div class="logo text-center mb-4">
                        <img src="assets/img/codegraphi-logo.png" alt="Logo" class="img-fluid w-45">
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
            <main class="col-lg-9 col-md-8 col-12 ms-auto p-4">
                <div class="card shadow-sm">
                    <div class="card-header text-black bg-primary">
                        AADHAR ENABLED PAYMENT SYSTEM
                    </div>
                    <form>
                        <div class="mb-3">
                            <select class="form-select border-0 border-bottom rounded-0" id="operator" style="box-shadow: none; outline: none;">
                                <option value="" disabled selected>Select Txn Type</option>
                                <option value="balanceEnquiry">Balance Enquiry</option>
                                <option value="cashWithdrawal">Cash Withdrawal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select id="deviceType" class="form-select border-0 border-bottom rounded-0" style="box-shadow: none; outline: none;" required>
                                <option value="" disabled selected>Device Type</option>
                                <option value="morpho">Morpho</option>
                                <option value="mantra">Mantra</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text"
                                class="form-control border-0 border-bottom rounded-0"
                                id="mobile-number"
                                placeholder="Mobile Number *"
                                style="box-shadow: none !important; outline: none;"
                                maxlength="10"
                                required>
                        </div>
                        <div class="mb-3">
                            <input type="text"
                                class="form-control border-0 border-bottom rounded-0"
                                id="aadhar-number"
                                placeholder="Aadhar Number *"
                                style="box-shadow: none !important; outline: none;"
                                maxlength="12"
                                required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select border-0 border-bottom rounded-0" id="bank-name" style="box-shadow: none !important; outline: none;" required>
                                <option value="" disabled selected>Bank Name</option>
                                <option value="bank1">Bank 1</option>
                                <option value="bank2">Bank 2</option>
                            </select>
                        </div>

                        <div class="biometrics-box mb-3 text-center">
                            <img src="https://via.placeholder.com/150" alt="Biometrics" class="img-fluid">
                        </div>
                        <div class="terms">
                            <div class="mb-2">
                                <input type="checkbox" id="customerTerms" required>
                                <label for="customerTerms">I/Customer hereby accepts and confirms all the terms & conditions under the best of my knowledge.</label>
                            </div>
                            <div>
                                <input type="checkbox" id="retailerTerms" required>
                                <label for="retailerTerms">I/Retailer hereby accepts and confirms all the terms & conditions under the best of my knowledge.</label>
                            </div>
                        </div>
                        <div class="note mt-3">
                            Note: You're not allowed to do more than 5 transactions of each transaction mode for the same Aadhaar.
                        </div>
                        <button type="submit" class="btn btn-primary text-black mt-3">Capture Fingerprint</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    @endsection
</body>

</html>
