@extends('masterLayout')
@section('content')


<div class="controller mt-3 mx-5">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ml-3 flex flex-row mr-5">
        <div class="container-fluid flex flex-row ">
            <a class="navbar-brand mr-2" href="/">Home -></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex flex-row ">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" aria-current="page" href="/">Balance Enquiry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Mini Statement</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{route('/user/money-transfer/money-transfer')}}">Server I</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<main class="p-4">
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-8">

<div class="container mx-auto bg-white p-6 rounded-lg shadow-md max-w-3xl">
    <h2 class="text-center text-2xl font-semibold mb-6">Request for Funds</h2>

    @if(session('success'))
        <div class="alert alert-success bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="">
        @csrf
        <div class="mb-6">
            <label for="company_bank" class="block text-sm font-medium text-gray-700">Company Bank</label>
            <select id="company_bank" name="company_bank" class="form-select w-full p-3 border rounded-md" required>
                <option value="">-- Choose --</option>
                <option value="bank1">Bank 1</option>
                <option value="bank2">Bank 2</option>
            </select>
            @error('company_bank')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="deposit_date" class="block text-sm font-medium text-gray-700">Deposit Date</label>
            <input type="date" id="deposit_date" name="deposit_date" class="form-input w-full p-3 border rounded-md" required>
            @error('deposit_date')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="payment_mode" class="block text-sm font-medium text-gray-700">Payment Mode</label>
            <select id="payment_mode" name="payment_mode" class="form-select w-full p-3 border rounded-md" required>
                <option value="cash">Cash</option>
                <option value="cheque">Cheque</option>
                <option value="online">Online</option>
            </select>
            @error('payment_mode')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
            <input type="number" id="amount" name="amount" class="form-input w-full p-3 border rounded-md" placeholder="Enter Amount" required>
            @error('amount')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="remark" class="block text-sm font-medium text-gray-700">Remark</label>
            <textarea id="remark" name="remark" class="form-textarea w-full p-3 border rounded-md" placeholder="Enter remark"></textarea>
            @error('remark')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">Send Request</button>
    </form>
</div>

</div>
</main>

@endsection