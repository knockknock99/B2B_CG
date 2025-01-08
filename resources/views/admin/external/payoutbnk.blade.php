@extends('admin.master_admin_layout')

@section('content_admin')

@push('scripts')
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
      <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
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
            <label class="block mb-2">User Type</label>
            <select class="w-full border rounded px-3 py-2 appearance-none">
              <option>All</option>
              <option>Retailer</option>
              <option>Admin</option>
            </select>
          </div>


          <div>
            <label class="block mb-2">User Id</label>
            <select class="w-full border rounded px-3 py-2 appearance-none">
              <option>All</option>
              <option>CG234</option>
            </select>
          </div>
          
  
        <div>
          <label class="block mb-2">Fund Status</label>
          <select class="w-full border rounded px-3 py-2 appearance-none">
            <option>All</option>
          </select>
        </div>
  
        {{-- <div>
          <label class="block mb-2">Transaction Type</label>
          <select class="w-full border rounded px-3 py-2 appearance-none">
            <option>All</option>
          </select>
        </div> --}}
  
        <div class=" md:col-span-4">
          <button class="bg-blue-900 text-white py-2 px-4 rounded">
            SEARCH
          </button>
        </div>
      </div>
    </div>
  
    <div class="bg-white rounded-lg shadow-sm">
      <div class="p-4 flex flex-wrap justify-between items-center gap-4">
        <div class="flex gap-2">
          
          <button class="bg-blue-900 text-white p-2 rounded">
            <span class="iconify" data-icon="lucide:copy" data-width="18" data-height="18"></span>
          </button>
          <button class="bg-blue-900 text-white p-2 rounded">
            <span class="iconify" data-icon="lucide:file-text" data-width="18" data-height="18"></span>
          </button>
          <button class="bg-blue-900 text-white p-2 rounded">
            <span class="iconify" data-icon="lucide:download" data-width="18" data-height="18"></span>
          </button>
          <button class="bg-blue-900 text-white p-2 rounded">
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
  
        <div class="flex items-center justify-start gap-2">
          <span>Search:</span>
          <input type="text" class="border rounded px-3 py-1" />
        </div>
      </div>
  
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead class="bg-blue-900 text-white">
            <tr>
              <th class="px-4 py-3 text-left whitespace-nowrap"># ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Bank Name ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Account No ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">IFSC ↕</th>
              <th class="px-4 py-3 text-right whitespace-nowrap">AC Holder ↕</th>
              <th class="px-4 py-3 text-right whitespace-nowrap">Passbook ↕</th>
              <th class="px-4 py-3 text-right whitespace-nowrap">Status ↕</th>
              {{-- <th class="px-4 py-3 text-left whitespace-nowrap">Receit Img ↕</th> --}}
              <th class="px-4 py-3 text-left whitespace-nowrap">User Id ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Remark ↕</th>
              {{-- <th class="px-4 py-3 text-left whitespace-nowrap">Admin Remark ↕</th> --}}
              {{-- <th class="px-4 py-3 text-left whitespace-nowrap">User Id ↕</th> --}}
              {{-- <th class="px-4 py-3 text-left whitespace-nowrap">User Mobile ↕</th> --}}
              {{-- <th class="px-4 py-3 text-left whitespace-nowrap">Outlet Name ↕</th> --}}
              <th class="px-4 py-3 text-left whitespace-nowrap">Date ↕</th>
              <th class="px-4 py-3 text-left whitespace-nowrap">Action ↕</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-gray-50">
              <td class="px-4 py-3 border-t">1</td>
              <td class="px-4 py-3 border-t">Bank of India</td>
              <td class="px-4 py-3 border-t ">221082024</td>
              <td class="px-4 py-3 border-t">SBI7383</td>
              <td class="px-4 py-3 border-t text-right">Md Jasim</td>
              <td class="px-4 py-3 border-t text-right">NA</td>
              <td class="px-4 py-3 border-t">
                <p class="bg-green-400 text-white text-md rounded p-1">Approved</p>
              </td>
              <td class="px-4 py-3 border-t whitespace-nowrap">CG84783</td>
              <td class="px-4 py-3 border-t whitespace-nowrap">test</td>
              <td class="px-4 py-3 border-t whitespace-nowrap">22-02-2024</td>
              <td class="px-4 py-3 border-t whitespace-nowrap bg-gray-50">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash-alt w-5 h-5"></i>
            </td>
            </tr>


            <tr class="bg-gray-50">
                <td class="px-4 py-3 border-t">1</td>
                <td class="px-4 py-3 border-t">Bank of India</td>
                <td class="px-4 py-3 border-t ">221082024</td>
                <td class="px-4 py-3 border-t">SBI7383</td>
                <td class="px-4 py-3 border-t text-right">Md Jasim</td>
                <td class="px-4 py-3 border-t text-right">NA</td>
                <td class="px-4 py-3 border-t">
                  <p class="bg-green-400 text-white text-md rounded p-1">Approved</p>
                </td>
                <td class="px-4 py-3 border-t whitespace-nowrap">CG84783</td>
                <td class="px-4 py-3 border-t whitespace-nowrap">test</td>
                <td class="px-4 py-3 border-t whitespace-nowrap">22-02-2024</td>
                <td class="px-4 py-3 border-t whitespace-nowrap bg-gray-50">
                  <i class="fas fa-edit w-5 h-5"></i>
                  <i class="fas fa-trash-alt w-5 h-5"></i>
              </td>
              </tr>


              <tr class="bg-gray-50">
                <td class="px-4 py-3 border-t">1</td>
                <td class="px-4 py-3 border-t">Bank of India</td>
                <td class="px-4 py-3 border-t ">221082024</td>
                <td class="px-4 py-3 border-t">SBI7383</td>
                <td class="px-4 py-3 border-t text-right">Md Jasim</td>
                <td class="px-4 py-3 border-t text-right">NA</td>
                <td class="px-4 py-3 border-t">
                  <p class="bg-green-400 text-white text-md rounded p-1">Approved</p>
                </td>
                <td class="px-4 py-3 border-t whitespace-nowrap">CG84783</td>
                <td class="px-4 py-3 border-t whitespace-nowrap">test</td>
                <td class="px-4 py-3 border-t whitespace-nowrap">22-02-2024</td>
                <td class="px-4 py-3 border-t whitespace-nowrap bg-gray-50">
                  <i class="fas fa-edit w-5 h-5"></i>
                  <i class="fas fa-trash-alt w-5 h-5"></i>
              </td>
              </tr>


              <tr class="bg-gray-50">
                <td class="px-4 py-3 border-t">1</td>
                <td class="px-4 py-3 border-t">Bank of India</td>
                <td class="px-4 py-3 border-t ">221082024</td>
                <td class="px-4 py-3 border-t">SBI7383</td>
                <td class="px-4 py-3 border-t text-right">Md Jasim</td>
                <td class="px-4 py-3 border-t text-right">NA</td>
                <td class="px-4 py-3 border-t">
                  <p class="bg-green-400 text-white text-md rounded p-1">Approved</p>
                </td>
                <td class="px-4 py-3 border-t whitespace-nowrap">CG84783</td>
                <td class="px-4 py-3 border-t whitespace-nowrap">test</td>
                <td class="px-4 py-3 border-t whitespace-nowrap">22-02-2024</td>
                <td class="px-4 py-3 border-t whitespace-nowrap bg-gray-50">
                  <i class="fas fa-edit w-5 h-5"></i>
                  <i class="fas fa-trash-alt w-5 h-5"></i>
              </td>
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
    