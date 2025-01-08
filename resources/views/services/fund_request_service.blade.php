@extends('masterLayout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for Funds</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-5">

    <div class=" mx-auto bg-white p-8 rounded-lg shadow-md max-w-lg mt-6">
        <h4 class="text-left text-blue-600 font-bold text-xl mb-6">Request for Funds</h4>

        @if(session('success'))
        <div class="alert alert-success mb-4 bg-green-100 text-green-800 p-4 rounded-md">
            {{ session('success') }}
        </div>
        @endif

        <form method="POST" action="">
            @csrf

            <div class="">
                <select id="company_bank" name="company_bank" class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3" required>
                    <option value="" disabled selected>Company Bank</option>
                    <option value="bank1">Bank 1</option>
                    <option value="bank2">Bank 2</option>
                </select>
                @error('company_bank')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-5">
                <input
                    type="date"
                    id="deposit_date"
                    name="deposit_date"
                    class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3"
                    placeholder="Deposit Date *"
                    required />
                @error('deposit_date')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-5">
                <select
                    id="payment_mode"
                    name="payment_mode"
                    class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3"
                    required>
                    <option value="" disabled selected>Payment Mode *</option>
                    <option value="cash">Cash</option>
                    <option value="cheque">Cheque</option>
                    <option value="online">Online</option>
                </select>
                @error('payment_mode')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-5">
                <input
                    type="number"
                    id="amount"
                    name="amount"
                    class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3"
                    placeholder="Enter Amount *"
                    required />
                @error('amount')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-5">
                <textarea
                    id="remark"
                    name="remark"
                    class="form-control block w-full border-b-2 border-gray-300 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 py-2 px-3"
                    placeholder="Enter Remark"></textarea>
                @error('remark')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn bg-blue-600 text-white w-full py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Send Request
            </button>
        </form>
    </div>


    <div id="confirmation-modal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 hidden">
        <div class="bg-white rounded-lg p-6 max-w-sm w-full">
            <div class="flex justify-end">
                <button id="close-modal-btn" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="text-center mb-6">
                <div class="mx-auto w-12 h-12 mb-4 text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M12 9v6" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Are you sure?</h3>
            </div>
            <div class="flex gap-4">
                <button id="confirm-btn" class="flex-1 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition-colors">Yes, Continue!</button>
                <button id="cancel-btn" class="flex-1 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">No, Cancel!</button>
            </div>
        </div>

</body>

</html>

@endsection
