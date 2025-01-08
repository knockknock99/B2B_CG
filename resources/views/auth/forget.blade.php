<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #f4f8fb;
    }
  </style>
</head>
<body class="flex justify-center items-center h-2/5 bg-gray-100">

  <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
    <div class="flex justify-center mb-16">
      <img src="{{asset('asset/img/logo2.jpeg')}}" alt="Logo" class="w-48 h-10">
    </div>

    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Forgot Password</h2>
    
    <!-- Forgot Password Form -->
    <form action="{{route('auth.submitpassword')}}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your Email"
          class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <button type="submit" class="w-full py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
          Send Password Reset Link
        </button>
      </div>
    </form>

    <!-- Back to Login Link -->
    <div class="mt-4 text-center">
      <p class="text-sm">Remember your password? <a href="{{route('user.login')}}" class="text-blue-500 hover:underline">Login</a></p>
    </div>
  </div>

</body>
</html>
