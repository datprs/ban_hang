@extends('admin.layout.layout')

@section('title')
    Đăng nhập
@endsection

@section('content')
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ route('admin.login') }}"><b>Admin</b>LTE</a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form method="post" id="login">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback" id="email"></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback" id="password"></div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" name="remember" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" id="loginAdmin" class="btn btn-primary btn-block" type="button">Đăng
                                nhập</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
