<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSDL PAN Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 shadow">
                <h4 class="text-start ms-1 mt-5 text-primary">NSDL PAN Card Verification</h4>
                <form action="{{ route('verify') }}" method="POST" class="mb-4">
                    @csrf
                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control border-0 border-bottom border-gray-300 focus:outline-none focus:border-blue-500 p-2"
                            id="pan_number"
                            name="pan_number"
                            required
                            pattern="^[A-Z]{5}[0-9]{4}[A-Z]{1}$"
                            title="Valid PAN format: AAAAA9999A"
                            placeholder="Enter PAN Number"
                            aria-label="Enter PAN Number" />
                    </div>
                    <button type="submit" class="btn text-left btn-primary text-white w-40">Verify PAN</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>