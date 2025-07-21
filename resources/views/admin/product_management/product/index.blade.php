@extends('admin.layouts.index')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('css')
    <style>
        td img {
            width: 30px !important;
        }
    </style>
@endsection

@section('content')
    {{-- toast starts --}}
    @include('components.message')
    {{-- toast Ends --}}

    <div class="page-wrapper">
        <div class="page-content">

            @include('admin.layouts.sessionmsg')

            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Product List</h2>
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
                </div>
                <div class="table-responsive">
                    <table id="product_table" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Offer Price</th>
                                <th>Image</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th>New Arrival</th>
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
            $('#product_table').DataTable({
                processing: true,
                serverSide: false, // Change this to true if you have a large dataset
                ajax: {
                    url: '{{ route('product.get') }}', // Use the correct route
                    dataSrc: 'data'
                },
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // Generates serial numbers
                        }
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'category',
                        render: function(data, type, row) {
                            return data ? data.name :
                                '<span class="badge bg-secondary">No Category</span>';
                        }
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'discount_price',
                        name: 'discount_price',
                        render: function(data, type, row) {
                            if (row.discount_price && row.price) {
                                let difference = row.price - row.discount_price;
                                return `${row.discount_price} (${difference})`;
                            }
                            return '-';
                        }
                    }, {
                        data: 'thumbnail', // Ensuring it maps correctly
                        render: function(data, type, row) {

                            if (!data) {
                                return `<img src="default-image.jpg" alt="No Image Available" width="50"/>`; // Handle null cases
                            }
                            return `<img src="/storage/${data}" alt="${row.name ?? 'Product Image'}" width="50"/>`;
                        }
                    },
                    {
                        data: 'stock',
                        render: function(data, type, row) {

                            if (data > 10) {
                                return `<div class="text-center">
                                      <span class="badge text-dark fs-6">${data}</span>
                                   </div>`; // Handle null cases
                            }
                            return `<div class="text-center fs-6">
                                      <span class="badge bg-danger">${data}</span>
                                 </div>`;
                        }
                    },
                    {
                        data: 'status',
                        render: function(data, type, row) {

                            if (data == 1) {
                                return `
                                  <div class="text-center">
                                      <span class="badge bg-success">Active</span>
                                   </div>`;
                            }
                            return `
                                 <div class="text-center">
                                      <span class="badge bg-danger">InActive</span>
                                 </div>`;
                        }
                    },
                    // the new arrival test
                    // {
                    //     data: 'created_by',
                    //     render: function(data, type, row) {
                    //         return row.created_by ? row.created_by.name :
                    //             '<span class="badge bg-secondary">Unknown</span>';
                    //     }
                    // },
                    {
                        data: 'is_new',
                        render: function(data, type, row) {

                            if (data == 0) {
                                return `
                                  <div class="text-center">
                                      <span class="badge  bg-light text-dark">Regular</span>

                                  </div>`;
                            }
                            return `
                                 <div class="text-center">
                                     <span class="badge bg-danger">New</span>
                                 </div>`;
                        }
                    },

                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                            <a href="/product-edit/${row.id}">
                                <i class="fa-solid fa-pen text-secondary"></i>
                            </a>
                            <a href="javascript:void(0);" class="delete-product" data-id="${row.id}" title="Delete">
                                <i class="fa-solid fa-trash-can text-danger"></i>
                            </a>
                        `;
                        }
                    }
                ]
            });

            // Handle delete button click
            $(document).on('click', '.delete-product', function() {
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
                        url: `/product-delete/${id}`,
                        type: 'POST', // Keep POST if Laravel requires _method
                        data: {
                            _method: 'DELETE',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#product_table').DataTable().ajax.reload();
                            Swal.fire("Deleted!", "Product has been deleted.", "success");
                            // Show the success message dynamically
                            showAlert(response.success, 'success');
                        },

                        error: function(error) {
                            let errorMessage = error.responseJSON?.error || "Something went wrong.";
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
@endpush
