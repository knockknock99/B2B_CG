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
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        .form-container .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .btn-primary {
            width: 100%;
            font-size: 16px;
            padding: 10px;
        }

        .form-container .text-muted {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h3>Check Mobile Number</h3>
        <form action="{{ route('check.mobile') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="mobileNumber" class="form-label">Mobile No<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="mobileNumber" name="mobile_number" placeholder="10 Digit Mobile Number" required>
            </div>
            <button type="submit" class="btn btn-primary">CHECK</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>