@extends('admin.master_admin_layout')
@section('content_admin')



<main class="flex flex-row "> 
{{-- <div class="flex flex-row "> --}}
  <!-- Main Content -->
  {{-- <main class="flex-1 mt-0 overflow-y-hidden p-4 bg-gray-100"> --}}   
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dashboard</title>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="https://cdn.tailwindcss.com"></script>
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    </head>
    <body class="bg-gray-100">
      <main class="p-6 max-w-10xl mx-auto  ">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <!-- Left Column: Service Statistics Cards -->
          <div class="lg:col-span-2">

        
            <div>
              <div class="flex justify-between items-center mb-4 ">
                <h2 class="text-2xl font-semibold">Service Statistics</h2>
                <button id="filterByDateBtn" class="px-4 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800">
                  Filter by Date
                </button>
              </div>
              <div id="statsCards" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Example of a Service Card -->
                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/recharge-wallet.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Recharge Success</p>
                      <p class="font-semibold text-gray-800">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/recharge-wallet.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Recharge Pending</p>
                      <p class="font-semibold  text-gray-800">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/recharge-wallet.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Recharge Failed</p>
                      <p class="font-semibold text-gray-800">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/aep.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Aeps Success</p>
                      <p class="font-semibold text-gray-800">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/aep.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Aeps Pending</p>
                      <p class="font-semibold text-gray-800">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/aep.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Aeps Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>










                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/Dth.png')}}" width="23px" height="23px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Dth Recharge Success</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>


                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/Dth.png')}}" width="23px" height="23px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Dth Recharge Pending</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/Dth.png')}}" width="23px" height="23px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Dth Recharge Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>


                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/bill_payment.png')}}" width="23px" height="23px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Bill Payment Success</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/bill_payment.png')}}" width="23px" height="23px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Bill Payment Pending</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/bill_payment.png')}}" width="23px" height="23px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Bill Payment Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>


                

                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/bank.png')}}" width="20px" height="20px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Move To Bank Success</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/bank.png')}}" width="20px" height="20px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Move To Bank Pending</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/bank.png')}}" width="20px" height="20px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Move To Bank Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/fund_request.png')}}" width="22px" height="22px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Fund Request Success</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/fund_request.png')}}" width="22px" height="22px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Fund Request Pending</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/fund_request.png')}}" width="23px" height="23px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Fund Request Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>


                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/aadhar_pay.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Aadhar Pay Success</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/aadhar_pay.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Aadhar Pay Pending</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/aadhar_pay.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Aadhar Pay Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>


                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/atm.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Micro Atm Success</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/atm.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Micro Atm Pending</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/atm.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Micro Atm Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>


                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/toll.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">FastTag Success</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/toll.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">FastTag Pending</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/toll.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">FastTag Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>



                <div class="bg-green-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/cms.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Fino CMS Success</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-orange-400 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/cms.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Fino CMS Pending</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

                <div class="bg-red-500 p-3 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                  <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-50 rounded-full">
                      {{-- <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg> --}}
                      <img src="{{asset('asset/img/cms.png')}}" width="25px" height="25px" alt="">
                    </div>
                    <div>
                      <p class="font-semibold border-b-2 border-gray-700 text-gray-800">₹1,107.00</p>
                      <p class="text-sm text-gray-800 font-semibold">Fino CMS Failed</p>
                      <p class="font-semibold text-gray-700">0</p>
                    </div>
                  </div>
                </div>

 
                
                <!-- Repeat more service cards as needed -->
              </div>
            </div>

            <div class="max-w-8xl mx-auto bg-white shadow-md rounded-md h-20">
              <!-- Header -->
              <div class="border-b px-6 py-4 text-xl  font-semibold text-gray-700 mt-8">
                Last 5 Account Activities
              </div>
            
              <!-- Table -->
              <div class="overflow-x-auto">
                <table class="table-auto w-full text-left ">
                  <thead>
                    <tr class="text-white text-md border-b bg-blue-900 p-10">
                      <th class="py-3.5 px-10">User</th>
                      <th class="py-3.5 px-3">Service</th>
                      <th class="py-3.5 ">Remark</th>
                      <th class="py-3.5 text-center">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-100 text-sm text-gray-700 border-b">
                      <td class="py-2 px-2">
                        <div class="flex items-center space-x-3 pl-3">
                          <div class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold">KK</div>
                          <div>
                            <div class="font-medium">Kanhaiya Kumar</div>
                            <div class="text-xs text-gray-500">8700335031</div>
                          </div>
                        </div>
                      </td>
                      <td class="py-3">CC Bill Pay</td>
                      <td class="py-3 ">
                        Credit Card Payment failed amount refunded to wallet for Ref Id: 1688028568
                      </td>
                      <td class="py-3 text-center pr-3">
                        <div class="flex flex-col items-center space-y-1">
                          <span class="text-gray-700">29-06-2023</span>
                          <span class="text-gray-500 text-xs">14:37 PM</span>
                        </div>
                      </td>
                    </tr>
            
                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-100 text-sm text-gray-700 border-b">
                      <td class="py-2 px-2">
                        <div class="flex items-center space-x-3 pl-3">
                          <div class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold">KK</div>
                          <div>
                            <div class="font-medium">Kanhaiya Kumar</div>
                            <div class="text-xs text-gray-500">8700335031</div>
                          </div>
                        </div>
                      </td>
                      <td class="py-3">CC Bill Pay</td>
                      <td class="py-3">
                        Credit Card Bill payment for ref Id 1688028568
                      </td>
                      <td class="py-3 text-center pr-3">
                        <div class="flex flex-col items-center space-y-1">
                          <span class="text-gray-700">29-06-2023</span>
                          <span class="text-gray-500 text-xs">14:25 PM</span>
                        </div>
                      </td>
                    </tr>
            
                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-100 text-sm text-gray-700 border-b">
                      <td class="py-2 px-2">
                        <div class="flex items-center space-x-3 pl-3">
                          <div class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold">KK</div>
                          <div>
                            <div class="font-medium">Kanhaiya Kumar</div>
                            <div class="text-xs text-gray-500">8700335031</div>
                          </div>
                        </div>
                      </td>
                      <td class="py-3">Aadhar</td>
                      <td class="py-3 ">
                        Aadhar Pay Cash Withdrawal Charge for Ref Id: 649246765876, Service Charge 2.50 , Tax 0.45 , Total Service Charge 2.95
                      </td>
                      <td class="py-3  text-center pr-3">
                        <div class="flex flex-col items-center space-y-1">
                          <span class="text-gray-700">29-06-2023</span>
                          <span class="text-gray-500 text-xs">12:00 PM</span>
                        </div>
                      </td>
                    </tr>
            
                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-100 text-sm text-gray-700 border-b">
                      <td class="py-2 px-2">
                        <div class="flex items-center space-x-3 pl-3">
                          <div class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold">KK</div>
                          <div>
                            <div class="font-medium">Kanhaiya Kumar</div>
                            <div class="text-xs text-gray-500">8700335031</div>
                          </div>
                        </div>
                      </td>
                      <td class="py-3 ">Aadhar</td>
                      <td class="py-3 ">
                        Rs. 50 credited into wallet for Aadhar Pay Cash Withdrawal of Aadhar No: XXXXXXXXXXXX0406, OS Mobile: 7200197792, Ref Id: 649246765876
                      </td>
                      <td class="py-3 text-center pr-3">
                        <div class="flex flex-col items-center space-y-1">
                          <span class="text-gray-700">29-06-2023</span>
                          <span class="text-gray-500 text-xs">12:00 PM</span>
                        </div>
                      </td>
                    </tr>
            
                    <!-- Row 5 -->
                    <tr class="hover:bg-gray-100 text-sm text-gray-700">
                      <td class="py-2 px-2">
                        <div class="flex items-center space-x-3 pl-3">
                          <div class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold">SS</div>
                          <div>
                            <div class="font-medium">Sachin Kumar Singh</div>
                            <div class="text-xs text-gray-500">DAC0151</div>
                          </div>
                        </div>
                      </td>
                      <td class="py-3 ">AEPS</td>
                      <td class="py-3 ">
                        Commission Generated for AEPS, Generated Commission Amt 1.5, Total Credited Commission 1.425 by 8700335031
                      </td>
                      <td class="py-3 px-10 text-center pr-3">
                        <div class="flex flex-col items-center space-y-1">
                          <span class="text-gray-700">29-06-2023</span>
                          <span class="text-gray-500 text-xs">11:24 AM</span>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            
            


          </div>

          <!-- Right Column -->
          <div class="lg:col-span-1 flex flex-col gap-4">
            <!-- Commission Chart -->
            <div class="bg-white p-6 rounded-xl shadow-sm flex justify-center items-center">
              <div class="w-full">
                <canvas id="commissionChart"></canvas>
              </div>
            </div>

            <!-- Quick Links -->
            <div class="bg-white p-4 rounded-xl shadow-sm mb-5">
              <h2 class="text-xl font-semibold mb-4">My Quick Links</h2>
              <div class="flex flex-row gap-3">
                <div>
                <button class=" mb-3 w-full px-2 py-3.5 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-colors">Mobile Recharge Report</button>
                <button class=" mb-3 w-full px-2 py-3.5 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-colors">Aeps Report</button>
                <button class=" mb-3 w-full px-2 py-3.5 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-colors">TDS Report</button>
                <button class=" mb-3 w-full px-2 py-3.5 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-colors">Bbps Report</button>
                </div>

                <div>
                <button class=" mb-3 w-full px-2 py-3.5 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-colors">Bill Payment Report</button>
                <button class=" mb-3 w-full px-2 py-3.5 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-colors">GST Report</button>
                <button class=" mb-3 w-full px-2 py-3.5 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-colors">Dth Report</button>
                <button class=" mb-3 w-full px-2 py-3.5 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-colors">FastTag Report</button>
                </div>

                
              </div>
            </div>

            <!-- Login Records -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
              <h2 class="text-2xl font-semibold mb-4">Last 5 Login Records</h2>
              <div class="overflow-x-auto">
                <div class="bg-white shadow-lg rounded-lg p-5 w-full max-w-md">
                  <!-- Login Record 1 -->
                  <div class="flex items-start border-b pb-3 mb-3">
                    <div class="flex items-center"></div>
                    <div class="flex items-center justify-center bg-blue-500 text-white rounded-full w-10 h-10 mr-4 font-bold">AD</div>
                    <div class="flex-1">
                      <p class="text-gray-800 font-medium">Admin</p>
                      <p class="text-gray-500 text-sm">SAVIDAC</p>
                      <p class="text-gray-400 text-xs">49.36.222.247</p>
                    </div>
                    <div class="text-right text-gray-500 text-xs mr-6">
                      2023-06-30<br>11:17:38
                    </div>
                    <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 2a1 1 0 00-1 1v15a1 1 0 102 0v-4h10a1 1 0 00.8-1.6L13.7 9l3.1-4.4A1 1 0 0016 3H5V3a1 1 0 00-1-1zM5 5h9.1l-2.3 3.4a1 1 0 000 1.2l2.3 3.4H5V5z" clip-rule="evenodd" />
                    </svg>
                  </div>
            
                  <!-- Login Record 2 -->
                  <div class="flex items-start border-b pb-3 mb-3">
                    <div class="flex items-center "></div>
                    <div class="flex items-center justify-center bg-blue-500 text-white rounded-full w-10 h-10 mr-4 font-bold">KK</div>
                    <div class="flex-1">
                      <p class="text-gray-800 font-medium">Kanhaiya Kumar</p>
                      <p class="text-gray-500 text-sm">8700335031</p>
                      <p class="text-gray-400 text-xs">157.42.5.154</p>
                    </div>
                    <div class="text-right text-gray-500 text-xs mr-6">
                      2023-06-29<br>16:40:07
                    </div>
                    <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 2a1 1 0 00-1 1v15a1 1 0 102 0v-4h10a1 1 0 00.8-1.6L13.7 9l3.1-4.4A1 1 0 0016 3H5V3a1 1 0 00-1-1zM5 5h9.1l-2.3 3.4a1 1 0 000 1.2l2.3 3.4H5V5z" clip-rule="evenodd" />
                    </svg>
                  </div>
            
                  <!-- Login Record 3 -->
                  <div class="flex items-start border-b pb-3 mb-3">
                    <div class="flex items-center "></div>
                    <div class="flex items-center justify-center bg-blue-500 text-white rounded-full w-10 h-10 mr-4 font-bold">AD</div>
                    <div class="flex-1">
                      <p class="text-gray-800 font-medium">Admin</p>
                      <p class="text-gray-500 text-sm">SAVIDAC</p>
                      <p class="text-gray-400 text-xs">122.162.148.210</p>
                    </div>
                    <div class="text-right text-gray-500 text-xs mr-6">
                      2023-06-29<br>14:31:51
                    </div>
                    <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 2a1 1 0 00-1 1v15a1 1 0 102 0v-4h10a1 1 0 00.8-1.6L13.7 9l3.1-4.4A1 1 0 0016 3H5V3a1 1 0 00-1-1zM5 5h9.1l-2.3 3.4a1 1 0 000 1.2l2.3 3.4H5V5z" clip-rule="evenodd" />
                    </svg>
                  </div>


                  <!-- Login Record 4 -->
                  <div class="flex items-start border-b pb-3 mb-3">
                    <div class="flex items-center "></div>
                    <div class="flex items-center justify-center bg-blue-500 text-white rounded-full w-10 h-10 mr-4 font-bold">AD</div>
                    <div class="flex-1">
                      <p class="text-gray-800 font-medium">Admin</p>
                      <p class="text-gray-500 text-sm">SAVIDAC</p>
                      <p class="text-gray-400 text-xs">122.162.148.210</p>
                    </div>
                    <div class="text-right text-gray-500 text-xs mr-6">
                      2023-06-29<br>14:31:51
                    </div>
                    <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 2a1 1 0 00-1 1v15a1 1 0 102 0v-4h10a1 1 0 00.8-1.6L13.7 9l3.1-4.4A1 1 0 0016 3H5V3a1 1 0 00-1-1zM5 5h9.1l-2.3 3.4a1 1 0 000 1.2l2.3 3.4H5V5z" clip-rule="evenodd" />
                    </svg>
                  </div>


                  <!-- Login Record 5 -->
                  <div class="flex items-start border-b pb-3 mb-3">
                    <div class="flex items-center "></div>
                    <div class="flex items-center justify-center bg-blue-500 text-white rounded-full w-10 h-10 mr-4 font-bold">KK</div>
                    <div class="flex-1">
                      <p class="text-gray-800 font-medium">Kanhaiya Kumar</p>
                      <p class="text-gray-500 text-sm">8700335031</p>
                      <p class="text-gray-400 text-xs">157.42.5.154</p>
                    </div>
                    <div class="text-right text-gray-500 text-xs mr-6">
                      2023-06-29<br>16:40:07
                    </div>
                    <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 2a1 1 0 00-1 1v15a1 1 0 102 0v-4h10a1 1 0 00.8-1.6L13.7 9l3.1-4.4A1 1 0 0016 3H5V3a1 1 0 00-1-1zM5 5h9.1l-2.3 3.4a1 1 0 000 1.2l2.3 3.4H5V5z" clip-rule="evenodd" />
                    </svg>
                  </div>
            
                  <!-- Add more records as needed -->
                </div>
              </div>
            </div>
            
                    

            
          </div>
        </div>

        <!-- Date Filter Modal -->
        <div id="dateFilterModal" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50">
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Select Date Range</h2>
            <input id="dateRangePicker" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
            <div class="flex justify-end mt-4 gap-2">
              <button id="cancelFilterBtn" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancel</button>
              <button id="applyFilterBtn" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Apply</button>
            </div>
          </div>
        </div>
      </main>

      <script>
        // Show Date Filter Modal
        document.getElementById('filterByDateBtn').addEventListener('click', () => {
          document.getElementById('dateFilterModal').classList.remove('hidden');
        });

        // Hide Date Filter Modal
        document.getElementById('cancelFilterBtn').addEventListener('click', () => {
          document.getElementById('dateFilterModal').classList.add('hidden');
        });

        // Initialize Flatpickr for Date Range Selection
        flatpickr('#dateRangePicker', {
          mode: 'range',
          dateFormat: 'Y-m-d',
        });

        // Apply Filter
        document.getElementById('applyFilterBtn').addEventListener('click', () => {
          const selectedDates = document.getElementById('dateRangePicker').value;
          if (!selectedDates) {
            alert('Please select a date range.');
            return;
          }
          // Example AJAX Request to Fetch Filtered Data
          fetch('/filter-service-statistics', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ dates: selectedDates }),
          })
            .then(response => response.json())
            .then(data => {
              // Update Cards and Chart with Filtered Data
              updateStatisticsCards(data.cards);
              updateChart(data.chartData);
              document.getElementById('dateFilterModal').classList.add('hidden');
            })
            .catch(error => console.error('Error:', error));
        });

        // Update Statistics Cards Function
        function updateStatisticsCards(cards) {
          const statsCards = document.getElementById('statsCards');
          statsCards.innerHTML = ''; // Clear existing cards
          cards.forEach(card => {
            statsCards.innerHTML += `
              <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3">
                  <div class="p-2 bg-blue-50 rounded-full">
                    <svg class="w-6 h-6"><use href="#smartphone-icon" /></svg>
                  </div>
                  <div>
                    <p class="text-sm text-gray-600">${card.title}</p>
                    <p class="font-semibold">₹${card.amount}</p>
                  </div>
                </div>
              </div>
            `;
          });
        }

        // Update Chart Function
        function updateChart(chartData) {
          const ctx = document.getElementById('commissionChart').getContext('2d');
          new Chart(ctx, {
            type: 'line',
            data: chartData,
            options: {
              responsive: true,
              plugins: {
                legend: { display: false },
                title: { display: true, text: 'Commission Earnings (₹)' },
              },
              scales: { y: { beginAtZero: true } },
            },
          });
        }
      </script>
    </body>
    </html>
  {{-- </main> --}}
{{-- </div> --}}

</main>

@endsection
