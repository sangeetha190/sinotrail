@extends('admin.auth.layouts.index')
@section('content')
    <div class="authentication-forgot d-flex align-items-center justify-content-center">
        <div class="card forgot-box">
            <div class="card-body">
                <div class="p-3">
                    <div class="text-center">
                        <img src="{{ asset('admin/assets/images/icons/forgot-2.png') }}" width="100" alt="" />
                    </div>
                    <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                    <p class="text-muted">
                        Enter your registered email ID to reset the password
                    </p>

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
                    <form action="{{ route('forgot_validate') }}" method="POST" class="leading-none mt-8" id="forgotForm">
                        @csrf
                        <div class="my-4">
                            <label class="form-label">Email id</label>
                            <input type="text" class="form-control" placeholder="example@user.com" name="email"
                                required />
                            @error('email')
                                <div class="invalid-feedback mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" id="submitBtn" class="btn btn-primary">Send</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("forgotForm").addEventListener("submit", function() {
            let submitBtn = document.getElementById("submitBtn");
            submitBtn.disabled = true;
            submitBtn.textContent = "Processing...";
        });
    </script>
@endsection
