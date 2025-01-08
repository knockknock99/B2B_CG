@extends('masterLayout')
@section('content')

<main class="p-4">
  <div class="max-w-3xl mx-auto rounded-lg overflow-hidden mt-8 flex justify-center items-center">
    <div class="w-full  px-4 py-6">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h4 class="text-primary text-xl font-semibold mb-6">UPI Collection</h4>
            <!-- Form -->
            <form id="upi-form" action="" method="POST">
                @csrf
                <!-- UPI ID Input -->
                <div class="mb-4">
                    <input type="text"
                           class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           id="upiId"
                           name="upi_id"
                           placeholder="Enter UPI ID"
                           required>
                </div>
                <!-- Amount Input -->
                <div class="mb-4">
                    <input type="number"
                           class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           id="amount"
                           name="amount"
                           placeholder="Enter Amount"
                           required>
                </div>
                <!-- Remark Textarea -->
                <div class="mb-4">
                    <textarea id="remark"
                              name="remark"
                              class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                              rows="3"
                              placeholder="Enter Remark"
                              style="resize: none;"></textarea>
                </div>
                <!-- Submit Button -->
                <div class="text-left">
                    <button type="button" id="submit-btn" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">Submit</button>
                </div>
            </form>
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
                <h3 class="text-lg font-semibold mb-2">Are you sure?</h3>
                <p class="text-sm text-gray-600">You are about to submit the form with the details provided.</p>
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

</main>


<script>
    // Get elements
    const submitBtn = document.getElementById("submit-btn");
    const confirmationModal = document.getElementById("confirmation-modal");
    const closeModalBtn = document.getElementById("close-modal-btn");
    const confirmBtn = document.getElementById("confirm-btn");
    const cancelBtn = document.getElementById("cancel-btn");
    const upiForm = document.getElementById("upi-form");

    // Show confirmation modal on submit button click
    submitBtn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent form submission to show the modal

        // Validate the form fields (check for required fields)
        const upiId = document.getElementById("upiId").value;
        const amount = document.getElementById("amount").value;
        const remark = document.getElementById("remark").value;

        // If all fields are filled
        if (upiId && amount && remark) {
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
        upiForm.submit(); // Submit the form when confirmed
        confirmationModal.classList.add("hidden");
    });
</script>


@endsection
