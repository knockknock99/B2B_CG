

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

  <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
    <div class="flex justify-center mb-6">
      <img src="{{asset('asset/img/logo2.jpeg')}}" alt="Logo" class="w-40 h-16">
    </div>

    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Reset Password</h2>

    <!-- Reset Password Form -->
    <form action="{{route('user.updatepassword')}}" method="POST" class="space-y-4">
      @csrf

      <div>
        <div>
          <input type="hidden" value="{{$token}}" name="token">
        </div>
        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"
          class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          required>
        @error('email')
          <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
      </div>

     
      <div>
        <label for="password" class="block text-sm font-medium text-gray-600">New Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your new password"
          class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          required>
        @error('password')
          <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
      </div>

      <!-- Confirm Password Field -->
      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-600">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password"
          class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          required>
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" class="w-full py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
          Reset Password
        </button>
      </div>
    </form>

    <!-- Back to Login Link -->
    <div class="mt-4 text-center">
      <p class="text-sm">Remember your password? <a href="" class="text-blue-500 hover:underline">Login</a></p>
    </div>
  </div>

</body>
</html>
