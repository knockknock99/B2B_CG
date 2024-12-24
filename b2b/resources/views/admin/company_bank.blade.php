@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Announcements Table</title>
</head>
<body class="bg-blue-50 p-6">
    <div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg p-4 mt-5">
        <!-- Header -->
       <a href="{{route('admin.add_new_bank')}}"> <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-700">View All Announcements</h1>
            <button class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Add New Announcement
            </button>
        </div>
    </a>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Bank Name</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Account Holder</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Account No</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">IFSC Code</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-600">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- First Row -->
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border px-4 py-2 text-sm text-gray-700">1</td>
                        <td class="border px-4 py-2 text-sm text-gray-700">SBI Bank</td>
                        <td class="border px-4 py-2 text-sm text-gray-700">Md Jasim</td>
                        <td class="border px-4 py-2 text-sm text-gray-700">384998387283</td>
                        <td class="border px-4 py-2 text-sm text-gray-700">SBIN0004664</td>
                        <td class="border px-4 py-2 text-sm text-center">
                            <div x-data="{ isActive: false }">
                                <button 
                                    class="relative inline-flex items-center w-12 h-6 rounded-full transition-colors focus:outline-none" 
                                    :class="{ 'bg-blue-900': isActive, 'bg-gray-300': !isActive }" 
                                    @click="isActive = !isActive"
                                >
                                    <span 
                                        class="w-5 h-5 bg-white rounded-full shadow-md transform transition-transform"
                                        :class="{ 'translate-x-6': isActive, 'translate-x-1': !isActive }"
                                    ></span>
                                </button>
                            </div>
                        </td>
                        <td class="border px-4 py-2 text-sm text-gray-700 flex space-x-2">
                            <button class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-edit w-5 h-5"></i>
                            </button>
                            <button class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash-alt w-5 h-5"></i>    
                            </button>
                        </td>
                    </tr>

                    <!-- Second Row -->
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border px-4 py-2 text-sm text-gray-700">2</td>
                        <td class="border px-4 py-2 text-sm text-gray-700">Bank of India</td>
                        <td class="border px-4 py-2 text-sm text-gray-700">
                           Md Iftikhar Alam
                        </td>
                        <td class="border px-4 py-2 text-sm text-gray-700">3948929940948</td>
                        <td class="border px-4 py-2 text-sm text-gray-700">SBIN0004664</td>
                        <td class="border px-4 py-2 text-sm text-center">
                            <div x-data="{ isActive: true }">
                                <button 
                                    class="relative inline-flex items-center w-12 h-6 rounded-full transition-colors focus:outline-none" 
                                    :class="{ 'bg-blue-900': isActive, 'bg-gray-300': !isActive }" 
                                    @click="isActive = !isActive"
                                >
                                    <span 
                                        class="w-5 h-5 bg-white rounded-full shadow-md transform transition-transform"
                                        :class="{ 'translate-x-6': isActive, 'translate-x-1': !isActive }"
                                    ></span>
                                </button>
                            </div>
                        </td>
                        <td class="border px-4 py-2 text-sm text-gray-700 flex space-x-2">
                            <button class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-edit w-5 h-5"></i>
                             </button>
                            <button class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash-alt w-5 h-5"></i>    
                            </button>
                        </td>
                    </tr>


                    <tr class="odd:bg-white even:bg-gray-50">
                      <td class="border px-4 py-2 text-sm text-gray-700">3</td>
                      <td class="border px-4 py-2 text-sm text-gray-700">SBI Bank</td>
                      <td class="border px-4 py-2 text-sm text-gray-700">Md Jasim</td>
                      <td class="border px-4 py-2 text-sm text-gray-700">384998387283</td>
                      <td class="border px-4 py-2 text-sm text-gray-700">SBIN0004664</td>
                      <td class="border px-4 py-2 text-sm text-center">
                          <div x-data="{ isActive: false }">
                              <button 
                                  class="relative inline-flex items-center w-12 h-6 rounded-full transition-colors focus:outline-none" 
                                  :class="{ 'bg-blue-900': isActive, 'bg-gray-300': !isActive }" 
                                  @click="isActive = !isActive"
                              >
                                  <span 
                                      class="w-5 h-5 bg-white rounded-full shadow-md transform transition-transform"
                                      :class="{ 'translate-x-6': isActive, 'translate-x-1': !isActive }"
                                  ></span>
                              </button>
                          </div>
                      </td>
                      <td class="border px-4 py-2 text-sm text-gray-700 flex space-x-2">
                          <button class="text-blue-500 hover:text-blue-700">
                              <i class="fas fa-edit w-5 h-5"></i>
                          </button>
                          <button class="text-red-500 hover:text-red-700">
                              <i class="fas fa-trash-alt w-5 h-5"></i>    
                          </button>
                      </td>
                  </tr>


                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-between items-center mt-4">
            <p class="text-sm text-gray-900">Showing 1 to 2 of 2 entries</p>
            <div class="flex space-x-2">
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300 text-sm text-gray-700">Previous</button>
                <button class="px-3 py-1 bg-blue-900 text-white rounded hover:bg-blue-600 text-sm">1</button>
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300 text-sm text-gray-700">Next</button>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
