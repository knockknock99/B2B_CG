@extends('masterLayout')
@section('content')



<div class="controller mt-3 mx-5">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Home -></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Balance Enquiry -></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mini Statement -></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.money_transfer_service')}}">Server I</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<main class="p-4">
<div class="max-w-5xl mx-auto rounded-lg overflow-hidden mt-8  flex justify-center align-center">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhar Enabled Payment System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Optional: Additional styles for any custom requirements */
        .biometrics-box img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans min-h-screen flex justify-center items-center ">

    <div class=" mx-auto p-6 bg-white rounded-lg shadow-lg   sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-xl">
        <h3 class="text-center text-2xl font-semibold mb-6 text-blue-900">AADHAR ENABLED PAYMENT SYSTEM</h3>
        <form>
            <div class="mb-4">
                <label for="txnType" class="block text-sm font-semibold text-gray-700">Txn Type</label>
                <select id="txnType" class="w-full p-3 border-none focus:border-none focus:ring-0 focus:outline-none" required>
                    <option value="" disabled selected>Select</option>
                    <option value="balanceEnquiry">Balance Enquiry</option>
                    <option value="cashWithdrawal">Cash Withdrawal</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="deviceType" class="block text-sm font-semibold text-gray-700">Device Type</label>
                <select id="deviceType" class="w-full p-3 border-none focus:border-none focus:ring-0 focus:outline-none" required>
                    <option value="" disabled selected>Select</option>
                    <option value="morpho">Morpho</option>
                    <option value="mantra">Mantra</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="mobileNumber" class="block text-sm font-semibold text-gray-700">Mobile Number</label>
                <input type="text" id="mobileNumber" class="w-full p-3 border-none focus:border-none focus:ring-0 focus:outline-none" maxlength="10" placeholder="Enter 10 Digit Mobile No" required>
            </div>

            <div class="mb-4">
                <label for="aadharNumber" class="block text-sm font-semibold text-gray-700">Aadhar Number</label>
                <input type="text" id="aadharNumber" class="w-full p-3 border-none focus:border-none focus:ring-0 focus:outline-none" maxlength="12" placeholder="Enter 12 Digit Aadhar No" required>
            </div>

            <div class="mb-4">
                <label for="bankName" class="block text-sm font-semibold text-gray-700">Bank Name</label>
                <select id="bankName" class="w-full p-3 border-none focus:border-none focus:ring-0 focus:outline-none" required>
                    <option value="" disabled selected>-- Select Bank --</option>
                    <option value="bank1">Bank 1</option>
                    <option value="bank2">Bank 2</option>
                </select>
            </div>

            <div class="biometrics-box mb-4 p-4 border-none text-center">
                <img src="https://via.placeholder.com/150" alt="Biometrics">
            </div>

            <div class="mb-4 text-sm text-gray-600">
                <div class="flex items-center">
                    <input type="checkbox" id="customerTerms" required class="mr-2">
                    <label for="customerTerms">I/Customer hereby accepts and confirms all the terms & conditions under the best of my knowledge.</label>
                </div>
                <div class="flex items-center mt-2">
                    <input type="checkbox" id="retailerTerms" required class="mr-2">
                    <label for="retailerTerms">I/Retailer hereby accepts and confirms all the terms & conditions under the best of my knowledge.</label>
                </div>
            </div>

            <div class="text-center text-xs text-red-500 mb-4">
                Note: You're not allowed to do more than 5 transactions of each transaction mode for the same Aadhaar.
            </div>

            <button type="submit" class="w-full py-3 bg-blue-900 text-white font-semibold rounded-lg hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">Capture Fingerprint</button>
        </form>
    </div>

</body>

</html>

</div>
</main>

@endsection