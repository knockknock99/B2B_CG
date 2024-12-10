@extends('layouts.app')

@section('title', 'Mobile Recharge')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="sidebar bg-light p-3 rounded shadow-sm" style="position: absolute; left: 0; top: 0; height: 100vh; width: 200px;">
                <div class="logo text-center mb-4">
                    <img src="assets/img/codegraphi-logo.png" alt="Logo" class="img-fluid">
                </div>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-home me-2"></i> Dashboard</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-id-card me-2"></i> KYC</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-cogs me-2"></i> Services</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-file-alt me-2"></i> Service Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-history me-2"></i> Account History</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-percent me-2"></i> My Commission Slab</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-file-invoice me-2"></i> GST Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-clipboard me-2"></i> TDS Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-chart-bar me-2"></i> Commission Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none d-flex align-items-center"><i class="fas fa-cog me-2"></i> Account Settings</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9 col-md-8">
            <div class="row">
                <!-- Mobile Recharge Form -->
                <div class="col-md-12 col-lg-5 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header text-black" style="background-color: #e6e6ff;">
                            <strong>Mobile Recharge</strong>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="mobile-number" class="form-label">Mobile Number *</label>
                                    <input type="text" class="form-control" id="mobile-number" placeholder="Enter Mobile Number">
                                </div>
                                <div class="mb-3">
                                    <label for="operator" class="form-label">Operator List *</label>
                                    <select class="form-select" id="operator">
                                        <option value="">-- Choose --</option>
                                        <option value="airtel">Airtel</option>
                                        <option value="jio">Jio</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="circle" class="form-label">Circle *</label>
                                    <select class="form-select" id="circle">
                                        <option value="">-- Choose --</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="mumbai">Mumbai</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recharge-amount" class="form-label">Recharge Amount *</label>
                                    <input type="text" class="form-control" id="recharge-amount" placeholder="Enter Recharge Amount">
                                    <small>
                                        <a href="#" id="browse-plans-link" class="text-primary">Browse Plans</a>
                                    </small>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 text-black" style="background-color: #e6e6ff;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Browse Plans -->
                <div class="col-md-12 col-lg-7 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header text-black" style="background-color: #e6e6ff;">
                            <strong>Browse Plans</strong>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">
                                Disclaimer: While we support most recharges, we request you to verify with your operator once before proceeding.
                            </p>
                            <div id="plans-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<script>
    document.getElementById('browse-plans-link').addEventListener('click', function(e) {
        e.preventDefault();

        // Sample Data (Replace with API call if needed)
        const plans = [{
                circle: 'Delhi NCR',
                planType: 'TOPUP',
                validity: 'N/A',
                description: 'Talktime of Rs. 7.47, validity unrestricted',
                price: 10
            },
            {
                circle: 'Delhi NCR',
                planType: 'TOPUP',
                validity: 'N/A',
                description: 'Talktime of Rs. 14.95, validity unrestricted',
                price: 20
            },
            {
                circle: 'Delhi NCR',
                planType: 'TOPUP',
                validity: 'N/A',
                description: 'Talktime of Rs. 22.42, validity unrestricted',
                price: 30
            },
        ];

        // Target container
        const container = document.getElementById('plans-container');

        // Clear any existing content
        container.innerHTML = '';

        // Dynamically populate plans
        plans.forEach(plan => {
            const planCard = `
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h6>${plan.circle} - ${plan.planType}</h6>
                    <p class="text-muted">${plan.description}</p>
                </div>
                <button class="btn btn-sm btn-primary">Rs. ${plan.price}</button>
            </div>
        `;
            container.innerHTML += planCard;
        });
    });
</script>
@endsection