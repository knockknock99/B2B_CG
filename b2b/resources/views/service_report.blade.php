<!DOCTYPE html>
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
</html>
