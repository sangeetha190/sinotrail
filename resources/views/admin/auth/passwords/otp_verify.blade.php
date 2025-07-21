@extends('admin.auth.layouts.index')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .center_div {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .resend_div {
        /* margin-top: 30px; */
        text-align: center;
    }

    .text-brown {
        color: #0d64d7;
        margin-top: 10px;
    }
</style>
@section('content')
    <div class="authentication-forgot d-flex align-items-center justify-content-center">
        <div class="card forgot-box">
            <div class="card-body">
                <div class="p-3">
                    <div class="text-center">
                        {{-- <img src="{{ asset('admin/assets/images/icons/forgot-2.png') }}" width="100" alt="" /> --}}
                        <img src="https://cdn-icons-png.freepik.com/256/10805/10805053.png?semt=ais_hybrid" width="100"
                            alt="Mail-image" />

                    </div>
                    <h4 class="mt-5 font-weight-bold">OPT Verification</h4>
                    {{-- <p class="text-muted">
                        Enter your registered email ID to reset the password
                    </p> --}}

                    {{-- Display Overall Error Message --}}
                    @if (session('error'))
                        <div class="alert alert-danger text-danger mb-4">
                            <span class=""> {{ session('error') }}</span>
                        </div>
                    @endif
                    <form action="{{ route('otp_validate') }}" method="POST" class="leading-none mt-8" id="otpForm">
                        @csrf
                        @php
                            $email = session('forgot_email', '');
                            if ($email) {
                                $emailParts = explode('@', $email);
                                $namePart = $emailParts[0]; // Before '@'
                                $domainPart = $emailParts[1]; // After '@'

                                // Mask middle part of name, keeping first 4 and last 2 characters
                                if (strlen($namePart) > 6) {
                                    $maskedName =
                                        substr($namePart, 0, 4) .
                                        str_repeat('*', strlen($namePart) - 6) .
                                        substr($namePart, -4);
                                } else {
                                    $maskedName =
                                        substr($namePart, 0, 1) .
                                        str_repeat('*', max(strlen($namePart) - 2, 1)) .
                                        substr($namePart, -1);
                                }

                                $maskedEmail = $maskedName . '@' . $domainPart;
                            } else {
                                $maskedEmail = '';
                            }
                        @endphp

                        <div class="my-4">
                            <label for="otp" class="form-label">
                                Enter OTP code sent to your email <strong>{{ $maskedEmail }}</strong>
                            </label>
                            <input type="number" class="form-control" placeholder="123456" name="otp" required />
                            @error('otp')
                                <div class="invalid-feedback mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" id="submitBtn" class="btn btn-primary"> Verify & Proceed</button>
                            <div class="resend_div">
                                <p>Didn't receive OTP code?</p>
                                <button id="resendOtpBtn" class="btn text-brown p-0 mt-0 text-primary">Resend OTP</button>
                            </div>
                            {{-- <a href="authentication-signin.html" class="btn btn-light"><i
                                    class="bx bx-arrow-back me-1"></i>Back
                                to Login</a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById("resendOtpBtn").addEventListener("click", function() {
            let resendBtn = document.getElementById("resendOtpBtn");

            // Disable the button to prevent multiple clicks
            resendBtn.disabled = true;
            resendBtn.textContent = "Resending...";

            fetch("{{ route('otp_resend') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                            "content"),
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({})
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success alert with SweetAlert
                        Swal.fire({
                            title: "Success!",
                            text: "OTP has been sent to your email.",
                            icon: "success",
                            confirmButtonText: "OK"
                        });
                        resendBtn.disabled = false;
                        resendBtn.textContent = "Resend OTP";
                        // // Re-enable the button after 30 seconds
                        // setTimeout(() => {

                        // }, 30000);
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: data.error || "Something went wrong!",
                            icon: "error",
                            confirmButtonText: "Try Again"
                        });

                        resendBtn.disabled = false;
                        resendBtn.textContent = "Resend OTP";
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        title: "Failed!",
                        text: "Failed to resend OTP. Please try again.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });

                    resendBtn.disabled = false;
                    resendBtn.textContent = "Resend OTP";
                });
        });
    </script>
@endsection
