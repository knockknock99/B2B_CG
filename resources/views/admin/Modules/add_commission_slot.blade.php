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
    <!-- Add Commission Slot Form -->
    <div class="bg-white rounded-lg shadow-sm mb-8 p-6">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Add Commission Slot</h2>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
          ALL SLOTS
        </button>
      </div>

      <form>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
          <select class="border rounded-md px-3 py-2">
            <option value="">-- Choose User Type --</option>
            <option value="retailer">Retailer</option>
            <option value="distributor">Distributor</option>
          </select>

          <select class="border rounded-md px-3 py-2">
            <option value="">-- Choose Plan --</option>
            <option value="retailer">Retailer Plan</option>
            <option value="distributor">Distributor Plan</option>
          </select>

          <select class="border rounded-md px-3 py-2">
            <option value="">-- Choose Service --</option>
            <option value="money-transfer">Money Transfer</option>
            <option value="aeps">AEPS</option>
          </select>

          <select class="border rounded-md px-3 py-2">
            <option value="">-- Choose Commission Type --</option>
            <option value="percentage">By Percentage</option>
            <option value="fixed">Fixed Amount</option>
          </select>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
          <input
            type="number"
            placeholder="From Amount"
            class="border rounded-md px-3 py-2"
          />

          <input
            type="number"
            placeholder="To Amount"
            class="border rounded-md px-3 py-2"
          />

          <select class="border rounded-md px-3 py-2">
            <option value="">-- Choose Transaction Type --</option>
            <option value="credit">Credit</option>
            <option value="debit">Debit</option>
          </select>

          <input
            type="text"
            placeholder="Enter User Login ID"
            class="border rounded-md px-3 py-2"
          />
        </div>

        <button
          type="submit"
          class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700"
        >
          Submit
        </button>
      </form>
    </div>

    {{-- <!-- View All Commission Slots -->
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-2xl font-semibold">View All Commission Slots</h1>
      <button class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        Add New Slot
      </button>
    </div>

    <div class="mb-4">
      <input
        type="text"
        placeholder="Search..."
        class="w-full md:w-64 px-4 py-2 border rounded-md"
      />
    </div>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse bg-white">
        <thead>
          <tr class="bg-gray-100">
            <th class="border px-4 py-2 text-left">ID</th>
            <th class="border px-4 py-2 text-left">User Type</th>
            <th class="border px-4 py-2 text-left">Service</th>
            <th class="border px-4 py-2 text-left">Commission Type</th>
            <th class="border px-4 py-2 text-left">Amount Range</th>
            <th class="border px-4 py-2 text-left">Amount/Percentage</th>
            <th class="border px-4 py-2 text-left">Plan</th>
            <th class="border px-4 py-2 text-left">Chain Type</th>
            <th class="border px-4 py-2 text-left">Status</th>
            <th class="border px-4 py-2 text-left">Action</th>
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
                <div class="w-11 h-6 bg-gray-200 rounded-full peer-checked:bg-green-600"></div>
              </label>
            </td>
            <td class="border px-4 py-2">
              <div class="flex gap-2">
                <button class="text-blue-600 hover:text-blue-800">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h12a2 2 0 002-2v-5m-9 1l8-8m0 0l-3-3m3 3L10 14"></path>
                  </svg>
                </button>
                <button class="text-red-600 hover:text-red-800">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m2 8H7a2 2 0 01-2-2V7m15-1h-4m-4 0H5"></path>
                  </svg>
                </button>
              </div>
            </td>
          </tr>
          <!-- Repeat rows for other data entries -->
        </tbody>
      </table>
    </div> --}}
  </div>
</body>
</html>


@endsection
