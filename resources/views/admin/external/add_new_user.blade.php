@extends('admin.master_admin_layout')

@section('content_admin')



<main class="p-4">
<div class="flex items-center justify-center">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

  <div class="w-full max-w-7xl mx-auto p-6 bg-white">
    <header class=" p-4 mb-6 rounded-t-lg">
      <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-800">Add User</h1>
        <button class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700">
          ALL USERS
        </button>
      </div>
    </header>

    <form action="#" method="POST" class="space-y-6">
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Select Account Type *
          </label>
          <select name="accountType" class="w-full border border-gray-300 rounded-md p-2" required>
            <option value="">-- Choose --</option>
            <option value="personal">Personal</option>
            <option value="business">Business</option>
          </select>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Name *
          </label>
          <input type="text" name="name" placeholder="Full Name" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Father's Name/Husband Name *
          </label>
          <input type="text" name="fatherName" placeholder="Father's Name" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            DOB *
          </label>
          <div class="relative">
            <input type="date" name="dob" class="w-full border border-gray-300 rounded-md p-2" required>
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-2 top-2.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </div>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Shop Name *
          </label>
          <input type="text" name="shopName" placeholder="Firm Name" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Email address *
          </label>
          <input type="email" name="email" placeholder="Email Address" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Mobile Number *
          </label>
          <input type="tel" name="mobile" placeholder="10 Digit Mobile Number" pattern="[0-9]{10}" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Pan Number *
          </label>
          <input type="text" name="panNumber" placeholder="Pan Number" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Aadhar Number *
          </label>
          <input type="text" name="aadhar" placeholder="12 Digit Aadhar Number" pattern="[0-9]{12}" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Gender *
          </label>
          <select name="gender" class="w-full border border-gray-300 rounded-md p-2" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Plan Name *
          </label>
          <select name="planName" class="w-full border border-gray-300 rounded-md p-2" required>
            <option value="">-- Choose --</option>
            <option value="basic">Basic Plan</option>
            <option value="premium">Premium Plan</option>
          </select>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            GST Number
          </label>
          <input type="text" name="gstNumber" placeholder="GST Number" class="w-full border border-gray-300 rounded-md p-2">
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">
            Min Balance *
          </label>
          <input type="number" name="minBalance" placeholder="Min Balance" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>
      </div>

      <div class="mt-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">
          Address Details
        </h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
          <div class="space-y-2">
            <label class="block text-sm font-medium text-gray-700">
              Address *
            </label>
            <input type="text" name="address" placeholder="Full Address" class="w-full border border-gray-300 rounded-md p-2" required>
          </div>

          <div class="space-y-2">
            <label class="block text-sm font-medium text-gray-700">
              State *
            </label>
            <select name="state" class="w-full border border-gray-300 rounded-md p-2" required>
              <option value="">-- Choose State --</option>
              <option value="delhi">Delhi</option>
              <option value="maharashtra">Maharashtra</option>
              <option value="karnataka">Karnataka</option>
            </select>
          </div>

          <div class="space-y-2">
            <label class="block text-sm font-medium text-gray-700">
              City *
            </label>
            <select name="city" class="w-full border border-gray-300 rounded-md p-2" required>
              <option value="">-- Choose City --</option>
              <option value="delhi">New Delhi</option>
              <option value="mumbai">Mumbai</option>
              <option value="bangalore">Bangalore</option>
            </select>
          </div>

          <div class="space-y-2">
            <label class="block text-sm font-medium text-gray-700">
              Pincode *
            </label>
            <input type="text" name="pincode" placeholder="Pincode" pattern="[0-9]{6}" class="w-full border border-gray-300 rounded-md p-2" required>
          </div>
        </div>


        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">
              AEPS/Parent Details
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
              <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">
                 Submerchant Id *
                </label>
                <input type="text" name="address" placeholder="Full Address" class="w-full border border-gray-300 rounded-md p-2" required>
              </div>
    
              <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">
                  Parent Id *
                </label>
                <select name="state" class="w-full border border-gray-300 rounded-md p-2" required>
                  <option value="">self</option>
                  <option value="delhi">Delhi</option>
                  <option value="maharashtra">Maharashtra</option>
                  <option value="karnataka">Karnataka</option>
                </select>
              </div>
    
              <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">
                  Assigned Employee *
                </label>
                <select name="city" class="w-full border border-gray-300 rounded-md p-2" required>
                  <option value="">-- Choose City --</option>
                  <option value="delhi">New Delhi</option>
                  <option value="mumbai">Mumbai</option>
                  <option value="bangalore">Bangalore</option>
                </select>
              </div>
    
              {{-- <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">
                  Pincode *
                </label>
                <input type="text" name="pincode" placeholder="Pincode" pattern="[0-9]{6}" class="w-full border border-gray-300 rounded-md p-2" required>
              </div> --}}
            </div>

      </div>

      <div class="flex justify-end mt-6">
        <button type="submit" class="bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-700">
          Submit
        </button>
      </div>
    </form>
  </div>

</body>
</html>


</div>
</main>
    
@endsection