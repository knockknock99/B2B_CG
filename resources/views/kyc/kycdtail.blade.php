@extends('masterLayout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>General Information Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center">

  <div class="max-w-[1000px] w-[950px] mx-auto p-10">
    <h1 class="text-blue-900 text-2xl font-black mb-8">
      KYC Information
    </h1>

    <form action="{{ route('kyc.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
      @csrf

      <!-- First Name and Last Name -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input
          type="text"
          placeholder="First Name"
          name="first_name"
          value="{{ old('first_name') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('first_name') invlaid
          @enderror"
        />
        @error('first_name')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <input
          type="text"
          placeholder="Last Name"
          name="last_name"
          value="{{ old('last_name') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('last_name') invlaid
          @enderror"
        />
        @error('last_name')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- Gender -->
      <div class="grid grid-cols-1 gap-6">
        <select name="gender" class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors">
          <option value="">Select Gender</option>
          <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
          <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
          <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
        </select>
        @error('gender')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- Email and Phone -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input
          type="email"
          placeholder="Email"
          name="email"
          value="{{ old('email') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('email') invlaid
          @enderror"
        />
        @error('email')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <input
          type="phone"
          placeholder="Phone"
          name="phone"
          value="{{ old('phone') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('phone') invlaid
          @enderror"
        />
        @error('phone')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- DOB and Password -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input
          type="date"
          name="dob"
          value="{{ old('dob') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('dob') invlaid
          @enderror"
        />
        @error('dob')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <input
          type="password"
          placeholder="Password"
          name="password"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('password') invlaid
          @enderror"
        />
        @error('password')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- State and City -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input
          type="text"
          placeholder="State"
          name="state"
          value="{{ old('state') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('state') invlaid
          @enderror"
        />
        @error('state')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <input
          type="text"
          placeholder="City"
          name="city"
          value="{{ old('city') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('city') invlaid
          @enderror"
        />
        @error('city')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- Pin, Firm Name, and Address -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Pin -->
        <input
          type="text"
          placeholder="Pin (6 characters)"
          name="pin"
          value="{{ old('pin') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('pin') invlaid
          @enderror"
        />
        @error('pin')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <!-- Firm Name -->
        <input
          type="text"
          placeholder="Firm Name"
          name="firm_name"
          value="{{ old('firm_name') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('firm_name') invlaid
          @enderror"
        />
        @error('firm_name')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <div class="grid grid-cols-1 gap-6">
        <!-- Address -->
        <textarea
          name="address"
          placeholder="Address"
          rows="1"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('address') invlaid
          @enderror"
        >{{ old('address') }}</textarea>
        @error('address')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- Aadhar and PAN Numbers -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input
          type="text"
          placeholder="Aadhar Number"
          name="aadhar_number"
          value="{{ old('aadhar_number') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('aadhar_number') invlaid
          @enderror"
        />
        @error('aadhar_number')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <input
          type="text"
          placeholder="PAN Number"
          name="pan_number"
          value="{{ old('pan_number') }}"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors @error('pan_number') invlaid
          @enderror"
        />
        @error('pan_number')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- File Uploads -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="ml-2 block text-xs font-medium text-gray-700 mb-1">Aadhar Front</label>
          <input
            type="file"
            name="aadhar_front"
            accept=".pdf,.jpg,.jpeg,.png"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:bg-blue-800 file:text-white hover:file:bg-blue-600 transition-colors @error('aadhar_front') invlaid
            @enderror"
          />
          @error('aadhar_front')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="ml-2 block text-xs font-medium text-gray-700 mb-1">Aadhar Back</label>
          <input
            type="file"
            name="aadhar_back"
            accept=".pdf,.jpg,.jpeg,.png"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:bg-blue-800 file:text-white hover:file:bg-blue-600 transition-colors @error('aadhar_back') invlaid
            @enderror"
          />
          @error('aadhar_back')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- PAN Upload -->
        <div>
          <label class="ml-2 block text-xs font-medium text-gray-700 mb-1">PAN Card Upload</label>
          <input
            type="file"
            name="pan_upload"
            accept=".jpg,.jpeg,.png"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:bg-blue-800 file:text-white hover:file:bg-blue-600 transition-colors @error('pan_upload') invlaid
            @enderror"
          />
          @error('pan_upload')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Front-Facing Picture Upload -->
        <div>
          <label class="ml-2 block text-xs font-medium text-gray-700 mb-1">Front-Facing Picture</label>
          <input
            type="file"
            name="frontpic"
            accept=".jpg,.jpeg,.png"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:bg-blue-800 file:text-white hover:file:bg-blue-600 transition-colors @error('frontpic') invlaid
            @enderror"
          />
          @error('frontpic')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <!-- Submit Button -->
      <div class="mt-6">
        <button type="submit" class="w-[200px] py-2 px-4 bg-blue-900 text-white rounded-lg hover:bg-blue-600 transition-colors">
          Submit
        </button>
      </div>
    </form>
  </div>

</body>
</html>
@endsection
