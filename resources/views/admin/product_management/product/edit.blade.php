@extends('admin.layouts.index')
@section('css')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Edit Product</h2>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
                </div>
                <hr>
                <div class="bs-stepper">
                    <div class="card">
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form action="{{ route('product.update', $Product_image->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

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
                                                                value="{{ $Product_image->name }}">
                                                            @error('name')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        {{-- <div class="col-12 col-lg-12 mb-3">
                                                            <label for="product" class="form-label">Slug Name (Product
                                                                Name should be unique)<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="slug"
                                                                name="slug" placeholder="Slug name"
                                                                value="{{ $Product_image->slug }}" readonly>
                                                            @error('slug')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div> --}}
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="inputProductDescription"
                                                            class="form-label">Description</label>
                                                        <textarea class="form-control" id="inputProductDescription" rows="3" name="description">{{ $Product_image->description }}</textarea>
                                                    </div>


                                                    <div class="col-12 col-lg-12 mb-3">
                                                        <label for="rating" class="form-label">Main Image <span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="file" id="multilpeimageUpload"
                                                            name="thumbnail">
                                                        <img src="{{ asset('storage/' . $Product_image->thumbnail) }}"
                                                            alt="Image" class="img-thumbnail  mt-3"
                                                            style="width: 200px; height: 200px;object-fit:contain;">
                                                        <div id="imagePreviewContainer" class="d-flex"></div>
                                                        @error('thumbnail')
                                                            <span style="color: red">{{ $message }}</span>
                                                        @enderror
                                                    </div>


                                                    <div class="col-12 col-lg-12 mb-2">
                                                        <label for="multiple_images" class="form-label">Select Mutiple
                                                            Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="file" id="formFile"
                                                            name="multiple_images[]" multiple>
                                                        <div id="imagePreviewContainer" class="d-flex"></div>
                                                        @error('multiple_images')
                                                            <span style="color: red">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    {{-- <div class="col-12 col-lg-12 mb-2">
                                                        <label class="form-label mb-0">Dynamic Input Details for
                                                            Products</label>
                                                        <table class="table table-bordered" id="dynamicTable">
                                                            <tr>
                                                                <td>
                                                                    <input type="text" name="addmore[0][addingfeatures]"
                                                                        placeholder="eg. Color" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                        name="addmore[0][addingfeaturesvalue]"
                                                                        placeholder="eg. Red" class="form-control" />
                                                                </td>
                                                                <td><button type="button" name="add" id="add"
                                                                        class="btn btn-success w-100">Add More</button></td>
                                                            </tr>
                                                        </table>
                                                        @error('addmore[0]')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div> --}}



                                                    <div class="col-12 mt-2">
                                                        <label class="form-label mb-0">Dynamic Input</label>
                                                        <table class="table table-bordered" id="dynamicTable">
                                                            <tr>
                                                                <td>
                                                                    <input type="text" name="addmore[0][addingfeatures]"
                                                                        placeholder="Add new data" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                        name="addmore[0][addingfeaturesvalue]"
                                                                        placeholder="Add new Value" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    <button type="button" name="add" id="add"
                                                                        class="btn btn-success w-100">Add More</button>
                                                                </td>
                                                            </tr>
                                                            @foreach ($productfeature as $key => $value)
                                                                <tr>
                                                                    <td>
                                                                        <input type="text"
                                                                            value="{{ $value['feature'] }}"
                                                                            name="addmore[{{ $key + 1 }}][addingfeatures]"
                                                                            placeholder="Enter your Name"
                                                                            class="form-control" />
                                                                        <input type="hidden" value="{{ $value['id'] }}"
                                                                            name="addmore[{{ $key + 1 }}][id]" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" value="{{ $value['value'] }}"
                                                                            name="addmore[{{ $key + 1 }}][addingfeaturesvalue]"
                                                                            placeholder="Enter your Qty"
                                                                            class="form-control" />
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn btn-danger remove-tr w-100">Remove</button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </table>
                                                        @error('addmore[0]')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="border border-3 p-4 rounded">
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label for="product" class="form-label">Product
                                                                price <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="price"
                                                                name="price" placeholder="00.00"
                                                                value="{{ $Product_image->price }}">
                                                            @error('price')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="product" class="form-label">Discount
                                                                price</label>
                                                            <input type="text" class="form-control"
                                                                id="discount_price" name="discount_price"
                                                                placeholder="00.00"
                                                                value="{{ $Product_image->discount_price }}">
                                                            @error('discount_price')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="product" class="form-label">Stock <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="stock"
                                                                name="stock" placeholder="Stock" required
                                                                value="{{ $Product_image->stock }}">
                                                            @error('stock')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="brand" class="form-label">Brand</label>
                                                            <input type="text" class="form-control" id="brand"
                                                                name="brand" placeholder="Brand"
                                                                value="{{ $Product_image->brand }}">
                                                            @error('brand')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="rating" class="form-label">Rating( 1 to 5)<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="rating"
                                                                min="0" max="5" step="0.1"
                                                                value="{{ $Product_image->rating }}">

                                                            @error('rating')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        {{-- <div class="col-md-6">
                                                            <label for="sku" class="form-label">SKU</label>
                                                            <input type="text" class="form-control" id="sku"
                                                                name="sku" placeholder="Enter SKU"
                                                                value="{{ $Product_image->sku }}">
                                                            @error('sku')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div> --}}


                                                        <div class="col-12">
                                                            <label for="Category" class="form-label">Category <span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-select"
                                                                name="category_id" style=" text-transform: uppercase">
                                                                <option value="">Choose</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}"
                                                                        {{ $category->id == $category->id ? 'selected' : '' }}
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
                                                                    {{ $Product_image->status == '1' ? 'selected' : '' }}>
                                                                    Active</option>
                                                                <option value="0"
                                                                    {{ $Product_image->status == '0' ? 'selected' : '' }}>
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
                                                                    <option value="{{ $user->id }}"
                                                                        {{ $Product_image->status == '1' ? 'selected' : '' }}
                                                                        {{ old('created_by') == $user->id ? 'selected' : '' }}>
                                                                        {{ $user->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('created_by')
                                                                <span style="color: red">{{ $message }}</span>
                                                            @enderror
                                                        </div> --}}
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                {{-- <div class="form-check">
                                                                    <input type="hidden" name="featured" value="0">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="featured" name="featured" value="1"
                                                                        {{ $Product_image->featured == 1 ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="featured">
                                                                        Featured
                                                                        Product</label>
                                                                </div> --}}
                                                                <div class="form-check mx-2">
                                                                    <input type="hidden" name="is_trending"
                                                                        value="0">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="is_trending" name="is_trending"
                                                                        value="1"
                                                                        {{ isset($Product_image) && $Product_image->is_trending == 1 ? 'checked' : '' }}>
                                                                    <label class="form-check-label"
                                                                        for="is_trending">Trending
                                                                        Product</label>
                                                                </div>

                                                                <div class="form-check mx-2">
                                                                    <input type="hidden" name="is_new" value="0">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="is_new" name="is_new" value="1"
                                                                        {{ $Product_image->is_new == 1 ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="is_new">New
                                                                        Arrival</label>
                                                                </div>

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





                                {{-- product images Starts --}}
                                <div class="p-6 space-y-4 pt-0">
                                    @if (count($Product_related_image) > 0)
                                        {{-- Gallery Images --}}
                                        <div class="mt-2">
                                            <label for="gallery_images" class="form-label">Already Added Product
                                                Images <span>(To remove the image, click the red cross
                                                    button)</span></label>
                                            <div class="d-flex flex-wrap mt-2">
                                                @foreach ($Product_related_image as $Products_image)
                                                    <div class="m-2 image-container position-relative">
                                                        <div style="width: 155px; height: 155px;">
                                                            <img src="{{ asset('storage/' . $Products_image->image_path) }}"
                                                                alt="Gallery Image" class="img-thumbnail"
                                                                style="height: 100%; width: 100%; object-fit: cover;border-radius:10px">
                                                        </div>


                                                        <form
                                                            action="{{ route('product_image.delete', $Products_image->id) }}"
                                                            method="post" class="delete-form">
                                                            <div class="d-flex justify-content-end align-items-center w-100 position-absolute"
                                                                style="right: -27px;top: -17px;">
                                                                <button class="btn btn-transparent">
                                                                    <i class="fa-solid fa-square-xmark fs-3 text-danger"
                                                                        type="button"></i>
                                                                </button>
                                                            </div>
                                                            @csrf
                                                            @method('delete')
                                                        </form>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- Gallery Images --}}
                                    @endif
                                </div>
                                {{-- product images Ends --}}
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
