@extends('masterLayout')
@section('content')


 <!-- Main Content  start-->
<main class="p-5 ">

  
  <!-- Metric Cards -->
 <div class="flex grid grid-cols-1 md:grid-cols-2 gap-3  overflow-y-hidden  ">

   <div class="flex justify-center align-center  w-full pb-1">
   <div class="bg-white w-full  flex justify-center align-center ">

   <div class="bg-white shadow rounded-xl p-6 ">
    <div class="flex items-center justify-between">
      <div>
        <h2 class="text-lg font-bold text-gray-800">Congratulations! Iftekhar</h2>
        <p class="text-gray-800 mt-1">You have done <span class="font-bold text-indigo-600">72%</span> more sales today. Check your new badge in your profile.</p>
        <button class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded shadow hover:bg-indigo-500">View Badges</button>
      </div>
      <img src="https://abheepay.com/backend/assets/img/illustrations/man-with-laptop.gif" width="200px" height="200px" alt="Profile Illustration" class="w-30 pl-5">
    </div>
  </div>


 </div>

 
 </div>

  <div class="grid  grid-cols-2 md:grid-cols-3 gap-2 mb-2">
    <div class="bg-white p-2 rounded-lg shadow  ">
      <div class="">
        <p class="text-2xl font-bold">₹ 25.27</p>
        <h3 class="text-gray-700 pt-3  pb-2">Today's Transactions</h3>
      </div>
      <canvas id="commissionChart"  width="200" height="150"></canvas>
    </div>

    <div class="bg-white p-3 rounded-lg shadow ">
      <div class="">
        <p class="text-2xl font-bold">₹ 0.00</p>
        <h3 class="text-gray-700">Monthly Transactions</h3>
      </div>
      <canvas id="walletChart" width="200" height="150"></canvas>
    </div>

    <div class="bg-white  rounded-lg  ">
      <div class="bg-white p-3 rounded-lg ">
        <div class="text-center">
          <p class="text-2xl font-bold">₹ 0.00</p>
          <h3 class="text-gray-700">Transactions</h3>
        </div>
        <canvas id="successCircleChart" id="historyChart" width="200" height="150"></canvas>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      // Success Transactions Circle Chart
      const successCtx = document.getElementById('successCircleChart').getContext('2d');
      
      new Chart(successCtx, {
        type: 'doughnut', // Use 'pie' if you prefer a pie chart
        data: {
          labels: ['Success', 'Pending', 'Failed'],
          datasets: [{
            data: [70, 20, 10], // Example data values
            backgroundColor: ['#4CAF50', '#FF9800', '#F44336'], // Colors for each segment
            borderWidth: 0
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              display: true,
              position: 'bottom'
            }
          }
        }
      });
    </script>
      {{-- <canvas id="historyChart"></canvas> --}}
    </div>
  </div>


  {{-- <div class="bg-white p-3 rounded-lg shadow">
    <div class="text-center">
      <p class="text-2xl font-bold">₹ 0.00</p>
      <h3 class="text-gray-700">Transactions</h3>
    </div>
    <canvas id="successCircleChart" id="historyChart" width="200" height="200"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Success Transactions Circle Chart
  const successCtx = document.getElementById('successCircleChart').getContext('2d');
  
  new Chart(successCtx, {
    type: 'doughnut', // Use 'pie' if you prefer a pie chart
    data: {
      labels: ['Success', 'Pending', 'Failed'],
      datasets: [{
        data: [70, 20, 10], // Example data values
        backgroundColor: ['#4CAF50', '#FF9800', '#F44336'], // Colors for each segment
        borderWidth: 0
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'bottom'
        }
      }
    }
  });
</script> --}}

  



 </div>

 </div>

  <div class="flex-1 ml-0 md:ml-64 pr-4 pl-4 ">
 {{-- running text --}}
 <div class="w-full bg-white p-2  rounded-xl pr-20"> <!-- Changed mb-2 to mb-1 to reduce gap -->
  <marquee class="text-blue-900 text-lg font-semibold"> Welcome To Code Graphi Open Monday To Saturday 10:00AM to 7:00PM</marquee>
  </div>
  </div>




  {{-- Services Section Start --}}

 <!-- Services Section Start -->
  <div class="flex-1 px-4 py-8 pt-3 md:ml-64">
  <!-- Mobile View -->
  <div class="block md:hidden">
    <div class="grid gap-4">
      <!-- Banking Services Section -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">Banking Services</h2>
        <div class="grid grid-cols-3 gap-2">

          <div class="flex flex-col items-center  ">
            <a href="{{route('user.aeps_service')}}">
              <img src="{{asset('asset/img/aeps.jpeg')}}" width="80px" height="80px" alt="AePS" class="border-2 border-black rounded-full">
            </a>
            <p class="text-sm mt-2">AePS</p>
          </div>

          <div class="flex flex-col items-center">
            <a href="{{route('user.money_transfer_service')}}">
              <img src="{{asset('asset/img/mini_atm-1.png')}}" width="80px" height="80px" alt="Money Transfer" class="border-2 border-black rounded-full">
            </a>
            <p class="text-sm mt-2">Micro Atm</p>
          </div>

          <div class="flex flex-col items-center">
            <a href="#">
              <img src="{{asset('asset/img/aadhar_pay.jpeg')}}" width="80px" height="80px" alt="Payout" class="border-2 border-black rounded-full">
            </a>
            <p class="text-sm mt-2">Aadhar Pay</p>
          </div>

         
        </div>
      </div>


  

      <!-- News Section Carousel -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">News</h2>
        <div class="relative">
          <div class="overflow-hidden rounded-lg h-60">
            <div id="mobile-carousel" class="flex transition-transform duration-500">
              <div class="flex-shrink-0 w-full bg-gray-200 flex items-center justify-center">
                <img src="{{asset('asset/img/man-working-laptop.avif')}}" alt="">
              </div>
              <div class="flex-shrink-0 w-full bg-gray-300 flex items-center justify-center">
                <img src="{{asset('asset/img/man-working-laptop.avif')}}" alt="">
              </div>
              <div class="flex-shrink-0 w-full bg-gray-400 flex items-center justify-center">
                <img src="{{asset('asset/img/man-working-laptop.avif')}}" alt="">
              </div>
            </div>
          </div>
          <button id="mobile-prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded-l">
            &#8249;
          </button>
          <button id="mobile-next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded-r">
            &#8250;
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Desktop View -->
  <div class="hidden md:block">
    <div class="grid grid-cols-3 gap-2 p-1">
      <!-- Banking Services Section -->
      <div class="bg-white p-2 rounded-lg shadow ">
        <h2 class="text-lg font-semibold p-4 mb-4">Banking Services</h2>
        <div class="grid grid-cols-2 gap-2">
          <!-- Services Cards Repeated -->
          <div class="flex flex-col items-center">
            <div class="w-[50px] h-[50px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
              <a href="{{route('user.money_transfer_service')}}">
                <img src="{{asset('asset/img/money_transfer-1.png')}}" alt="DTH Recharge" width="90px" height="90px" class="object-contain">
              </a>
            </div>
            <div class="service-text text-xs lg:font-medium lg:text-base pb-6">Money Transfer</div>
          </div>


          <div class="flex flex-col items-center">
            <div class="w-[50px] h-[50px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
              <a href="{{route('user.movetobnk')}}">
                <img src="{{asset('asset/img/move_to_bank.jpeg')}}" alt="DTH Recharge" width="90px" height="90px" class="object-contain">
              </a>
            </div>
            <div class="service-text text-xs lg:font-medium lg:text-base pb-6">Move to Bank</div>
          </div>


          <div class="flex flex-col items-center">
            <div class="w-[30px] h-[30px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
              <a href="{{route('user.microatm')}}">
                <img src="{{asset('asset/img/mini_atm-1.png')}}" alt="DTH Recharge" width="90px" height="90px" class="object-contain">
              </a>
            </div>
            <div class="service-text text-xs lg:font-medium lg:text-base pb-6">Micro Atm</div>
          </div>

      
          
          <div class="flex flex-col items-center">
            <div class="w-[30px] h-[30px] border-2 border-black rounded-full flex items-center justify-center overflow-hidden mb-2">
              <a href="{{route('user.aeps_service')}}">
                <img src="{{asset('asset/img/aeps.jpeg')}}" alt="DTH Recharge" width="90px" height="90px" class="object-contain">
              </a>
            </div>
            <div class="service-text text-xs lg:font-medium lg:text-base pb-6">Aeps</div>
          </div>

          
        </div>
      </div>

      <!-- News Section Carousel -->
      <div class="bg-white col-span-2 p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">News</h2>
        <div class="relative">
          <div class="overflow-hidden rounded-lg h-60">
            <div id="desktop-carousel" class="flex transition-transform duration-500 w-full h-4/5">
              <div class="flex-shrink-0 w-full bg-gray-200 flex items-center justify-center cover-content">
                <img src="{{asset('asset/img/man-working-laptop.avif')}}" alt="">
              </div>
              <div class="flex-shrink-0 w-full bg-gray-300 flex items-center justify-center">
                <img src="{{asset('asset/img/man-working-laptop.avif')}}" alt="">
              </div>
              <div class="flex-shrink-0 w-full bg-gray-400 flex items-center justify-center">
                <img src="{{asset('asset/img/man-working-laptop.avif')}}" alt="">
              </div>
            </div>
          </div>
          <button id="desktop-prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded-l">
            &#8249;
          </button>
          <button id="desktop-next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded-r">
            &#8250;
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script>
  const carousels = [
    { id: "mobile", totalSlides: 3 },
    { id: "desktop", totalSlides: 3 }
  ];

  carousels.forEach(({ id, totalSlides }) => {
    const carousel = document.getElementById(${id}-carousel);
    const prev = document.getElementById(${id}-prev);
    const next = document.getElementById(${id}-next);

    let currentIndex = 0;
    const autoPlayInterval = 3000;

    function updateCarousel() {
      const offset = -currentIndex * 100;
      carousel.style.transform = translateX(${offset}%);
    }

    prev.addEventListener("click", () => {
      currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - 1;
      updateCarousel();
    });

    next.addEventListener("click", () => {
      currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
      updateCarousel();
    });

    setInterval(() => {
      currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
      updateCarousel();
    }, autoPlayInterval);
  });
  </script>


  


  <div class="flex-1 ml-0 md:ml-64 pl-5 pr-5 pb-5 ">
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

    <canvas id="serviceChart" ></canvas>
    <canvas id="historyChart"  width="300" height="5"></canvas>
  </div>
</main>



@endsection