@extends('masterLayout')
@section('content')

<main class="p-4">
  <div class="max-w-5xl mx-auto  rounded-lg overflow-hidden">
    <div class=" ">
      <div class="flex flex-col lg:flex-row">
        <!-- Main Content -->
        <div class="ml-0 w-full px-10 sm:px-6 lg:px-10 py-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Mobile Recharge Form -->
            <section class="bg-white shadow-md rounded-lg p-6 sm:p-8 flex flex-col justify-between">
              <h2 class="text-lg md:text-xl font-bold text-blue-600 mb-4 text-left">Mobile Recharge</h2>
              <form id="form" class="space-y-4 max-w-md mx-auto">
                <input type="text" id="mobile-number" placeholder="Mobile Number *" class="w-full border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2">
                <select id="operator" class="w-full border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2 text-muted">
                  <option value="" disabled selected>Operator List</option>
                  <option value="airtel">Airtel</option>
                  <option value="jio">Jio</option>
                </select>
                <select id="circle" class="w-full border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2 text-muted">
                  <option value="" disabled selected>Circle</option>
                  <option value="delhi">Delhi</option>
                  <option value="mumbai">Mumbai</option>
                </select>
                <input type="text" id="amount" placeholder="Enter Recharge Amount *" class="w-full border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2">
                <a href="#" id="browse-plans-link" class="text-blue-500 text-sm block mb-2">Browse Plans</a>
                <div class="flex justify-start">
                  <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 text-sm" id="submit-btn">Submit</button>
                </div>
              </form>
            </section>

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

            <!-- Browse Plans -->
            <section class="bg-white shadow-md rounded-lg p-6 sm:p-8 flex flex-col">
              <h2 class="text-lg md:text-xl font-bold text-blue-600 mb-4 text-left">Browse Plans</h2>
              <p class="text-gray-600 text-sm mb-4 text-center">Disclaimer: Verify with your operator before proceeding.</p>
              <div id="plans-container" class="space-y-4 overflow-y-auto max-h-60">
                <!-- Plans will be dynamically loaded here -->
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.getElementById('browse-plans-link').addEventListener('click', function (e) {
        e.preventDefault();

        const plans = [
          { circle: 'Delhi NCR', planType: 'TOPUP', validity: 'N/A', description: 'Talktime of Rs. 7.47, validity unrestricted', price: 10 },
          { circle: 'Delhi NCR', planType: 'TOPUP', validity: 'N/A', description: 'Talktime of Rs. 14.95, validity unrestricted', price: 20 },
          { circle: 'Delhi NCR', planType: 'TOPUP', validity: 'N/A', description: 'Talktime of Rs. 22.42, validity unrestricted', price: 30 },
        ];

        const container = document.getElementById('plans-container');
        container.innerHTML = '';

        plans.forEach(plan => {
          const planCard = `
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center bg-gray-100 p-4 rounded">
              <div class="mb-4 md:mb-0">
                <h6 class="font-bold text-gray-800">${plan.circle} - ${plan.planType}</h6>
                <p class="text-sm text-gray-600">${plan.description}</p>
              </div>
              <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Rs. ${plan.price}</button>
            </div>
          `;
          container.innerHTML += planCard;
        });
      });

      // Modal behavior
      const form = document.getElementById("form");
      const submitBtn = document.getElementById("submit-btn");
      const confirmationModal = document.getElementById("confirmation-modal");
      const closeModalBtn = document.getElementById("close-modal-btn");
      const confirmBtn = document.getElementById("confirm-btn");
      const cancelBtn = document.getElementById("cancel-btn");

      submitBtn.addEventListener("click", (e) => {
        e.preventDefault();
        const mobileNumber = document.getElementById("mobile-number").value;
        const operator = document.getElementById("operator").value;
        const circle = document.getElementById("circle").value;
        const amount = document.getElementById("amount").value;

        if (!mobileNumber || !operator || !circle || !amount) {
          alert("Please fill in all fields.");
        } else {
          confirmationModal.classList.remove("hidden");
        }
      });

      closeModalBtn.addEventListener("click", () => {
        confirmationModal.classList.add("hidden");
      });

      cancelBtn.addEventListener("click", () => {
        confirmationModal.classList.add("hidden");
      });

      confirmBtn.addEventListener("click", () => {
        // Handle form submission here
        console.log("Form submitted!");
        confirmationModal.classList.add("hidden");
      });
    </script>
  </div>
</main>

@endsection
