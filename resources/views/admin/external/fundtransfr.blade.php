@extends('admin.master_admin_layout')
@section('content_admin')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer Funds</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <main class="max-w-5xl mx-auto p-6 bg-white mt-8">
    <header class="flex justify-between items-center mb-8">
      <h1 class="text-2xl font-semibold">Transfer Funds</h1>
      <a
        href="#"
        class="text-blue-600 hover:text-blue-800 flex items-center gap-1 transition-colors"
      >
        ALL RECENT TRANSFERS
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-4 h-4"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 5l7 7-7 7"
          />
        </svg>
      </a>
    </header>

    <form class="space-y-4">
      <div>
        <label for="userId" class="block text-sm font-medium mb-2">
          User ID*
        </label>
        <input
          id="userId"
          type="text"
          placeholder="Enter Receiver User ID"
          class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 transition-shadow border-gray-300 focus:ring-blue-200"
          aria-invalid="false"
        />
        <p
          id="userId-error"
          class="mt-2 text-sm text-red-600 hidden"
          role="alert"
        >
          Error message here
        </p>
      </div>

      <button
        type="submit"
        class="bg-blue-900 text-white px-6 py-3 rounded-lg font-medium
          hover:bg-blue-700 active:bg-blue-800 transition-colors
          disabled:opacity-100 disabled:cursor-allowed"
        disabled
      >
        CHECK USER
      </button>
    </form>
  </main>
</body>
</html>


    
@endsection