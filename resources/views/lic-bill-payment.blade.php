<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIC Bill Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <div class="row d-flex justify-content-center align-items-start g-4 mt-4">
            <!-- LIC Payment Form -->
            <div class="col-md-5 col-12 shadow-sm p-4 mx-3">
                <h4 class="text-start ms-4 mt-4 text-primary">LIC Payment</h4>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <input
                                type="text"
                                id="customer-id"
                                class="form-control border-0 border-bottom rounded-0"
                                placeholder="Enter Policy No *"
                                style="box-shadow: none !important; outline: none;"
                                required />
                        </div>
                        <div class="mb-3">
                            <input
                                type="email"
                                id="customer-email"
                                class="form-control border-0 border-bottom rounded-0"
                                placeholder="Enter Email *"
                                style="box-shadow: none !important; outline: none;"
                                required />
                        </div>
                        <div class="mb-3">
                            <select
                                id="payment-mode"
                                class="form-select text-muted border-0 border-bottom rounded-0"
                                style="box-shadow: none !important; outline: none;"
                                required>
                                <option value="" disabled selected>Select Mode</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                        </div>
                        <button type="submit" class="btn bg-primary text-white">Check Details</button>
                    </form>
                </div>
            </div>

            <!-- Bill Details -->
            <div class="col-md-5 col-12 shadow-sm p-4 mx-3">
                <h4 class="text-start ms-4 mt-4 text-primary">Bill Details</h4>
                <div class="card-body">
                    <p class="text-muted">
                        Disclaimer: While we support most billing payments, we request you to verify with your operator once before proceeding.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
