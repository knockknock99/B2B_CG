@extends('masterLayout')
@section('content')



<div class="controller mt-3 mx-5">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid flex flex-row">
            <a class="navbar-brand" href="/">Home -></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Balance Enquiry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mini Statement</a>
                    </li> --}}
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{route('/user/money-transfer/money-transfer')}}">Server I</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<main class="p-4">
<div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
<div class="flex flex-col lg:flex-row w-full">
    <!-- Main Content -->
    <main class="flex-1 p-6 w-full">
        <div class="header mb-6">
            <h2 class="text-black text-2xl font-semibold">DTH Recharge</h2>
        </div>
        <div class="container ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Left: Recharge Form -->
                <div class="card  rounded-lg p-4">
                    <div class="card-header text-black bg-indigo-50 rounded-t-lg p-2">
                        <strong>DTH Recharge</strong>
                    </div>
                    <div class="card-body p-4">
                        <!-- Form Start -->
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="dthNumber" class="block text-sm font-medium text-gray-700">DTH Number *</label>
                                <input type="text" id="dthNumber" name="dthNumber" class="form-input w-full p-3 border rounded-md" placeholder="Enter DTH Number" required>
                            </div>
                            <div class="mb-4">
                                <label for="operator" class="block text-sm font-medium text-gray-700">Operator List *</label>
                                <select id="operator" name="operator" class="form-select w-full p-3 border rounded-md" required>
                                    <option value="">-- Choose --</option>
                                    <option value="Tata Sky">Tata Sky</option>
                                    <option value="Dish TV">Dish TV</option>
                                    <option value="Airtel DTH">Airtel DTH</option>
                                    <option value="Sun Direct">Sun Direct</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="rechargeAmount" class="block text-sm font-medium text-gray-700">Recharge Amount *</label>
                                <input type="number" id="rechargeAmount" name="rechargeAmount" class="form-input w-full p-3 border rounded-md" placeholder="Recharge Amount" required>
                            </div>
                            <button type="submit" class="w-full py-3 bg-indigo-50 text-black font-semibold rounded-md hover:bg-indigo-100">Submit</button>
                        </form>
                        <!-- Form End -->
                    </div>
                </div>

                <!-- Right: DTH Information -->
                <div class="card  rounded-lg p-4">
                    <div class="card-header text-black bg-indigo-50 rounded-t-lg p-2">
                        <strong>DTH Information</strong>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-sm text-gray-600">
                            Disclaimer: While we support most recharges, we request you to verify with your operator once before proceeding.
                        </p>
                        <div id="plans-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Mobile Sidebar Toggle (Optional) -->
<div class="md:hidden fixed bottom-4 right-4 p-3">
    <button class="bg-blue-500 text-white p-3 rounded-full" onclick="toggleSidebar()">Menu</button>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('hidden');
    }
</script>

</div>
</main>
@endsection
