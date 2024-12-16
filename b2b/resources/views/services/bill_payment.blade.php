@extends('masterLayout')
@section('content')


<div class="controller mt-3 mx-5">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid flex flex-row">
            <a class="navbar-brand mr-2" href="/">Home -></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex flex-row ">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" aria-current="page" href="#">Balance Enquiry -></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mini Statement</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{route('/user/money-transfer/money-transfer')}}">Server I</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<main class="p-4">
 <div class="max-w-5xl mx-auto bg-white  rounded-lg overflow-hidden mt-8">

<div class="container mx-auto mt-10 px-4 ">
    <h2 class="text-2xl font-semibold text-center mb-6">Bill Payment</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 ">
        <!-- Form Section -->
        <div class="p-6 border rounded-lg   ">
            <h5 class="text-xl font-medium mb-4">Bill Payment</h5>
            <form>
                <div class="mb-4 ">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category <span class="text-red-500">*</span></label>
                    <select class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="category" required>
                        <option value="">-- Choose --</option>
                        <option value="electricity">Electricity</option>
                        <option value="water">Water</option>
                        <option value="gas">Gas</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="operator" class="block text-sm font-medium text-gray-700">Operator Name <span class="text-red-500">*</span></label>
                    <select class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="operator" required>
                        <option value="">-- Choose --</option>
                        <option value="operator1">Operator 1</option>
                        <option value="operator2">Operator 2</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="details" class="block text-sm font-medium text-gray-700">Details <span class="text-red-500">*</span></label>
                    <input type="text" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="details" placeholder="Enter details" required>
                </div>

                <div class="mb-4">
                    <label for="mode" class="block text-sm font-medium text-gray-700">Mode <span class="text-red-500">*</span></label>
                    <select class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" id="mode" required>
                        <option value="">-- Select --</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>

                <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Proceed</button>
            </form>
        </div>

        <!-- Bill Details Section -->
        <div class="p-6 border rounded-lg shadow-lg">
            <h5 class="text-xl font-medium mb-4">Bill Details</h5>
            <p class="text-sm text-gray-700">
                Disclaimer: While we support most Billing Payments, we request you to verify with your operator once before proceeding.
            </p>
        </div>
    </div>
</div>

 </div>
</main>

  
@endsection