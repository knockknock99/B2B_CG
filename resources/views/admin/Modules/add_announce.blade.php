@extends('admin.master_admin_layout')
@section('content_admin')
    


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Announcement Form</title>
</head>
<body class="bg-gray-100 ">
  <div class="max-w-5xl mx-auto p-6 bg-white rounded-lg shadow-sm mt-8 ">
    <!-- Header Section -->
    <header class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold text-gray-900">
        Add New Announcement
      </h1>
      <a href="{{route('admin.announcement')}}" class="text-sm font-medium text-white p-2 rounded bg-blue-900 hover:text-blue-700 transition-colors">
        ALL ANNOUNCEMENTS
      </a>
    </header>

    <!-- Form Section -->
    <form class="space-y-6">
      <!-- User Type Dropdown -->
      <div>
        <label for="userType" class="block text-sm font-medium text-gray-700 mb-1">
          For User Type<span class="text-red-500">*</span>
        </label>
        <div class="relative">
          <select id="userType" class="block w-full rounded-md border border-gray-300 py-2 pl-3 pr-10 text-gray-900 
                  focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 appearance-none bg-white">
            <option value="">-- Choose --</option>
            <option value="1">All Users</option>
            <option value="2">Students</option>
            <option value="3">Teachers</option>
            <option value="4">Parents</option>
          </select>
          <div class="absolute right-3 top-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15.75l7.5-7.5m0 0H8.25m7.5 0V15.75" />
            </svg>
          </div>
        </div>
      </div>

      <!-- Announcement Message -->
      <div>
        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">
          Announcement Message<span class="text-red-500">*</span>
        </label>
        <textarea id="message" rows="4" class="block w-full rounded-md border border-gray-300 py-2 px-3 text-gray-900 
                  placeholder-gray-400 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 resize-none"
          placeholder="Enter your announcement message here..."></textarea>
      </div>

      <!-- Error Message -->
      <div id="error" class="hidden flex items-center gap-2 text-red-600 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938-2.82a9 9 0 1112.727 0M12 9v2m0 4h.01m-6.938-2.82a9 9 0 1112.727 0" />
        </svg>
        <span>Please fill in all required fields.</span>
      </div>

      <!-- Success Message -->
      <div id="success" class="hidden flex items-center gap-2 text-green-600 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5-5a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Announcement submitted successfully!</span>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full sm:w-auto px-6 py-2.5 bg-blue-900 text-white font-medium rounded-md
              hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
        Submit
      </button>
    </form>
  </div>

  <!-- Tailwind JavaScript (Optional for Interactivity) -->
  <script>
    // JavaScript for toggling error/success messages (if needed)
    document.querySelector("form").addEventListener("submit", function (e) {
      e.preventDefault();
      const userType = document.getElementById("userType").value;
      const message = document.getElementById("message").value.trim();
      const errorDiv = document.getElementById("error");
      const successDiv = document.getElementById("success");

      errorDiv.classList.add("hidden");
      successDiv.classList.add("hidden");

      if (!userType || !message) {
        errorDiv.classList.remove("hidden");
      } else {
        successDiv.classList.remove("hidden");
      }
    });
  </script>
</body>
</html>

@endsection
