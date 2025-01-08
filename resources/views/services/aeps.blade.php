@extends('masterLayout')
@section('content')

<main class="p-5">
    <div class="max-w-5xl mx-auto rounded-lg overflow-hidden  flex justify-center items-center">

        <div class="container mx-auto p-4">
            <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg">
                <!-- Card Header -->
                <h4 class="text-blue-600 font-bold text-xl mt-6 pt-8 pl-8 ">AADHAR ENABLED PAYMENT SYSTEM</h4>
                <div class="px-6 py-4">
                    <form id="payment-form">
                        <div class="mb-6">
                            <select class="block w-full px-4 py-2 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" id="txnType" required>
                                <option value="" disabled selected>Select Txn Type</option>
                                <option value="balanceEnquiry">Balance Enquiry</option>
                                <option value="cashWithdrawal">Cash Withdrawal</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <select id="deviceType" class="block w-full px-4 py-2 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    <option value="" disabled selected>Device Type</option>
                                    <option value="morpho">Morpho</option>
                                    <option value="mantra">Mantra</option>
                                </select>
                            </div>
                            <div>
                                <input type="text" class="block w-full px-4 py-2 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" id="mobile-number" placeholder="Mobile Number *" maxlength="10" required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <input type="text" class="block w-full px-4 py-2 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" id="aadhar-number" placeholder="Aadhar Number *" maxlength="12" required>
                        </div>

                        <div class="mb-6">
                            <select class="block w-full px-4 py-2 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" id="bank-name" required>
                                <option value="" disabled selected>Bank Name</option>
                                <option value="bank1">Bank 1</option>
                                <option value="bank2">Bank 2</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <img src="https://via.placeholder.com/150" alt="Biometrics" class="w-full h-auto">
                            </div>
                            <div>
                                <div class="mb-4">
                                    <input type="checkbox" id="customerTerms" class="mr-2" required>
                                    <label for="customerTerms" class="text-gray-600 text-sm">I/Customer hereby accepts and confirms all the terms & conditions under the best of my knowledge.</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="retailerTerms" class="mr-2" required>
                                    <label for="retailerTerms" class="text-gray-600 text-sm">I/Retailer hereby accepts and confirms all the terms & conditions under the best of my knowledge.</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-sm text-gray-600 mt-3">
                            Note: You're not allowed to do more than 5 transactions of each transaction mode for the same Aadhaar.
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 pb-5">
                            <button type="button" id="submit-btn" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Capture Fingerprint
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Confirmation Modal -->
                <div id="confirmation-modal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 hidden">
                    <div class="bg-white rounded-lg p-6 max-w-sm w-full">
                        <div class="flex justify-end">
                            <button id="close-modal-btn" class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-center mb-6">
                            <div class="mx-auto w-12 h-12 mb-4 text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M12 9v6" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Are you sure?</h3>
                        </div>
                        <div class="flex gap-4">
                            <button id="confirm-btn" class="flex-1 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition-colors">Yes, Continue!</button>
                            <button id="cancel-btn" class="flex-1 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">No, Cancel!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    const submitBtn = document.getElementById("submit-btn");
    const confirmationModal = document.getElementById("confirmation-modal");
    const closeModalBtn = document.getElementById("close-modal-btn");
    const confirmBtn = document.getElementById("confirm-btn");
    const cancelBtn = document.getElementById("cancel-btn");

    // Submit button click event
    submitBtn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent form submission to show the modal

        const txnType = document.getElementById("txnType").value;
        const deviceType = document.getElementById("deviceType").value;
        const mobileNumber = document.getElementById("mobile-number").value;
        const aadharNumber = document.getElementById("aadhar-number").value;
        const bankName = document.getElementById("bank-name").value;

        // Validate form fields
        if (!txnType || !deviceType || !mobileNumber || !aadharNumber || !bankName) {
            alert("Please fill in all fields.");
        } else {
            // Show confirmation modal
            confirmationModal.classList.remove("hidden");
        }
    });

    // Close modal on "X" button click
    closeModalBtn.addEventListener("click", () => {
        confirmationModal.classList.add("hidden");
    });

    // Cancel the action
    cancelBtn.addEventListener("click", () => {
        confirmationModal.classList.add("hidden");
    });

    // Confirm and submit the form
    confirmBtn.addEventListener("click", () => {
        // Submit the form here
        document.getElementById("payment-form").submit(); // Submit the form when confirmed
        confirmationModal.classList.add("hidden");
    });
</script>

@endsection
