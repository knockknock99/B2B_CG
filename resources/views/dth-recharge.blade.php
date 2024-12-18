@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Main Content -->
        <main class="col-lg-10 col-md-9 ms-auto p-4">
            <div class="container mt-4">
                <div class="row">
                    <!-- Left: Recharge Form -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card border-0 shadow h-100">
                            <h4 class="text-primary mt-4 text-left ms-4">DTH Recharge</h4>
                            <div class="card-body">
                                <!-- Form Start -->
                                <form action="{{ route('dth-recharge.process') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text"
                                            class="form-control border-0 border-bottom rounded-0"
                                            id="dthNumber"
                                            name="dthNumber"
                                            placeholder="DTH Number *"
                                            style="box-shadow: none !important; outline: none;"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <select
                                            class="form-control border-0 border-bottom rounded-0"
                                            id="operator"
                                            name="operator"
                                            style="box-shadow: none !important; outline: none;"
                                            required>
                                            <option value="" disabled selected>Operator List *</option>
                                            <option value="Tata Sky">Tata Sky</option>
                                            <option value="Dish TV">Dish TV</option>
                                            <option value="Airtel DTH">Airtel DTH</option>
                                            <option value="Sun Direct">Sun Direct</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number"
                                            class="form-control border-0 border-bottom rounded-0"
                                            id="rechargeAmount"
                                            name="rechargeAmount"
                                            placeholder="Recharge Amount *"
                                            style="box-shadow: none !important; outline: none;"
                                            required>
                                    </div>
                                    <div class="text-start mt-4">
                                        <button type="submit" class="btn btn-primary text-white px-3 py-2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Right: DTH Information -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card border-0 shadow ">
                            <h4 class="text-primary mt-4 text-left ms-4">DTH Information</h4>
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
@endsection