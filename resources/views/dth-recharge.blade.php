@extends('layouts.app') 

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="sidebar bg-light p-3 rounded shadow-sm" style="position: absolute; left: 0; top: 0; height: 100vh; width: 200px;">
                <div class="logo text-center mb-4">
                    <img src="assets/img/codegraphi-logo.png" alt="Logo" class="img-fluid w-45">
                </div>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-home me-2"></i> Dashboard</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-id-card me-2"></i> KYC</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-cogs me-2"></i> Services</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-file-alt me-2"></i> Service Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-history me-2"></i> Account History</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-percent me-2"></i> My Commission Slab</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-file-invoice me-2"></i> GST Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-clipboard me-2"></i> TDS Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-chart-bar me-2"></i> Commission Report</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark d-flex align-items-center"><i class="fas fa-cog me-2"></i> Account Settings</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <main class="col-lg-9 col-md-8 ms-auto p-4">
            <div class="header mb-4">
                <h2 class="text-black">DTH Recharge</h2>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <!-- Left: Recharge Form -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header text-black" style="background-color: #e6e6ff;">DTH Recharge</div>
                            <div class="card-body">
                                <!-- Form Start -->
                                <form action="{{ route('dth-recharge.process') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="dthNumber" class="form-label">DTH Number *</label>
                                        <input type="text" id="dthNumber" name="dthNumber" class="form-control" placeholder="Enter DTH Number" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="operator" class="form-label">Operator List *</label>
                                        <select id="operator" name="operator" class="form-select" required>
                                            <option value="">-- Choose --</option>
                                            <option value="Tata Sky">Tata Sky</option>
                                            <option value="Dish TV">Dish TV</option>
                                            <option value="Airtel DTH">Airtel DTH</option>
                                            <option value="Sun Direct">Sun Direct</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rechargeAmount" class="form-label">Recharge Amount *</label>
                                        <input type="number" id="rechargeAmount" name="rechargeAmount" class="form-control" placeholder="Recharge Amount" required>
                                    </div>
                                    <button type="submit" class="btn text-black" style="background-color: #e6e6ff;" w-100>Submit</button>
                                </form>
                                <!-- Form End -->
                            </div>
                        </div>
                    </div>

                    <!-- Right: DTH Information -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card shadow-sm h-100">
                            <div class="card-header text-black" style="background-color: #e6e6ff;">
                                <strong>DTH Information</strong>
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
        </main>
    </div>
</div>

<!-- Mobile Sidebar Toggle -->
<div class="d-md-none position-fixed bottom-0 end-0 p-3">
    <button class="btn btn-primary" onclick="toggleSidebar()">Menu</button>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.querySelector('nav');
        sidebar.classList.toggle('d-none');
    }
</script>
@endsection