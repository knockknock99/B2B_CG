<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 250px;
            background-color: #FFFFFF;
            color: black;
            height: 100vh;
            position: fixed;
            padding: 20px;
            box-shadow: 2px 0px 12px rgba(0, 0, 0, 0.1);
        }

        .sidebar .logo {
            text-align: center;
            background-color: white;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .sidebar .logo img {
            width: 180px;
            height: auto;
        }

        .sidebar .profile-section {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .sidebar .profile-section img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
            border: 3px solid #fff;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.2);
        }

        .sidebar h3 {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }

        .sidebar p {
            font-size: 14px;
            margin: 5px 0;
            color: #888;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            color: black;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .sidebar ul li a:hover {
            background-color: #e6e6ff;
            transform: scale(1.05);
        }

        .sidebar ul li a i {
            margin-right: 12px;
            font-size: 18px;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
            background-color: #f8f9fa;
            min-height: 100vh;
            box-shadow: inset 0px 4px 10px rgba(0, 0, 0, 0.05);
        }

        .header {
            background-color: #e6e6ff;
            color: black;
            padding: 15px 30px;
            text-align: right;
            font-size: 22px;
            font-weight: bold;
            border-radius: 8px;
            margin-bottom: 20px;
            margin-left: 1px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .icon-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .tab-content {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs .nav-item {
            margin-right: 15px;
        }

        .nav-tabs .nav-link {
            border-radius: 20px;
            padding: 10px 20px;
        }

        .nav-tabs .nav-link.active {
            background-color: #e6e6ff;
            color: black;
            font-weight: bold;
        }

        .icon-container {
            margin-bottom: 10px;
        }

        button {
            font-size: 14px;
        }

        .service-text {
            font-size: 12px;
        }

        .icon-container {
            width: 80px;
            height: 80px;
            border: 2px solid black;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin: 0 auto;
        }

        .icon-container img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
        }

        .service-text {
            text-align: center;
            margin-top: 5px;
            font-size: 10px;
            color: #000;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar start -->
    <div class="sidebar">
        <div class="logo">
            <img src="assets/img/codegraphi-logo.png" alt="Logo">
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-id-card"></i> KYC</a></li>
            <li><a href="#"><i class="fas fa-cogs"></i> Services</a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i> Service Report</a></li>
            <li><a href="#"><i class="fas fa-history"></i> Account History</a></li>
            <li><a href="#"><i class="fas fa-percent"></i> My Commission Slab</a></li>
            <li><a href="#"><i class="fas fa-file-invoice"></i> GST Report</a></li>
            <li><a href="#"><i class="fas fa-clipboard"></i> TDS Report</a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> Commission Report</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Account Settings</a></li>
        </ul>
    </div>
    <!-- Sidebar end-->

    <div class="main-content">
        <div class="header"> Welcome to Codegraphi</div>
        <div class="container">
            <!-- Section for tabs -->
            <ul class="nav nav-tabs my-3" id="servicesTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="b2b-services-tab" data-bs-toggle="tab" data-bs-target="#b2b-services" type="button" role="tab" aria-controls="b2b-services" aria-selected="true">
                        B2B SERVICES
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="online-services-tab" data-bs-toggle="tab" data-bs-target="#online-services" type="button" role="tab" aria-controls="online-services" aria-selected="false">
                        ONLINE SERVICES
                    </button>
                </li>
            </ul>

            <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="b2b-services" role="tabpanel" aria-labelledby="b2b-services-tab">
                    <div class="row g-3 text-center">
                        <!-- Service Buttons -->
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('mobile-recharge') }}">
                                    <img src="assets/img/icons/Mobile-recharge1.png" alt="Mobile Recharge">
                                </a>
                            </div>
                            <div class="service-text">Mobile Recharge</div>
                        </div>

                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('dth-recharge') }}">
                                    <img src="assets/img/icons/DTH-recharge.png" alt="Mobile Recharge">
                                </a>
                            </div>
                            <div class="service-text">DTH Recharge</div>
                        </div>

                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('bill-payment') }}">
                                    <img src="assets/img/icons/bill-payment.png" alt="Bill Payment">
                                </a>
                            </div>
                            <div class="service-text">Bill Payment</div>
                        </div>

                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('aeps') }}">
                                    <img src="assets/img/icons/AEPS.png" alt="AEPS">
                                </a>
                            </div>
                            <div class="service-text">AEPS</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('money-transfer') }}">
                                    <img src="assets/img/icons/money-transfer.png" alt="Money Transfer">
                                </a>
                            </div>
                            <div class="service-text">Money Transfer</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('move-to-bank') }}">
                                    <img src="assets/img/icons/move-bank.png" alt="Move to Bank">
                                </a>
                            </div>
                            <div class="service-text">Move To Bank</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('fund.request.form') }}">
                                    <img src="assets/img/icons/fund-request.png" alt="Fund Request">
                                </a>
                            </div>
                            <div class="service-text">Fund Request</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('aadhaar-pay') }}">
                                    <img src="assets/img/icons/aadhar-pay.png" alt="Aadhaar Pay">
                                </a>
                            </div>
                            <div class="service-text">Aadhaar Pay</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('micro-atm') }}">
                                    <img src="assets/img/icons/micro-ATM.png" alt="Micro ATM">
                                </a>
                            </div>
                            <div class="service-text">Micro ATM</div>
                        </div>

                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('fund.transfer') }}">
                                    <img src="assets/img/icons/fund-transfer.png" alt="Fund Transfer">
                                </a>
                            </div>
                            <div class="service-text">Fund Transfer</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('fast-tag') }}">
                                    <img src="assets/img/icons/fast-tag.png" alt="FastTag">
                                </a>
                            </div>
                            <div class="service-text">FastTag</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('upi-collection') }}">
                                    <img src="assets/img/icons/UPI.png" alt="UPI Collection">
                                </a>
                            </div>
                            <div class="service-text">UPI Collection</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('fino-cms') }}">
                                    <img src="assets/img/icons/Fino-cms.png" alt="Fino CMS">
                                </a>
                            </div>
                            <div class="service-text">Fino CMS</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('lic-bill-payment') }}">
                                    <img src="assets/img/icons/LIC-bill.png" alt="LICBill">
                                </a>
                            </div>
                            <div class="service-text">LIC Bill Payment</div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="icon-container">
                                <a href="{{ route('form') }}">
                                    <img src="assets/img/icons/NSDL-pan.png" alt="NSDL Pan Card">
                                </a>
                            </div>
                            <div class="service-text">NSDL Pan Card</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="online-services" role="tabpanel" aria-labelledby="online-services-tab">
                <p>Online services content will be displayed here.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>