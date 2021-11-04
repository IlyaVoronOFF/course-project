@extends('layouts.main');
@section('content')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1920x400.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Login & Register Page</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home/</a>
                            </li>
                            <li>Login | Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-register-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="/login" enctype="multipart/form-data">
                    	@csrf
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                                    @foreach ($errors->get('email') as $message)
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" name="password" placeholder="Password">
                                    @foreach ($errors->get('password') as $message)
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-4 pt-1 mt-md-0">
                                    <div class="forgotton-password_info">
                                        <a href="#"> Forgotten pasward?</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <button class="btn btn-custom-size lg-size btn-primary">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 pt-10 pt-lg-0">
                    <form method="POST" action="/register" enctype="multipart/form-data">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Register</h4>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-4">
                                    <label>First Name</label>
                                    <input class="mb-0" type="text" name="firstname" placeholder="First Name" value="{{ old('firstname') }}">
                                    @foreach ($errors->get('firstname') as $message)
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label>Last Name</label>
                                    <input class="mb-0" type="text" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}">
                                    @foreach ($errors->get('lastname') as $message)
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                                    @foreach ($errors->get('email') as $message)
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" name="password" placeholder="Password">
                                    @foreach ($errors->get('password') as $message)
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Confirm Password</label>
                                    <input class="mb-0" type="password" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-custom-size lg-size btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection