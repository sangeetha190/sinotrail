@extends('admin.auth.layouts.index')
@section('content')
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-4 pt-0">
                                <div class="text-center">
                                    <img src="./assets/images/lock.png" width="60" alt="" />
                                </div>
                                <div class="text-center mb-4">
                                    <h5 class="mt-2">Admin Panel</h5>
                                    <p class="mb-0">Please log in to your account</p>
                                </div>
                                <div class="form-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger text-danger mb-4">
                                            @foreach ($errors->all() as $error)
                                                <span class="">{{ $error }}</span>
                                            @endforeach
                                        </div>
                                    @endif

                                    <form class="row g-3" action="{{ route('admin.login-validate') }}" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmailAddress"
                                                placeholder="example@gmail.com" name="email" />
                                            {{-- @error('email')
                                                <span class="text-danger mt-2">{{ $message }}</span>
                                            @enderror --}}
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                    id="inputChoosePassword" name="password" placeholder="Enter Password" />
                                                {{-- @error('password')
                                                    <span class="text-danger mt-2">{{ $message }}</span>
                                                @enderror --}}
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class="bx bx-hide"></i></a>
                                            </div>
                                        </div>

                                        <a href="{{ route('forgot_password') }}">
                                            <p class="d-flex forget_password justify-content-end mb-0">Forget Password ?</p>
                                        </a>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">
                                                    Sign in
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
