@extends('masterLayout')

@section('content')

<main class="p-4">
    <div class="max-w-3xl mx-auto   rounded-lg overflow-hidden mt-8">

        <div class=" mx-auto my-8 p-6 bg-white rounded-xl shadow-md">
            <h4 class="text-left text-2xl font-bold text-blue-600 mb-6">Check Mobile Number</h4>
            <form id="checkMobileForm" action="" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="text" 
                        class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-blue-500" 
                        id="mobile-number" 
                        placeholder="Mobile Number *" 
                        maxlength="10" 
                        required>
                </div>
                <!-- Button aligned to the left -->
                <div class="text-left">
                    <button type="submit" id="submit-btn" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">CHECK</button>
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

        const mobileNumber = document.getElementById("mobile-number").value;

        // Validate form fields
        if (!mobileNumber) {
            alert("Please enter a mobile number.");
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
        document.getElementById("checkMobileForm").submit(); // Submit the form when confirmed
        confirmationModal.classList.add("hidden");
    });
</script>

@endsection
