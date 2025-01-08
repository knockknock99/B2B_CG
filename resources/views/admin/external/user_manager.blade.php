@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank Accounts List</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const toggleButtons = document.querySelectorAll('.toggle-btn');

      toggleButtons.forEach((button) => {
        button.addEventListener('click', () => {
          const isActive = button.getAttribute('data-active') === 'true';
          // Toggle active state
          button.setAttribute('data-active', !isActive);

          // Handle the button style
          const dot = button.querySelector('.dot');

          if (isActive) {
            button.classList.remove('bg-green-500');
            button.classList.add('bg-gray-300');
            dot.classList.remove('translate-x-5');
            dot.classList.add('translate-x-0');
          } else {
            button.classList.remove('bg-gray-300');
            button.classList.add('bg-green-500');
            dot.classList.remove('translate-x-0');
            dot.classList.add('translate-x-5');
          }
        });
      });
    });
  </script>
</head>
<body class="bg-gray-100 p-6">

  <main class="max-w-7xl mx-auto bg-white rounded-lg shadow-md p-6">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold">10 Users Found</h1>
     <a href="{{route('admin.add_new_user')}}"> <div class="flex gap-4">
        <button class="flex items-center gap-2 bg-gray-100 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-200">
          FILTER USERS
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <button class="flex items-center gap-2 bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
          ADD NEW
        </button>
      </div>
    </a>
    </div>

    <!-- Filter Section -->
    <div class="grid grid-cols-5 gap-4 mb-6 bg-gray-50 p-4 rounded-lg">
      <select class="border rounded px-3 py-2">
        <option>All</option>
      </select>
      <input
        type="text"
        placeholder="Parent User"
        class="border rounded px-3 py-2"
      />
      <select class="border rounded px-3 py-2">
        <option>All</option>
      </select>
      <select class="border rounded px-3 py-2">
        <option>All</option>
      </select>
      <button class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800">
        Search
      </button>
    </div>

    <!-- Table Section -->
    <div class="overflow-x-auto">
      <table class="w-full  border-gray-200 rounded-lg">
        <thead>
          <tr class="bg-blue-900 text-white">
            <th class="px-4 py-3 ">User ID</th>
            <th class="px-4 py-3 ">User Type</th>
            <th class="px-4 py-3 ">Email ID</th>
            <th class="px-4 py-3">Wallet Balance</th>
            <th class="px-4 py-3 ">Plan Name</th>
            <th class="px-4 py-3 ">Join Date</th>
            <th class="px-4 py-3 ">Parent ID</th>
            <th class="px-4 py-3 ">Status</th>
            <th class="px-4 py-3 ">E-KYC Status</th>
            <th class="px-4 py-3 ">KYC Status</th>
            <th class="px-4 py-3 ">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <td class="px-4 py-3 border text-center">DAC0156</td>
            <td class="px-4 py-3 border text-center">Distributor</td>
            <td class="px-4 py-3 border text-center">test@gmail.com</td>
            <td class="px-4 py-3 border text-center">₹0.00</td>
            <td class="px-4 py-3 border text-center">Distributor Plan</td>
            <td class="px-4 py-3 border text-center">2023-12-01</td>
            <td class="px-4 py-3 border text-center">SAVIDAC Admin</td>
            <td class="px-4 py-3 border text-center">
              <!-- Toggle Button -->
              <button class="toggle-btn w-12 h-6 rounded-full bg-gray-300 relative flex items-center transition-all duration-300 ease-in-out"
                data-active="false">
                <span class="dot w-6 h-6 bg-white rounded-full absolute left-0 transition-all duration-300 ease-in-out"></span>
              </button>
            </td>
            <td class="px-4 py-3 border text-center">
              <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-800">Pending</span>
            </td>
            <td class="px-4 py-3 border text-center">
              <span class="px-3 py-1 rounded-full bg-red-100 text-red-800">Not Submitted</span>
            </td>
            <td class="px-4 py-3 border text-center flex gap-2 justify-center">
              <button class="text-blue-500">
                <i class="fas fa-edit w-5 h-5"></i>
            </button>
              <button class="text-red-500">
                <i class="fas fa-trash-alt w-5 h-5"></i>    
            </button>
            </td>
          </tr>
        </tbody>

        <tbody>
            <tr class="bg-white">
              <td class="px-4 py-3 border text-center">DAC0156</td>
              <td class="px-4 py-3 border text-center">Distributor</td>
              <td class="px-4 py-3 border text-center">test@gmail.com</td>
              <td class="px-4 py-3 border text-center">₹0.00</td>
              <td class="px-4 py-3 border text-center">Distributor Plan</td>
              <td class="px-4 py-3 border text-center">2023-12-01</td>
              <td class="px-4 py-3 border text-center">SAVIDAC Admin</td>
              <td class="px-4 py-3 border text-center">
                <!-- Toggle Button -->
                <button class="toggle-btn w-12 h-6 rounded-full bg-gray-300 relative flex items-center transition-all duration-300 ease-in-out"
                  data-active="false">
                  <span class="dot w-6 h-6 bg-white rounded-full absolute left-0 transition-all duration-300 ease-in-out"></span>
                </button>
              </td>
              <td class="px-4 py-3 border text-center">
                <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-800">Pending</span>
              </td>
              <td class="px-4 py-3 border text-center">
                <span class="px-3 py-1 rounded-full bg-red-100 text-red-800">Not Submitted</span>
              </td>
              <td class="px-4 py-3 border text-center flex gap-2 justify-center">
                <button class="text-blue-500">
                  <i class="fas fa-edit w-5 h-5"></i>
              </button>
                <button class="text-red-500">
                  <i class="fas fa-trash-alt w-5 h-5"></i>    
              </button>
              </td>
            </tr>
          </tbody>


          <tbody>
            <tr class="bg-white">
              <td class="px-4 py-3 border text-center">DAC0156</td>
              <td class="px-4 py-3 border text-center">Distributor</td>
              <td class="px-4 py-3 border text-center">test@gmail.com</td>
              <td class="px-4 py-3 border text-center">₹0.00</td>
              <td class="px-4 py-3 border text-center">Distributor Plan</td>
              <td class="px-4 py-3 border text-center">2023-12-01</td>
              <td class="px-4 py-3 border text-center">SAVIDAC Admin</td>
              <td class="px-4 py-3 border text-center">
                <!-- Toggle Button -->
                <button class="toggle-btn w-12 h-6 rounded-full bg-gray-300 relative flex items-center transition-all duration-300 ease-in-out"
                  data-active="false">
                  <span class="dot w-6 h-6 bg-white rounded-full absolute left-0 transition-all duration-300 ease-in-out"></span>
                </button>
              </td>
              <td class="px-4 py-3 border text-center">
                <span class="px-3 py-1 rounded-full bg-yellow-100 text-green-800">Done</span>
              </td>
              <td class="px-4 py-3 border text-center">
                <span class="px-3 py-1 rounded-full bg-green-300 text-green-800">Submitted</span>
              </td>
              <td class="px-4 py-3 border text-center flex gap-2 justify-center">
                <button class="text-blue-500">
                  <i class="fas fa-edit w-5 h-5"></i>
              </button>
                <button class="text-red-500">
                  <i class="fas fa-trash-alt w-5 h-5"></i>    
              </button>
              </td>
            </tr>
          </tbody>

      </table>
    </div>

    <!-- Pagination Section -->
    <div class="flex justify-between items-center mt-6">
      <p class="text-sm text-gray-600">Showing 1 of 10 entries</p>
      <div class="flex gap-2">
        <button class="p-2 bg-gray-100 rounded hover:bg-gray-200">Previous</button>
        <span class="px-4 py-2 bg-blue-50 text-blue-600 rounded">1</span>
        <button class="p-2 bg-gray-100 rounded hover:bg-gray-200">Next</button>
      </div>
    </div>
  </main>

</body>
</html>

@endsection