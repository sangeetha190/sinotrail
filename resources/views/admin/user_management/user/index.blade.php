@extends('admin.layouts.index')
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- @section('css')
@endsection --}}

@section('content')
    {{-- toast starts --}}
    @include('components.message')
    {{-- toast Ends --}}

    <div class="page-wrapper">
        <div class="page-content">

            @include('admin.layouts.sessionmsg')

            <div class="container">

                <div class="d-flex justify-content-between">
                    <h2>User List</h2>
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>
                </div>

                <div class="table-responsive">
                    <table id="userTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be loaded dynamically via AJAX -->
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                processing: true,
                serverSide: false, // Change to true if large dataset
                ajax: {
                    url: '{{ route('user.get') }}', // Ensure this route exists
                    dataSrc: 'data'
                },
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // Serial number
                        }
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'roles'
                    }, // Show roles
                    {
                        data: 'status',
                        render: function(data) {
                            return data == 1 ? '<span class="badge bg-success">Active</span>' :
                                '<span class="badge bg-danger">Inactive</span>';
                        }
                    },

                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                        <a href="/user-edit/${row.id}">
                            <i class="fa-solid fa-pen text-secondary"></i>
                        </a>
                        <a href="javascript:void(0);" class="delete-user" data-id="${row.id}" title="Delete">
                         <i class="fa-solid fa-trash-can text-danger"></i>
                        </a>
                    `;
                        }
                    }
                ]
            });

            // Handle delete button click
            $(document).on('click', '.delete-user', function() {
                let id = $(this).data('id');
                deletePermission(id);
            });
        });

        function deletePermission(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/user-delete/${id}`,
                        type: 'POST', // Keep POST if Laravel requires _method
                        data: {
                            _method: 'DELETE',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#userTable').DataTable().ajax.reload();
                            Swal.fire("Deleted!", "User has been deleted.",
                                "success");
                            // Show the success message dynamically
                            showAlert(response.success, 'success');
                        },

                        error: function(error) {
                            let errorMessage = error.responseJSON?.error ||
                                "Something went wrong.";
                            showAlert(errorMessage, 'error');
                        }
                    });
                }
            });
        }


        // Function to show alerts dynamically
        function showAlert(message, type) {
            let alertId = type === 'success' ? 'successAlert' : 'errorAlert';
            let alertClass = type === 'success' ? 'alert-success' : 'alert-danger';

            console.log("Alert ID:", alertId);

            // Remove existing alert before adding a new one
            $('#' + alertId).remove();

            let alertHtml = `
             <div id="${alertId}" class="alert ${alertClass} alert-dismissible fade show" role="alert"
              style="position: fixed; right: 30px; top: 30px; z-index: 9999; width: 20%;">
              ${message}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
             `;

            // Append the alert dynamically
            $('body').append(alertHtml);

            // Auto-remove after 3 seconds
            setTimeout(function() {
                console.log("Fading out alert:", alertId);
                $('#' + alertId).fadeOut('slow', function() {
                    console.log("Removing alert:", alertId);
                    $(this).remove();
                });
            }, 3000);
        }
    </script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('userChart').getContext('2d');

            var userData = @json($userData);

            // Extract dates and counts
            var dates = userData.map(item => item.date);
            var counts = userData.map(item => item.count);

            new Chart(ctx, {
                type: 'bar', // You can change to 'line' for a line chart
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ], // X-axis: Registration dates
                    datasets: [{
                        label: 'Users Registered Per Day',
                        data: counts, // Y-axis: User count per date
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script> --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("users").getContext("2d");

            var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke1.addColorStop(0, "#fc4a1a");
            gradientStroke1.addColorStop(1, "#f7b733");

            var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke2.addColorStop(0, "#4776e6");
            gradientStroke2.addColorStop(1, "#8e54e9");

            var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke3.addColorStop(0, "#ee0979");
            gradientStroke3.addColorStop(1, "#ee0979");

            var gradientStroke4 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke4.addColorStop(0, "#42e695");
            gradientStroke4.addColorStop(1, "#3bb2b8");

            var chartData = @json($chartData);

            var myChart = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: Object.keys(chartData),
                    datasets: [{
                        backgroundColor: [gradientStroke1, gradientStroke2, gradientStroke3,
                            gradientStroke4
                        ],
                        hoverBackgroundColor: [gradientStroke1, gradientStroke2, gradientStroke3,
                            gradientStroke4
                        ],
                        data: Object.values(chartData),
                        borderWidth: 1,
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    cutout: "82%",
                    plugins: {
                        legend: {
                            display: true,
                        },
                    },
                },
            });
        });
    </script> --}}

    {{-- testing  --}}
    <script>
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
    </script>

    {{-- Roles and Permission --}}

    <script>
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
    </script>
@endpush
