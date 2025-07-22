@extends('admin.layouts.index')
@section('css')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Edit Gallery</h2>
                    <a href="{{ route('gallery.image.index') }}" class="btn btn-primary">Back</a>
                </div>
                <hr>
                <div class="bs-stepper">
                    <div class="card">
                        <div class="card-body">

                            <div class="bs-stepper-content">


                                <form action="{{ route('gallery.image.update', $image->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    {{-- Show current image --}}
                                    <p>Current Image</p>
                                    <div class="mb-3">

                                        {{-- Image preview --}}
                                        <div class="row">
                                            @foreach ($imagesInCategory as $img)
                                                <div
                                                    class="position-relative mb-3 col-md-1 mb-3 image-wrapper-{{ $img->id }} ">

                                                    <div class="position-relative mb-3 ">
                                                        <img src="{{ asset($img->image) }}" class="img-thumbnail"
                                                            style="height: 100px; width: 100%; object-fit: cover;">
                                                        <button type="button" class="btn btn-sm btn-danger delete-image"
                                                            data-id="{{ $img->id }}"
                                                            style="position: absolute; top: -2px; right: -2px; border-radius: 50%; padding: 2px 8px;">
                                                            &times;
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    {{-- Upload new image --}}
                                    <div class="mb-3">
                                        <label for="image">Change Image</label>
                                        <input class="form-control" type="file" id="formFile" name="multiple_images[]"
                                            multiple>
                                        <div id="imagePreviewContainer" class="d-flex"></div>
                                        @error('multiple_images')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                        <small class="text-muted">Leave empty to keep the current image.</small>
                                    </div>

                                    {{-- Dropdown with all categories --}}
                                    <div class="mb-3">
                                        <label>Category</label>
                                        <select name="gallery_category_id" class="form-control">
                                            @foreach ($allCategories as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ $cat->id == $image->gallery_category_id ? 'selected' : '' }}>
                                                    {{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <!--end stepper one-->
            </div>
        </div>
    </div>

@endsection


@push('script')
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).on('click', '.delete-image', function() {
            var imageId = $(this).data('id');

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
                        url: '/gallery-image/' + imageId + '/destroy',
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                $('.image-wrapper-' + imageId).remove(); // Remove from DOM
                                Swal.fire("Deleted!", "Image has been deleted.", "success");
                            } else {
                                Swal.fire("Oops!", response.message, "error");
                            }
                        },
                        error: function() {
                            Swal.fire("Error", "Something went wrong.", "error");
                        }
                    });
                }
            });
        });
    </script>
@endpush
