@extends('masterLayout')
@section('content')
@push('scripts')

<script src="https://cdn.tailwindcss.com"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/lucide-react@0.1.0/dist/index.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@2.2.0"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  
@endpush

<main class="container mx-auto px-4 py-6 w-full">
    <div class="flex justify-between items-center mb-6 mr-10">
      <h1 class="text-xl font-medium">
        Transaction History
      </h1>
      <button class="bg-blue-900 text-white px-4 py-2 rounded flex items-center gap-2">
        <svg class="text-white" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        FILTER RECORDS
      </button>
    </div>
  
    <div class="bg-white px-4 py-2 rounded-lg shadow-sm mb-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
        <div>
          <label class="block mb-2">
            Start Date <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <input type="date" class="w-full border rounded px-3 py-2 pr-10" />
            <svg class="absolute right-3 top-2.5 text-gray-400" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
          </div>
        </div>
  
        <div>
          <label class="block mb-2">
            End Date <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <input type="date" class="w-full border rounded px-3 py-2 pr-10" />
            <svg class="absolute right-3 top-2.5 text-gray-400" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
          </div>
        </div>
  
        <div>
          <label class="block mb-2">Service</label>
          <select class="w-full border rounded px-3 py-2 appearance-none">
            <option>All</option>
          </select>
        </div>
  
        <div>
          <label class="block mb-2">Transaction Type</label>
          <select class="w-full border rounded px-3 py-2 appearance-none">
            <option>All</option>
          </select>
        </div>
  
        <div class="col-span-1 md:col-span-4 flex justify-end">
          <button class="bg-blue-900 text-white py-2 px-4 rounded">
            SEARCH
          </button>
        </div>
      </div>
    </div>
  
    <div class="bg-white rounded-lg shadow-sm">
      <div class="p-4 flex flex-wrap justify-between items-center gap-4">
        <div class="flex gap-2">
          
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
  
        <div class="flex items-center gap-2">
          <span>Show</span>
          <select class="border rounded px-2 py-1">
            <option>10</option>
            <option>25</option>
            <option>50</option>
          </select>
          <span>entries</span>
        </div>
  
        <div class="flex items-center gap-2">
          <span>Search:</span>
          <input type="text" class="border rounded px-3 py-1" />
        </div>
      </div>
  
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead class="bg-blue-900 text-white">
            <tr>
              <th class="px-4 py-3 text-left whitespace-nowrap"># ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Service Name ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Type ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Remark ↕</th>
              <th class="px-4 py-3 text-right whitespace-nowrap">Amount ↕</th>
              <th class="px-4 py-3 text-right whitespace-nowrap">Before Bal ↕</th>
              <th class="px-4 py-3 text-right whitespace-nowrap">Updated Bal ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Retailer Details ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Date ↕</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-gray-50">
              <td class="px-4 py-3 border-t">1</td>
              <td class="px-4 py-3 border-t">Mobile Recharge</td>
              <td class="px-4 py-3 border-t text-red-600">Debit</td>
              <td class="px-4 py-3 border-t">Recharge of Mobile no 8700335031</td>
              <td class="px-4 py-3 border-t text-right">10.00</td>
              <td class="px-4 py-3 border-t text-right">1132.20</td>
              <td class="px-4 py-3 border-t text-right">1122.20</td>
              <td class="px-4 py-3 border-t">
                <div>Kanhaiya Kumar</div>
                <div class="text-sm text-gray-600">Mob: 8700335031</div>
                <div class="text-sm text-gray-600">User Id: dactilar</div>
              </td>
              <td class="px-4 py-3 border-t whitespace-nowrap">2023-02-26 23:06:54</td>
            </tr>
            <tr class="bg-white">
              <td class="px-4 py-3 border-t">2</td>
              <td class="px-4 py-3 border-t">Mobile Recharge</td>
              <td class="px-4 py-3 border-t text-green-600">Credit</td>
              <td class="px-4 py-3 border-t">
                Commission Generated for Mobile Recharge, Reference Id : 63fb98b653ff7, Generated Commission Amt 0.2, TDS 0.01, Total Credited Commission 0.19 by SELF
              </td>
              <td class="px-4 py-3 border-t text-right">0.19</td>
              <td class="px-4 py-3 border-t text-right">1122.20</td>
              <td class="px-4 py-3 border-t text-right">1122.39</td>
              <td class="px-4 py-3 border-t">
                <div>Kanhaiya Kumar</div>
                <div class="text-sm text-gray-600">Mob: 8700335031</div>
                <div class="text-sm text-gray-600">User Id: dactilar</div>
              </td>
              <td class="px-4 py-3 border-t whitespace-nowrap">2023-02-26 23:06:54</td>
            </tr>
            <tr class="bg-gray-50">
              <td class="px-4 py-3 border-t">3</td>
              <td class="px-4 py-3 border-t">Balance Wallet Recharge</td>
              <td class="px-4 py-3 border-t text-green-600">Credit</td>
              <td class="px-4 py-3 border-t">Recharge Wallet 1000 via Offline Mode by SELF</td>
              <td class="px-4 py-3 border-t text-right">1000.00</td>
              <td class="px-4 py-3 border-t text-right">132.20</td>
              <td class="px-4 py-3 border-t text-right">1132.20</td>
              <td class="px-4 py-3 border-t">
                <div>Kanhaiya Kumar</div>
                <div class="text-sm text-gray-600">Mob: 8700335031</div>
                <div class="text-sm text-gray-600">User Id: dactilar</div>
              </td>
              <td class="px-4 py-3 border-t whitespace-nowrap">2023-02-26 23:05:54</td>
            </tr>
          </tbody>
        </table>
      </div>
  
      <div class="bg-gray-50 border-t px-4 py-3 flex items-center justify-between">
        <p class="text-sm text-gray-500">Showing 1 to 3 of 3 entries</p>
        <nav class="inline-flex -space-x-px rounded-md shadow-sm">
          <a href="#" class="px-2 py-1 text-sm text-gray-700 bg-white border rounded-l-md hover:bg-gray-50">Previous</a>
          <a href="#" class="px-2 py-1 text-sm text-gray-700 bg-white border hover:bg-gray-50">1</a>
          <a href="#" class="px-2 py-1 text-sm text-gray-700 bg-white border hover:bg-gray-50">2</a>
          <a href="#" class="px-2 py-1 text-sm text-gray-700 bg-white border hover:bg-gray-50">3</a>
          <a href="#" class="px-2 py-1 text-sm text-gray-700 bg-white border rounded-r-md hover:bg-gray-50">Next</a>
        </nav>
      </div>
    </div>
  </main>
  
@endsection