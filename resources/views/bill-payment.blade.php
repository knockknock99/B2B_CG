<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            box-shadow: none !important;
            border: none;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
            border-bottom: 1px solid #007bff;
        }

        button {
            background-color: #007bff;
            border: none;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3;
        }

        .disclaimer {
            color: #6c757d;
            font-size: 0.9rem;
        }

        h4 {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <!-- Left Card: Bill Payment -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card h-100 shadow-md">
                    <h4 class="text-start ms-4 mt-4">Bill Payment</h4>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <!-- Category -->
                                <div class="col-12 mb-3 ">
                                    <select class="form-control text-muted" id="category" name="Category" required>
                                        <option value="" disabled selected>Category</option>
                                        <option value="electricity">Electricity</option>
                                        <option value="water">Water</option>
                                        <option value="gas">Gas</option>
                                    </select>
                                </div>
                                <!-- Operator -->
                                <div class="col-12 mb-3">
                                    <select class="form-control text-muted" id="operator" name="operator" required>
                                        <option value="" disabled selected>Operator Name</option>
                                        <option value="operator1">Operator 1</option>
                                        <option value="operator2">Operator 2</option>
                                    </select>
                                </div>
                                <!-- Details -->
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control text-muted" id="details" placeholder="Enter details *" required>
                                </div>
                                <!-- Mode -->
                                <div class="col-12 mb-3">
                                    <select class="form-control text-muted" id="mode" name="mode" required>
                                        <option value="" disabled selected>Mode</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-start mt-4">
                                <button type="submit" class="btn btn-primary text-white px-3 py-2">Proceed</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Card: Bill Details -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card h-100 shadow-md">
                    <h4 class="text-start ms-4 mt-4">Bill Details</h4>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <p class="text-center disclaimer">
                            Disclaimer: While we support most Billing Payments, we request you to verify with your operator once before proceeding.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>