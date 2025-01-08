@extends('masterLayout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTH Recharge</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- Left: Recharge Form -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h4 class="text-primary text-left text-2xl font-semibold text-blue-600 mb-4">DTH Recharge</h4>
                <div>
                    <!-- Form Start -->
                    <form id="bill-payment-form" action="" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="text"
                                class="w-full p-3 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="dthNumber" name="dthNumber" placeholder="DTH Number *" required>
                        </div>
                        <div class="mb-4">
                            <select
                                class="w-full p-3 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="operator" name="operator" required>
                                <option value="" disabled selected>Operator List *</option>
                                <option value="Tata Sky">Tata Sky</option>
                                <option value="Dish TV">Dish TV</option>
                                <option value="Airtel DTH">Airtel DTH</option>
                                <option value="Sun Direct">Sun Direct</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <input type="number"
                                class="w-full p-3 border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="rechargeAmount" name="rechargeAmount" placeholder="Recharge Amount *" required>
                        </div>
                        <div class="text-left mt-4">
                            <button type="button" id="submit-btn"
                                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Submit
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

            <!-- Right: DTH Information -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h4 class="text-primary text-left text-2xl font-semibold text-blue-600 mb-4">DTH Information</h4>
                <div class="card-body">
                    <p class="text-gray-600 text-sm">
                        Disclaimer: While we support most recharges, we request you to verify with your operator once before proceeding.
                    </p>
                    <div id="plans-container" class="mt-4">
                        <!-- Placeholder for plans (this would be dynamic content in a real implementation) -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        const form = document.getElementById("bill-payment-form");
        const submitBtn = document.getElementById("submit-btn");
        const confirmationModal = document.getElementById("confirmation-modal");
        const closeModalBtn = document.getElementById("close-modal-btn");
        const confirmBtn = document.getElementById("confirm-btn");
        const cancelBtn = document.getElementById("cancel-btn");

        // Submit button click event
        submitBtn.addEventListener("click", (e) => {
            e.preventDefault(); // Prevent form submission to show the modal

            const dthNumber = document.getElementById("dthNumber").value;
            const operator = document.getElementById("operator").value;
            const rechargeAmount = document.getElementById("rechargeAmount").value;

            // Validate form fields
            if (!dthNumber || !operator || !rechargeAmount) {
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
            form.submit(); // Submit the form when confirmed
            confirmationModal.classList.add("hidden");
        });
    </script>
</body>

</html>

@endsection
