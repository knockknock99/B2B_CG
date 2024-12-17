@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Mobile Recharge Card -->
        <div class="col-md-5 mb-4">
            <div class="card shadow-sm rounded">
                <div class="card-body p-4">
                    <h5 class="text-center text-primary fw-bold mb-3">Mobile Recharge</h5>
                    <form action="{{ route('recharge.process') }}" method="POST">
                        @csrf
                        <!-- Mobile Number -->
                        <div class="mb-3">
                            <label for="mobileNumber" class="form-label">Mobile Number *</label>
                            <input type="text" 
                                id="mobileNumber" 
                                name="mobileNumber" 
                                class="form-control" 
                                placeholder="Enter Mobile Number" 
                                required>
                        </div>
                        <!-- Operator List -->
                        <div class="mb-3">
                            <label for="operator" class="form-label">Operator *</label>
                            <select class="form-select" id="operator" name="operator" required>
                                <option value="" selected>-- Operator List --</option>
                                <option value="Airtel">Airtel</option>
                                <option value="Jio">Jio</option>
                                <option value="Vi">Vi</option>
                                <option value="BSNL">BSNL</option>
                            </select>
                        </div>
                        <!-- Circle -->
                        <div class="mb-3">
                            <label for="circle" class="form-label">Circle *</label>
                            <select class="form-select" id="circle" name="circle" required>
                                <option value="" selected>-- Circle --</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Bangalore">Bangalore</option>
                            </select>
                        </div>
                        <!-- Recharge Amount -->
                        <div class="mb-3">
                            <label for="amount" class="form-label">Enter Recharge Amount *</label>
                            <input type="number" 
                                id="amount" 
                                name="amount" 
                                class="form-control" 
                                placeholder="Enter Amount" 
                                required>
                        </div>
                        <!-- Browse Plans -->
                        <div class="mb-3">
                            <a href="#" class="text-primary text-decoration-none">Browse Plans</a>
                        </div>
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Browse Plans Card -->
        <div class="col-md-5 mb-4">
            <div class="card shadow-sm rounded">
                <div class="card-body p-4">
                    <h5 class="text-center text-primary fw-bold mb-3">Browse Plans</h5>
                    <p class="text-center text-muted">
                        Disclaimer: Verify with your operator before proceeding.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
