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

  <div class=" max-w-[1000px] w-[950px] mx-auto p-10">
    <h1 class="text-blue-900 text-2xl font-black mb-8 ">
      KYC Information
    </h1>

    <form class="space-y-6">
      <div class="relative">
        <select
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] appearance-none bg-transparent transition-colors"
          defaultValue=""
        >
          <option value="" disabled>Title</option>
          <option value="mr">Mr.</option>
          <option value="mrs">Mrs.</option>
          <option value="ms">Ms.</option>
          <option value="dr">Dr.</option>
        </select>
        <svg class="absolute right-3 top-3 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"></path></svg>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input
          type="text"
          placeholder="First Name"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors focus:bg-blue-800"
        />
        <input
          type="text"
          placeholder="Last Name"
          class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent transition-colors  focus:bg-blue-800"
        />
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <input
            type="text"
            placeholder="Aadhar Number"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:bg-blue-800 bg-transparent transition-colors"
          />
        </div>
        <div>
          <input
            type="text"
            placeholder="PAN Number"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:bg-blue-800 bg-transparent transition-colors"
          />
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class=" ml-2 block text-xs font-medium text-gray-700 mb-1">Aadhar Front</label>
          <input
            type="file"
            accept=".pdf,.jpg,.jpeg,.png"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:bg-blue-800 file:text-white hover:file:bg-blue-600 transition-colors"
          />
        </div>
        <div>
          <label class="ml-2 block text-xs font-medium text-gray-700 mb-1">Aadhar Back</label>
          <input
            type="file"
            accept=".pdf,.jpg,.jpeg,.png"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:border-[#1E90FF] bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:bg-blue-800 file:text-white hover:file:bg-blue-600 transition-colors"
          />
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="ml-2 block text-xs font-medium text-gray-700 mb-1">PAN Upload</label>
          <input
            type="file"
            accept=".pdf,.jpg,.jpeg,.png"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:bg-blue-800 bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:bg-blue-800 file:text-white hover:file:bg-blue-600 transition-colors"
          />
        </div>
        <div>
          <label class="ml-2 block text-xs font-medium text-gray-700 mb-1">Bank Cheque or Passbook First Page</label>
          <input
            type="file"
            accept=".pdf,.jpg,.jpeg,.png"
            class="w-full p-2 border-b border-gray-200 focus:outline-none focus:border-b-2 focus:bg-blue-800 bg-transparent file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-xs file:bg-blue-800 file:text-white hover:file:bg-blue-600 transition-colors"
          />
        </div>
      </div>

      <div class="">
        <button type="submit" class="w-[200px]  py-2 px-4 bg-blue-900 text-white rounded-lg hover:bg-blue-600 transition-colors">
          Submit
        </button>
      </div>
    </form>
  </div>

</body>
</html>

@endsection