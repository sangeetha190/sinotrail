@extends('admin.layouts.index')
@section('css')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Create Product</h2>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
                </div>
                <hr>
                <div class="bs-stepper">
                    <div class="card">
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    {{-- form starts --}}
                                    {{-- ============================================================================== --}}
                                    <div class="form-body mt-0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="border border-3 p-4 rounded">
                                                    <div class="row">
                                                        <div class=" col-12 col-lg-12 mb-3">
                                                            <label for="product" class="form-label">Product Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" placeholder="name" required
                                                                value="{{ old('name') }}">
                                                            @error('name')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        {{--  <div class="col-12 col-lg-12 mb-3">
                                                            <label for="product" class="form-label">Slug Name (Product
                                                                Name should be unique)<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="slug"
                                                                name="slug" placeholder="Slug name" required
                                                                value="{{ old('slug') }}">
                                                            @error('slug')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div> --}}
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="inputProductDescription"
                                                            class="form-label">Description</label>
                                                        <textarea class="form-control" id="inputProductDescription" rows="3" name="description">{{ old('description') }}</textarea>
                                                    </div>


                                                    <div class="col-12 col-lg-12 mb-3">
                                                        <label for="rating" class="form-label">Main Image <span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="file" id="multilpeimageUpload"
                                                            name="thumbnail" required>
                                                        <div id="imagePreviewContainer" class="d-flex"></div>
                                                        @error('thumbnail')
                                                            <span style="color: red">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12 col-lg-12 mb-2">
                                                        <label for="multiple_images" class="form-label">Select Mutiple
                                                            Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="file" id="formFile"
                                                            name="multiple_images[]" multiple required>
                                                        <div id="imagePreviewContainer" class="d-flex"></div>
                                                        @error('multiple_images')
                                                            <span style="color: red">{{ $message }}</span>
                                                        @enderror
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="border border-3 p-4 rounded">
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label for="product" class="form-label">Product price <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="price"
                                                                name="price" placeholder="00.00" required
                                                                value="{{ old('price') }}">
                                                            @error('price')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="product" class="form-label">Discount
                                                                price</label>
                                                            <input type="text" class="form-control" id="discount_price"
                                                                name="discount_price" placeholder="00.00"
                                                                value="{{ old('discount_price') }}">
                                                            @error('discount_price')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="product" class="form-label">Stock <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="stock"
                                                                name="stock" placeholder="Stock" required
                                                                value="{{ old('stock') }}">
                                                            @error('stock')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="brand" class="form-label">Brand</label>
                                                            <input type="text" class="form-control" id="brand"
                                                                name="brand" placeholder="Brand"
                                                                value="{{ old('brand') }}">
                                                            @error('brand')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="rating" class="form-label">Rating(1 to 5)<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="rating"
                                                                min="0" max="5" step="0.1"
                                                                value="{{ old('rating') }}" required>

                                                            @error('rating')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        {{-- <div class="col-md-6">
                                                            <label for="sku" class="form-label">SKU</label>
                                                            <input type="text" class="form-control" id="sku"
                                                                name="sku" placeholder="Enter SKU"
                                                                value="{{ old('sku') }}">
                                                            @error('sku')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div> --}}


                                                        <div class="col-12">
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
                                                        <div class="col-12">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-control" id="status" name="status">
                                                                <option value="1"
                                                                    {{ old('status') == '1' ? 'selected' : '' }}>
                                                                    Active</option>
                                                                <option value="0"
                                                                    {{ old('status') == '0' ? 'selected' : '' }}>
                                                                    Inactive</option>
                                                            </select>
                                                            @error('status')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- <div class="col-12">
                                                            <label for="created_by" class="form-label">Created By</label>
                                                            <select class="form-control" id="created_by"
                                                                name="created_by">
                                                                <option value="">Select User</option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ auth()->id() }}" required
                                                                        {{ old('created_by') == $user->id ? 'selected' : '' }}>
                                                                        {{ auth()->user()->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('created_by')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div> --}}
                                                        {{-- <div class="col-12">
                                                            <label for="created_by" class="form-label">Created By</label>
                                                            <input type="hidden" id="created_by" name="created_by"
                                                                value="{{ auth()->id() }}">
                                                            <input type="text" class="form-control"
                                                                value="{{ auth()->user()->name }}" disabled>
                                                        </div> --}}
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                {{-- <div class="form-check">
                                                                    <input type="hidden" name="featured" value="0">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="featured" name="featured" value="1"
                                                                        {{ old('featured', 0) == 1 ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="featured">
                                                                        Featured
                                                                        Product</label>
                                                                </div> --}}
                                                                {{-- <div class="form-check mx-2">
                                                                    <input type="hidden" name="is_trending"
                                                                        value="0">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="is_trending" name="is_trending"
                                                                        value="1"
                                                                        {{ old('is_trending', 0) == 1 ? 'checked' : '' }}>
                                                                    <label class="form-check-label"
                                                                        for="is_trending">Trending
                                                                        Product</label>
                                                                </div> --}}

                                                                {{-- <div class="form-check mx-2">
                                                                    <input type="hidden" name="is_new" value="0">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="is_new" name="is_new" value="1"
                                                                        {{ old('is_new', 0) == 1 ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="is_new">New
                                                                        Arrival</label>
                                                                </div> --}}

                                                            </div>

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

@endsection
