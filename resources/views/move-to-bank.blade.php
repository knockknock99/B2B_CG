<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bank Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .bank-accounts {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }

        .bank-card {
            width: 300px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .bank-card h5 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .bank-card p {
            margin: 5px 0;
            color: #555;
        }

        .status {
            margin-top: 10px;
        }

        .btn-upload {
            background-color: #f0ad4e;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-verified {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .actions {
            margin-top: 20px;
        }
        h4 {
            color: #007bff; /* Blue color */
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h4 class="text-center  mb-4">My Bank Accounts</h4>
    <div class="bank-accounts">
        <div class="bank-card">
            <h5>STATE BANK OF INDIA</h5>
            <p><strong>Account No:</strong> xxxxxxxxxx</p>
            <p><strong>IFSC Code:</strong> IFSC000CODE</p>
            <p><strong>AC Holder:</strong> BENE NAME</p>
            <div class="status">
                <span class="btn-verified text-black">Verified</span>
            </div>
        </div>
        <div class="bank-card">
            <h5>STATE BANK OF INDIA</h5>
            <p><strong>Account No:</strong> xxxxxxxxxx</p>
            <p><strong>IFSC Code:</strong> IFSC000CODE</p>
            <p><strong>AC Holder:</strong> BENE NAME</p>
            <div class="status">
                <button class="btn-upload text-black">Upload Document</button>
            </div>
        </div>
    </div>
    <div class="actions text-center mt-4">
        <button class="btn btn-primary">
            <a href="{{ route('add-bank-account') }}" class="text-black text-decoration-none">Add New Bank Account</a>
        </button>
        <button class="btn btn-secondary text-black">New Transaction</button>
    </div>
</body>

</html>