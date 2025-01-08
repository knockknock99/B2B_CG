@extends('masterLayout')
@section('content')
<main class="p-4">
  <div class="max-w-8xl mx-auto rounded-lg overflow-hidden ">

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Bank Accounts</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <body class="bg-gray-100 font-sans p-5">
    
        <h4 class="text-center text-blue-600 font-bold text-2xl mb-6">My Bank Accounts</h4>
    
        <div class="flex gap-8 justify-center items-center">
            <!-- Bank Card 1 -->
            <div class="w-72 p-6 bg-white rounded-lg shadow-md text-center">
                <h5 class="text-xl font-semibold text-gray-800 mb-3">STATE BANK OF INDIA</h5>
                <p class="text-gray-600 mb-2"><strong>Account No:</strong> xxxxxxxxxx</p>
                <p class="text-gray-600 mb-2"><strong>IFSC Code:</strong> IFSC000CODE</p>
                <p class="text-gray-600 mb-2"><s trong>AC Holder:</s> BENE NAME</p>
                <div class="mt-3">
                    <span class="bg-green-500 text-white px-4 py-2 rounded-md text-sm">Verified</span>
                </div>
            </div>
    
            <!-- Bank Card 2 -->
            <div class="w-72 p-6 bg-white rounded-lg shadow-md text-center">
                <h5 class="text-xl font-semibold text-gray-800 mb-3">STATE BANK OF INDIA</h5>
                <p class="text-gray-600 mb-2"><strong>Account No:</strong> xxxxxxxxxx</p>
                <p class="text-gray-600 mb-2"><strong>IFSC Code:</strong> IFSC000CODE</p>
                <p class="text-gray-600 mb-2"><strong>AC Holder:</strong> BENE NAME</p>
                <div class="mt-3">
                    <button class="bg-yellow-400 text-white px-4 py-2 rounded-md text-sm">Upload Document</button>
                </div>
            </div>
        </div>
    
        <div class="text-center mt-6 space-x-4">
            <a href="{{route('user.addbankaccont')}}" class="bg-blue-600 text-white px-6 py-3 rounded-md text-lg hover:bg-blue-700">Add New Bank Account</a>
            <button class="bg-gray-600 text-white px-6 py-3 rounded-md text-lg hover:bg-gray-700">New Transaction</button>
        </div>
    
    </body>
    
    </html>
    

  </div>  
@endsection