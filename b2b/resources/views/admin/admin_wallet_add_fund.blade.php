@extends('admin.master_admin_layout')
@section('content_admin')

<main class="p-4">
  <div class="flex items-center justify-center">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg"> <!-- Increased max-w to xl -->
      <div class="bg-blue-900 text-white text-center py-4 rounded-t-lg">
        <h2 class="text-xl font-semibold">Add Funds to Your Admin Wallet</h2>
      </div>
      <form class="p-6">
        <div class="mb-4">
          <label for="amount" class="block text-gray-700 font-medium mb-2">Amount *</label>
          <input 
            type="number" 
            id="amount" 
            name="amount" 
            placeholder="Enter Amount" 
            required
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>
        <div class="mb-4">
          <label for="txn-type" class="block text-gray-700 font-medium mb-2">Txn Type *</label>
          <select 
            id="txn-type" 
            name="txn-type" 
            required 
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
          >
            <option value="" disabled selected>-- Select --</option>
            <option value="credit">Credit</option>
            <option value="debit">Debit</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="remark" class="block text-gray-700 font-medium mb-2">Remark *</label>
          <input 
            type="text" 
            id="remark" 
            name="remark" 
            placeholder="Enter remark" 
            required
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>
        <button 
          type="submit" 
          class=" bg-blue-900 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300"
        >
          SUBMIT
        </button>
      </form>
    </div>
  </div>
</main>

@endsection
