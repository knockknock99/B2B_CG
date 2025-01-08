
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        /* Registration Form Container to Have Equal Height */
        .registration-container {
            height: 110vh; /* Full height of the viewport */
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        /* Registration Box Shadow and Border Radius */
        .registration-card {
            background: #ffffff;
            padding: 15px;
            margin-top: 5px;
            border-radius: 20px; /* Rounded corners for the box */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 2px 16px rgba(0, 0, 0, 0.1); /* Box shadow on all sides */
            width: 100%;
            max-width: 400px; /* Restrict the form width */
        }

        /* Fixing Logo Size */
        .registration-logo {
            display: block;
            width: 150px; /* Fixed width for the logo */
            height: auto; /* Maintain aspect ratio */
            margin: 0 auto 20px; /* Center the logo and add margin below it */
        }

        /* Optional: Style the form inputs and button */
        .form-control {
            border-radius: 10px;
        }
        .btn-primary {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <!-- Registration Section -->
            <div class="col-md-12 registration-container">
                <div class="registration-card mt-4">
                    <!-- Logo with fixed size -->
                    <img src="{{asset('asset/img/compnylogo.jpg')}}" class="registration-logo" alt="Logo">
                    <form action="{{route('user.dataregistr')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="fullname" placeholder="Enter your full name" name="name">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                           @enderror
                        </div>
            
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email" name="email">
                            @error('email')
                          <p class="text-danger">{{$message}}</p>
                         @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter Your Phone" name="phone">
                            @error('phone')
                            <p class="text-danger">{{$message}}</p>
                           @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('name') is-invalid @enderror" id="password" placeholder="Enter password" name="password">
                            @error('password')
                          <p class="text-danger">{{$message}}</p>
                         @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                        <div class="text-center mt-2">
                            <a href="{{route('user.login')}}">Already have an account? Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 
