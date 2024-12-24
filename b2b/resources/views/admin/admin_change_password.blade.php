@extends('admin.master_admin_layout')

@section('content_admin')

<main class="p-4">

  {{-- <div class="bg-white p-6 rounded-md shadow-md mb-4">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <div >
        <h1 class="text-2xl font-bold text-blue-900">Good Afternoon, Tester!</h1>
        <p class="text-lg font-medium">Wallet ₹ 1001.00</p>
        <div class="mt-2">
          <p class="font-medium">HelpLine No: 999 999 1234</p>
          <p class="font-medium">TSM-Mob: 999 999 1234</p>
        </div>
      </div>
      
      <div class="mt-4 md:mt-0">
        <img
          src="https://abheepay.com/backend/assets/img/illustrations/man-with-laptop.gif"
          alt="Man with Laptop"
          width="200"
          height="200"
          class="rounded-md"
        />
      </div>
    </div>

  </div> --}}
  <div class="max-w-4xl mx-auto p-10 bg-blue-50 justify-center align-center overflow-x-hidden">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-7 ">Update Account / Transaction Password</h1>
        <div class="flex flex-wrap  justify-center items-center space-x-2 mb-6">
          <button id="accountPasswordTab" class="bg-blue-600 text-white mb-6 px-20 py-3 rounded-md hover:bg-blue-700">
            Account Password
          </button>
          <button id="transactionPasswordTab" class="bg-gray-200 mb-6 px-20 py-3 rounded-md hover:bg-gray-300">
            Transaction Password
          </button>
        </div>
        <form id="passwordForm" class="space-y-4">
          <div>
            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile No. <span class="text-red-500">*</span></label>
            <input type="text" id="mobile" class="w-full border border-gray-300 rounded-lg p-2 mt-1" placeholder="Enter your mobile number">
            <p class="text-sm text-gray-500 mt-1">We will send an OTP for verification.</p>
          </div>
          <button type="button" id="submitButton" class=" bg-blue-900 text-white font-bold py-3 px-4 rounded-lg hover:bg-blue-600">
            Submit
          </button>
        </form>
      </div>
    </div>
    
    <script>
      // Tab Elements
      const accountPasswordTab = document.getElementById("accountPasswordTab");
      const transactionPasswordTab = document.getElementById("transactionPasswordTab");
      const passwordForm = document.getElementById("passwordForm");
    
      // Event Listeners for Tabs
      accountPasswordTab.addEventListener("click", () => {
        accountPasswordTab.classList.add("bg-blue-600", "text-white");
        accountPasswordTab.classList.remove("bg-gray-200");
        transactionPasswordTab.classList.add("bg-gray-200");
        transactionPasswordTab.classList.remove("bg-blue-600", "text-white");
      });
    
      transactionPasswordTab.addEventListener("click", () => {
        transactionPasswordTab.classList.add("bg-blue-600", "text-white");
        transactionPasswordTab.classList.remove("bg-gray-200");
        accountPasswordTab.classList.add("bg-gray-200");
        accountPasswordTab.classList.remove("bg-blue-600", "text-white");
      });
    
      // Form Submission (Mocked)
      document.getElementById("submitButton").addEventListener("click", () => {
        const mobile = document.getElementById("mobile").value;
    
        if (mobile.trim() === "") {
          alert("Please enter your mobile number.");
        } else if (!/^\d{10}$/.test(mobile)) {
          alert("Please enter a valid 10-digit mobile number.");
        } else {
          alert("OTP has been sent to your mobile number!");
        }
      });
    </script>
    

</div>

@endsection