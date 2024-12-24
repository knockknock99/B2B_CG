<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js CDN -->

@stack('scripts')

</head>
<body class="bg-gray-100 ">

<div class="main-container flex flex-col h-screen ">
  <!-- Sidebar start-->
  <aside id="sidebar" class="sidebar  fixed top-0 left-0 bg-white w-64 h-full shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-300 overflow-y-auto  z-20">
    <div class="p-2 border-b-2 border-blue-900   sticky top-0 bg-white shadow-md p-4 z-10">
     <a href="{{route('admin.admin_dashboard')}}"> <div class="flex justify-between items-center p-1 ">
        <img src="https://www.codegraphi.com/assets/img/codegraphi-logo.png" alt="Code Graphi Logo">
        <button id="close-sidebar" class="md:hidden text-blue-900 text-xl">&times;</button>
      </div>
    </a>
      {{-- <p class="flex justify-center">(Admin)</p> --}}
    </div>
    <nav class="mt-5">
      <a href="{{route('admin.admin_dashboard')}}" class="flex items-center px-4 py-4  font-medium  text-white bg-blue-900 mb-3 rounded-l-3xl">
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
            <img src={{asset('img/modules.png')}} width="30px" height="30px" alt="kyc icon">
          </span>
          <span>Modules</span>
          <span class="ml-2">
            <svg id="kyc-arrow-icon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.654l3.71-3.464a.75.75 0 011.02 1.09l-4 3.75a.75.75 0 01-1.04 0l-4-3.75a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
            </svg>
          </span>
        </a>
      
        <!-- Dropdown -->
        <div id="kyc-dropdown-menu" class="relative left-10 w-48 hidden">
          <a href="{{route('admin.service_category')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Service Category</a>
          <a href="{{route('admin.city_master')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">City Master</a>
          <a href="{{route('admin.user_type_master')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">User Type Master</a>
          <a href="{{route('admin.plain_master')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Service Master</a>
          <a href="{{route('admin.service_master')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Plan Master</a>
          <a href="{{route('admin.commission_slot')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Commission Slots</a>
          <a href="{{route('admin.application_setting')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Application Setting</a>
          <a href="{{route('admin.application_banner')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Application Banners</a>
          <a href="{{route('admin.announcement')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Announcements</a>
          <a href="{{route('admin.ticket_department')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Ticket Department</a>
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
      


      <a href="{{route('admin.company_bank')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="{{asset('img/bank.png')}}" width="25px" height="25px" alt="service icon">
        </span><span>Company Banks</span>
      </a>

      <a href="{{route('admin.user_manager')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="{{asset('img/user_manager.png')}}" width="30px" height="30px" alt="service icon">
        </span><span>Users Manager</span>
      </a>

      <a href="{{route('admin.admin_account_history')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="{{asset('img/commission_report.png')}}" width="28px" height="28px" alt="service icon">
        </span><span>Account History</span>
      </a>

      <a href="{{route('admin.admin_fund_request')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="{{asset('img/funding.png')}}" width="32px" height="32px" alt="service icon">
        </span><span>Fund Requests</span>
      </a>

      <a href="{{route('admin.payout_bank')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="{{asset('img/payout_bank.png')}}" width="32px" height="32px" alt="service icon">
        </span><span>Payout Banks</span>
      </a>
     
      {{-- <a href="#" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="https://www.svgrepo.com/show/200330/report.svg" width="25px" height="25px" alt="">
        </span><span>Service Report</span>
      </a> --}}


      <div class="relative">
        <!-- Trigger -->
        <a href="" 
           class="flex items-center px-4 py-3 text-blue-900 font-medium hover:bg-blue-900 hover:text-white rounded-l-3xl"
           id="service-report-btn">
          <span class="mr-3">
            <img src="{{asset('img/fund_transfer.png')}}" width="32px" height="32px" alt="">
          </span>
          <span>Fund Transfer</span>
          <span class="ml-2">
            <svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.654l3.71-3.464a.75.75 0 011.02 1.09l-4 3.75a.75.75 0 01-1.04 0l-4-3.75a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
            </svg>
          </span>
        </a>
      
        <!-- Dropdown -->
        <div id="dropdown-menu" class="relative left-8  w-48 hidden">
          <a href="{{route('admin.admin_fund_transfer')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Fund Transfer</a>
          <a href="{{route('admin.all_fund_transfer')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">All Fund Transfer</a>
         
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
      
      

      {{-- Service Report --}}

      <div class="relative">
        <!-- Trigger -->
        <a href="" 
           class="flex items-center px-4 py-3 text-blue-900 font-medium hover:bg-blue-900 hover:text-white rounded-l-3xl"
           id="service-report-btn1">
          <span class="mr-3">
            <img src="{{asset('img/commission_report.png')}}" width="28px" height="28px" alt="">
          </span>
          <span>Service Report</span>
          <span class="ml-2">
            <svg id="arrow-icon1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.654l3.71-3.464a.75.75 0 011.02 1.09l-4 3.75a.75.75 0 01-1.04 0l-4-3.75a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
            </svg>
          </span>
        </a>
      
        <!-- Dropdown -->
        <div id="dropdown-menu1" class="relative left-8  w-48 hidden">
          <a href="{{route('admin.mobile_recharge_report')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Mobile Recharge</a>
          <a href="{{route('admin.dth_recharge_report')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Dth Recharge</a>
          <a href="{{route('admin.bill_payment_report')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Bill Payment</a>
          <a href="{{route('admin.admin_aeps_report')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Aeps</a>
          <a href="{{route('admin.admin_money_transfer_report')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Money Transfer</a>
          {{-- <a href="{{route('user.tds')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Payout</a> --}}
          <a href="{{route('admin.admin_fund_request_report')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Fund Request</a>
          <a href="{{route('admin.admin_aadhar_pay_report')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Aadhar Pay</a>
        </div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const button = document.getElementById('service-report-btn1');
          const dropdown = document.getElementById('dropdown-menu1');
          const arrowIcon = document.getElementById('arrow-icon1');
      
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



      <a href="{{route('admin.admin_commission_slab')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/file.png" width="30px" height="30px" alt="">
        </span><span>Commission Slab</span>
      </a>


      <a href="{{route('admin.admin_gst_report')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/commission.png" width="30px" height="30px"  alt="home">
        </span><span>GST Report</span>
      </a>

      <a href="{{route('admin.admin_tds_report')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/gst.png" width="30px" height="30px" alt="">
        </span><span>TDS Report</span>
      </a>


      <a href="{{route('admin.admin_commission_report')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/commission_report.png" width="28px" height="28px" alt="">
        </span><span>Commision Report</span>
      </a>

      {{-- <a href="{{route('user.commissionReport')}}" class="flex items-center px-4 py-3 text-blue-900 font-medium  text-['#000b55'] hover:bg-blue-900 hover:text-white rounded-l-3xl ">
        <span class="mr-3">
            <img src="img/commission_report.png" width="28px" height="28px" alt="">
        </span><span>Admin Wallet</span>
      </a> --}}




      <div class="relative">
        <!-- Trigger -->
        <a href="#" 
           class="flex items-center px-4 py-3 text-blue-900 font-medium hover:bg-blue-900 hover:text-white rounded-l-3xl"
           id="account-setting-btn1">
          <span class="mr-3">
            <img src="{{asset('img/bank.png')}}" width="25px" height="25px" alt="">
          </span>
          <span>Admin Wallet</span>
          <span class="ml-2">
            <svg id="account-arrow-icon1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.654l3.71-3.464a.75.75 0 011.02 1.09l-4 3.75a.75.75 0 01-1.04 0l-4-3.75a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
            </svg>
          </span>
        </a>
      
        <!-- Dropdown -->
        <div id="account-dropdown-menu1" class="relative left-10 w-48 hidden">
          <a href="{{route('admin.admin_wallet_add_fund')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Add Funds</a>
          <a href="{{route('admin.admin_view_all')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">View All</a>
          {{-- <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Logout</a> --}}
        </div>
      </div>
      
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const accountButton = document.getElementById('account-setting-btn1');
          const accountDropdown = document.getElementById('account-dropdown-menu1');
          const accountArrowIcon = document.getElementById('account-arrow-icon1');
      
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
          <a href="{{route('admin.admin_change_password')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Change Password</a>
          {{-- <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Settings</a> --}}
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-xl">Logout</a>
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
        <header class="sticky top-0 z-50  bg-blue-900 text-white lg:py-4 py-2 lg:ml-2 flex justify-end align-center  rounded-xl ml-1 mr-1 lg:ml-1.5 lg:mr-1.5 ">
          <button id="open-sidebar" class="md:hidden text-xl pl-2">&#9776;</button>
              
         
        <div class="relative ">
           
       
          <div class="flex justify-center align-center ">

            <style>
              @media(max-width: 680px){
                .mb h3{
               display: none;
               margin-left: 2px;
                }
                /* .wallet{
                  font-size: 20px;
                  font-weight: bold;
                } */
              }
            </style>

     <div class="lg:mr-1 mr-1 ml-3 text-white p-1 rounded-lg  font-normal lg:font-bold flex flex-row text-md ">
       <img src="{{asset('img/wallet-6.png')}}" width="30px" height="5px" class="bg-blue-900 rounded-full lg:block hidden" alt="">
       <h3>Wallet: 2000/-</h3>
     </div>

     <div class="lg:mr-1 mr-0 text-white p-1 rounded-lg font-normal lg:font-bold text-md flex flex-row">
       <img src="{{asset('img/wallet-6.png')}}" width="30px" height="5px" class="bg-blue-900 rounded-full lg:block hidden" alt="">
       <h3>Downline: 86.4/-</h3>
     </div>

     <div class="lg:mr-3 mr-1 text-white p-1 rounded-lg font-normal lg:font-bold text-md flex flex-row">
      <img src="{{asset('img/wallet-6.png')}}" width="30px" height="5px" class="bg-blue-900 rounded-full lg:block hidden" alt="">
      <h3>API Wallet: 95.5/-</h3>
     </div>

          

      <button class="w-10 h-7 mt-4 lg:w-8 lg:h-8  lg:mt-0 rounded-full bg-gray-100 text-blue-900 flex items-center justify-center " id="avatarButton">
      <img src="https://abheepay.com/backend/assets/img/avatars/1.png" id="profile-pic" class="rounded-full" alt="profile-pic">
      </button>

      <div class=" text-white lg:p-1 rounded-lg lg:mr-3 font-sm lg:font-bold lg:block hidden text-lg">
        <h3>Admin</h3>
      </div>

      <div class="mr-2 bg-white text-blue-900 lg:p-1.5 rounded-lg lg:px-3  font-semibold flex flex-row ml-1 ">
          <img src="{{asset('img/notification-final.webp')}}" width="25px"  class="bg-blue-900 rounded-full lg:block hidden" alt="">
          <h3 class="ml-1 pl-1 pr-1  lg:block hidden">Notification</h3>
      </div>

    </div>

            
            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="absolute right-0 mt-2 mr-5 w-40 bg-white border rounded-lg shadow-lg flex flex-col align-center hidden">
              <a href="/my_profile" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">MY Profile</a>
              <a href="/certificate" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Certificate</a>
              {{-- <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Retailer KYC</a> --}}
              <a href="#" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Support</a>
              <a href="" class="block px-4 py-2 text-medium text-blue-900 hover:bg-gray-200 rounded-lg">Log out</a>
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

</header>
{{-- </div> --}}
      
{{-- Header end  --}}




{{-- Main content  --}}
    
@yield('content_admin')

{{-- main content end  --}}

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
