@extends('admin.master_admin_layout')
@section('content_admin')
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@2.2.0"></script>
<script src="https://cdn.tailwindcss.com"></script>
@endpush

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeps Records</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .container {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            padding-left: 10px;
            padding-right: 10px;
        }

        main {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container mr-4">
        <main class="p-2 w-full  mr-4">
            <header class="flex justify-between items-center mb-4">
                <h1 class="text-xl font-medium">Aeps Report</h1>
                <button class="bg-blue-900 text-white px-4 py-2 rounded flex items-center gap-2">
                    FILTER RECORDS
                </button>
            </header>

            <section class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
                    <div>
                        <label class="block mb-1">
                            Start Date <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="date" value="" class="w-full border rounded p-2 pr-8" />
                            <svg class="absolute right-2 top-2.5 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                        </div>
                    </div>

                    <div>
                        <label class="block mb-1">
                            End Date <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="date" value="" class="w-full border rounded p-2 pr-8" />
                            <svg class="absolute right-2 top-2.5 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                        </div>
                    </div>

                    <div>
                        <label class="block mb-1">Recharge Status</label>
                        <select class="w-full border rounded p-2">
                            <option>All</option>
                        </select>
                    </div>

                    <div>
                        <label class="block mb-1">Operator</label>
                        <select class="w-full border rounded p-2">
                            <option>All</option>
                        </select>
                    </div>

                    <button class="bg-blue-900 text-white px-8 py-2 rounded">
                        SEARCH
                    </button>
                </div>
            </section>

            <section class="bg-white rounded-lg shadow">
                <div class="p-4 flex flex-col md:flex-row justify-between items-center gap-4">
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
                        Show
                        <select class="border rounded p-1">
                            <option>10</option>
                        </select>
                        entries
                    </div>

                    <div class="flex items-center gap-2">
                        Search:
                        <input type="text" class="border rounded p-1" />
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-blue-900 text-white">
                            <tr>
                                <th class="p-3 text-left whitespace-nowrap">
                                    # <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Operator <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Mobile No <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Amount <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Reference Id <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Recharged By <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Status <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Response <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Date <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                                <th class="p-3 text-left whitespace-nowrap">
                                    Action <svg class="inline w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="p-3">1</td>
                                <td class="p-3">Airtel</td>
                                <td class="p-3">8700335031</td>
                                <td class="p-3">₹10.00</td>
                                <td class="p-3">63fb98b653ff7</td>
                                <td class="p-3">dactilar</td>
                                <td class="p-3">
                                    <span class="bg-[rgb(40,167,69)] text-white px-2 py-1 rounded-full text-sm">Success</span>
                                </td>
                                <td class="p-3">Recharge for Aircel of Amount 50 is successful</td>
                                <td class="p-3">2023-02-26 23:06:54</td>
                                <td class="p-3">
                                    <button class="p-2 bg-[rgb(255,193,7)] rounded-full">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 8h10M7 12h10M7 16h10"></path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3">2</td>
                                <td class="p-3">Airtel</td>
                                <td class="p-3">8700335031</td>
                                <td class="p-3">₹10.00</td>
                                <td class="p-3">63fba080ef9d6</td>
                                <td class="p-3">dactilar</td>
                                <td class="p-3">
                                    <span class="bg-[rgb(40,167,69)] text-white px-2 py-1 rounded-full text-sm">Success</span>
                                </td>
                                <td class="p-3">Recharge for Aircel of Amount 50 is successful</td>
                                <td class="p-3">2023-02-26 23:40:08</td>
                                <td class="p-3">
                                    <button class="p-2 bg-[rgb(255,193,7)] rounded-full">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 8h10M7 12h10M7 16h10"></path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="p-4 flex flex-col md:flex-row justify-between items-center">
                    <div>Showing 1 to 2 of 2 entries</div>


   
 @endsection