<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Bank Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-control {
            border-radius: 0.25rem;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }

        h4 {
            color: #007bff;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <div class="container mt-5">
        <form action="/bank-accounts" method="POST" class="p-4 border rounded bg-white shadow-sm form-container">
            <h4 class="mb-0 text-left ms-3 mt-2 mb-3">Add New Bank Account</h4>
            @csrf
            <div class="mb-3">
                <select class="form-select  text-muted border-0 border-bottom rounded-0" id="bank" style="box-shadow: none !important; outline: none;" required>
                    <option value="" disabled selected>Choose Bank *</option>
                    <option value="SBI">State Bank of India</option>
                    <option value="HDFC">HDFC Bank</option>
                    <option value="ICICI">ICICI Bank</option>
                </select>
            </div>

            <div class="mb-3">
                <input
                    type="text"
                    id="account_number"
                    name="account_number"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Account No *"
                    style="box-shadow: none !important; outline: none;"
                    required />
            </div>

            <div class="mb-3">
                <input
                    type="text"
                    id="ifsc_code"
                    name="ifsc_code"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="IFSC Code *"
                    style="box-shadow: none !important; outline: none;"
                    required />
            </div>

            <div class="mb-3">
                <input
                    type="text"
                    id="account_holder"
                    name="account_holder"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Account Holder Name *"
                    style="box-shadow: none !important; outline: none;"
                    required />
            </div>

            <div class="mb-3">
                <select class="form-select  text-muted border-0 border-bottom rounded-0" id="account_type" style="box-shadow: none !important; outline: none;" required>
                    <option value="" disabled selected>Choose Account Type *</option>
                    <option value="savings">Savings</option>
                    <option value="current">Current</option>
                </select>
            </div>

            <div class="mb-3">
                <input
                    type="password"
                    id="transaction_password"
                    name="transaction_password"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Enter Your Transaction Password *"
                    style="box-shadow: none !important; outline: none;"
                    required />
            </div>

            <button type="submit" class="btn btn-primary text-white w-40">Submit</button>
        </form>
    </div>
</body>

</html>