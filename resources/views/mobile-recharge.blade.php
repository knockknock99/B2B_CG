@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Recharge</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="flex flex-col lg:flex-row">
        <!-- Main Content -->
        <div class="ml-0 lg:ml-64 w-full px-4 sm:px-6 lg:px-10 py-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Mobile Recharge Form -->
                <section class="bg-white shadow-md rounded-lg p-6 sm:p-8 flex flex-col justify-between">
                    <h2 class="text-lg md:text-xl font-bold text-blue-600 mb-4 text-left">Mobile Recharge</h2>
                    <form class="space-y-4 max-w-md mx-auto">
                        <input type="text"
                            placeholder="Mobile Number *"
                            class="w-full border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2">
                        <select class="w-full border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2 text-muted">
                            <option value="" disabled selected> Operator List </option>
                            <option value="airtel">Airtel</option>
                            <option value="jio">Jio</option>
                        </select>
                        <select class="w-full border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2 text-muted">
                            <option value="" disabled selected> Circle </option>
                            <option value="delhi">Delhi</option>
                            <option value="mumbai">Mumbai</option>
                        </select>
                        <input type="text" placeholder="Enter Recharge Amount *" class="w-full border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2">
                        <a href="#" id="browse-plans-link" class="text-blue-500 text-sm block mb-2">Browse Plans</a>
                        <div class="flex justify-start">
                            <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 text-sm">Submit</button>
                        </div>
                    </form>
                </section>

                <!-- Browse Plans -->
                <section class="bg-white shadow-md rounded-lg p-6 sm:p-8 flex flex-col">
                    <h2 class="text-lg md:text-xl font-bold text-blue-600 mb-4 text-left">Browse Plans</h2>
                    <p class="text-gray-600 text-sm mb-4 text-center">Disclaimer: Verify with your operator before proceeding.</p>
                    <div id="plans-container" class="space-y-4 overflow-y-auto max-h-60">
                        <!-- Plans will be dynamically loaded here -->
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('browse-plans-link').addEventListener('click', function(e) {
            e.preventDefault();

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

            const container = document.getElementById('plans-container');
            container.innerHTML = '';

            plans.forEach(plan => {
                const planCard = `
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center bg-gray-100 p-4 rounded">
                        <div class="mb-4 md:mb-0">
                            <h6 class="font-bold text-gray-800">${plan.circle} - ${plan.planType}</h6>
                            <p class="text-sm text-gray-600">${plan.description}</p>
                        </div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Rs. ${plan.price}</button>
                    </div>
                `;
                container.innerHTML += planCard;
            });
        });
    </script>
</body>

</html>
@endsection