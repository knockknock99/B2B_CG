@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plans Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">

  <main class="p-6 max-w-full mx-auto">
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
      <h1 class="text-2xl font-bold text-gray-800 mb-4 sm:mb-0">View All Plans</h1>

      <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 w-full sm:w-auto">
        <div class="flex items-center mb-4 sm:mb-0 w-full sm:w-auto">
          <label for="search" class="mr-2">Search:</label>
          <input id="search" type="text" class="border outline-none rounded px-3 py-1 w-full sm:w-48" />
        </div>

        {{-- <a href="{{route('admin.plain2nd')}}"> --}}
          <button class="bg-blue-900 text-white px-4 py-2 rounded flex items-center gap-2">
            <i class="fas fa-plus text-white" style="font-size: 20px;"></i>
            ADD NEW PLAN
          </button>
        </a>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full border-collapse">
        <thead>
          <tr class="bg-blue-900 text-white">
            <th class="p-3 text-left cursor-pointer">
              <div class="flex items-center gap-2">
                # <i class="fas fa-arrow-up-down" style="font-size: 16px;"></i>
              </div>
            </th>
            <th class="p-3 text-left cursor-pointer">
              <div class="flex items-center gap-2">
                User Type <span>↕</span>
              </div>
            </th>
            <th class="p-3 text-left cursor-pointer">
              <div class="flex items-center gap-2">
                Plan Name <span>↕</span>
              </div>
            </th>
            <th class="p-3 text-left cursor-pointer">
              <div class="flex items-center gap-2">
                Created on <span>↕</span>
              </div>
            </th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="p-3">7</td>
            <td class="p-3">Retailer</td>
            <td class="p-3">Retailer Plan</td>
            <td class="p-3">23 Dec 2022 12:20 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="p-3">
              <div class="flex gap-2">
                <button class="text-[#0080c4] hover:text-[#0069a3]">
                  <i class="fas fa-edit" style="font-size: 20px;"></i>
                </button>
                <button class="text-red-500 hover:text-red-700">
                  <i class="fas fa-trash-alt" style="font-size: 20px;"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="p-3">8</td>
            <td class="p-3">Distributor</td>
            <td class="p-3">Distributor Plan</td>
            <td class="p-3">28 Dec 2022 05:24 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="p-3">
              <div class="flex gap-2">
                <button class="text-[#0080c4] hover:text-[#0069a3]">
                  <i class="fas fa-edit" style="font-size: 20px;"></i>
                </button>
                <button class="text-red-500 hover:text-red-700">
                  <i class="fas fa-trash-alt" style="font-size: 20px;"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="p-3">10</td>
            <td class="p-3">Super Distributor</td>
            <td class="p-3">Super Distributor Basic</td>
            <td class="p-3">14 Feb 2023 05:58 pm</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            <td class="p-3">
              <div class="flex gap-2">
                <button class="text-[#0080c4] hover:text-[#0069a3]">
                  <i class="fas fa-edit" style="font-size: 20px;"></i>
                </button>
                <button class="text-red-500 hover:text-red-700">
                  <i class="fas fa-trash-alt" style="font-size: 20px;"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="flex justify-between items-center mt-4">
      <p class="text-sm text-gray-600">
        Showing 1 to 3 of 3 entries
      </p>
      <div class="flex gap-2">
        <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 hover:bg-gray-100">
          Previous
        </button>
        <button class="px-3 py-1 bg-blue-900 text-white rounded">
          1
        </button>
        <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 hover:bg-gray-100">
          Next
        </button>
      </div>
    </div>
  </main>

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