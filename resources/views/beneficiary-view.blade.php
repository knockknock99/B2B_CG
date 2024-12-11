<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Beneficiaries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h3>View Beneficiaries</h3>
        <div class="card p-3">
            <div class="row">
                <div class="col-md-6">
                    <strong>Name:</strong> {{ $userData['name'] }}
                </div>
                <div class="col-md-6">
                    <strong>Mobile No:</strong> {{ $userData['mobile'] }}
                </div>
                <div class="col-md-6">
                    <strong>Available Limit:</strong> ₹{{ number_format($userData['available_limit'], 2) }}
                </div>
                <div class="col-md-6">
                    <strong>Used Limit:</strong> ₹{{ number_format($userData['used_limit'], 2) }}
                </div>
            </div>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Beneficiary Name</th>
                    <th>Bank Name</th>
                    <th>Account No</th>
                    <th>IFSC Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userData['beneficiaries'] as $index => $beneficiary)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $beneficiary['name'] }}</td>
                    <td>{{ $beneficiary['bank'] }}</td>
                    <td>{{ $beneficiary['account'] }}</td>
                    <td>{{ $beneficiary['ifsc'] }}</td>
                    <td>
                        <button class="btn btn-warning">Verify</button>
                        <button class="btn btn-success">Transfer</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>