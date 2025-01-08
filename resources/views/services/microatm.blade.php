@extends('masterLayout')

@section('content')

<div class=" mx-auto mt-16">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h4 class="text-2xl font-semibold text-blue-600 mb-4">Micro ATM Service</h4>
        <form id="micro-atm-form" action="#" method="POST">
            @csrf
            <div class="mb-6">
                <input type="text"
                    class="w-full px-4 py-2 border-b-2 border-gray-300 focus:outline-none focus:border-blue-500"
                    id="atmId"
                    name="atm_id"
                    placeholder="Enter Micro ATM ID"
                    required>
            </div>

            <div class="mb-6">
                <select class="w-full px-4 py-2 border-b-2 border-gray-300 focus:outline-none focus:border-blue-500 text-gray-500"
                    id="transactionType"
                    name="transaction_type"
                    required>
                    <option value="" disabled selected>Select Transaction Type</option>
                    <option value="cash_withdrawal">Cash Withdrawal</option>
                    <option value="balance_enquiry">Balance Enquiry</option>
                    <option value="mini_statement">Mini Statement</option>
                </select>
            </div>

            <div class="mb-6">
                <input type="number"
                    class="w-full px-4 py-2 border-b-2 border-gray-300 focus:outline-none focus:border-blue-500"
                    id="amount"
                    name="amount"
                    placeholder="Enter Amount"
                    required>
            </div>

            <button type="button" id="submit-btn"
                class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                Proceed
            </button>
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

<script>
    const submitBtn = document.getElementById("submit-btn");
    const confirmationModal = document.getElementById("confirmation-modal");
    const closeModalBtn = document.getElementById("close-modal-btn");
    const confirmBtn = document.getElementById("confirm-btn");
    const cancelBtn = document.getElementById("cancel-btn");
    const atmForm = document.getElementById("micro-atm-form");

    // Show confirmation modal on submit button click
    submitBtn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent form submission to show the modal

        // Validate the form fields
        const atmId = document.getElementById("atmId").value;
        const transactionType = document.getElementById("transactionType").value;
        const amount = document.getElementById("amount").value;

        // If all required fields are filled
        if (atmId && transactionType && amount) {
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
        atmForm.submit(); // Submit the form when confirmed
        confirmationModal.classList.add("hidden");
    });
</script>

@endsection
