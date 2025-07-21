@extends('admin.auth.layouts.index')
@section('content')
    <div class="authentication-reset-password d-flex align-items-center justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="p-4">
                    <div class="text-start mb-4">
                        <h5 class="">Genrate New Password</h5>
                        <p class="mb-0">
                            We received your reset password request. Please enter your new
                            password!
                        </p>
                    </div>
                    {{-- Display Overall Error Message --}}
                    {{-- @if (session('error'))
                        <div class="alert alert-danger text-danger mb-4">
                            <span class=""> {{ session('error') }}</span>
                        </div>
                    @endif --}}

                    @if ($errors->any())
                        <div class="alert alert-danger text-danger mb-4">

                            @foreach ($errors->all() as $error)
                                <span class="">{{ $error }}</span>
                            @endforeach

                        </div>
                    @endif
                    <form action="{{ route('reset_validate') }}" method="POST">
                        @csrf
                        <div class="mb-3 mt-4">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control" placeholder="Enter new password"
                                value="{{ old('new_password') }}" id="new_password" name="new_password" />
                            @error('new_password')
                                <div class="invalid-feedback mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm password" id="confirm_password"
                                name="confirm_password" value="{{ old('confirm_password') }}" />
                            @error('confirm_password')
                                <div class="invalid-feedback mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3 mt-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checked_input">
                                <label class="form-check-label" for="checked_input">Show Password</label>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                Change Password
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const checked_input = document.querySelector("#confirm_password");
        const new_password = document.querySelector("#new_password");

        document.getElementById('checked_input').addEventListener('change', function() {
            const type = this.checked ? "text" : "password"
            checked_input.type = type;
            new_password.type = type;
        });
    </script>
    {{-- <script>
        const checked_input = document.querySelector("#checked_input");
        const new_password = document.querySelector("#new_password");
        const confirm_password = document.querySelector("#confirm_password");

        checked_input.addEventListener('change', function() {
            const type = this.checked ? "text" : "password";
            new_password.type = type;
            confirm_password.type = type;
        });
    </script> --}}
@endsection
