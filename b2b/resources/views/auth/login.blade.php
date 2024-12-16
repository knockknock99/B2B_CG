
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f8fb;
      margin: 0;
      padding: 0;
    }

    .main-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      height: 90vh; /* Full viewport height */
      width: 70%;
      background-color: white;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
      overflow: hidden;
      padding: 20px;
      margin-top: 10px;
    }

    .carousel-container, .form-container {
      flex: 1;
      min-width: 400px; /* Ensure sections don't shrink too small */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%; /* Ensure both sections fill the available height */
    }

    .carousel-item img {
      width: 450px; /* Ensure the images cover the full width of the container */
      height: 450px; /* Increased height for carousel images */
      border-radius: 8px; /* Optional: Add rounded corners to the images */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for a more modern look */
    }

    .form-section {
      background: white;
      padding: 10px;
      border-radius: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px; /* Keep the form compact */
    }

    .form-section .btn-primary {
      background-color: #0088cc;
      border: none;
    }

    .form-section .btn-primary:hover {
      background-color: #005fa3;
    }

    .sign-in-link {
      text-align: center;
      margin-top: 10px;
    }

    .sign-in-link a {
      font-size: 14px;
      color: #0088cc;
      text-decoration: none;
    }

    .sign-in-link a:hover {
      text-decoration: underline;
    }

    .form-section img {
      display: block;
      margin: 0 auto 20px;
      max-width: 150px;
      height: auto;
    }

    .carousel-inner {
      display: flex;
      align-items: center;
    }

    @media (max-width: 768px) {
      .main-container {
        flex-direction: column; /* Stack elements vertically on small screens */
        height: auto;
      }

      .carousel-container, .form-container {
        min-width: 100%;
        height: auto;
        margin-bottom: 20px; /* Add spacing between sections */
      }

      .form-section {
        max-width: 90%; /* Allow form to adapt to smaller screens */
      }
    }
  </style>
</head>
<body>
  <div class="container main-container">
    <div class="carousel-container">
      <!-- Carousel Section -->
      <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/gatewy2.png')}}" class="d-block w-100" alt="Micro ATM">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/gatewy2.png')}}" class="d-block w-100" alt="Money Transfer">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/gatewy1.png')}}" class="d-block w-100" alt="Insurance">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="form-container">
      <div class="form-section">
        <!-- Success/Error Messages -->
        @if (Session::has('success'))
          <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('error'))
          <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <!-- Login Form -->
        <img src="{{asset('img/compnylogo.jpg')}}" alt="Logo">
        {{-- <form action="{{ route('user.auhtentication') }}" method="POST"> --}}
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="username" placeholder="Enter your email" name="email" value="{{ old('email') }}">
            @error('email')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" name="password">
            @error('password')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="captcha" class="form-label">Phone</label>
            <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="captcha" placeholder="Enter your mobile here" name="phone" value="{{ old('phone') }}">
            @error('phone')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <a href="#" class="text-decoration-none">Forgot Password?</a>
          </div>
          <a href="/dashboard"> <button type="submit" class="btn btn-primary w-100 mt-3">Login</button></a>
        </form>
        <div class="sign-in-link">
          {{-- <p>Don't have an account? <a href="{{ route('user.registration') }}">Sign Up</a></p> --}}
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.js delivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>