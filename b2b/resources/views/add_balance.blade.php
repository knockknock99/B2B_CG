@extends('masterLayout')

@section('content')


<main class="p-4">
<div class="flex items-center justify-center">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Balance Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-md rounded-lg p-8 w-4/5">
    <h2 class="text-3xl font-semibold text-gray-800 text-center mb-4">Add Balance</h2>

    {{-- <form action="#" method="POST" class="space-y-4"> --}}
      <!-- Full Name -->
      <div>
        <label for="full-name" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input 
          type="text" 
          id="full-name" 
          name="full-name" 
          placeholder="John Doe" 
          class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
          required
        >
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="example@email.com" 
          class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
          required
        >
      </div>

      <!-- Amount -->
      <div>
        <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
        <input 
          type="number" 
          id="amount" 
          name="amount" 
          placeholder="$0.00" 
          min="0.01" 
          step="0.01" 
          class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
          required
        >
      </div>

      <!-- Payment Method -->
      <div>
        <label for="payment-method" class="block text-sm font-medium text-gray-700">Payment Method</label>
        <select 
          id="payment-method" 
          name="payment-method" 
          class="mt-1 mb-3 block w-full p-2 border border-gray-900 bg-white rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          <option value="credit-card">Credit Card</option>
          <option value="paypal">PayPal</option>
          <option value="bank-transfer">Bank Transfer</option>
        </select>
      </div>

      <!-- Submit Button -->
      <div>
        <button 
          type="submit" 
          class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          Add Balance
        </button>
      </div>
    </form>
  </div>
</body>
</html>

</div>
</main>

@endsection