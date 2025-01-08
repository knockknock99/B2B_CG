@extends('admin.master_admin_layout')
@section('content_admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commission Records</title>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.js"></script>
  <script src="https://unpkg.com/lucide-icons@0.18.0/dist/umd/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@2.2.0"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="ml-0 p-0">
  <main class="p-6 w-full">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-medium">Commission Slab Report</h1>
      <button class="bg-blue-900 text-white px-4 py-2 rounded flex items-center gap-2">
        FILTER RECORDS
        <svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0L5.146 2.854l1.414 1.414L8 3.707l1.146 1.561 1.414-1.414L8 0zM8 16l-3.854-2.854 1.414-1.414L8 12.293l1.146-1.561 1.414 1.414L8 16zM16 8l-2.854 3.854-1.414-1.414L12.293 8l-1.561-1.146 1.414-1.414L16 8zM0 8l2.854-3.854 1.414 1.414L3.707 8l1.561 1.146-1.414 1.414L0 8z"/></svg>
      </button>
    </div>

    <div class="bg-white p-2 rounded shadow-sm mb-6">
      <div class="flex items-end gap-4">
        <div class="flex-1 max-w-xs">
          <label class="block mb-2">Service</label>
          <select class="w-full border rounded p-2">
            <option value="All">All</option>
          </select>
        </div>
        <button class="bg-blue-900 text-white px-8 py-2 rounded">
          SEARCH
        </button>
      </div>
    </div>

    <div class="bg-white p-6 rounded shadow-sm">
      <div class="flex flex-wrap justify-between items-center mb-6 gap-4">
        <div class="flex gap-2">
          <button class="bg-[#1a237e] text-white p-2 rounded">
            <span class="iconify" data-icon="lucide:copy" data-width="18" data-height="18"></span>
          </button>
          <button class="bg-[#1a237e] text-white p-2 rounded">
            <span class="iconify" data-icon="lucide:file-text" data-width="18" data-height="18"></span>
          </button>
        </button>
        <button class="bg-[#1a237e] text-white p-2 rounded">
          <span class="iconify" data-icon="lucide:printer" data-width="18" data-height="18"></span>
        </button>
        <button class="bg-[#1a237e] text-white p-2 rounded">
          <span class="iconify" data-icon="lucide:refresh-cw" data-width="18" data-height="18"></span>
        </button>
        </div>

        <div class="flex items-center gap-2">
          <span>Show</span>
          <select class="border rounded p-1">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
          </select>
          <span>entries</span>
        </div>

        <div class="flex items-center gap-2">
          <span>Search:</span>
          <input type="text" class="border rounded p-1" />
        </div>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="bg-blue-900 text-white">
              <th class="p-3 text-left whitespace-nowrap">
                # ↕<svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path/></svg>
              </th>
              <th class="p-3 text-left whitespace-nowrap">
                User Type ↕<svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path /></svg>
              </th>
              <th class="p-3 text-left whitespace-nowrap">
                Service ↕<svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path /></svg>
              </th>
              <th class="p-3 text-left whitespace-nowrap">
                Commission Type ↕ <svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path /></svg>
              </th>
              <th class="p-3 text-left whitespace-nowrap">
                Amount Range ↕<svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path /></svg>
              </th>
              <th class="p-3 text-left whitespace-nowrap">
                Amount/Percentage ↕<svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path /></svg>
              </th>
              <th class="p-3 text-left whitespace-nowrap">
                Plan ↕ <svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path /></svg>
              </th>
              <th class="p-3 text-left whitespace-nowrap">
                Type ↕ <svg xmlns="http://www.w3.org/2000/svg" class="inline" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path /></svg>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="p-3">1</td>
              <td class="p-3">Retailer</td>
              <td class="p-3">Mobile Recharge<br><a class="text-[#0088cc]">Airtel</a></td>
              <td class="p-3">By Percentage</td>
              <td class="p-3">Rs 1.00 - 1000.00</td>
              <td class="p-3">2.00 %</td>
              <td class="p-3">Retailer Plan</td>
              <td class="p-3 text-green-600">Credit</td>
            </tr>
            <tr class="border-b bg-gray-50">
              <td class="p-3">2</td>
              <td class="p-3">Retailer</td>
              <td class="p-3">AEPS</td>
              <td class="p-3">By Percentage</td>
              <td class="p-3">Rs 1.00 - 1000.00</td>
              <td class="p-3">5.00 %</td>
              <td class="p-3">Retailer Plan</td>
              <td class="p-3 text-green-600">Credit</td>
            </tr>
            <tr class="border-b">
              <td class="p-3">3</td>
              <td class="p-3">Retailer</td>
              <td class="p-3">Aadhar Pay</td>
              <td class="p-3">By Percentage</td>
              <td class="p-3">Rs 1.00 - 1000.00</td>
              <td class="p-3">5.00 %</td>
              <td class="p-3">Retailer Plan</td>
              <td class="p-3 text-red-600">Debit</td>
            </tr>
            <tr class="border-b bg-gray-50">
              <td class="p-3">4</td>
              <td class="p-3">Retailer</td>
              <td class="p-3">Money Transfer</td>
              <td class="p-3">By Amount</td>
              <td class="p-3">Rs 1.00 - 1000.00</td>
              <td class="p-3">Rs 5.00</td>
              <td class="p-3">Retailer Plan</td>
              <td class="p-3 text-red-600">Debit</td>
            </tr>
            <tr class="border-b">
              <td class="p-3">5</td>
              <td class="p-3">Retailer</td>
              <td class="p-3">DTH</td>
              <td class="p-3">By Percentage</td>
              <td class="p-3">Rs 1.00 - 1000.00</td>
              <td class="p-3">2.00 %</td>
              <td class="p-3">Retailer Plan</td>
              <td class="p-3 text-red-600">Debit</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>
</html>

  
@endsection