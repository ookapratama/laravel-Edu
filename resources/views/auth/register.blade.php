@extends('auth.layouts.index', ['title' => 'Register'])
@section('content')
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            <img src="https://dcc-dp.org/public/config/web/20220713_62ce297e58839.png" alt="logo" width="120"
                class="shadow-light">
        </div>

        <div class="card card-primary">
            <div class="card-header d-flex justify-content-between">
                <h4>Register</h4>
                <a href="/login" class="text-muted">Kembali</a>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="username">Username</label>
                            <input id="username" required type="text" class="form-control" name="username" autofocus>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12">
                            <label for="password" class="d-block">Password</label>
                            <input id="password" required type="password" class="form-control pwstrength"
                                data-indicator="pwindicator" name="password">
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12">
                            <label for="password" class="d-block">Pilih Role</label>
                            <select class="form-control" name="role" id="">
                                <option value="dosen">Dosen</option>
                                <option value="mahasiswa">Mahasiswa</option>
                            </select>
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Register
                        </button>
                    </div>
                </form>
            </div>

        </div>
        <div class="simple-footer">
            Laravel-edu &copy; Education Departement
        </div>
    </div>
@endsection
