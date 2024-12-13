<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Funds</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            /* Light blue background */
        }

        .transfer-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
        }

        .btn-recent-transfers {
            background-color: #007bff;
            color: black;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-check-user {
            background-color: #007bff;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="transfer-container">
        <div class="header">
            <h2>Transfer Funds</h2>
            <button class="btn-recent-transfers">All Recent Transfers</button>
        </div>
        <hr>
        <form>
            <div class="mb-3">
                <input
                    type="text"
                    id="user_id"
                    name="user_id"
                    class="form-control border-0 border-bottom rounded-0"
                    placeholder="Enter Receiver User ID *"
                    style="box-shadow: none !important; outline: none;"
                    required />
            </div>
            <div class="text-center">
                <button type="submit" class="btn-check-user">Check User</button>
            </div>
        </form>
    </div>

    <!-- Include Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>