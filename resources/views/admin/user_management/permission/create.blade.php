@extends('admin.layouts.index')
@section('css')
@endsection

@section('content')
    {{-- toast starts --}}
    {{-- @include('components.message') --}}
    {{-- toast Ends --}}

    <div class="page-wrapper">
        <div class="page-content">

            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Create Permission</h2>
                    <a href="{{ route('permission.index') }}" class="btn btn-primary">Back</a>
                </div>
                {{-- <h6 class="text-uppercase">Non Linear</h6> --}}
                <hr>
                <div id="stepper1" class="bs-stepper">
                    <div class="card">
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form action="{{ route('permission.store') }}" method="POST">
                                    @csrf
                                    <div class="bs-stepper-pane mt-4">
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-12">
                                                <label for="FisrtName" class="form-label">Permission</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Permission" required>

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
