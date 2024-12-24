@extends('admin.master_admin_layout')
@section('content_admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaction Records</title>
   <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/lucide-icons@0.8.0/dist/index.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@2.2.0"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="p-4 w-full mx-auto">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-lg font-medium">Commission Report</h2>
      <button class="bg-blue-900 text-white px-4 py-2 rounded flex items-center gap-2 hover:bg-[#006699]">
        <svg class="lucide lucide-filter" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M4 4h8v2H4V4zM3 8h10v2H3V8zm3 4h4v2H6v-2z"></path></svg>
        FILTER RECORDS
      </button>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
      <div class="grid md:grid-cols-4 gap-4">
        <div>
          <label class="block mb-2">Start Date <span class="text-red-500">*</span></label>
          <div class="relative">
            <input type="text" class="w-full border rounded p-2 pr-8" value="26/02/2023">
            <svg class="absolute right-2 top-2.5 text-gray-400" width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M11 2.5a1 1 0 1 1-2 0V3h-2V2.5a1 1 0 1 1-2 0V3H3v2h10V3h-3V2.5zM2 5v10h12V5H2z"></path></svg>
          </div>
        </div>

        <div>
          <label class="block mb-2">End Date <span class="text-red-500">*</span></label>
          <div class="relative">
            <input type="text" class="w-full border rounded p-2 pr-8" value="26/02/2023">
            <svg class="absolute right-2 top-2.5 text-gray-400" width="16" height="16" fill="none" viewBox="0 0 16 16"><path d="M11 2.5a1 1 0 1 1-2 0V3h-2V2.5a1 1 0 1 1-2 0V3H3v2h10V3h-3V2.5zM2 5v10h12V5H2z"></path></svg>
          </div>
        </div>

        <div>
          <label class="block mb-2">Service</label>
          <select class="w-full border rounded p-2">
            <option>All</option>
          </select>
        </div>

        <div class="flex items-end">
          <button class="bg-blue-900 text-white px-8 py-2 rounded hover:bg-[#122544] w-full">SEARCH</button>
        </div>
      </div>
    </div>

    <div class="flex flex-col md:flex-row justify-between items-center mb-4">
      <div class="flex gap-2 mb-4 md:mb-0">
        <button class="bg-[#1a237e] text-white p-2 rounded">
          <span class="iconify" data-icon="lucide:copy" data-width="18" data-height="18"></span>
        </button>
        <button class="bg-[#1a237e] text-white p-2 rounded">
          <span class="iconify" data-icon="lucide:file-text" data-width="18" data-height="18"></span>
        </button>
        <button class="bg-[#1a237e] text-white p-2 rounded">
          <span class="iconify" data-icon="lucide:download" data-width="18" data-height="18"></span>
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
              <option>10</option>
            </select>
            <span>entries</span>
          </div>

          <div class="flex items-center gap-2">
            <label>Search:</label>
            <input type="text" class="border rounded p-1">
          </div>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full min-w-[1000px]">
            <thead>
              <tr class="bg-blue-900 text-white">
                <th class="p-3 text-left whitespace-nowrap">
                  # <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Service Name
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Commission Slot Type
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Type Value
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Type Value in Amount
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  TDS %
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  TDS Amt
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Net Amount
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Wallet Txn Type
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Wallet Txn Amount
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Remark
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">
                  Before Bal
                  <svg class="lucide lucide-arrow-up-down" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16"><path d="M4 8l4-4 4 4H4z"></path></svg>
                </th>
                <th class="p-3 text-left whitespace-nowrap">Updated Bal</th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-gray-50">
                <td class="p-3">1</td>
                <td class="p-3">Mobile Recharge</td>
                <td class="p-3">By Percentage</td>
                <td class="p-3">2.00 %</td>
                <td class="p-3">0.20</td>
                <td class="p-3">5</td>
                <td class="p-3">0.01</td>
                <td class="p-3">0.19</td>
                <td class="p-3 text-green-500">Credit</td>
                <td class="p-3">0.19</td>
                <td class="p-3">Commission Generated for Mobile Recharge, Reference Id : 63fb98b653ff7, , Generated Commission Amt 0.2 , TDS 0.01 , Total Credited Commission 0.19 by SELF</td>
                <td class="p-3">1122.20</td>
                <td class="p-3">1122.39</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

  
@endsection