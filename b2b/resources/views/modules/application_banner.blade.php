@extends('admin.master_admin_layout')
@section('content_admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Categories</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

  <div class="p-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
      <h1 class="text-2xl font-semibold text-gray-800 mb-4 sm:mb-0">
        View All Service Categories
      </h1>

      <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
        <div class="flex items-center">
          <label class="mr-2">Search:</label>
          <input
            type="text"
            class="border border-gray-300 rounded px-3 py-1"
          />
        </div>

        <button class="bg-blue-900 text-white px-4 py-2 rounded">
          + ADD NEW
        </button>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse">
        <thead>
          <tr class="bg-blue-900 text-white">
            <th class="px-4 py-3 text-left cursor-pointer">
              # <i class="fas fa-arrow-up inline w-4 h-4"></i><i class="fas fa-arrow-down inline w-4 h-4"></i>
            </th>
            <th class="px-4 py-3 text-left cursor-pointer">
              Tittle <i class="fas fa-arrow-up inline w-4 h-4"></i><i class="fas fa-arrow-down inline w-4 h-4"></i>
            </th>
            <th class="px-4 py-3 text-left cursor-pointer">
              Image <i class="fas fa-arrow-up inline w-4 h-4"></i><i class="fas fa-arrow-down inline w-4 h-4"></i>
            </th>
            <th class="px-4 py-3 text-left cursor-pointer">
              Created on <i class="fas fa-arrow-up inline w-4 h-4"></i><i class="fas fa-arrow-down inline w-4 h-4"></i>
            </th>
            <th class="px-4 py-3 text-left">Status</th>
            
            <th class="px-4 py-3 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="px-4 py-3">1</td>
            <td class="px-4 py-3">Login Carousel Image</td>
            <td class="px-4 py-3 h-5 w-5">
              <img src="{{asset('img/gatewy1.png')}}" alt="">
            </td>
            <td class="px-4 py-3">05/05/2024</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            
            <td class="px-4 py-3">
              <div class="flex gap-2">
                <button class="text-blue-600 hover:text-blue-800">
                  <i class="fas fa-edit w-5 h-5"></i>
                </button>
                <button class="text-red-600 hover:text-red-800">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                </button>
              </div>
            </td>
          </tr>




          <tr class="border-b">
            <td class="px-4 py-3">2</td>
            <td class="px-4 py-3">Login Carousel Image</td>
            <td class="px-4 py-3 h-5 w-5">
              <img src="{{asset('img/gatewy2.png')}}" alt="">
            </td>
            <td class="px-4 py-3">05/05/2024</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            
            <td class="px-4 py-3">
              <div class="flex gap-2">
                <button class="text-blue-600 hover:text-blue-800">
                  <i class="fas fa-edit w-5 h-5"></i>
                </button>
                <button class="text-red-600 hover:text-red-800">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                </button>
              </div>
            </td>
          </tr>

          <tr class="border-b">
            <td class="px-4 py-3">3</td>
            <td class="px-4 py-3">Logo </td>
            <td class="px-4 py-3 h-5 w-5">
              <img src="{{asset('img/logo2.jpeg')}}" alt="">
            </td>
            <td class="px-4 py-3">05/05/2024</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            
            <td class="px-4 py-3">
              <div class="flex gap-2">
                <button class="text-blue-600 hover:text-blue-800">
                  <i class="fas fa-edit w-5 h-5"></i>
                </button>
                <button class="text-red-600 hover:text-red-800">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                </button>
              </div>
            </td>
          </tr>


          <tr class="border-b">
            <td class="px-4 py-3">4</td>
            <td class="px-4 py-3">Notification Icon</td>
            <td class="px-4 py-3 h-5 w-5">
              <img src="{{asset('img/aadhar_pay.jpeg')}}" alt="">
            </td>
            <td class="px-4 py-3">05/05/2024</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            
            <td class="px-4 py-3">
              <div class="flex gap-2">
                <button class="text-blue-600 hover:text-blue-800">
                  <i class="fas fa-edit w-5 h-5"></i>
                </button>
                <button class="text-red-600 hover:text-red-800">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                </button>
              </div>
            </td>
          </tr>

          <tr class="border-b">
            <td class="px-4 py-3">5</td>
            <td class="px-4 py-3">Mobile Recharge</td>
            <td class="px-4 py-3 h-5 w-5">
              <img src="{{asset('img/notification5.png')}}" alt="">
            </td>
            <td class="px-4 py-3">05/05/2024</td>
            <td class="px-4 py-3">
              <button class="status-toggle w-12 h-6 rounded-full p-1 transition-colors duration-300 focus:outline-none bg-blue-900" onclick="toggleStatus(this)">
                <div class="status-indicator w-4 h-4 rounded-full bg-white transform translate-x-6"></div>
              </button>
            </td>
            
            <td class="px-4 py-3">
              <div class="flex gap-2">
                <button class="text-blue-600 hover:text-blue-800">
                  <i class="fas fa-edit w-5 h-5"></i>
                </button>
                <button class="text-red-600 hover:text-red-800">
                  <i class="fas fa-trash-alt w-5 h-5"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="flex flex-col sm:flex-row justify-between items-center mt-4">
      <p class="mb-4 sm:mb-0">
        Showing 1 to 2 of 2 entries
      </p>
      <div class="flex gap-2">
        <button class="px-4 py-2 border rounded disabled:opacity-50">
          Previous
        </button>
        <button class="px-4 py-2 bg-blue-900 text-white rounded">
          1
        </button>
        <button class="px-4 py-2 border rounded disabled:opacity-50">
          Next
        </button>
      </div>
    </div>
  </div>

  <script>
    // JavaScript for the status toggle functionality
    function toggleStatus(button) {
      const statusIndicator = button.querySelector('.status-indicator');
      if (statusIndicator.classList.contains('translate-x-6')) {
        statusIndicator.classList.remove('translate-x-6');
        statusIndicator.classList.add('translate-x-0');
        button.classList.remove('bg-blue-900');
        button.classList.add('bg-gray-400');
      } else {
        statusIndicator.classList.remove('translate-x-0');
        statusIndicator.classList.add('translate-x-6');
        button.classList.remove('bg-gray-400');
        button.classList.add('bg-blue-900');
      }
    }
  </script>

</body>
</html>



  
@endsection