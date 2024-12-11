<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Bill Payment</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="p-3 border rounded">
                    <h5 class=" mb-3">Bill Payment</h5>
                    <form>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                            <select class="form-select" id="category" required>
                                <option value="">-- Choose --</option>
                                <option value="electricity">Electricity</option>
                                <option value="water">Water</option>
                                <option value="gas">Gas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="operator" class="form-label">Operator Name <span class="text-danger">*</span></label>
                            <select class="form-select" id="operator" required>
                                <option value="">-- Choose --</option>
                                <option value="operator1">Operator 1</option>
                                <option value="operator2">Operator 2</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label">Details <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="details" placeholder="Enter details" required>
                        </div>
                        <div class="mb-3">
                            <label for="mode" class="form-label">Mode <span class="text-danger">*</span></label>
                            <select class="form-select" id="mode" required>
                                <option value="">-- Select --</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                        </div>
                        <button type="submit" class="btn text-black" style="background-color: #e6e6ff;" w-100>Proceed</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 border rounded">
                    <h5 class="mb-3">Bill Details</h5>
                    <p>
                        Disclaimer: While we support most Billing Payments, we request you to verify with your operator once before proceeding.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>