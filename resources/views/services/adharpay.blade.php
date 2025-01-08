@extends('masterLayout')

@section('content')

<main class="p-8">
  <div class="max-w-4xl mx-auto  rounded-lg overflow-hidden ">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhaar Pay Cash Withdrawal</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center align-center">
    <div class="w-full">
        <!-- Main Content -->
        <div class="p-4">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h4 class="text-xl text-blue-600 mb-4">Aadhaar Pay Cash Withdrawal</h4>
                <form>
                    <!-- Device Type, Mobile No, Aadhaar No, Biometrics -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                        <div>
                            <select class="form-select border-b-2 border-gray-300 focus:border-blue-600 p-2 rounded" id="device-type" required>
                                <option value="" disabled selected>Select Device Type *</option>
                            </select>
                        </div>
                        <div>
                            <input type="text" class="form-control border-b-2 border-gray-300 focus:border-blue-600 p-2 rounded" id="mobile-number" placeholder="Enter 10 Digit Mobile No *" required>
                        </div>
                        <div>
                            <input type="text" class="form-control border-b-2 border-gray-300 focus:border-blue-600 p-2 rounded" id="aadhaar-number" placeholder="Enter 12 Digit Aadhaar No *" required>
                        </div>
                        <div class="text-center">
                            <div class="biometrics-box border p-4 rounded bg-gray-100">
                                <img src="assets/img/biometric-placeholder.png" alt="Biometrics" class="max-w-full rounded" style="max-width: 100px;">
                                <p class="mt-2 mb-0">Biometrics *</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <select class="form-select border-b-2 border-gray-300 focus:border-blue-600 p-2 rounded" id="bank-name" required>
                                <option value="" disabled selected>- Select Bank - *</option>
                            </select>
                        </div>
                        <div>
                            <input type="text" class="form-control border-b-2 border-gray-300 focus:border-blue-600 p-2 rounded" id="withdrawal-amount" placeholder="Enter the Withdrawal Amount *" required>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="mb-4">
                        <div class="mb-3">
                            <input class="form-check-input" type="checkbox" id="terms-customer" required>
                            <label class="form-check-label text-gray-800" for="terms-customer">
                                I, the Customer, hereby accept and confirm all the terms & conditions to the best of my knowledge.
                            </label>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="checkbox" id="terms-retailer" required>
                            <label class="form-check-label text-gray-800" for="terms-retailer">
                                I, the Retailer, hereby accept and confirm all the terms & conditions to the best of my knowledge.
                            </label>
                        </div>
                        <p class="text-gray-600 mt-3 border-t pt-3">
                            <strong>Note:</strong> You are restricted to performing no more than <strong>5 transactions</strong> per mode for the same Aadhaar number.
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-left">
                        <button type="submit" class="btn bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Capture Fingerprint</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

   </div>
  </main>  
@endsection
