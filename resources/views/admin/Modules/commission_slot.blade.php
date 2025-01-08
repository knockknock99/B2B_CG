@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commission Slots Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="p-6">
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-2xl font-semibold">View All Commission Slots</h1>
     <a href="{{route('admin.add_commission')}}"> <button class="flex items-center gap-2 bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-700">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Add New Slot
      </button> </a>
    </div>

    <div class="mb-4">
      <input
        type="text"
        placeholder="Search..."
        class="w-full md:w-64 px-4 py-2 border rounded-md"
      />
    </div>

    <div class="overflow-x-auto">
      <table class="w-full  ">
        <thead class="bg-blue-900">
          <tr class="">
            <th class=" px-4 py-2 text-left cursor-pointer ">ID</th>
            <th class=" px-4 py-2 text-left cursor-pointer">User Type</th>
            <th class=" px-4 py-2 text-left cursor-pointer">Service</th>
            <th class=" px-4 py-2 text-left cursor-pointer">Commission Type</th>
            <th class=" px-4 py-2 text-left cursor-pointer">Amount Range</th>
            <th class=" px-4 py-2 text-left cursor-pointer">Amount/Percentage</th>
            <th class=" px-4 py-2 text-left cursor-pointer">Plan</th>
            <th class=" px-4 py-2 text-left cursor-pointer">Chain Type</th>
            <th class=" px-4 py-2 text-left cursor-pointer">Status</th>
            <th class=" px-4 py-2 text-left cursor-pointer">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <td class="border px-4 py-2">1</td>
            <td class="border px-4 py-2">Retailer</td>
            <td class="border px-4 py-2">Money Transfer</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">Rs 1.00 - 1000.00</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">Retailer Gold</td>
            <td class="border px-4 py-2">Self</td>
            <td class="border px-4 py-2">
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked />
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
              </label>
            </td>
            <td class="border px-4 py-2">
              <div class="flex gap-2">
                <!-- Edit Button -->
                <button class="flex items-center gap-1 bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                  {{-- Edit --}}
                  <i class="fas fa-edit w-5 h-5"></i>
                </button>
                <!-- Delete Button -->
                <button class="flex items-center gap-1 bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                  {{-- Delete --}}
                </button>
              </div>
            </td>
          </tr>



          <tr class="bg-white">
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">Distributor</td>
            <td class="border px-4 py-2">Money Transfer</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">Rs 1.00 - 1000.00</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">Retailer Gold</td>
            <td class="border px-4 py-2">Chain</td>
            <td class="border px-4 py-2">
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked />
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
              </label>
            </td>
            <td class="border px-4 py-2">
              <div class="flex gap-2">
                <!-- Edit Button -->
                <button class="flex items-center gap-1 bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                  {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h12a2 2 0 002-2v-5m-9 1l8-8m0 0l-3-3m3 3L10 14"></path>
                  </svg> --}}
                  {{-- Edit --}}
                  <i class="fas fa-edit w-5 h-5"></i>
                </button>
                <!-- Delete Button -->
                <button class="flex items-center gap-1 bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                  {{-- Delete --}}
                </button>
              </div>
            </td>
          </tr>


          <tr class="bg-white">
            <td class="border px-4 py-2">3</td>
            <td class="border px-4 py-2">Retailer</td>
            <td class="border px-4 py-2">Aeps</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">Rs 1.00 - 1000.00</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">Retailer Gold</td>
            <td class="border px-4 py-2">Self</td>
            <td class="border px-4 py-2">
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked />
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
              </label>
            </td>
            <td class="border px-4 py-2">
              <div class="flex gap-2">
                <!-- Edit Button -->
                <button class="flex items-center gap-1 bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                  <i class="fas fa-edit w-5 h-5"></i>
                  {{-- Edit --}}
                </button>
                <!-- Delete Button -->
                <button class="flex items-center gap-1 bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                  {{-- Delete --}}
                </button>
              </div>
            </td>
          </tr>


          <tr class="bg-white">
            <td class="border px-4 py-2">4</td>
            <td class="border px-4 py-2">Retailer</td>
            <td class="border px-4 py-2">Money Transfer</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">Rs 1.00 - 1000.00</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">Retailer Plan</td>
            <td class="border px-4 py-2">Chain</td>
            <td class="border px-4 py-2">
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked />
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
              </label>
            </td>
            <td class="border px-4 py-2">
              <div class="flex gap-2">
                <!-- Edit Button -->
                <button class="flex items-center gap-1 bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                  <i class="fas fa-edit w-5 h-5"></i>
                  {{-- Edit --}}
                </button>
                <!-- Delete Button -->
                <button class="flex items-center gap-1 bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                  {{-- Delete --}}
                </button>
              </div>
            </td>
          </tr>

          <tr class="bg-white">
            <td class="border px-4 py-2">5</td>
            <td class="border px-4 py-2">Retailer</td>
            <td class="border px-4 py-2">Money Transfer</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">Rs 1.00 - 1000.00</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">Retailer Gold</td>
            <td class="border px-4 py-2">Self</td>
            <td class="border px-4 py-2">
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked />
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
              </label>
            </td>
            <td class="border px-4 py-2">
              <div class="flex gap-2">
                <!-- Edit Button -->
                <button class="flex items-center gap-1 bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                  <i class="fas fa-edit w-5 h-5"></i>
                  {{-- Edit --}}
                </button>
                <!-- Delete Button -->
                <button class="flex items-center gap-1 bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                  {{-- Delete --}}
                </button>
              </div>
            </td>
          </tr>


          <tr class="bg-white">
            <td class="border px-4 py-2">6</td>
            <td class="border px-4 py-2">Retailer</td>
            <td class="border px-4 py-2">Money Transfer</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">Rs 1.00 - 1000.00</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">Retailer Gold</td>
            <td class="border px-4 py-2">Self</td>
            <td class="border px-4 py-2">
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked />
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
              </label>
            </td>
            <td class="border px-4 py-2">
              <div class="flex gap-2">
                <!-- Edit Button -->
                <button class="flex items-center gap-1 bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                  <i class="fas fa-edit w-5 h-5"></i>
                  {{-- Edit --}}
                </button>
                <!-- Delete Button -->
                <button class="flex items-center gap-1 bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                  {{-- Delete --}}
                </button>
              </div>
            </td>
          </tr>


          <tr class="bg-white">
            <td class="border px-4 py-2">7</td>
            <td class="border px-4 py-2">Retailer</td>
            <td class="border px-4 py-2">Money Transfer</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">Rs 1.00 - 1000.00</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">Retailer Gold</td>
            <td class="border px-4 py-2">Self</td>
            <td class="border px-4 py-2">
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked />
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-900 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
              </label>
            </td>
            <td class="border px-4 py-2">
              <div class="flex gap-2">
                <!-- Edit Button -->
                <button class="flex items-center gap-1 bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                  <i class="fas fa-edit w-5 h-5"></i>
                  {{-- Edit --}}
                </button>
                <!-- Delete Button -->
                <button class="flex items-center gap-1 bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                  {{-- Delete --}}
                </button>
              </div>
            </td>
          </tr>


          <!-- Repeat rows for other data entries -->
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>

@endsection
