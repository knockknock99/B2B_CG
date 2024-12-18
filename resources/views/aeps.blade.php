<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Layout Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            /* Light background for better contrast */
        }

        .form-section {
            margin: 2rem auto;
            max-width: 600px;
        }

        h4 {
            font-weight: bold;
            color: #007bff;
            margin-bottom: 1rem;
        }

        .form-control,
        .form-select {
            border: none;
            border-bottom: 2px solid #ddd;
            border-radius: 0;
            box-shadow: none;
            padding-left: 0;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        label {
            font-weight: 600;
            color: #6c757d;
        }

        .row>div {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .note {
            font-size: 0.9rem;
            color: #6c757d;
        }

        @media (max-width: 767px) {
            .form-section {
                max-width: 100%;
                padding: 1rem;
            }

            h4 {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container form-section">
        <div class="card border-0 shadow-sm">
            <!-- Card Header -->
            <h4 class="mb-0 text-left ms-3 mt-4 mb-4">AADHAR ENABLED PAYMENT SYSTEM</h4>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <select class="form-select border-0 border-bottom rounded-0" id="operator" style="box-shadow: none; outline: none;">
                            <option value="" disabled selected>Select Txn Type</option>
                            <option value="balanceEnquiry">Balance Enquiry</option>
                            <option value="cashWithdrawal">Cash Withdrawal</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <select id="deviceType" class="form-select border-0 border-bottom rounded-0" style="box-shadow: none; outline: none;" required>
                                <option value="" disabled selected>Device Type</option>
                                <option value="morpho">Morpho</option>
                                <option value="mantra">Mantra</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text"
                                class="form-control border-0 border-bottom rounded-0"
                                id="mobile-number"
                                placeholder="Mobile Number *"
                                style="box-shadow: none !important; outline: none;"
                                maxlength="10"
                                required>
                        </div>
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

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img src="https://via.placeholder.com/150" alt="Biometrics" class="img-fluid">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-2">
                                <input type="checkbox" id="customerTerms" required>
                                <label for="customerTerms">I/Customer hereby accepts and confirms all the terms & conditions under the best of my knowledge.</label>
                            </div>
                            <div>
                                <input type="checkbox" id="retailerTerms" required>
                                <label for="retailerTerms">I/Retailer hereby accepts and confirms all the terms & conditions under the best of my knowledge.</label>
                            </div>
                        </div>
                    </div>

                    <div class="note mt-3">
                        Note: You're not allowed to do more than 5 transactions of each transaction mode for the same Aadhaar.
                    </div>

                    <!-- Submit Button -->
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary text-white mt-3">Capture Fingerprint</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>