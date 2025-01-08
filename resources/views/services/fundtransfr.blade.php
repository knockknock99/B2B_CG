@extends('masterLayout')

@section('content')

<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md mt-12">
    <div class="flex justify-between items-center">
        <div class="text-blue-600">
            <h4 class="text-2xl font-bold">Transfer Funds</h4>
        </div>
        <button class="bg-blue-600 text-black px-4 py-2 rounded-md">All Recent Transfers</button>
    </div>
    <hr class="my-4">
    <form id="transfer-form">
        <div class="mb-4">
            <input
                type="text"
                id="user_id"
                name="user_id"
                class="w-full px-4 py-2 border-b-2 border-gray-300 focus:outline-none focus:border-blue-600"
                placeholder="Enter Receiver User ID *"
                required />
        </div>
        <div class="text-left">
            <button type="button" id="submit-btn" class="bg-blue-600 text-white px-6 py-2 rounded-md text-sm">
                Check User
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
            <button id="confirm-btn" class="flex-1 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition-colors">
                Yes, Continue!
            </button>
            <button id="cancel-btn" class="flex-1 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">
                No, Cancel!
            </button>
        </div>
    </div>
</div>

<script>
    const submitBtn = document.getElementById("submit-btn");
    const confirmationModal = document.getElementById("confirmation-modal");
    const closeModalBtn = document.getElementById("close-modal-btn");
    const confirmBtn = document.getElementById("confirm-btn");
    const cancelBtn = document.getElementById("cancel-btn");
    const transferForm = document.getElementById("transfer-form");

    // Show confirmation modal on submit button click
    submitBtn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent form submission to show the modal

        // Validate the form fields
        const userId = document.getElementById("user_id").value;

        // If the required field is filled
        if (userId) {
            confirmationModal.classList.remove("hidden"); // Show the modal
        } else {
            alert("Please enter the receiver's user ID.");
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
        transferForm.submit(); // Submit the form when confirmed
        confirmationModal.classList.add("hidden");
    });
</script>

@endsection
