@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wallet Transaction History</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="w-full max-w-6xl mx-auto p-4">
    <!-- Main Card -->
    <div class="bg-white rounded shadow-md">
      <!-- Header -->
      <div class="bg-blue-900 text-white px-6 py-4 rounded-t-md">
        <h1 class="text-xl font-semibold">Filter Data</h1>
      </div>
      
      <!-- Filter Section -->
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
          <!-- Start Date -->
          <div>
            <label class="block mb-2">
              <span class="font-medium">Start Date</span>
              <span class="text-red-500 ml-1">*</span>
            </label>
            <input
              type="date"
              class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <!-- End Date -->
          <div>
            <label class="block mb-2">
              <span class="font-medium">End Date</span>
              <span class="text-red-500 ml-1">*</span>
            </label>
            <input
              type="date"
              class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <!-- Transaction Type -->
          <div>
            <label class="block mb-2">
              <span class="font-medium">Transaction Type</span>
            </label>
            <select
              class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            >
              <option value="All">All</option>
              <option value="Credit">Credit</option>
              <option value="Debit">Debit</option>
              <option value="Refund">Refund</option>
              <option value="Adjustment">Adjustment</option>
              <option value="Bonus">Bonus</option>
            </select>
          </div>

          <!-- Search Button -->
          <div class="flex items-end">
            <button
              class="w-full bg-blue-900 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
            >
              Search
            </button>
          </div>
        </div>
        
        <!-- Transaction History -->
        <div class="mt-8">
          <h2 class="text-xl font-semibold mb-4">Wallet Transaction History</h2>
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Added Amount</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Txn Type</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Before Balance</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Updated Balance</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Remark</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created On</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">1</td>
                  <td class="px-6 py-4 whitespace-nowrap">$500</td>
                  <td class="px-6 py-4 whitespace-nowrap">Credit</td>
                  <td class="px-6 py-4 whitespace-nowrap">$1000</td>
                  <td class="px-6 py-4 whitespace-nowrap">$1500</td>
                  <td class="px-6 py-4 whitespace-nowrap">Monthly deposit</td>
                  <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                  <td class="px-6 py-4 whitespace-nowrap">2023-06-30 10:30 AM</td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">2</td>
                  <td class="px-6 py-4 whitespace-nowrap">$200</td>
                  <td class="px-6 py-4 whitespace-nowrap">Debit</td>
                  <td class="px-6 py-4 whitespace-nowrap">$1500</td>
                  <td class="px-6 py-4 whitespace-nowrap">$1300</td>
                  <td class="px-6 py-4 whitespace-nowrap">Withdrawal</td>
                  <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                  <td class="px-6 py-4 whitespace-nowrap">2023-06-29 02:15 PM</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


    
@endsection