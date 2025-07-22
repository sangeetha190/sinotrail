@extends('admin.layouts.index')
@section('css')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Create Gallery</h2>
                    <a href="{{ route('gallery.image.index') }}" class="btn btn-primary">Back</a>
                </div>
                <hr>
                <div class="bs-stepper">
                    <div class="card">
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form action="{{ route('gallery.image.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body mt-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="border border-3 p-4 rounded">
                                                    <div class="row">
                                                        <div class=" col-6 col-lg-6 mb-3">
                                                            <label for="product" class="form-label">Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" placeholder="name" required
                                                                value="{{ old('name') }}">
                                                            @error('name')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="Category" class="form-label">Category <span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-select" name="category_id"
                                                                style=" text-transform: uppercase">
                                                                <option value="{{ old('category_id') }}">Choose</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}"
                                                                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                                        class="text-uppercase">
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('category_id')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class=" col-6 col-lg-6 mb-3">
                                                        <label for="inputProductDescription"
                                                            class="form-label">Description</label>
                                                        <textarea class="form-control" id="inputProductDescription" rows="3" name="description">{{ old('description') }}</textarea>
                                                    </div>
                                                    <div class="col-6 col-lg-6 mb-2">
                                                        <label for="multiple_images" class="form-label">Select Mutiple
                                                            Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="file" id="formFile"
                                                            name="multiple_images[]" multiple required>
                                                        <div id="imagePreviewContainer" class="d-flex"></div>
                                                        @error('multiple_images')
                                                            <span style="color: red">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="col-12 col-lg-12">
                                                            <button class="btn btn-primary px-4">Submit<i
                                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- ============================================================================== --}}
                                    {{-- form Ends --}}
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end stepper one-->
            </div>
        </div>
    </div>

    <script>
        document.getElementById('multilpeimageUpload').addEventListener('change', function(event) {
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');
            imagePreviewContainer.innerHTML = '';

            const files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function() {

                    console.log(reader.result);

                    const image = document.createElement('img');
                    image.src = reader.result;
                    image.style.width = '200px';
                    image.style.height = '200px';
                    image.style.objectFit = 'contain';
                    imagePreviewContainer.appendChild(image);
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
    <script type="text/javascript">
        var i = 0;

        $("#add").click(function() {

            ++i;

            $("#dynamicTable").append('<tr><td><input type="text" name="addmore[' + i +
                '][addingfeatures]" placeholder="eg. Warranty" class="form-control" /></td><td><input type="text" name="addmore[' +
                i +
                '][addingfeaturesvalue]" placeholder="eg. 1 Year Warranty" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr w-100">Remove</button></td></tr>'
            );
        });

        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });
    </script>
@endsection
