@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View All Cities</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100 border ">

  <div class="container mx-auto px-4 py-8 max-w-5xl bg-white rounded shadow-sm mt-5">
    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
      <h1 class="text-2xl font-bold mb-4 md:mb-0">View All Cities</h1>
      <div class="flex flex-col md:flex-row gap-4 items-center">
        <div class="flex items-center">
          <label for="search" class="mr-2">Search:</label>
          <input
            id="search"
            type="text"
            placeholder="Search by city or state"
            class="border rounded px-3 py-1 w-full md:w-auto"
          />
        </div>
        <a href="{{route('admin.Addnewcity')}}">
          <button class="bg-blue-900 text-white px-4 py-2 rounded">
            NEW CITY
          </button>
        </a>
      </div>
    </div>
  
    <div class="overflow-x-auto">
      <table class="w-full border-collapse">
        <thead>
          <tr class="bg-blue-900 text-white">
            <th class="px-4 py-2 text-left">#</th>
            <th class="px-4 py-2 text-left cursor-pointer">
              State
              <span>↕</span> <!-- Sort icon placeholder -->
            </th>
            <th class="px-4 py-2 text-left cursor-pointer">
              City
              <span>↕</span> <!-- Sort icon placeholder -->
            </th>
            <th class="px-4 py-2 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">Telangana</td>
            <td class="px-4 py-2">Adilabad</td>
            <td class="px-4 py-2">
              <button class="text-[#0077B6]">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>

          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">Telangana</td>
            <td class="px-4 py-2">Adilabad</td>
            <td class="px-4 py-2">
              <button class="text-[#0077B6]">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>


          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">Telangana</td>
            <td class="px-4 py-2">Adilabad</td>
            <td class="px-4 py-2">
              <button class="text-[#0077B6]">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>

          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">Telangana</td>
            <td class="px-4 py-2">Adilabad</td>
            <td class="px-4 py-2">
              <button class="text-[#0077B6]">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>

          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">Telangana</td>
            <td class="px-4 py-2">Adilabad</td>
            <td class="px-4 py-2">
              <button class="text-[#0077B6]">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>

          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">Telangana</td>
            <td class="px-4 py-2">Adilabad</td>
            <td class="px-4 py-2">
              <button class="text-[#0077B6]">
                <i class="fas fa-edit w-5 h-5"></i>
                <i class="fas fa-trash w-5 h-5"></i>
              </button>
            </td>
          </tr>
          <!-- Repeat rows -->
        </tbody>
      </table>
    </div>
  
    <div class="mt-4 flex flex-col md:flex-row justify-between items-center">
      <div class="mb-4 md:mb-0">
        Showing 1 to 10 of 59 entries
      </div>
      <div class="flex gap-2">
        <button
          class="px-3 py-1 border rounded disabled:opacity-50"
        >
          Previous
        </button>
        <button class="px-3 py-1 border rounded bg-blue-900 text-white">
          1
        </button>
        <button class="px-3 py-1 border rounded">
          2
        </button>
        <span>...</span>
        <button class="px-3 py-1 border rounded">
          59
        </button>
        <button class="px-3 py-1 border rounded disabled:opacity-50">
          Next
        </button>
      </div>
    </div>
  </div>
  

</body>
</html>

  
@endsection
