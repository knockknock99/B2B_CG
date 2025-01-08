@extends('admin.master_admin_layout')
@section('content_admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financial Records</title>
  <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@2.2.0"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <main class="p-4  w-full mx-auto">
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-xl font-semibold">GST Report</h1>
      <button class="bg-blue-900 text-white px-4 py-2 rounded flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 4v16M5 9l7 7 7-7"></path>
        </svg>
        FILTER RECORDS
      </button>
    </div>

    <div class="bg-white p-6 rounded-lg shadow mb-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
        <div>
          <label class="block mb-2">
            Start Date <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <input type="text" value="26/02/2023" class="w-full border rounded p-2 pr-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 lucide lucide-calendar" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 5v14M5 12h14"></path>
            </svg>
          </div>
        </div>

        <div>
          <label class="block mb-2">
            End Date <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <input type="text" value="26/02/2023" class="w-full border rounded p-2 pr-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 lucide lucide-calendar" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 5v14M5 12h14"></path>
            </svg>
          </div>
        </div>

        <div>
          <label class="block mb-2">Service</label>
          <select class="w-full border rounded p-2">
            <option>All</option>
          </select>
        </div>

        <button class="bg-blue-900 hover:bg-blue-700 text-white px-8 py-2 rounded">
          SEARCH
        </button>
      </div>
    </div>

    <div class="bg-white rounded-lg shadow">
      <div class="p-4">
        <div class="flex flex-wrap justify-between items-center">
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
          </div>

          <div class="flex items-center gap-4 flex-wrap">
            <div class="flex items-center gap-2">
              Show
              <select class="border rounded px-2 py-1">
                <option>10</option>
              </select>
              entries
            </div>

            <div class="flex items-center gap-2">
              Search:
              <input type="text" class="border rounded px-2 py-1">
            </div>
          </div>
        </div>
      </div>

      <div class="overflow-x-auto ">
        <table class="w-full">
          <thead>
            <tr class="bg-blue-900 text-white">
              <th class="p-3 text-left whitespace-nowrap"># <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-left whitespace-nowrap">Service Name <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-left whitespace-nowrap">Type <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-right whitespace-nowrap">Type Value <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-right whitespace-nowrap">Type in Amount <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-right whitespace-nowrap">GST % <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-right whitespace-nowrap">GST Amt <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-right whitespace-nowrap">Net Amount <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-left whitespace-nowrap">Wallet Txn Type <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-right whitespace-nowrap">Wallet Txn Amount <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-left whitespace-nowrap">Remark <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-right whitespace-nowrap">Before Bal <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
              <th class="p-3 text-right whitespace-nowrap">Updated Bal <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-arrow-up-down inline" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16M5 9l7 7 7-7"></path></svg></th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-gray-50">
              <td class="p-3">1</td>
              <td class="p-3">Money Transfer</td>
              <td class="p-3">By Amount</td>
              <td class="p-3 text-right">Rs 5.00</td>
              <td class="p-3 text-right">5.00</td>
              <td class="p-3 text-right">18</td>
              <td class="p-3 text-right">0.90</td>
              <td class="p-3 text-right">5.90</td>
              <td class="p-3 text-red-500">Debit</td>
              <td class="p-3 text-right">5.90</td>
              <td class="p-3 w-4/5">DMT Transfer Charge Tax 0.90, Total Service Charge 5.90</td>
              <td class="p-3 text-right">1467.33</td>
              <td class="p-3 text-right">1461.43</td>
            </tr>

            <tr class="border-b hover:bg-gray-50">
              <td class="p-3">2</td>
              <td class="p-3">Money Transfer</td>
              <td class="p-3">By Amount</td>
              <td class="p-3 text-right">Rs 5.00</td>
              <td class="p-3 text-right">5.00</td>
              <td class="p-3 text-right">18</td>
              <td class="p-3 text-right">0.90</td>
              <td class="p-3 text-right">5.90</td>
              <td class="p-3 text-red-500">Debit</td>
              <td class="p-3 text-right">5.90</td>
              <td class="p-3 w-4/5">DMT Transfer Charge for Service Charge 5.90</td>
              <td class="p-3 text-right">1467.33</td>
              <td class="p-3 text-right">1461.43</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

</body>
</html>

  
@endsection