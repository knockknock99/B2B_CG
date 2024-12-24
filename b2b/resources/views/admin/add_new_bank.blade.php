@extends('admin.master_admin_layout')
@section('content_admin')
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Bank Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/lucide.min.js"></script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-white p-6">
  <main class="max-w-5xl mx-auto bg-white p-8 mt-8">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-2xl font-semibold text-gray-900">Add New Bank Account</h1>
      <button class="flex items-center gap-2 bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
        ALL BANK ACCOUNTS
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
      </button>
    </div>

    <form class="space-y-6">
      <div class="grid grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">
            Bank Name <span class="text-red-500">*</span>
          </label>
          <select
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            required
          >
            <option value="">-- Choose --</option>
            <option value="Chase Bank">Chase Bank</option>
            <option value="Bank of America">Bank of America</option>
            <option value="Wells Fargo">Wells Fargo</option>
            <option value="Citibank">Citibank</option>
            <option value="US Bank">US Bank</option>
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">
            Account Holder Name <span class="text-red-500">*</span>
          </label>
          <input
            type="text"
            required
            placeholder="Enter Account Holder name"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">
            Account Number <span class="text-red-500">*</span>
          </label>
          <input
            type="text"
            required
            placeholder="Enter Account No"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">
            IFSC Code <span class="text-red-500">*</span>
          </label>
          <input
            type="text"
            required
            placeholder="Enter IFSC Code"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Branch Address
        </label>
        <input
          type="text"
          placeholder="Enter Address"
          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <button
        type="submit"
        class="w-32 bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors"
      >
        SUBMIT
      </button>
    </form>
  </main>
</body>
</html>

  

@endsection