@extends('masterLayout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIC Bill Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto my-5">
        <div class="flex justify-center gap-4 mt-4">
            <!-- LIC Payment Form -->
            <div class="bg-white shadow-lg p-6 rounded-lg w-full max-w-md mx-3">
                <h4 class="text-start text-blue-500 text-xl font-semibold mb-4">LIC Payment</h4>
                <div class="card-body">
                    <form id="payment-form">
                        <div class="mb-4">
                            <input
                                type="text"
                                id="customer-id"
                                class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-blue-500"
                                placeholder="Enter Policy No *"
                                required />
                        </div>
                        <div class="mb-4">
                            <input
                                type="email"
                                id="customer-email"
                                class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-blue-500"
                                placeholder="Enter Email *"
                                required />
                        </div>
                        <div class="mb-4">
                            <select
                                id="payment-mode"
                                class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-blue-500 text-gray-500"
                                required>
                                <option value="" disabled selected>Select Mode</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                        </div>
                        <button type="button" id="submit-btn" class="w-full py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Check Details</button>
                    </form>
                </div>
            </div>

            <!-- Bill Details -->
            <div class="bg-white shadow-lg p-6 rounded-lg w-full max-w-md mx-3">
                <h4 class="text-start text-blue-500 text-xl font-semibold mb-4">Bill Details</h4>
                <div class="card-body">
                    <p class="text-gray-500 text-sm">
                        Disclaimer: While we support most billing payments, we request you to verify with your operator once before proceeding.
                    </p>
                </div>
            </div>
        </div>
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
                <h3 class="text-lg font-semibold mb-2">Are you sure you want to proceed?</h3>
                <p class="text-sm text-gray-600">Please verify the details before proceeding with the payment.</p>
            </div>
            <div class="flex gap-4">
                <button id="confirm-btn" class="flex-1 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition-colors">
                    Yes, Proceed!
                </button>
                <button id="cancel-btn" class="flex-1 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">
                    No, Cancel!
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get elements
        const submitBtn = document.getElementById("submit-btn");
        const confirmationModal = document.getElementById("confirmation-modal");
        const closeModalBtn = document.getElementById("close-modal-btn");
        const confirmBtn = document.getElementById("confirm-btn");
        const cancelBtn = document.getElementById("cancel-btn");
        const paymentForm = document.getElementById("payment-form");

        // Show confirmation modal on submit button click
        submitBtn.addEventListener("click", (e) => {
            e.preventDefault(); // Prevent form submission to show the modal

            // Validate the form fields (check for required fields)
            const customerId = document.getElementById("customer-id").value;
            const customerEmail = document.getElementById("customer-email").value;
            const paymentMode = document.getElementById("payment-mode").value;

            // If all fields are filled
            if (customerId && customerEmail && paymentMode) {
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
            paymentForm.submit(); // Submit the form when confirmed
            confirmationModal.classList.add("hidden");
        });
    </script>

</body>

</html>

@endsection
