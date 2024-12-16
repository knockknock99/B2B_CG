@extends('masterLayout')
@section('content')



<div class="controller mt-3 mx-5">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Home -></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Balance Enquiry</a>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Prevent horizontal and vertical overflow on small screens */
        

        /* Optional: If you need to control the body overflow more finely on larger screens */
        
    </style>
</head>
<body>
    <div class="container-fluid mt-4 flex flex-col  lg:flex-row justify-between space-y-4 lg:space-y-0 lg:space-x-4 px-4 lg:px-0">
        <div class="flex space-x-4 flex-col lg:flex-row justify-center align-center">
            <!-- Mobile Recharge Form -->
            <div class="w-full lg:w-[45%] mb-4 flex justify-center align-center ">
                <div class="bg-white shadow-lg rounded-lg w-full">
                    <div class="bg-indigo-100 text-black p-4 rounded-t-lg">
                        <strong>Mobile Recharge</strong>
                    </div>
                    <div class="p-6">
                        <form>
                            <div class="mb-4">
                                <label for="mobile-number" class="block text-sm font-medium">Mobile Number *</label>
                                <input type="text" class="form-input mt-1 w-full" id="mobile-number" placeholder="Enter Mobile Number">
                            </div>
                            <div class="mb-4">
                                <label for="operator" class="block text-sm font-medium">Operator List *</label>
                                <select class="form-select mt-1 w-full" id="operator">
                                    <option value="">-- Choose --</option>
                                    <option value="airtel">Airtel</option>
                                    <option value="jio">Jio</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="circle" class="block text-sm font-medium">Circle *</label>
                                <select class="form-select mt-1 w-full" id="circle">
                                    <option value="">-- Choose --</option>
                                    <option value="delhi">Delhi</option>
                                    <option value="mumbai">Mumbai</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="recharge-amount" class="block text-sm font-medium">Recharge Amount *</label>
                                <input type="text" class="form-input mt-1 w-full" id="recharge-amount" placeholder="Enter Recharge Amount">
                                <small class="text-blue-600">
                                    <a href="#" id="browse-plans-link">Browse Plans</a>
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary w-full text-black bg-indigo-100 py-2 px-4 rounded-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Browse Plans -->
            <div class="w-full lg:w-[45%] mb-4 flex justify-center align-center ">
                <div class="bg-white shadow-lg rounded-lg">
                    <div class="bg-indigo-100 text-black p-4 rounded-t-lg">
                        <strong>Browse Plans</strong>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-500">
                            Disclaimer: While we support most recharges, we request you to verify with your operator once before proceeding.
                        </p>
                        <div id="plans-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('browse-plans-link').addEventListener('click', function(e) {
            e.preventDefault();
    
            // Sample Data (Replace with API call if needed)
            const plans = [{
                    circle: 'Delhi NCR',
                    planType: 'TOPUP',
                    validity: 'N/A',
                    description: 'Talktime of Rs. 7.47, validity unrestricted',
                    price: 10
                },
                {
                    circle: 'Delhi NCR',
                    planType: 'TOPUP',
                    validity: 'N/A',
                    description: 'Talktime of Rs. 14.95, validity unrestricted',
                    price: 20
                },
                {
                    circle: 'Delhi NCR',
                    planType: 'TOPUP',
                    validity: 'N/A',
                    description: 'Talktime of Rs. 22.42, validity unrestricted',
                    price: 30
                },
            ];
    
            // Target container
            const container = document.getElementById('plans-container');
    
            // Clear any existing content
            container.innerHTML = '';
    
            // Dynamically populate plans
            plans.forEach(plan => {
                const planCard = `
                <div class="flex justify-between items-center mb-3">
                    <div>
                        <h6 class="font-semibold">${plan.circle} - ${plan.planType}</h6>
                        <p class="text-sm text-gray-500">${plan.description}</p>
                    </div>
                    <button class="btn btn-primary text-white bg-blue-600 py-1 px-3 rounded-md">Rs. ${plan.price}</button>
                </div>
            `;
                container.innerHTML += planCard;
            });
        });
    </script>
</body>
</html>

</div>
<main>
    
@endsection