@extends('admin.master_admin_layout')
@section('content_admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Types Table</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gray-100">

  <div class=" p-5 mt-4 ml-4 mr-4 bg-white rounded-lg shadow">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6 flex-wrap">
      <h1 class="text-2xl font-bold">View All User Types</h1>
      <div class="flex items-center">
        <label class="mr-2">Search:</label>
        <input type="text" class="px-3 py-2 border rounded" />
      </div>
    </div>

    <!-- Table Section -->
    <div class="overflow-x-auto">
      <table class="w-full border-collapse">
        <thead>
          <tr class="bg-blue-900 text-white">
            <th class="p-3 text-left border cursor-pointer">
              <div class="flex items-center">
                #<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-1" viewBox="0 0 16 16">
                  
                </svg>
              </div>
            </th>
            <th class="p-3 text-left border cursor-pointer">
              <div class="flex items-center">
                User Type 
                <span class="ml-1"> ↕ </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-1" viewBox="0 0 16 16">
                  
                </svg>
              </div>
            </th>
            <th class="p-3 text-left border cursor-pointer">
              <div class="flex items-center">
                Created on 
                <span class="ml-1"> ↕ </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-1" viewBox="0 0 16 16">
                  
                </svg>
              </div>
            </th>
            <th class="p-3 text-left border">Status
              <span> ↕ </span>
            </th>
            <th class="p-3 text-left border">Action
              <span> ↕ </span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-50">
            <td class="p-3 border">1</td>
            <td class="p-3 border">Whitelabel</td>
            <td class="p-3 border">21 Jul 2021 06:33 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="p-3 border">
              {{-- <button class="text-blue-600 hover:text-blue-800">Edit</button> --}}

              {{-- <td class="px-4 py-2">
                <button class="text-[#0077B6]"> --}}
                  <i class="fas fa-edit w-5 h-5"></i>
                  <i class="fas fa-trash w-5 h-5"></i>
                {{-- </button>
              </td> --}}

            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="p-3 border">2</td>
            <td class="p-3 border">Super Distributor</td>
            <td class="p-3 border">21 Jul 2021 06:33 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="p-3 border">
              {{-- <button class="text-blue-600 hover:text-blue-800">Edit</button> --}}
              <i class="fas fa-edit w-5 h-5"></i>
              <i class="fas fa-trash w-5 h-5"></i>
            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="p-3 border">3</td>
            <td class="p-3 border">Distributor</td>
            <td class="p-3 border">21 Jul 2021 06:33 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="p-3 border">
              {{-- <button class="text-blue-600 hover:text-blue-800">Edit</button> --}}
              <i class="fas fa-edit w-5 h-5"></i>
              <i class="fas fa-trash w-5 h-5"></i>
            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="p-3 border">4</td>
            <td class="p-3 border">Retailer</td>
            <td class="p-3 border">21 Jul 2021 06:33 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="p-3 border">
              {{-- <button class="text-blue-600 hover:text-blue-800">Edit</button> --}}
              <i class="fas fa-edit w-5 h-5"></i>
              <i class="fas fa-trash w-5 h-5"></i>
            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="p-3 border">5</td>
            <td class="p-3 border">Employee</td>
            <td class="p-3 border">16 Aug 2021 08:32 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="p-3 border">
              {{-- <button class="text-blue-600 hover:text-blue-800">Edit</button> --}}
              <i class="fas fa-edit w-5 h-5"></i>
              <i class="fas fa-trash w-5 h-5"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Pagination Section -->
    <div class="flex justify-between items-center mt-4">
      <p class="text-sm text-gray-600">
        Showing 1 to 5 of 5 entries
      </p>
      <div class="flex gap-2">
        <button class="px-3 py-1 border rounded hover:bg-gray-100">Previous</button>
        <button class="px-3 py-1 border rounded bg-blue-900 text-white">1</button>
        <button class="px-3 py-1 border rounded hover:bg-gray-100">Next</button>
      </div>
    </div>
  </div>




  <script>
    // JavaScript for the status toggle functionality
    function toggleStatus(button) {
      const statusIndicator = button.querySelector('.status-indicator');
      if (statusIndicator.classList.contains('translate-x-6')) {
        statusIndicator.classList.remove('translate-x-6');
        statusIndicator.classList.add('translate-x-0');
        button.classList.remove('bg-blue-900');
        button.classList.add('bg-gray-400');
      } else {
        statusIndicator.classList.remove('translate-x-0');
        statusIndicator.classList.add('translate-x-6');
        button.classList.remove('bg-gray-400');
        button.classList.add('bg-blue-900');
      }
    }
  </script>

</body>
</html>


  
@endsection
