@extends('admin.master_admin_layout')
@section('content_admin')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fund Transfer</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.js"></script>
</head>

<body class="bg-gray-100">
    <main class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-semibold">
                2 Records Found - Fund Transfer
            </h1>
            <button class="flex items-center gap-2 px-4 py-2 bg-blue-900 text-white rounded">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v8a1 1 0 01-2 0V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg> --}}
                Filter Records
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v8a1 1 0 01-2 0V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg> --}}
            </button>
        </div>

        <!-- Filters Section -->
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Start Date *</label>
                    <input type="date" value="2023-01-30" class="w-full p-2 border rounded" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">End Date *</label>
                    <input type="date" value="2023-06-30" class="w-full p-2 border rounded" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">User Type *</label>
                    <select class="w-full p-2 border rounded">
                        <option>Retailer</option>
                        <option>Distributor</option>
                        <option>Agent</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">User Id</label>
                    <input type="text" value="" placeholder="All" class="w-full p-2 border rounded" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Transfer type</label>
                    <select class="w-full p-2 border rounded">
                        <option>All</option>
                        <option>Credit</option>
                        <option>Debit</option>
                    </select>
                </div>
            </div>
            <div class="mt-4 flex justify-end">
                <button class="px-6 py-2 bg-blue-900 text-white rounded">Search</button>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-4 flex flex-wrap justify-between items-center gap-4">
                <div class="flex flex-wrap gap-2">
                    <button class="p-2 text-gray-600 hover:bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 01-2 0V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-600 hover:bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 01-2 0V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-600 hover:bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 01-2 0V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-600 hover:bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 01-2 0V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-600 hover:bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 01-2 0V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-2">
                        <span>Show</span>
                        <select class="border rounded p-1">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                        <span>entries</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <span>Search:</span>
                        <input type="text" class="border rounded p-1" />
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="p-3 text-left whitespace-nowrap">#</th>
                            <th class="p-3 text-left whitespace-nowrap">From User</th>
                            <th class="p-3 text-left whitespace-nowrap">To User</th>
                            <th class="p-3 text-left whitespace-nowrap">Amount</th>
                            <th class="p-3 text-left whitespace-nowrap">Transfer Type</th>
                            <th class="p-3 text-left whitespace-nowrap">Remark</th>
                            <th class="p-3 text-left whitespace-nowrap">Receiver Wallet</th>
                            <th class="p-3 text-left whitespace-nowrap">Status</th>
                            <th class="p-3 text-left whitespace-nowrap">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3">1</td>
                            <td class="p-3">
                                <div>User Id: SAVIDAC</div>
                                <div>Mobile: 77777777</div>
                                <div>Outlet: Dactilar</div>
                            </td>
                            <td class="p-3">
                                <div>User Id: 8700335031</div>
                                <div>Mobile: 8700335031</div>
                                <div>Outlet: Dactilar Technologies Pvt Ltd</div>
                            </td>
                            <td class="p-3">$5,000.00</td>
                            <td class="p-3 text-green-600">Credit</td>
                            <td class="p-3">test</td>
                            <td class="p-3">
                                <div>Before Bal: $108.24</div>
                                <div>Updated Bal: $5,108.24</div>
                            </td>
                            <td class="p-3">
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">Success</span>
                            </td>
                            <td class="p-3">2023-04-16 15:51:38</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
    
@endsection