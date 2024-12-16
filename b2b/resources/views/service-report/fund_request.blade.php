@extends('masterLayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financial Records</title>
  <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@2.2.0"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="p-4 w-full mx-auto">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-xl font-semibold">Fund Request Report</h2>
      <button class="bg-blue-900 text-white px-4 py-2 rounded flex items-center gap-2">
        FILTER RECORDS
        <span class="iconify" data-icon="lucide:chevron-down" data-width="16" data-height="16"></span>
      </button>
    </div>

    <div class="bg-white p-6 rounded-lg shadow mb-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
        <div>
          <label class="block mb-2">
            Start Date <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <input
              type="date"
              value=""
              class="w-full border rounded px-3 py-2 pr-10"
            />
            <span class="iconify absolute right-3 top-2.5 text-gray-400" data-icon="lucide:calendar" data-width="18" data-height="18"></span>
          </div>
        </div>

        <div>
          <label class="block mb-2">
            End Date <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <input
              type="date"
              value=""
              class="w-full border rounded px-3 py-2 pr-10"
            />
            <span class="iconify absolute right-3 top-2.5 text-gray-400" data-width="18" data-height="18"></span>
          </div>
        </div>

        <div>
          <label class="block mb-2">Service</label>
          <select class="w-full border rounded px-3 py-2">
            <option>All</option>
          </select>
        </div>

        <button class="bg-blue-900 text-white px-8 py-2 rounded">
          SEARCH
        </button>
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

      <div class="flex items-center gap-4">
        <div class="flex items-center">
          <span class="mr-2">Show</span>
          <select class="border rounded px-2 py-1">
            <option>10</option>
          </select>
          <span class="ml-2">entries</span>
        </div>

        <div class="flex items-center">
          <span class="mr-2">Search:</span>
          <input type="text" class="border rounded px-3 py-1" />
        </div>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse">
        <thead>
          <tr class="bg-blue-900 text-white">
            <th class="border px-10 py-2 text-left"># ↕</th>
            <th class="border px-10 py-2 text-left">Service Name ↕</th>
            <th class="border px-10 py-2 text-left">Type ↕</th>
            <th class="border px-10 py-2 text-left">Type Value ↕</th>
            <th class="border px-10 py-2 text-left">Value in Amount ↕</th>
            <th class="border px-10 py-2 text-left">TDS % ↕</th>
            <th class="border px-10 py-2 text-left">TDS Amt ↕</th>
            <th class="border px-10 py-2 text-left">Net Amount ↕</th>
            <th class="border px-10 py-2 text-left">Wallet Txn Type ↕</th>
            <th class="border px-10 py-2 text-left">Wallet Txn Amount ↕</th>
            <th class="border px-10 py-2 text-left">Remark ↕</th>
            <th class="border px-10 py-2 text-left">Before Bal ↕</th>
            <th class="border px-10 py-2 text-left">Updated Bal ↕</th>
          </tr>
        </thead>
        <tbody>
          <tr class="even:bg-gray-50">
            <td class="border px-4 py-2">1</td>
            <td class="border px-4 py-2">Mobile Recharge</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">0.20</td>
            <td class="border px-4 py-2">5</td>
            <td class="border px-4 py-2">0.01</td>
            <td class="border px-4 py-2">0.19</td>
            <td class="border px-4 py-2 text-green-600">Credit</td>
            <td class="border px-4 py-2">0.19</td>
            <td class="border px-4 py-2">
              Commission Generated for Mobile Recharge, Reference Id :
              63fb98b653ff7, Generated Commission Amt 0.2, TDS 0.01, Total
              Credited Commission 0.19 by SELF
            </td>
            <td class="border px-4 py-2">1122.20</td>
            <td class="border px-4 py-2">1122.39</td>
          </tr>

          <tr class="even:bg-gray-50">
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">Mobile Recharge</td>
            <td class="border px-4 py-2">By Percentage</td>
            <td class="border px-4 py-2">2.00 %</td>
            <td class="border px-4 py-2">0.20</td>
            <td class="border px-4 py-2">5</td>
            <td class="border px-4 py-2">0.01</td>
            <td class="border px-4 py-2">0.19</td>
            <td class="border px-4 py-2 text-green-600">Credit</td>
            <td class="border px-4 py-2">0.19</td>
            <td class="border px-4 py-2">
              Commission Generated for Mobile Recharge, Reference Id :
              63fb98b653ff7, Generated Commission Amt 0.2, TDS 0.01, Total
              Credited Commission 0.19 by SELF
            </td>
            <td class="border px-4 py-2">1122.20</td>
            <td class="border px-4 py-2">1122.39</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>

  
@endsection