@extends('admin.layouts.index')
@section('css')
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Edit User</h2>
                    <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
                </div>
                <hr>
                <div id="stepper1" class="bs-stepper">
                    <div class="card">
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form action="{{ route('user.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="bs-stepper-pane mt-4">
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-6">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="User Name" required value="{{ $user->name }}">
                                                @error('name')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" required value="{{ $user->email }}">
                                                @error('email')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            {{-- <div class="col-12 col-lg-6">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group show-hide-password">
                                                    <input type="password" class="form-control border-end-0" id="password"
                                                        name="password" placeholder="Enter Password" required
                                                        value="{{ old('password') }}">
                                                    <a href="javascript:;" class="input-group-text bg-transparent">
                                                        <i class="bx bx-hide"></i>
                                                    </a>
                                                </div>
                                                @error('password')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <label for="password_confirmation" class="form-label">Confirm
                                                    Password</label>
                                                <div class="input-group show-hide-password">
                                                    <input type="password" class="form-control border-end-0"
                                                        id="password_confirmation" name="password_confirmation"
                                                        placeholder="Confirm Password" required
                                                        value="{{ old('password_confirmation') }}">
                                                    <a href="javascript:;" class="input-group-text bg-transparent">
                                                        <i class="bx bx-hide"></i>
                                                    </a>
                                                </div>
                                            </div> --}}

                                            <div class="col-12 col-lg-6">
                                                <label for="InputCountry" class="form-label">Role</label>
                                                <select class="form-select" name="roles[]" required>
                                                    <option value="">Select Role</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role }}"
                                                            {{ in_array($role, $userRole) ? 'selected' : '' }}>
                                                            {{ $role }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('roles')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-select" name="status">
                                                    <option value="">Choose</option>
                                                    <option value="1" {{ $user->status == '1' ? 'selected' : '' }}>
                                                        Active</option>
                                                    <option value="0" {{ $user->status == '0' ? 'selected' : '' }}>
                                                        Inactive</option>
                                                </select>
                                                @error('status')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-lg-12">
                                                <button class="btn btn-primary px-4">Submit <i
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
