<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhar Enabled Payment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .biometrics-box {
            text-align: center;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }

        .biometrics-box img {
            max-width: 100%;
            height: auto;
        }

        .terms {
            font-size: 12px;
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
        }

        .note {
            font-size: 12px;
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center mb-4">AADHAR ENABLED PAYMENT SYSTEM</h3>
        <form>
            <div class="mb-3">
                <label for="txnType" class="form-label">Txn Type</label>
                <select id="txnType" class="form-select" required>
                    <option value="" disabled selected>Select</option>
                    <option value="balanceEnquiry">Balance Enquiry</option>
                    <option value="cashWithdrawal">Cash Withdrawal</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="deviceType" class="form-label">Device Type</label>
                <select id="deviceType" class="form-select" required>
                    <option value="" disabled selected>Select</option>
                    <option value="morpho">Morpho</option>
                    <option value="mantra">Mantra</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="mobileNumber" class="form-label">Mobile Number</label>
                <input type="text" id="mobileNumber" class="form-control" maxlength="10" placeholder="Enter 10 Digit Mobile No" required>
            </div>
            <div class="mb-3">
                <label for="aadharNumber" class="form-label">Aadhar Number</label>
                <input type="text" id="aadharNumber" class="form-control" maxlength="12" placeholder="Enter 12 Digit Aadhar No" required>
            </div>
            <div class="mb-3">
                <label for="bankName" class="form-label">Bank Name</label>
                <select id="bankName" class="form-select" required>
                    <option value="" disabled selected>-- Select Bank --</option>
                    <option value="bank1">Bank 1</option>
                    <option value="bank2">Bank 2</option>
                </select>
            </div>
            <div class="biometrics-box mb-3">
                <img src="https://via.placeholder.com/150" alt="Biometrics">
            </div>
            <div class="terms">
                <div>
                    <input type="checkbox" id="customerTerms" required>
                    <label for="customerTerms">I/Customer hereby accepts and confirm all the terms & conditions under the best of my knowledge.</label>
                </div>
                <div>
                    <input type="checkbox" id="retailerTerms" required>
                    <label for="retailerTerms">I/Retailer hereby accepts and confirm all the terms & conditions under the best of my knowledge.</label>
                </div>
            </div>
            <div class="note">
                Note: You're not allowed to do more than 5 transactions of each transaction mode for the same Aadhaar.
            </div>
            <button type="submit" class="btn btn-primary">Capture Fingerprint</button>
        </form>
    </div>
</body>

</html>
