<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Bank Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Add New Bank Account</h2>
        <form action="/bank-accounts" method="POST" class="p-4 border rounded bg-white shadow">
            @csrf
            <div class="mb-3">
                <label for="bank" class="form-label">Bank*</label>
                <select id="bank" name="bank" class="form-select" required>
                    <option value="">-- Choose Bank --</option>
                    <option value="SBI">State Bank of India</option>
                    <option value="HDFC">HDFC Bank</option>
                    <option value="ICICI">ICICI Bank</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="account_number" class="form-label">Account Number*</label>
                <input type="text" id="account_number" name="account_number" class="form-control" placeholder="Account No" required>
            </div>
            <div class="mb-3">
                <label for="ifsc_code" class="form-label">IFSC Code*</label>
                <input type="text" id="ifsc_code" name="ifsc_code" class="form-control" placeholder="IFSC Code" required>
            </div>
            <div class="mb-3">
                <label for="account_holder" class="form-label">Account Holder Name*</label>
                <input type="text" id="account_holder" name="account_holder" class="form-control" placeholder="Account Holder Name" required>
            </div>
            <div class="mb-3">
                <label for="account_type" class="form-label">Account Type*</label>
                <select id="account_type" name="account_type" class="form-select" required>
                    <option value="">-- Choose --</option>
                    <option value="savings">Savings</option>
                    <option value="current">Current</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="transaction_password" class="form-label">Transaction Password*</label>
                <input type="password" id="transaction_password" name="transaction_password" class="form-control" placeholder="Enter Your Transaction Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</body>
</html>
