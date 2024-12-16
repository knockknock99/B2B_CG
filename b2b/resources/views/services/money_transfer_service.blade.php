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
<div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-8">

<div class="container mx-auto p-6">
    <div class="max-w-sm mx-auto  p-6 rounded-lg ">
        <h3 class="text-2xl font-bold text-center mb-6 text-gray-800">Check Mobile Number</h3>

        @if(session('success'))
            <div class="alert alert-success bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="mobileNumber" class="block text-sm font-medium text-gray-700">Mobile No<span class="text-red-500">*</span></label>
                <input type="text" class="w-full p-3 border rounded-md mt-2" id="mobileNumber" name="mobile_number" placeholder="10 Digit Mobile Number" required>
            </div>
            <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">CHECK</button>
        </form>

        <p class="text-sm text-gray-500 text-center mt-4">Please enter a valid 10 digit mobile number.</p>
    </div>
</div>

</div>
</main>
@endsection