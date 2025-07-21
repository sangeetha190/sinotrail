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
                    <h2>Edit Role</h2>
                    <a href="{{ route('role.index') }}" class="btn btn-primary">Back</a>
                </div>
                {{-- <h6 class="text-uppercase">Non Linear</h6> --}}
                <hr>
                <div id="stepper1" class="bs-stepper">
                    <div class="card">
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form action="{{ route('role.update', $roles->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="bs-stepper-pane mt-4">
                                        <div class="row g-3">

                                            <div class="col-12 col-lg-12">
                                                <label for="FisrtName" class="form-label">Role</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Role" value="{{ $roles->name }}" required>

                                                @error('name')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-lg-12">
                                                <label for="FisrtName" class="form-label">Permission</label>
                                                @foreach ($permissions as $permission)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="permission[]"
                                                            value="{{ $permission->id }}" id="checkbox{{ $permission->id }}"
                                                            {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>
                                                        <label class="form-check-label text-capitalize"
                                                            for="checkbox{{ $permission->id }}">
                                                            {{ $permission->name }} </label>
                                                    </div>
                                                    @error('permission')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                @endforeach
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
