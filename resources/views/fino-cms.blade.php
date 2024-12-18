<!-- resources/views/fino-cms.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fino CMS</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <!-- Centered Form Container -->
    <div class="card shadow-sm border-0 p-4" style="max-width: 500px; width: 100%;">
        <h4 class="text-start mb-4 text-primary fw-bold">Fino CMS Form</h4>
        <form action="{{ route('fino-cms-submit') }}" method="POST">
            @csrf

            <!-- Customer Name -->
            <div class="mb-3">
                <input
                    type="text"
                    name="customer_name"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Customer Name *"
                    required>
            </div>

            <!-- Contact Number -->
            <div class="mb-3">
                <input
                    type="text"
                    name="contact_number"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Contact Number *"
                    required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <input
                    type="email"
                    name="email"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Email *"
                    required>
            </div>

            <!-- Account Information -->
            <div class="mb-3">
                <input
                    type="text"
                    name="account_number"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Account Number *"
                    required>
            </div>

            <!-- Aadhaar Number -->
            <div class="mb-3">
                <input
                    type="text"
                    name="aadhar_number"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Aadhaar Number *"
                    required>
            </div>

            <!-- PAN Number -->
            <div class="mb-3">
                <input
                    type="text"
                    name="pan_number"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="PAN Number *"
                    required>
            </div>

            <!-- KYC Status -->
            <div class="mb-4">
                <select
                    name="kyc_status"
                    class="form-select border-0 border-bottom rounded-0"
                    required>
                    <option value="" disabled selected>KYC Status *</option>
                    <option value="Pending">Pending</option>
                    <option value="Verified">Verified</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-start mt-4">
                <button type="submit" class="btn btn-primary text-white px-3 py-2">Submit</button>
            </div>
        </form>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>