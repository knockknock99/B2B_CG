<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js CDN -->
</head>
<body class="bg-gray-100 ">

<div class="main-container flex flex-col h-screen ">
  <!-- Sidebar start-->
  <aside id="sidebar" class="sidebar  fixed top-0 left-0 bg-white w-64 h-full shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-300 overflow-y-auto  z-20">
    <div class="p-3 border-b-2 border-blue-900">
      <div class="flex justify-between items-center p-3">
        <img src="https://www.codegraphi.com/assets/img/codegraphi-logo.png" alt="Code Graphi Logo">
        <button id="close-sidebar" class="md:hidden text-blue-900 text-xl">&times;</button>
      </div>
    </div>
    <nav class="mt-5">
      <a href="/" class="flex items-center px-4 py-4  font-medium  text-white bg-blue-900 mb-3 rounded-l-3xl">
        <span class="mr-3 ">
          <img src="img/home1.png" width="23" alt="home">
        </span><span>Dashboard</span>
      </a>

      {{-- <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  hover:bg-blue-900 hover:text-white  rounded-l-3xl">
        <span class="mr-3">
            <img src="https://cdn-icons-png.flaticon.com/512/7355/7355471.png" width="30px" height="30px" alt="kyc icon">
        </span><span>KYC</span>
      </a> --}}


      <div class="relative">
        <!-- Trigger -->
        <a href="#" 
           class="flex items-center px-4 py-3 text-blue-900 font-medium hover:bg-blue-900 hover:text-white rounded-l-3xl"
           id="kyc-btn">
          <span class="mr-3">
            <img src="https://cdn-icons-png.flaticon.com/512/7355/7355471.png" width="30px" height="30px" alt="kyc icon">
          </span>
          <span>KYC</span>
          <span class="ml-2">
            <svg id="kyc-arrow-icon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.654l3.71-3.464a.75.75 0 011.02 1.09l-4 3.75a.75.75 0 01-1.04 0l-4-3.75a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
            </svg>
          </span>
        </a>
      
        <!-- Dropdown -->
        <div id="kyc-dropdown-menu" class="relative left-10 w-48 hidden">
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Account KYC</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Merchant E-Kyc</a>
          {{-- <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">KYC Option 3</a> --}}
        </div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', () => {
          // KYC Dropdown Functionality
          const kycButton = document.getElementById('kyc-btn');
          const kycDropdown = document.getElementById('kyc-dropdown-menu');
          const kycArrowIcon = document.getElementById('kyc-arrow-icon');
      
          kycButton.addEventListener('click', (e) => {
            e.preventDefault();
            kycDropdown.classList.toggle('hidden');
            kycArrowIcon.classList.toggle('rotate-180'); // Rotate the arrow icon
          });
      
          // Close KYC dropdown when clicking outside
          document.addEventListener('click', (e) => {
            if (!kycButton.contains(e.target) && !kycDropdown.contains(e.target)) {
              kycDropdown.classList.add('hidden');
              kycArrowIcon.classList.remove('rotate-180');
            }
          });
        });
      </script>
      


      <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="https://static.thenounproject.com/png/2573773-200.png" width="30px" height="30px" alt="service icon">
        </span><span>Services</span>
      </a>
     
      {{-- <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="https://www.svgrepo.com/show/200330/report.svg" width="25px" height="25px" alt="">
        </span><span>Service Report</span>
      </a> --}}


      <div class="relative">
        <!-- Trigger -->
        <a href="#" 
           class="flex items-center px-4 py-3 text-blue-900 font-medium hover:bg-blue-900 hover:text-white rounded-l-3xl"
           id="service-report-btn">
          <span class="mr-3">
            <img src="https://www.svgrepo.com/show/200330/report.svg" width="25px" height="25px" alt="">
          </span>
          <span>Service Report</span>
          <span class="ml-2">
            <svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.654l3.71-3.464a.75.75 0 011.02 1.09l-4 3.75a.75.75 0 01-1.04 0l-4-3.75a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
            </svg>
          </span>
        </a>
      
        <!-- Dropdown -->
        <div id="dropdown-menu" class="relative left-8  w-48 hidden">
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Mobile Recharge</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Dth Recharge</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Bill Payment</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Aeps</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Money Transfer</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Payout</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Fund Request</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Aadhar Pay</a>
        </div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const button = document.getElementById('service-report-btn');
          const dropdown = document.getElementById('dropdown-menu');
          const arrowIcon = document.getElementById('arrow-icon');
      
          button.addEventListener('click', (e) => {
            e.preventDefault();
            dropdown.classList.toggle('hidden');
            arrowIcon.classList.toggle('rotate-180'); // Rotate the arrow icon
          });
      
          // Close dropdown when clicking outside
          document.addEventListener('click', (e) => {
            if (!button.contains(e.target) && !dropdown.contains(e.target)) {
              dropdown.classList.add('hidden');
              arrowIcon.classList.remove('rotate-180');
            }
          });
        });
      </script>
      
      


      <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/file.png" width="30px" height="30px" alt="">
        </span><span>Account History</span>
      </a>


      <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/commission.png" width="30px" height="30px"  alt="home">
        </span><span>My Commission Slab</span>
      </a>

      <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/gst.png" width="30px" height="30px" alt="">
        </span><span>GST Report</span>
      </a>

      <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/tds.png" width="30px" height="30px" alt="">
        </span><span>TDS Report</span>
      </a>

      <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/commission_report.png" width="30px" height="30px" alt="">
        </span><span>Commision Report</span>
      </a>
      <h1 class="pl-4">Account</h1>
      
      {{-- <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/commission_report.png" width="30px" height="30px" alt="">
        </span><span>Account Setting</span>
      </a> --}}


      <div class="relative">
        <!-- Trigger -->
        <a href="#" 
           class="flex items-center px-4 py-3 text-blue-900 font-medium hover:bg-blue-900 hover:text-white rounded-l-3xl"
           id="account-setting-btn">
          <span class="mr-3">
            <img src="img/setting.png" width="30px" height="30px" alt="">
          </span>
          <span>Account Setting</span>
          <span class="ml-2">
            <svg id="account-arrow-icon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.654l3.71-3.464a.75.75 0 011.02 1.09l-4 3.75a.75.75 0 01-1.04 0l-4-3.75a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
            </svg>
          </span>
        </a>
      
        <!-- Dropdown -->
        <div id="account-dropdown-menu" class="relative left-10 w-48 hidden">
          <a href="/account_setting" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Change Password</a>
          {{-- <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Settings</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Logout</a> --}}
        </div>
      </div>
      
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const accountButton = document.getElementById('account-setting-btn');
          const accountDropdown = document.getElementById('account-dropdown-menu');
          const accountArrowIcon = document.getElementById('account-arrow-icon');
      
          accountButton.addEventListener('click', (e) => {
            e.preventDefault();
            accountDropdown.classList.toggle('hidden');
            accountArrowIcon.classList.toggle('rotate-180');
          });
      
          // Close dropdown when clicking outside
          document.addEventListener('click', (e) => {
            if (!accountButton.contains(e.target) && !accountDropdown.contains(e.target)) {
              accountDropdown.classList.add('hidden');
              accountArrowIcon.classList.remove('rotate-180');
            }
          });
        });
      </script>
      

      
    
      <!-- Add more links as needed -->
    </nav>
  </aside>
  {{-- sidebar end  --}}



  

  <!-- Header start-->
<div class="flex-1 ml-0 md:ml-64 ">

    {{-- <div class="flex-1 ml-0 md:ml-64"> --}}
        <header class="bg-blue-900 text-white p-3  flex justify-between items-center sticky top-0 z-10 rounded-xl ml-1.5 mr-1.5">
          <button id="open-sidebar" class="md:hidden text-xl">&#9776;</button>
      
          <div class="flex space-x-4">
            <div class="rounded-lg px-2 py-2 ml-1 bg-white text-blue-900 flex items-center  sm:py-1">
              <h1 class="text-sm font-bold">Current Wallet: </h1>
              <span class="text-sm font-bold">₹ 0</span>
            </div>
            <div class="rounded-lg px-2 py-2 mr-2 bg-white text-blue-900 flex items-center space-x-2 ">
              <h1 class="text-sm font-bold cursor-pointer"><span class="font-bold">+</span>Wallet: </h1>
              <span class="text-sm font-bold">₹ 0</span>
            </div>
          </div>
      
          {{-- <div class="overflow-hidden whitespace-nowrap mr-10 flex-grow flex items-center justify-center">
            <span id="running-text" class="inline-block animate-scroll text-lg font-medium text-white">
              Welcome to Code Graphi
            </span>
          </div> --}}
      
          <div class="relative ">
            {{-- <div class="pr-3">
              <h2>Welcome to Md Jasim</h2>
            </div> --}}
       

            <button class="w-8 h-8 rounded-full bg-gray-100 text-blue-900 flex items-center justify-center mr-5" id="avatarButton">
              <img src="https://abheepay.com/backend/assets/img/avatars/1.png" id="profile-pic" class="rounded-full" alt="profile-pic">
            </button>

            
            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg flex flex-col align-center hidden">
              <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">MY Profile</a>
              <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Retailer KYC</a>
              <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Support</a>
              <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Log out</a>
            </div>
          </div>
        </header>
      
        <style>
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
          const profilePic = document.getElementById('profile-pic');
          const dropdownMenu = document.getElementById('dropdownMenu');
      
          // Toggle dropdown visibility on profile picture click
          profilePic.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
          });
      
          // Close dropdown if clicking outside of it
          document.addEventListener('click', (event) => {
            if (!profilePic.contains(event.target) && !dropdownMenu.contains(event.target)) {
              dropdownMenu.classList.add('hidden');
            }
          });
        </script>
      {{-- </div> --}}
      
{{-- Header end  --}}


    
 <!-- Main Content  start-->
 <main class="p-4">

  
    <!-- Metric Cards -->
<div class="flex grid grid-cols-1 md:grid-cols-2 gap-3 w-full">

<div class="flex justify-center align-center  w-full pb-3">
  <div class="bg-white w-full  flex justify-center align-center ">

    <div class="bg-white shadow rounded-xl p-6 ">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="text-lg font-bold text-gray-800">Congratulations! Md Jasim</h2>
          <p class="text-gray-800 mt-1">You have done <span class="font-bold text-indigo-600">72%</span> more sales today. Check your new badge in your profile.</p>
          <button class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded shadow hover:bg-indigo-500">View Badges</button>
        </div>
        <img src="https://abheepay.com/backend/assets/img/illustrations/man-with-laptop.gif" width="200px" height="200px" alt="Profile Illustration" class="w-30 pl-5">
      </div>
    </div>


  </div>

   
</div>

    <div class="grid  grid-cols-2 md:grid-cols-3 gap-2 mb-4">
      <div class="bg-white p-3 rounded-lg shadow  ">
        <div class="">
          <p class="text-2xl font-bold">₹ 25.27</p>
          <h3 class="text-gray-700">Commission Earning</h3>
        </div>
        <canvas id="commissionChart"></canvas>
      </div>
  
      <div class="bg-white p-3 rounded-lg shadow ">
        <div class="">
          <p class="text-2xl font-bold">₹ 0.00</p>
          <h3 class="text-gray-700">Wallet History</h3>
        </div>
        <canvas id="walletChart"></canvas>
      </div>
  
      <div class="bg-white p-5 rounded-lg shadow  ">
        <div class="">
          <p class="text-2xl font-bold">₹ 0.00</p>
          <h3 class="text-gray-700">History</h3>
        </div>
        <canvas id="historyChart"></canvas>
      </div>
    </div>


</div>

</div>

<div class="flex-1 ml-0 md:ml-64 pr-4 pl-4 ">
  {{-- running text --}}
  <div class="w-full bg-white p-2  rounded-xl pr-20"> <!-- Changed mb-2 to mb-1 to reduce gap -->
    <marquee class="text-blue-900 text-lg font-semibold"> Welcome To Code Graphi Open Monday To Saturday 10:00AM to 7:00PM</marquee>
  </div>
</div>




{{-- Services Section Start --}}

<div class="flex-1 ml-0 md:ml-64 pr-4 pl-4 pt-3 sm:flex-wrap">
  <!-- Wrapper for Mobile Only View -->
  <div class="block md:hidden">
    <!-- Mobile View Wrapper -->
    <div class="grid grid-cols-1 gap-4">
      <!-- Banking Services Section -->
      <div class="bg-white p-2 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">Banking Services</h2>
        <div class="grid grid-cols-3 gap-2">
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="AePS">
            <p class="text-sm mt-2">AePS</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="Payout">
            <p class="text-sm mt-2">Payout</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="Money Transfer">
            <p class="text-sm mt-2">Money Transfer</p>
          </div>
        </div>
      </div>

      <!-- News Section Carousel -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">News</h2>
        <div class="relative">
          <div class="overflow-hidden rounded-lg h-40">
            <div id="carousel" class="flex transition-transform duration-500">
              <div class="flex-shrink-0 w-full bg-gray-200 flex items-center justify-center">
                <img src="img/man-working-laptop.avif" alt="">
              </div>
              <div class="flex-shrink-0 w-full bg-gray-300 flex items-center justify-center">
                <img src="img/man-working-laptop.avif" alt="">
              </div>
              <div class="flex-shrink-0 w-full bg-gray-400 flex items-center justify-center">
                <img src="img/man-working-laptop.avif" alt="">
              </div>
            </div>
          </div>
          <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded-l">
            &#8249;
          </button>
          <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded-r">
            &#8250;
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Default Desktop View -->
  <div class="hidden md:block">
    <div class="grid grid-cols-3 gap-6  ">
      <!-- Banking Services Section -->
      <div class="bg-white p-2 rounded-lg shadow col-span-2">
        <h2 class="text-lg font-semibold mb-4">Banking Services</h2>
        <div class="grid grid-cols-4 gap-2">
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="AePS">
            <p class="text-sm mt-2">AePS</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="Payout">
            <p class="text-sm mt-2">Payout</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="Money Transfer">
            <p class="text-sm mt-2">Money Transfer</p>
          </div>

          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="AePS">
            <p class="text-sm mt-2">AePS</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="Payout">
            <p class="text-sm mt-2">Payout</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="Money Transfer">
            <p class="text-sm mt-2">Money Transfer</p>
          </div>

          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="Payout">
            <p class="text-sm mt-2">Payout</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://abheepay.com/backend/assets/img/icons/AEPS.png" width="80px" height="80px" alt="Money Transfer">
            <p class="text-sm mt-2">Money Transfer</p>
          </div>

        </div>
      </div>

      <!-- News Section Carousel -->
      <div class="bg-white col-span-1 p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">News</h2>
        <div class="relative">
          <div class="overflow-hidden rounded-lg h-40">
            <div id="carousel" class="flex transition-transform duration-500">
              <div class="flex-shrink-0 w-full bg-gray-200 flex items-center justify-center">
                <img src="img/man-working-laptop.avif" alt="">
              </div>
              <div class="flex-shrink-0 w-full bg-gray-300 flex items-center justify-center">
                <img src="img/man-working-laptop.avif" alt="">
              </div>
              <div class="flex-shrink-0 w-full bg-gray-400 flex items-center justify-center">
                <img src="img/man-working-laptop.avif" alt="">
              </div>
            </div>
          </div>
          <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded-l">
            &#8249;
          </button>
          <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded-r">
            &#8250;
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const carousel = document.getElementById('carousel');
  const prev = document.getElementById('prev');
  const next = document.getElementById('next');

  let currentIndex = 0;

  function updateCarousel() {
    const offset = -currentIndex * 100;
    carousel.style.transform = `translateX(${offset}%)`;
  }

  prev.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : 2;
    updateCarousel();
  });

  next.addEventListener('click', () => {
    currentIndex = (currentIndex < 2) ? currentIndex + 1 : 0;
    updateCarousel();
  });
</script>



<div class="flex-1 ml-0 md:ml-64  p-4 ">
  <!-- Service Statistics -->
    <div class="bg-white p-6 rounded-lg shadow">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Service Statistics</h2>
        <span>☰</span>
      </div>
  
      <div class="flex gap-4 mb-6">
        <div>
          <label for="fromDate" class="block text-sm text-gray-600">From</label>
          <input
            type="date"
            id="fromDate"
            class="border rounded p-2 text-sm w-full"
          />
        </div>
        <div>
          <label for="toDate" class="block text-sm text-gray-600">To</label>
          <input
            type="date"
            id="toDate"
            class="border rounded p-2 text-sm w-full"
          />
        </div>
      </div>
  
      <canvas id="serviceChart" width="300" height="70"></canvas>
    </div>
  </main>
  
</div>
  </div>



{{-- side bar  --}}
<script>
  const sidebar = document.getElementById('sidebar');
  const openSidebar = document.getElementById('open-sidebar');
  const closeSidebar = document.getElementById('close-sidebar');

  openSidebar.addEventListener('click', () => {
    sidebar.classList.remove('-translate-x-full');
  });

  closeSidebar.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
  });
</script>
{{-- sidebar  --}}


{{-- chart js start --}}
<script src="css/dashboard.js"></script> <!-- Link to your JavaScript file -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- chart js end  --}}

</body>
</html>
