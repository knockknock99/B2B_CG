<!-- resources/views/nsdl/result.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAN Verification Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>PAN Card Verification Result</h2>
        <div class="alert alert-info">
            <strong>PAN Number:</strong> {{ $pan_number }}<br>
            <strong>Status:</strong> {{ $verification_status }}
        </div>
        <a href="{{ route('form') }}" class="btn btn-primary">Verify Another PAN</a>
    </div>
</body>

</html>
