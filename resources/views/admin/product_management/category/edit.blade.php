@extends('admin.layouts.index')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Edit Category</h2>
                    <a href="{{ route('category.index') }}" class="btn btn-primary">Back</a>
                </div>
                <hr>
                <div id="stepper1" class="bs-stepper">
                    <div class="card">
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form action="{{ route('category.update', $category->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="bs-stepper-pane mt-4">
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-12">
                                                <label for="FisrtName" class="form-label">Category</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Category" value="{{ old('name', $category->name) }}"
                                                    required>

                                                @error('name')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <button class="btn btn-primary px-4">Submit<i
                                                        class='bx bx-right-arrow-alt ms-2'></i></button>
                                            </div>
                                        </div>
                                    </div>
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
