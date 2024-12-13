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
        <div class="row">
            <!-- Left: Recharge Form -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header text-black bg-primary">Bill Payment</div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <select
                                        class="form-control border-0 border-bottom rounded-0"
                                        id="category"
                                        name="Category"
                                        style="box-shadow: none !important; outline: none;"
                                        required>
                                        <option value="" disabled selected>Category</option>
                                        <option value="electricity">Electricity</option>
                                        <option value="water">Water</option>
                                        <option value="gas">Gas</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <select
                                        class="form-control border-0 border-bottom rounded-0"
                                        id="operator"
                                        name="operator"
                                        style="box-shadow: none !important; outline: none;"
                                        required>
                                        <option value="" disabled selected>Operator Name</option>
                                        <option value="operator1">Operator 1</option>
                                        <option value="operator2">Operator 2</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <input
                                        type="text"
                                        class="form-control border-0 border-bottom rounded-0"
                                        id="details"
                                        placeholder="Enter details *"
                                        style="box-shadow: none !important; outline: none;"
                                        required />
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <select
                                        class="form-control border-0 border-bottom rounded-0"
                                        id="mode"
                                        name="mode"
                                        style="box-shadow: none !important; outline: none;"
                                        required>
                                        <option value="" disabled selected>Mode</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mt-4">
                                <button
                                    type="submit"
                                    class="btn btn-primary px-4 py-2 text-black rounded shadow-sm">
                                    Proceed
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header text-black bg-primary">Bill Details</div>
                    <p class="text-center">
                        Disclaimer: While we support most Billing Payments, we request you to verify with your operator once before proceeding.
                    </p>
                </div>

            </div>
        </div>

    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>