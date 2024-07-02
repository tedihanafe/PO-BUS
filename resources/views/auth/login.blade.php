@extends('layouts.app')
@section('title', 'Login')
@section('content')

    <div class="col-xl-5 col-lg-6 col-md-9">
        <div class="card o-hidden border-0 my-5 bg-transparent">

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 font-weight-bold">APLICATION</h1>
                                <h3 class="h5 text-gray-900 mb-5 font-weight-bold">TICKET TRAVELING</h3>
                            </div>
                            <form method="POST" action="{{ route('login') }}" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-user @error('username') is-invalid @enderror"
                                        name="username" required autocomplete="off" placeholder="Username">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        name="password" required placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Login') }}
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small p-4 text-success text-decoration-none" href="{{ route('register') }}">Buat
                                    Akun!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // Mengatur latar belakang body dengan gambar
            $("body").css({
                "background-image": "url('{{ asset('img/cover-tiket.jpg') }}')",
                "background-size": "cover",
                "background-position": "center",
                "background-repeat": "no-repeat",
                "height": "100vh" /* Menentukan tinggi sesuai tinggi layar */
            });
        });
    </script>
@endsection
