@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services Table</title>
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <div class="p-6 max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold text-gray-800">View All Services</h1>
      <div class="flex items-center gap-4">
        <div class="relative">
          <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border rounded-md" />
          <i class="fas fa-search w-5 h-5 absolute left-3 top-2.5 text-gray-400"></i>
        </div>
        <a href="{{route('admin.add_new_service_master')}}">
          <button class="flex items-center gap-2 bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-700">
            <i class="fas fa-plus w-5 h-5"></i>
            ADD NEW SERVICE
          </button>
        </a>
      </div>
    </div>

    <!-- Table Section -->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border rounded-lg">
        <thead>
          <tr class="bg-blue-900 text-white">
            <th class="px-6 py-3 text-left">#</th>
            <th class="px-6 py-3 text-left cursor-pointer">
              <div class="flex items-center gap-2">
                Service Title
                <i class="fas fa-sort w-4 h-4"></i>
              </div>
            </th>
            <th class="px-6 py-3 text-left cursor-pointer">
              <div class="flex items-center gap-2">
                Service Category
                <i class="fas fa-sort w-4 h-4"></i>
              </div>
            </th>
            <th class="px-6 py-3 text-left cursor-pointer">
              <div class="flex items-center gap-2">
                Service Type
                <i class="fas fa-sort w-4 h-4"></i>
              </div>
            </th>
            <th class="px-6 py-3 text-left cursor-pointer">
              <div class="flex items-center gap-2">
                Created on
                <i class="fas fa-sort w-4 h-4"></i>
              </div>
            </th>
            <th class="px-6 py-3 text-left">Status</th>
            <th class="px-6 py-3 text-left">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y">
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">
              <div class="flex items-center gap-3">
                <i class="fas fa-mobile-alt w-6 h-6 text-blue-600"></i>
                Mobile Recharge
              </div>
            </td>
            <td class="px-6 py-4">B2B SERVICES</td>
            <td class="px-6 py-4">Internal Service</td>
            <td class="px-6 py-4">7 Aug 2021 01:54 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="px-6 py-4">
              <button class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4">2</td>
            <td class="px-6 py-4">
              <div class="flex items-center gap-3">
                <i class="fas fa-tv w-6 h-6 text-blue-600"></i>
                DTH Recharge
              </div>
            </td>
            <td class="px-6 py-4">B2B SERVICES</td>
            <td class="px-6 py-4">Internal Service</td>
            <td class="px-6 py-4">7 Aug 2021 01:55 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="px-6 py-4">
              <button class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4">3</td>
            <td class="px-6 py-4">
              <div class="flex items-center gap-3">
                <i class="fas fa-tv w-6 h-6 text-blue-600"></i>
                DTH Recharge
              </div>
            </td>
            <td class="px-6 py-4">B2B SERVICES</td>
            <td class="px-6 py-4">Internal Service</td>
            <td class="px-6 py-4">7 Aug 2021 01:55 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="px-6 py-4">
              <button class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4">4</td>
            <td class="px-6 py-4">
              <div class="flex items-center gap-3">
                <i class="fas fa-tv w-6 h-6 text-blue-600"></i>
                DTH Recharge
              </div>
            </td>
            <td class="px-6 py-4">B2B SERVICES</td>
            <td class="px-6 py-4">Internal Service</td>
            <td class="px-6 py-4">7 Aug 2021 01:55 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="px-6 py-4">
              <button class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>
          <!-- Repeat rows as needed -->
        </tbody>
      </table>
    </div>
    <div class="mt-4 flex flex-col md:flex-row justify-between items-center">
      <div class="mb-4 md:mb-0">
        Showing 1 to 10 of 59 entries
      </div>
      <div class="flex gap-2">
        <button
          class="px-3 py-1 border rounded disabled:opacity-50"
        >
          Previous
        </button>
        <!-- Pagination buttons (static for now) -->
        <button class="px-3 py-1 border rounded bg-[#0077B6] text-white">
          1
        </button>
        <button class="px-3 py-1 border rounded">
          2
        </button>
        <span>...</span>
        <button class="px-3 py-1 border rounded">
          59
        </button>
        <button class="px-3 py-1 border rounded disabled:opacity-50">
          Next
        </button>
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