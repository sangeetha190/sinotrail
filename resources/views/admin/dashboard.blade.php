@extends('admin.layouts.index')
<style>
    .bg-gradient-blue {
        background: linear-gradient(to left, #8bbfe9, #008cff) !important;
    }
</style>
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-1">
                <div>
                    <!-- Top Welcome Content -->
                    <h4 class="font-weight-bold1"> Welcome, {{ Auth::user()->name }}
                    </h4>

                    <p>
                        Your dashboard is up to date!
                        {{-- <span class="text-primary">3 unread alerts!</span> --}}
                    </p>
                </div>


                {{-- test starts --}}
                {{-- @hasrole('Super Admin')
                    <h2>Hai Admin</h2>
                @else
                    <h2>Your not admin</h2>
                @endhasrole --}}
                {{-- test starts --}}
                <div>
                    <button type="button" class="btn btn-primary position-relative" id="demo">
                        Today (02 Jan 2024)
                    </button>
                </div>
            </div>

            <h4 class="font-weight-bold1">Total Count</h4>
            <!-- card content is started -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total User</p>
                                    <h3 class="my-1 text-info">{{ $userCount }}</h3>
                                    {{-- <p class="mb-0 font-13">+2.5% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto">
                                    {{-- <i class="bx bxs-cart"></i> --}}
                                    <i class="fa-regular fa-circle-user fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Roles</p>
                                    <h3 class="my-1 text-danger">{{ $roleCount }}</h3>
                                    {{-- <p class="mb-0 font-13">+5.4% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto">
                                    {{-- <i class="bx bxs-wallet"></i> --}}
                                    <i class="fa-solid fa-users-gear fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Products</p>
                                    <h3 class="my-1 text-success">{{ $productCount }}</h3>
                                    {{-- <p class="mb-0 font-13">-4.5% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                                    {{-- <i class="bx bxs-bar-chart-alt-2"></i> --}}
                                    <i class="fa-solid fa-cart-arrow-down fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Category</p>
                                    <h3 class="my-1 text-warning">{{ $categoryCount }}</h3>
                                    {{-- <p class="mb-0 font-13">+8.4% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto">
                                    <i class="fa-solid fa-list fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!--end row-->


            <hr />
            <h4 class="font-weight-bold1">Today Report</h4>
            <!-- card content is started -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-primary">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Today Contact details</p>
                                    <h3 class="my-1 text-primary">{{ $today_contact_count }}</h3>
                                    {{-- <p class="mb-0 font-13">+5.4% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blue text-white ms-auto">
                                    {{-- <i class="bx bxs-wallet"></i> --}}
                                    <i class="fa-solid fa-address-card fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            {{-- ======================================================================================= --}}

            {{-- <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">User Distribution</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="userChart"></canvas>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center border-top">
                                    Total Users <span class="badge bg-success rounded-pill">{{ $chartData['Users'] }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">


                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Permissions Per Role</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="roleChart"></canvas>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center border-top">
                                    Total Permissions <span
                                        class="badge bg-success rounded-pill">{{ $totalPermissions }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div> --}}


            {{-- <div class="card radius-10">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Recent Orders</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                                    class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Photo</th>
                                    <th>Product ID</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Shipping</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Iphone 5</td>
                                    <td>
                                        <img src="{{ asset('admin/assets/images/products/01.png') }}" class="product-img-2"
                                            alt="product img" />
                                    </td>
                                    <td>#9405822</td>
                                    <td>
                                        <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                    </td>
                                    <td>$1250.00</td>
                                    <td>03 Feb 2020</td>
                                    <td>
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-gradient-quepal" role="progressbar"
                                                style="width: 100%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Earphone GL</td>
                                    <td>
                                        <img src="{{ asset('admin/assets/images/products/02.png') }}" class="product-img-2"
                                            alt="product img" />
                                    </td>
                                    <td>#8304620</td>
                                    <td>
                                        <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                                    </td>
                                    <td>$1500.00</td>
                                    <td>05 Feb 2020</td>
                                    <td>
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-gradient-blooker" role="progressbar"
                                                style="width: 60%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>HD Hand Camera</td>
                                    <td>
                                        <img src="{{ asset('admin/assets/images/products/03.png') }}"
                                            class="product-img-2" alt="product img" />
                                    </td>
                                    <td>#4736890</td>
                                    <td>
                                        <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                                    </td>
                                    <td>$1400.00</td>
                                    <td>06 Feb 2020</td>
                                    <td>
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-gradient-bloody" role="progressbar"
                                                style="width: 70%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Clasic Shoes</td>
                                    <td>
                                        <img src="{{ asset('admin/assets/images/products/04.png') }}"
                                            class="product-img-2" alt="product img" />
                                    </td>
                                    <td>#8543765</td>
                                    <td>
                                        <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                    </td>
                                    <td>$1200.00</td>
                                    <td>14 Feb 2020</td>
                                    <td>
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-gradient-quepal" role="progressbar"
                                                style="width: 100%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sitting Chair</td>
                                    <td>
                                        <img src="{{ asset('admin/assets/images/products/06.png') }}"
                                            class="product-img-2" alt="product img" />
                                    </td>
                                    <td>#9629240</td>
                                    <td>
                                        <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                                    </td>
                                    <td>$1500.00</td>
                                    <td>18 Feb 2020</td>
                                    <td>
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-gradient-blooker" role="progressbar"
                                                style="width: 60%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hand Watch</td>
                                    <td>
                                        <img src="{{ asset('admin/assets/images/products/05.png') }}"
                                            class="product-img-2" alt="product img" />
                                    </td>
                                    <td>#8506790</td>
                                    <td>
                                        <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                                    </td>
                                    <td>$1800.00</td>
                                    <td>21 Feb 2020</td>
                                    <td>
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-gradient-bloody" role="progressbar"
                                                style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}


        </div>
    </div>
    {{-- ends --}}
    <!--end page wrapper -->




    {{-- testing  --}}
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("userChart").getContext("2d");

            var chartData = @json($chartData);

            new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: Object.keys(chartData),
                    datasets: [{
                        backgroundColor: ["#fc4a1a", "#4776e6", "#ee0979", "#42e695"],
                        data: Object.values(chartData),
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    cutout: 60,
                    plugins: {
                        legend: {
                            display: true
                        }
                    },
                },
            });
        });
    </script> --}}

    {{-- Roles and Permission --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("roleChart").getContext("2d");

            var roleNames = @json($roles);
            var permissionCounts = @json($permissionsPerRole);

            new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: roleNames,
                    datasets: [{
                        label: "Permissions",
                        backgroundColor: ["#ee0979", "#4776e6", "#fc4a1a", "#42e695"],
                        data: permissionCounts,
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    cutout: 60,
                    plugins: {
                        legend: {
                            display: true
                        }
                    },
                },
            });
        });
    </script> --}}
@endsection
