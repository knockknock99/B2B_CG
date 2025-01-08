@extends('masterLayout')

@section('content')
<main class="p-4">
  <div class="max-w-2xl mx-auto rounded-lg overflow-hidden mt-8 flex justify-center items-center">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full ">
      <h4 class="text-primary text-2xl font-bold">Fino CMS Form</h4>
      <!-- Form Submission -->
      {{-- <form id="fino-cms-form" action="{{ route('fino-cms-submit') }}" method="POST"> --}}
        @csrf

        <!-- Customer Name -->
        <div class="mb-4">
          <input
            type="text"
            name="customer_name"
            class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Customer Name *"
            required>
        </div>

        <!-- Contact Number -->
        <div class="mb-4">
          <input
            type="text"
            name="contact_number"
            class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Contact Number *"
            required>
        </div>

        <!-- Email -->
        <div class="mb-4">
          <input
            type="email"
            name="email"
            class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Email *"
            required>
        </div>

        <!-- Account Information -->
        <div class="mb-4">
          <input
            type="text"
            name="account_number"
            class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Account Number *"
            required>
        </div>

        <!-- Aadhaar Number -->
        <div class="mb-4">
          <input
            type="text"
            name="aadhar_number"
            class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Aadhaar Number *"
            required>
        </div>

        <!-- PAN Number -->
        <div class="mb-4">
          <input
            type="text"
            name="pan_number"
            class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="PAN Number *"
            required>
        </div>

        <!-- KYC Status -->
        <div class="mb-6">
          <select
            name="kyc_status"
            class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            required>
            <option value="" disabled selected>KYC Status *</option>
            <option value="Pending">Pending</option>
            <option value="Verified">Verified</option>
            <option value="Rejected">Rejected</option>
          </select>
        </div>

        <!-- Submit Button -->
        <div class="text-left mt-6">
          <button type="button" id="submit-btn" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Submit
          </button>
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

@section('scripts')
<script>
  const submitBtn = document.getElementById("submit-btn");
  const confirmationModal = document.getElementById("confirmation-modal");
  const closeModalBtn = document.getElementById("close-modal-btn");
  const confirmBtn = document.getElementById("confirm-btn");
  const cancelBtn = document.getElementById("cancel-btn");
  const finoCmsForm = document.getElementById("fino-cms-form");

  // Show confirmation modal on submit button click
  submitBtn.addEventListener("click", (e) => {
    e.preventDefault(); // Prevent form submission to show the modal

    // Validate the form fields
    const customerName = document.querySelector('[name="customer_name"]').value;
    const contactNumber = document.querySelector('[name="contact_number"]').value;
    const email = document.querySelector('[name="email"]').value;
    const accountNumber = document.querySelector('[name="account_number"]').value;

    // If the required fields are filled
    if (customerName && contactNumber && email && accountNumber) {
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
    finoCmsForm.submit(); // Submit the form when confirmed
    confirmationModal.classList.add("hidden");
  });
</script>
@endsection
@endsection
