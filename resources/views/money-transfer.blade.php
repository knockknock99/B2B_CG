<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Transfer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 2rem auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h4 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .form-label {
            font-weight: 600;
            color: #6c757d;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #ddd;
            border-radius: 0;
            box-shadow: none;
            padding-left: 0;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px;
        }

        .form-container .text-muted {
            text-align: center;
            margin-top: 15px;
        }

        @media (max-width: 767px) {
            .form-container {
                max-width: 100%;
                padding: 1rem;
            }

        }
    </style>
</head>

<body>
    <div class="container form-container">
        <h4 style="text-align: left;">Check Mobile Number</h4>
        <form id="checkMobileForm" action="{{ route('check.mobile') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text "
                    class="form-control"
                    id="mobile-number"
                    placeholder="Mobile Number *"
                    maxlength="10"
                    required>
            </div>
            <!-- Button aligned to the left -->
            <div class="text-left">
                <button type="submit" class="btn btn-primary text-white">CHECK</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>