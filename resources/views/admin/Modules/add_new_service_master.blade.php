@extends('admin.master_admin_layout')
@section('content_admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Service</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 ">

  <div class="w-full mx-auto p-6">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-2xl font-semibold">Add New Service</h1>
      <button class="flex items-center gap-2 px-4 py-2 bg-blue-900 text-white rounded-md hover:bg-blue-700 transition-colors">
        ALL SERVICES
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6" />
        </svg>
      </button>
    </div>

    <!-- Form Section -->
    <form class="space-y-6 bg-white rounded-lg p-6 shadow-sm">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Service Category -->
        <div>
          <label class="block mb-2 text-sm font-medium">
            Service Category <span class="text-red-500">*</span>
          </label>
          <select
            name="category"
            class="w-full p-2.5 outline-none rounded-md border-gray-300"
          >
            <option value="">-- select --</option>
            <option value="ONLINE SERVICES">ONLINE SERVICES</option>
            <option value="IN-PERSON SERVICES">IN-PERSON SERVICES</option>
            <option value="CONSULTING">CONSULTING</option>
            <option value="TRAINING">TRAINING</option>
            <option value="MAINTENANCE">MAINTENANCE</option>
          </select>
        </div>

        <!-- Service Name -->
        <div>
          <label class="block mb-2 text-sm font-medium">
            Service Name <span class="text-red-500">*</span>
          </label>
          <input
            type="text"
            name="name"
            placeholder="Enter service title"
            class="w-full p-2.5  outline-none rounded-md border-gray-300"
          />
        </div>

        <!-- Image/Icon -->
        <div>
          <label class="block mb-2 text-sm font-medium">Image/Icon</label>
          <div class="flex items-center gap-4">
            <label class="flex items-center gap-2 px-4 py-2.5 outline-none border-gray-300 rounded-md cursor-pointer hover:bg-gray-50">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
              <span>Browse...</span>
              <input type="file" name="image" accept="image/*" class="hidden" />
            </label>
            <img
              src="https://via.placeholder.com/40"
              alt="Preview"
              class="h-10 w-10 object-cover rounded"
            />
          </div>
        </div>

        <!-- Service Type -->
        <div>
          <label class="block mb-2 text-sm font-medium">
            Service Type <span class="text-red-500">*</span>
          </label>
          <select
            name="type"
            class="w-full p-2.5 outline-none rounded-md border-gray-300"
          >
            <option value="">-- select --</option>
            <option value="One-time">One-time</option>
            <option value="Recurring">Recurring</option>
            <option value="Subscription">Subscription</option>
            <option value="Package">Package</option>
          </select>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="flex justify-start">
        <button
          type="submit"
          class="px-6 py-2.5 bg-blue-900 text-white font-medium rounded-md hover:bg-blue-700 transition-colors"
        >
          SUBMIT
        </button>
      </div>
    </form>
  </div>

</body>
</html>



  
@endsection
