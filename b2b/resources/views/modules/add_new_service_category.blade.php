@extends('admin.master_admin_layout')
@section('content_admin')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Service Category</title>
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0"></script>
</head>
<body class="bg-gray-100">
  <main class="max-w-4xl mx-auto p-6">
    <div class="bg-white rounded-lg shadow-sm p-6">
      <header class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-semibold text-gray-900">
          Add New Service Category
        </h1>
        <a
          href="/categories"
          class="px-4 py-2 text-sm font-medium text-white bg-blue-900 rounded hover:bg-blue-700 transition-colors"
        >
          ALL CATEGORIES
        </a>
      </header>

      <form action="#" method="post" class="space-y-4">
        <div>
          <label
            for="categoryName"
            class="block text-sm font-medium text-gray-700 mb-1"
          >
            Service Category Name <span class="text-red-500">*</span>
          </label>
          <input
            type="text"
            id="categoryName"
            name="categoryName"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            placeholder="Enter service category title"
            required
          />
        </div>

        <div id="error" class="hidden flex items-center gap-2 text-red-600 text-sm">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.054 0 1.636-1.272.866-2.016l-6.928-6.928a1.5 1.5 0 00-2.12 0l-6.928 6.928c-.77.744-.188 2.016.866 2.016z" />
          </svg>
          <span>Service category name is required</span>
        </div>

        <div id="success" class="hidden flex items-center gap-2 text-green-600 text-sm">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
          <span>Service category added successfully!</span>
        </div>

        <button
          type="submit"
          class="w-32 px-4 py-2 text-sm font-medium text-white bg-blue-900 rounded hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        >
          SUBMIT
        </button>
      </form>
    </div>
  </main>

  <script>
    document.querySelector('form').addEventListener('submit', function (e) {
      e.preventDefault();

      const categoryName = document.getElementById('categoryName').value.trim();
      const errorDiv = document.getElementById('error');
      const successDiv = document.getElementById('success');

      errorDiv.classList.add('hidden');
      successDiv.classList.add('hidden');

      if (!categoryName) {
        errorDiv.classList.remove('hidden');
        return;
      }

      successDiv.classList.remove('hidden');
      document.getElementById('categoryName').value = '';
    });
  </script>
</body>
</html>

    
@endsection