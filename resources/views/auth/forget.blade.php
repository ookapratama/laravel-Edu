@extends('auth.layouts.index', ['title' => 'Ganti Password'])
@section('content')
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            <img src="https://dcc-dp.org/public/config/web/20220713_62ce297e58839.png" alt="logo" width="120"
                class="shadow-light ">
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Reset Password</h4>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    {{-- <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="card">
                                          <div class="card-body text-center" id="swal-5">
                                            <div class="mb-2">Error Message</div>
                                          </div>
                                        </div>
                                      </div> --}}
                    @foreach ($errors->all() as $v)
                        <li class="list-group-item list-group-item-danger mb-2">{{ $v }}</li>
                    @endforeach
                @endif

                @if ($message = Session::get('pesan'))
                    <div class="alert alert-danger alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <form method="POST" action="{{ route('reset') }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username" tabindex="1" required
                            autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                            name="password" tabindex="2" required>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="confirm-password"
                            tabindex="2" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Reset Password
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
