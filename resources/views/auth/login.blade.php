@extends('auth.layouts.index', ['title' => 'Login'])
@section('content')
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

        <div class="login-brand">
            <img src="https://dcc-dp.org/public/config/web/20220713_62ce297e58839.png" alt="logo" width="120"
                class="shadow-light ">
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Login</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                    

                    @csrf

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username" tabindex="1" required
                            autofocus>
                        <div class="invalid-feedback">
                            Please fill in your username
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                            <div class="float-right">
                                <a href="{{ route('reset_password') }}" class="text-small">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                            please fill in your password
                        </div>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Login
                        </button>
                    </div>
                </form>

                <div class="mt-2 text-muted text-center">
                    Belum punya akun? <a href="/register">Silahkan daftar</a>
                </div>
            </div>
        </div>
        <div class="simple-footer">
            Laravel-edu &copy; Education Departement
        </div>
    </div>
@endsection
