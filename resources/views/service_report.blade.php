{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recharge Records</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="max-w-7xl mx-auto p-4">
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h1 class="text-2xl font-bold text-gray-800 mb-4">Mobile Recharges</h1>
      <form id="searchForm" class="flex flex-wrap gap-4 items-center mb-6">
        <div class="flex flex-col">
          <label for="startDate" class="text-sm font-medium text-gray-700">Start Date</label>
          <input type="date" id="startDate" class="border border-gray-300 rounded-lg p-2 w-full">
        </div>
        <div class="flex flex-col">
          <label for="endDate" class="text-sm font-medium text-gray-700">End Date</label>
          <input type="date" id="endDate" class="border border-gray-300 rounded-lg p-2 w-full">
        </div>
        <div class="flex flex-col">
          <label for="status" class="text-sm font-medium text-gray-700">Recharge Status</label>
          <select id="status" class="border border-gray-300 rounded-lg p-2 w-full">
            <option value="">All</option>
            <option value="Success">Success</option>
            <option value="Failed">Failed</option>
          </select>
        </div>
        <div class="flex flex-col">
          <label for="operator" class="text-sm font-medium text-gray-700">Operator</label>
          <select id="operator" class="border border-gray-300 rounded-lg p-2 w-full">
            <option value="">All</option>
            <option value="Airtel">Airtel</option>
            <option value="Vodafone">Vodafone</option>
            <option value="Jio">Jio</option>
          </select>
        </div>
        <button type="button" id="searchButton" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Search</button>
      </form>
      <table class="w-full border-collapse border border-gray-300 text-left">
        <thead>
          <tr class="bg-gray-200">
            <th class="border border-gray-300 p-2">#</th>
            <th class="border border-gray-300 p-2">Operator</th>
            <th class="border border-gray-300 p-2">Mobile No</th>
            <th class="border border-gray-300 p-2">Amount</th>
            <th class="border border-gray-300 p-2">Reference ID</th>
            <th class="border border-gray-300 p-2">Recharged By</th>
            <th class="border border-gray-300 p-2">Status</th>
            <th class="border border-gray-300 p-2">Response</th>
            <th class="border border-gray-300 p-2">Date</th>
            <th class="border border-gray-300 p-2">Action</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          <!-- Dynamic Rows -->
        </tbody>
      </table>
    </div>
  </div>
  <script>
    const records = [
      {
        operator: "Airtel",
        mobileNo: "6700335031",
        amount: 10,
        referenceId: "63fb96b653f7f",
        rechargedBy: "dactilar",
        status: "Success",
        response: "Recharge for Airtel of Amount 50 is successful",
        date: "2023-02-26 22:05:54",
      },
      {
        operator: "Airtel",
        mobileNo: "6700335031",
        amount: 10,
        referenceId: "63fba060ef4d6",
        rechargedBy: "dactilar",
        status: "Success",
        response: "Recharge for Airtel of Amount 50 is successful",
        date: "2023-02-26 22:40:08",
      },
    ];

    const searchButton = document.getElementById("searchButton");
    const tableBody = document.getElementById("tableBody");

    function renderTable(data) {
      tableBody.innerHTML = "";
      data.forEach((record, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
          <td class="border border-gray-300 p-2">${index + 1}</td>
          <td class="border border-gray-300 p-2">${record.operator}</td>
          <td class="border border-gray-300 p-2">${record.mobileNo}</td>
          <td class="border border-gray-300 p-2">₹${record.amount}</td>
          <td class="border border-gray-300 p-2">${record.referenceId}</td>
          <td class="border border-gray-300 p-2">${record.rechargedBy}</td>
          <td class="border border-gray-300 p-2 text-green-600">${record.status}</td>
          <td class="border border-gray-300 p-2">${record.response}</td>
          <td class="border border-gray-300 p-2">${record.date}</td>
          <td class="border border-gray-300 p-2">
            <button class="bg-blue-500 text-white px-2 py-1 rounded-lg mr-2">View</button>
            <button class="bg-red-500 text-white px-2 py-1 rounded-lg">Delete</button>
          </td>
        `;
        tableBody.appendChild(row);
      });
    }

    function filterRecords() {
      const startDate = document.getElementById("startDate").value;
      const endDate = document.getElementById("endDate").value;
      const status = document.getElementById("status").value;
      const operator = document.getElementById("operator").value;

      let filtered = records;

      if (startDate) {
        filtered = filtered.filter(
          (record) => new Date(record.date) >= new Date(startDate)
        );
      }
      if (endDate) {
        filtered = filtered.filter(
          (record) => new Date(record.date) <= new Date(endDate)
        );
      }
      if (status) {
        filtered = filtered.filter((record) => record.status === status);
      }
      if (operator) {
        filtered = filtered.filter((record) => record.operator === operator);
      }

      renderTable(filtered);
    }

    searchButton.addEventListener("click", filterRecords);

    // Initial render
    renderTable(records);
  </script>
</body>
</html> --}}

@extends('masterLayout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 ">

    <div class="main-content p-8 shadow-inner bg-white m-5">
        <div class="mx-auto">
            <div class="mt-4">
                <div class="tab-pane fade show active" id="b2b-services" role="tabpanel" aria-labelledby="b2b-services-tab">
                    <div class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 text-center ">
                        <!-- Service Buttons -->
                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.mobile_recharge_service')}}">
                                    <img src="{{asset('img/mobile_recharge.jpeg')}}" alt="Mobile Recharge" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Mobile Recharge</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.dth_service')}}">
                                    <img src="{{asset('img/dth.jpg')}}" alt="DTH Recharge" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">DTH Recharge</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.bill_payment_service')}}">
                                    <img src="{{asset('img/bill_payment.jpg')}}" alt="Bill Payment" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Bill Payment</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.aeps_service')}}">
                                    <img src="{{asset('img/aeps.jpeg')}}" alt="AEPS" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs lg:font-medium lg:text-base pb-6">AEPS</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.money_transfer_service')}}">
                                    <img src="{{asset('img/money_transfer-1.png')}}" alt="Money Transfer" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Money Transfer</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <img src="{{asset('img/move_to_bank.jpeg')}}" alt="Move To Bank" class="w-full h-full object-contain">
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Move To Bank</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <a href="{{route('user.fund_request_service')}}">
                                    <img src="{{asset('img/fund request.jpeg')}}" alt="Fund Request" class="w-full h-full object-contain">
                                </a>
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Fund Request</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <img src="{{asset('img/aadhar_pay.jpeg')}}" alt="Aadhaar Pay" class="w-full h-full object-contain">
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Aadhaar Pay</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <img src="{{asset('img/mini_atm-1.png')}}" alt="Micro ATM" class="w-full h-full object-contain">
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Micro ATM</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <img src="{{asset('img/fund_transfer.jpeg')}}" alt="Fund Transfer" class="w-full h-full object-contain">
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Fund Transfer</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                              
                                <img src="{{asset('img/fasttag.jpeg')}}" alt="FastTag" class="w-full h-full object-contain">
                              
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">FastTag</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <img src="{{asset('img/upi_collection.jpeg')}}" alt="UPI Collection" class="w-full h-full object-contain">
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">UPI Collection</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <img src="{{asset('img/image.png')}}" alt="Fino CMS" class="w-full h-full object-contain">
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">Fino CMS</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <img src="{{asset('img/lic_bill_payment.jpeg')}}" alt="LIC Bill Payment" class="w-full h-full object-contain">
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">LIC Bill Payment</div>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="icon-container lg:w-[130px] lg:h-[130px]  w-[60px] h-[60px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
                                <img src="{{asset('img/nsdl_pan_card.jpeg')}}" alt="NSDL Pan Card" class="w-full h-full object-contain">
                            </div>
                            <div class="service-text text-xs  lg:font-medium lg:text-base pb-6">NSDL Pan Card</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection