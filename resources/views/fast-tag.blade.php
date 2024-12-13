<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fastag Recharge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <!-- Fastag Recharge Form -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-black">Fastag Recharge</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <select
                                    id="operator-name"
                                    class="form-select border-0 border-bottom rounded-0"
                                    style="box-shadow: none !important; outline: none;"
                                    required>
                                    <option value="" selected> Operator Name *</option>
                                    <option value="operator1">Operator 1</option>
                                    <option value="operator2">Operator 2</option>
                                    <option value="operator3">Operator 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input
                                    type="text"
                                    id="vehicle-no"
                                    class="form-control border-0 border-bottom rounded-0"
                                    placeholder="Enter Vehicle Number *"
                                    style="box-shadow: none !important; outline: none;"
                                    required />
                            </div>
                            <button type="submit" class="btn btn-primary text-black">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Bill Details -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-black">Bill Details</div>
                    <div class="card-body">
                        <p class="text-muted">
                            Disclaimer: While we support most billing payments, we request you to verify with your
                            operator once before proceeding.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>