@extends('admin.master_admin_layout')

@section('content_admin')
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New City</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide-icons"></script>
  <style>
    /* Ensuring the dropdown opens downward */
    select {
      z-index: 10; /* Ensure the dropdown is above other elements */
    }
    .relative {
      position: relative;
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
  <div class="max-w-5xl mx-auto p-6">
    <header class="flex justify-between items-center mb-8">
      <div class="flex items-center gap-2">
        <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10.5c0 3-2.7 5.5-6 5.5s-6-2.5-6-5.5S9 5 12 5s6 2.5 6 5.5z"></path><path d="M12 15c4.4 0 8 2.5 8 6v1H4v-1c0-3.5 3.6-6 8-6z"></path></svg>
        <h1 class="text-2xl font-semibold text-gray-800">Add New City</h1>
      </div>
      <button class="px-4 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-700 transition-colors" onclick="window.location.href = '/cities'">
        ALL CITIES
      </button>
    </header>

    <form class="bg-white rounded-lg shadow-md p-6" action="#" method="POST">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="state" class="block text-sm font-medium text-gray-700 mb-1">
            State Name <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <select id="state" name="state" class="block w-full rounded-lg border border-gray-300 py-2 pl-3 pr-10 text-gray-900 appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">-- Choose State --</option>
              <option value="Alabama">Alabama</option>
              <option value="Alaska">Alaska</option>
              <option value="Arizona">Arizona</option>
              <option value="Arkansas">Arkansas</option>
              <option value="California">California</option>
              <option value="Colorado">Colorado</option>
              <option value="Connecticut">Connecticut</option>
              <option value="Delaware">Delaware</option>
              <option value="Florida">Florida</option>
              <option value="Georgia">Georgia</option>
              <option value="Hawaii">Hawaii</option>
              <option value="Idaho">Idaho</option>
              <option value="Illinois">Illinois</option>
              <option value="Indiana">Indiana</option>
              <option value="Iowa">Iowa</option>
              <option value="Kansas">Kansas</option>
              <option value="Kentucky">Kentucky</option>
              <option value="Louisiana">Louisiana</option>
              <option value="Maine">Maine</option>
              <option value="Maryland">Maryland</option>
              <option value="Massachusetts">Massachusetts</option>
              <option value="Michigan">Michigan</option>
              <option value="Minnesota">Minnesota</option>
              <option value="Mississippi">Mississippi</option>
              <option value="Missouri">Missouri</option>
              <option value="Montana">Montana</option>
              <option value="Nebraska">Nebraska</option>
              <option value="Nevada">Nevada</option>
              <option value="New Hampshire">New Hampshire</option>
              <option value="New Jersey">New Jersey</option>
              <option value="New Mexico">New Mexico</option>
              <option value="New York">New York</option>
              <option value="North Carolina">North Carolina</option>
              <option value="North Dakota">North Dakota</option>
              <option value="Ohio">Ohio</option>
              <option value="Oklahoma">Oklahoma</option>
              <option value="Oregon">Oregon</option>
              <option value="Pennsylvania">Pennsylvania</option>
              <option value="Rhode Island">Rhode Island</option>
              <option value="South Carolina">South Carolina</option>
              <option value="South Dakota">South Dakota</option>
              <option value="Tennessee">Tennessee</option>
              <option value="Texas">Texas</option>
              <option value="Utah">Utah</option>
              <option value="Vermont">Vermont</option>
              <option value="Virginia">Virginia</option>
              <option value="Washington">Washington</option>
              <option value="West Virginia">West Virginia</option>
              <option value="Wisconsin">Wisconsin</option>
              <option value="Wyoming">Wyoming</option>
            </select>
            <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-400 pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"></path></svg>
          </div>
          <p class="mt-1 text-sm text-red-500">Please select a state</p>
        </div>

        <div>
          <label for="city" class="block text-sm font-medium text-gray-700 mb-1">
            City Name <span class="text-red-500">*</span>
          </label>
          <input type="text" id="city" name="city" placeholder="Enter city name" class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <p class="mt-1 text-sm text-red-500">City name can only contain letters, spaces and hyphens</p>
        </div>
      </div>

      <div class="mt-6">
        <button type="submit" class="px-6 py-2.5 bg-blue-900 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
          SUBMIT
        </button>
      </div>
    </form>
  </div>
</body>
</html>

@endsection
