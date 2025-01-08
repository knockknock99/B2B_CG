@extends('masterLayout')

@section('content')

<main class="p-4">
    <div class="container mx-auto mt-10">
        <form action="/bank-accounts" method="POST" id="bank-account-form" class="p-6 border rounded-lg bg-white shadow-sm w-full max-w-lg mx-auto">
            <h4 class="text-left text-blue-600 font-bold text-xl mb-4">Add New Bank Account</h4>
            @csrf

            <div class="mb-5">
                <select class="form-select block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3" id="bank" name="bank" required>
                    <option value="" disabled selected>Choose Bank *</option>
                    <option value="SBI">State Bank of India</option>
                    <option value="HDFC">HDFC Bank</option>
                    <option value="ICICI">ICICI Bank</option>
                </select>
            </div>

            <div class="mb-5">
                <input
                    type="text"
                    id="account_number"
                    name="account_number"
                    class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3"
                    placeholder="Account No *"
                    required />
            </div>

            <div class="mb-5">
                <input
                    type="text"
                    id="ifsc_code"
                    name="ifsc_code"
                    class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3"
                    placeholder="IFSC Code *"
                    required />
            </div>

            <div class="mb-5">
                <input
                    type="text"
                    id="account_holder"
                    name="account_holder"
                    class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3"
                    placeholder="Account Holder Name *"
                    required />
            </div>

            <div class="mb-5">
                <select class="form-select block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3" id="account_type" name="account_type" required>
                    <option value="" disabled selected>Choose Account Type *</option>
                    <option value="savings">Savings</option>
                    <option value="current">Current</option>
                </select>
            </div>

            <div class="mb-5">
                <input
                    type="password"
                    id="transaction_password"
                    name="transaction_password"
                    class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3"
                    placeholder="Enter Your Transaction Password *"
                    required />
            </div>

            <button type="button" id="submit-btn" class="btn bg-blue-600 text-white w-full py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
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
</main>

<script>
    const submitBtn = document.getElementById("submit-btn");
    const confirmationModal = document.getElementById("confirmation-modal");
    const closeModalBtn = document.getElementById("close-modal-btn");
    const confirmBtn = document.getElementById("confirm-btn");
    const cancelBtn = document.getElementById("cancel-btn");
    const bankAccountForm = document.getElementById("bank-account-form");

    // Show confirmation modal on submit button click
    submitBtn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent form submission to show the modal

        // Validate the form fields
        const bank = document.getElementById("bank").value;
        const accountNumber = document.getElementById("account_number").value;
        const ifscCode = document.getElementById("ifsc_code").value;
        const accountHolder = document.getElementById("account_holder").value;
        const accountType = document.getElementById("account_type").value;
        const transactionPassword = document.getElementById("transaction_password").value;

        // If all required fields are filled
        if (bank && accountNumber && ifscCode && accountHolder && accountType && transactionPassword) {
            confirmationModal.classList.remove("hidden"); // Show the modal
        } else {
            alert("Please fill in all the required fields.");
        }
    });

    // Close the modal when "X" button is clicked
    closeModalBtn.addEventListener("click", () => {
        confirmationModal.classList.add("hidden");
    });

    // Cancel the action when "No, Cancel!" is clicked
    cancelBtn.addEventListener("click", () => {
        confirmationModal.classList.add("hidden");
    });

    // Confirm the action and submit the form
    confirmBtn.addEventListener("click", () => {
        bankAccountForm.submit(); // Submit the form when confirmed
        confirmationModal.classList.add("hidden");
    });
</script>

@endsection
