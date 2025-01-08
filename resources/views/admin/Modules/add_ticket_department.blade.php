@extends('admin.master_admin_layout')
@section('content_admin')
    


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Ticket Department Form</title>
</head>
<body class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
  <div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
    <header class="flex justify-between items-center mb-6">
      <div class="flex items-center gap-2">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg> --}}
        <h1 class="text-2xl font-semibold text-gray-800">Add New</h1>
      </div>
      <button class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors text-sm">
        ALL TICKET TYPES
      </button>
    </header>

    <form class="bg-white rounded-lg shadow-sm p-6 space-y-6">
      <div class="flex flex-col sm:flex-row sm:gap-4">
        <!-- Ticket Department Name -->
        <div class="flex-1">
          <label for="departmentName" class="block text-sm font-medium text-gray-700 mb-1">
            Ticket Department Name *
          </label>
          <input
            type="text"
            id="departmentName"
            name="departmentName"
            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
            placeholder="Enter department name"
          />
          <p class="mt-1 text-sm text-red-500 hidden">Department name is required</p>
        </div>

        <!-- Status -->
        <div class="flex-1">
          <label for="status" class="block text-sm font-medium text-gray-700 mb-1">
            Status *
          </label>
          <select
            id="status"
            name="status"
            class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
          >
            <option value="">Select</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
          <p class="mt-1 text-sm text-red-500 hidden">Status is required</p>
        </div>
      </div>

      <button
        type="submit"
        class="w-full sm:w-auto px-6 py-2 bg-blue-900 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
      >
        SUBMIT
      </button>
    </form>
  </div>
</body>
</html>


@endsection
