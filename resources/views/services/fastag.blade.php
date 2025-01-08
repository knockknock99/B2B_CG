@extends('masterLayout')

@section('content')

<div class=" my-8">
    <div class="flex justify-center gap-8">
        <!-- Fastag Recharge Form -->
        <div class=" sm:w-96">
            <div class="bg-white shadow-md rounded-lg">
                <h4 class="text-blue-600 text-xl font-semibold mt-4 ml-4">Fastag Recharge</h4>
                <div class="p-6">
                    <form id="fastag-recharge-form">
                        <div class="mb-4">
                            <select
                                id="operator-name"
                                class="form-select block w-full p-2 border-b border-gray-300 rounded-none focus:outline-none focus:ring-0 text-gray-600"
                                required>
                                <option value="" selected>Operator Name *</option>
                                <option value="operator1">Operator 1</option>
                                <option value="operator2">Operator 2</option>
                                <option value="operator3">Operator 3</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <input
                                type="text"
                                id="vehicle-no"
                                class="form-control block w-full p-2 border-b border-gray-300 rounded-none focus:outline-none focus:ring-0"
                                placeholder="Enter Vehicle Number *"
                                required />
                        </div>
                        <button type="button" id="submit-btn" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Submit
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
                            <button id="confirm-btn" class="flex-1 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition-colors">
                                Yes, Continue!
                            </button>
                            <button id="cancel-btn" class="flex-1 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">
                                No, Cancel!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bill Details -->
        <div class="w-full sm:w-96">
            <div class="bg-white shadow-md rounded-lg">
                <h4 class="text-blue-600 text-xl font-semibold mt-4 ml-4">Bill Details</h4>
                <div class="p-6">
                    <p class="text-gray-600 text-sm">
                        Disclaimer: While we support most billing payments, we request you to verify with your
                        operator once before proceeding.
                    </p>
                </div>
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
    const fastagRechargeForm = document.getElementById("fastag-recharge-form");

    // Show confirmation modal on submit button click
    submitBtn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent form submission to show the modal

        // Validate the form fields
        const operatorName = document.getElementById("operator-name").value;
        const vehicleNo = document.getElementById("vehicle-no").value;

        // If the required fields are filled
        if (operatorName && vehicleNo) {
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
        fastagRechargeForm.submit(); // Submit the form when confirmed
        confirmationModal.classList.add("hidden");
    });
</script>

@endsection
