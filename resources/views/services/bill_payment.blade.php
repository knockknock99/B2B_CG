


@extends('masterLayout')

@section('content')

<main class="p-4">
    <div class="max-w-6xl mx-auto  rounded-lg overflow-hidden mt-8">
        <div class="">
            <div class="flex justify-center space-x-8">

                <!-- Left Card: Bill Payment -->
                <div class="w-full max-w-md mb-4">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h4 class="text-blue-600 font-bold text-xl mb-4">Bill Payment</h4>
                        <form id="bill-payment-form">
                            <div class="space-y-4">
                                <!-- Category -->
                                <div>
                                    <select class="w-full p-3 border-b border-gray-300 focus:ring-2 focus:ring-blue-500" id="category" name="category" required>
                                        <option value="" disabled selected>Category</option>
                                        <option value="electricity">Electricity</option>
                                        <option value="water">Water</option>
                                        <option value="gas">Gas</option>
                                    </select>
                                </div>
                                <!-- Operator -->
                                <div>
                                    <select class="w-full p-3 border-b border-gray-300 focus:ring-2 focus:ring-blue-500" id="operator" name="operator" required>
                                        <option value="" disabled selected>Operator Name</option>
                                        <option value="operator1">Operator 1</option>
                                        <option value="operator2">Operator 2</option>
                                    </select>
                                </div>
                                <!-- Details -->
                                <div>
                                    <input type="text" class="w-full p-3 border-b border-gray-300 focus:ring-2 focus:ring-blue-500" id="details" name="details" placeholder="Enter details *" required>
                                </div>
                                <!-- Mode -->
                                <div>
                                    <select class="w-full p-3 border-b border-gray-300 focus:ring-2 focus:ring-blue-500" id="mode" name="mode" required>
                                        <option value="" disabled selected>Mode</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" id="submit-btn">Proceed</button>
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

                <!-- Right Card: Bill Details -->
                <div class="w-full max-w-md mb-4">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h4 class="text-blue-600 font-bold text-xl mb-4">Bill Details</h4>
                        <div class="flex items-center justify-center">
                            <p class="text-center text-gray-600 text-sm">
                                Disclaimer: While we support most Billing Payments, we request you to verify with your operator once before proceeding.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- JavaScript for modal and form submission -->
        <script>
            const form = document.getElementById("bill-payment-form");
            const submitBtn = document.getElementById("submit-btn");
            const confirmationModal = document.getElementById("confirmation-modal");
            const closeModalBtn = document.getElementById("close-modal-btn");
            const confirmBtn = document.getElementById("confirm-btn");
            const cancelBtn = document.getElementById("cancel-btn");

            // Trigger modal on form submission
            submitBtn.addEventListener("click", (e) => {
                e.preventDefault(); // Prevent default form submission

                const category = document.getElementById("category").value;
                const operator = document.getElementById("operator").value;
                const details = document.getElementById("details").value;
                const mode = document.getElementById("mode").value;

                // Validate if all fields are filled
                if (!category || !operator || !details || !mode) {
                    alert("Please fill in all fields.");
                } else {
                    // Show confirmation modal if all fields are filled
                    confirmationModal.classList.remove("hidden");
                }
            });

            // Close the modal
            closeModalBtn.addEventListener("click", () => {
                confirmationModal.classList.add("hidden");
            });

            // Cancel the operation and close the modal
            cancelBtn.addEventListener("click", () => {
                confirmationModal.classList.add("hidden");
            });

            // Confirm the operation
            confirmBtn.addEventListener("click", () => {
                // Form submission logic (can be extended here)
                console.log("Form submitted!");
                confirmationModal.classList.add("hidden");
                form.submit(); // Submit the form after confirmation
            });
        </script>

    </div>
</main>

@endsection
