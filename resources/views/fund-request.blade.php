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
            max-width: 500px; /* Reduced width */
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
            color: black;
            border-radius: 6px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        h4 {
            color: #007bff; 
            font-weight: bold;
        }

        @media (max-width: 576px) {
            .container {
                padding: 20px;
                margin-top: 20px;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h4 class="text-left mb-4">Request for Funds</h4>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('fund.request.submit') }}">
            @csrf
            <div class="form-group">
                <select id="company_bank" name="company_bank" class="form-control text-muted border-0 border-bottom rounded-0" style="box-shadow: none; outline: none;" required>
                    <option value="" disabled selected>Company Bank</option>
                    <option value="bank1">Bank 1</option>
                    <option value="bank2">Bank 2</option>
                </select>
                @error('company_bank')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <input
                    type="date"
                    id="deposit_date"
                    name="deposit_date"
                    class="form-control  text-muted border-0 border-bottom rounded-0"
                    placeholder="Deposit Date *"
                    style="box-shadow: none; outline: none;"
                    required />
                @error('deposit_date')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <select
                    id="payment_mode"
                    name="payment_mode"
                    class="form-control text-muted border-0 border-bottom rounded-0"
                    style="box-shadow: none; outline: none;"
                    required>
                    <option value="" disabled selected>Payment Mode *</option>
                    <option value="cash">Cash</option>
                    <option value="cheque">Cheque</option>
                    <option value="online">Online</option>
                </select>
                @error('payment_mode')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <input
                    type="number"
                    id="amount"
                    name="amount"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Enter Amount *"
                    style="box-shadow: none; outline: none;"
                    required />
                @error('amount')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <textarea
                    id="remark"
                    name="remark"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Enter Remark"
                    style="box-shadow: none; outline: none;"></textarea>
                @error('remark')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn text-white w-50px">Send Request</button>
        </form>
    </div>
</body>

</html>
