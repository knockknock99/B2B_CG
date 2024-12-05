
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js CDN -->
  <link rel="stylesheet" href="css/styles.css"> <!-- Link to custom CSS file -->
</head>
<body class="bg-gray-100 ">
  <div class="flex h-screen flex-wrap w-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white text-blue-900">
      <div class="p-5 flex flex-col items-center border-b border-blue-800">
        <div class="drop-shadow-2xl pb-3">
          <img src="https://www.codegraphi.com/assets/img/codegraphi-logo.png"   alt="">
          {{-- <h1 class="text-4xl font-bold pb-1 text-['#000b55']">Code Graphi</h1> --}}
          {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI0UCWhhMIy8oYNegR60luZQTxHvlqXfDF0w&s" height="200px" alt=""> --}}
        </div>
        <div class="w-20 h-20 rounded-full bg-blue-800 text-white flex items-center justify-center text-2xl font-bold">
          KK
        </div>
        <h3 class=" text-xl text-blue-900">Kanhaiya Kumar</h3>
        <p class="text-medium font-medium text-blue-600">Retailer | KYC</p>
        <div class="">
          <p class=" text-xl  text-blue-900">Balance: ₹ 1,122.39</p>
        </div>
      </div>

      {{-- <nav class="mt-4">
        <!-- Sidebar items -->
        <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
          <span class="mr-3">🏠</span><span>Dashboard</span>
        </a>
        <!-- More sidebar items... -->
      </nav> --}}

      <nav class="mt-3">
        <a href="#" class="first font-size-600 flex items-center px-4 py-2.7  text-white bg-blue-800 mb-2">
          <span class="mr-3">
            <img src="img/home1.png" width="25px" height="25px"  alt="home">
          </span><span>Dashboard</span>
        </a>
        {{-- <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">👤</span><span>Profile</span>
        </a> --}}
        <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">
            <img src="https://cdn-icons-png.flaticon.com/512/7355/7355471.png" width="30px" height="30px" color="white" alt="kyc icon">
          </span><span>KYC</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">
            <img src="https://static.thenounproject.com/png/2573773-200.png" width="30px" height="30px" color="white" alt="">
          </span><span>Services</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">
            <img src="https://www.svgrepo.com/show/200330/report.svg" width="25px" height="25px" color="white" alt="">
          </span><span>Service Report</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">
            <img src="img/file.png" width="30px" height="30px" alt="">
          </span><span>Account History</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">
            <img src="img/commission.png" width="30px" height="30px"  alt="home">
          </span><span>My Commission Slab</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">
          <img src="img/gst.png" width="30px" height="30px" alt="">  
          </span><span>GST Report</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">
            <img src="img/tds.png" width="30px" height="30px" alt="">
          </span><span>TDS Report</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.7 font-medium text-['#000b55'] hover:text-white hover:bg-blue-['#000b55']">
          <span class="mr-3">
            <img src="img/commission_report.png" width="30px" height="30px" alt="">
          </span><span>Commission Report</span>
        </a>
      </nav>

    </aside>

    <div class="flex-1">

      <header class="bg-[#0088CC] text-white p-4 flex justify-between items-center relative rounded-md">
        <div class="flex items-center">
          <span class="ml-5" id="menu-toggle">☰</span>
        </div>
      
        <!-- Running Text -->
        <div class="absolute inset-0 flex items-center justify-center overflow-hidden">
          <span id="running-text" class="whitespace-nowrap animate-scroll text-lg font-medium">
            Welcome to Code Graphi
          </span>
        </div>
      
        <div class="relative">
          <button class="w-8 h-8 rounded-full bg-gray-100 text-blue-900 flex items-center justify-center mr-5" id="avatarButton">
            <img src="https://abheepay.com/backend/assets/img/avatars/1.png" class="rounded-full" alt="">
          </button>
          <!-- Dropdown Menu -->
          <div id="dropdownMenu" class="absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg flex flex-col align-center hidden">
            <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Profile</a>
            <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Admin</a>
            <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Logout</a>
          </div>
        </div>
      </header>
      
      <style>
        /* Animation for scrolling text */
        @keyframes scroll {
          0% {
            transform: translateX(100%);
          }
          100% {
            transform: translateX(-100%);
          }
        }
      
        .animate-scroll {
          display: inline-block;
          animation: scroll 10s linear infinite;
        }
      </style>
      
      
      <script>
        // To make the dropdown visible by default, we remove the 'hidden' class
        const dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.remove('hidden');  // Remove 'hidden' class to show it
      
        // Toggle dropdown visibility when the avatar button is clicked
        document.getElementById('avatarButton').addEventListener('click', function() {
          dropdownMenu.classList.toggle('hidden'); // Toggle visibility
        });
      
        // Close dropdown if clicked outside
        document.addEventListener('click', function(event) {
          const avatarButton = document.getElementById('avatarButton');
          if (!avatarButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');  // Hide dropdown
          }
        });
      </script>
      
      


      <!-- Main Content -->
      <main class="p-3">
        <!-- Metric Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-3">
          <div class="bg-white p-3 rounded-lg shadow">
            <div class="mb-3">
              <p class="text-2xl font-bold">₹ 25.27</p>
              <h3>Commission Earning</h3>
            </div>
            <canvas id="commissionChart"></canvas> <!-- Canvas for chart -->
          </div>

          <!-- Wallet History -->
          <div class="bg-white p-3 rounded-lg shadow">
            <div class="mb-3">
              <p class="text-2xl font-bold">₹ 0.00</p>
              <h3>Wallet History</h3>
            </div>
            <canvas id="walletChart"></canvas> <!-- Canvas for chart -->
          </div>

          <!-- History -->
          <div class="bg-white p-3 rounded-lg shadow">
            <div class="mb-3">
              <p class="text-2xl font-bold">₹ 0.00</p>
              <h3>History</h3>
            </div>
            <canvas id="historyChart"></canvas> <!-- Canvas for chart -->
          </div>
        </div>

        <!-- Service Statistics -->
        <div class="bg-white p-6 rounded-lg shadow">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Service Statistics</h2>
            <span>☰</span> <!-- Grid Icon -->
            
          </div>

          <div class="flex gap-4 mb-6">
            <div>
              <label class="block text-sm mb-1">From</label>
              <input type="date" id="fromDate" class="border rounded " />
            </div>
            <div>
              <label class="block text-sm mb-1">To</label>
              <input type="date" id="toDate" class="border rounded " />
            </div>
          </div>

          <!-- Bar Chart -->
          {{-- <canvas id="serviceChart"></canvas> <!-- Canvas for service chart --> --}}

          <canvas id="serviceChart" width="300" height="70"></canvas>



        </div>
      </main>
    </div>
  </div>

  <script src="css/dashboard.js"></script> <!-- Link to your JavaScript file -->

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // JavaScript for toggling the sidebar visibility
document.getElementById('menu-toggle').addEventListener('click', function() {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('hidden');
});

</script>


</body>
</html>
