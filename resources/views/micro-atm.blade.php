<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro ATM Service</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-card {
            max-width: 600px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow border-0 custom-card mx-auto">
            <div class="card-body">
                <h4 class="text-start mb-4 text-primary mt-3">Micro ATM Service</h4>
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text"
                               class="form-control border-0 border-bottom rounded-0 shadow-none"
                               id="atmId"
                               name="atm_id"
                               placeholder="Enter Micro ATM ID"
                               required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select border-0 border-bottom rounded-0 shadow-none text-muted"
                                id="transactionType"
                                name="transaction_type"
                                required>
                            <option value="" disabled selected>Select Transaction Type</option>
                            <option value="cash_withdrawal">Cash Withdrawal</option>
                            <option value="balance_enquiry">Balance Enquiry</option>
                            <option value="mini_statement">Mini Statement</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="number"
                               class="form-control border-0 border-bottom rounded-0 shadow-none"
                               id="amount"
                               name="amount"
                               placeholder="Enter Amount"
                               required>
                    </div>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
