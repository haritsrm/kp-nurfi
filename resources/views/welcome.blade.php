<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            a:link{
                text-decoration: none;
                font-family: serif;
                font-size: 110%;
            }
            a:visited {
                color: black;
            }
            a:hover {
                color : #86b300;
            }
        </style>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
            
    <!--wrapper-->
    <div class="wrapper">
		<header>
			<!--logo-->
			<div class="logo">		
			</div>
			<!--end logo-->
			<!--judul-->
			<div class="judul">
				<center style="color: black;font-family: sans-serif;font-size: 160%;font-weight: bold;">Peminjaman Inventori Barang dan Ruangan</center>
			</div>
			<!--end judul-->
				<!--menu login-->
                @if (Route::has('login'))
                    <div class="menu_login">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Lupa kata sandi?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    Belum punya akun? <a href="{{ route('register') }}">Klik disini!</a>
                                </div>
                                </div>
                            </div>
                            </div>
                            @if ($errors->has('email') or $errors->has('password'))
                            <div class="alert alert-danger mt-3" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                            @endif
                    @endauth
                </div>
            @endif
			<!--end menu login-->
			<!--menu barang-->
			<div class="menu_barang">
				<a href="">Daftar Barang</a>
			</div>
			<!--end menu barang-->
				</header>
		<!--konten-->
		<div class="konten">
			<aside>
				<center><h3>Peminjaman</h3></center>
                <h4>Tanggal Peminjaman :</h4>
                <input type="date" class="form-control">
                <h4>Tanggal Pengembalian :</h4>
                <input type="date" class="form-control">
                <center><input type="submit" value="Cek Barang" class="btn btn-success m-2"></center>
			</aside>
			<!--menu utama-->
			<div id="utama">
			
			</div>
			<!--end menu utama-->	
		</div>
		<!--end konten-->
		<!--footer-->
		<footer class="footer" style="background-color: #20272d; border-top: 4px solid #86b300; margin-top: 20px;">
			<!--container-->
			<div class="container">
				<!--row-->
				<div class="row">
					<div class="col-md-6">PTIPD1</div>
					<div class="col-md-6">PTIPD2</div>
				</div>
				<!--end row-->
				<!--row-->
				<div class="row">
					<div class="col-md-12">PTIPD3</div>
				</div>
				<!--end row-->
			</div>
			<!--end container-->
		</footer>
		<!--end footer-->
	</div>
	<!--end wrapper-->
    </body>
</html>
