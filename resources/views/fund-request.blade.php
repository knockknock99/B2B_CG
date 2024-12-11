<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for Funds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 6px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            border-radius: 6px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Request for Funds</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('fund.request.submit') }}">
            @csrf
            <div class="form-group">
                <label for="company_bank">Company Bank</label>
                <select id="company_bank" name="company_bank" class="form-control" required>
                    <option value="">-- Choose --</option>
                    <option value="bank1">Bank 1</option>
                    <option value="bank2">Bank 2</option>
                </select>
                @error('company_bank')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="deposit_date">Deposit Date</label>
                <input type="date" id="deposit_date" name="deposit_date" class="form-control" required>
                @error('deposit_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="payment_mode">Payment Mode</label>
                <select id="payment_mode" name="payment_mode" class="form-control" required>
                    <option value="cash">Cash</option>
                    <option value="cheque">Cheque</option>
                    <option value="online">Online</option>
                </select>
                @error('payment_mode')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" class="form-control" placeholder="Enter Amount" required>
                @error('amount')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="remark">Remark</label>
                <textarea id="remark" name="remark" class="form-control" placeholder="Enter remark"></textarea>
                @error('remark')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn w-100">Send Request</button>
        </form>
    </div>
</body>

</html>
