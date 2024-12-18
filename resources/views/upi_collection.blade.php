<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPI Collection</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card p-4 shadow-sm border-0">
                    <h4 class="text-start mb-4 text-primary">UPI Collection</h4>
                    <form action="{{ route('upi-collection') }}" method="POST">
                        @csrf
                        <!-- UPI ID Input -->
                        <div class="mb-3">
                            <input type="text"
                                   class="form-control border-0 border-bottom rounded-0"
                                   id="upiId"
                                   name="upi_id"
                                   placeholder="Enter UPI ID"
                                   required>
                        </div>
                        <!-- Amount Input -->
                        <div class="mb-3">
                            <input type="number"
                                   class="form-control border-0 border-bottom rounded-0"
                                   id="amount"
                                   name="amount"
                                   placeholder="Enter Amount"
                                   required>
                        </div>
                        <!-- Remark Textarea -->
                        <div class="mb-3">
                            <textarea id="remark"
                                      name="remark"
                                      class="form-control border-0 border-bottom rounded-0"
                                      rows="3"
                                      placeholder="Enter Remark"
                                      style="resize: none;"></textarea>
                        </div>
                        <!-- Submit Button -->
                        <div class="text-start">
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
