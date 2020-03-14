<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('abs/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('abs/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('abs/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('abs/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('abs/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('abs/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('abs/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('abs/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset('abs/images/ti.png')}}" alt="IMG">
                </div>


                    <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                        @csrf


                    <span class="login100-form-title">
                        Register
                    </span>

<div class="wrap-input100 validate-input" data-validate = "Nama Harus Di Isi">

                        <input class="input100 form-control @error('email') is-invalid @enderror" type="text" name="name" placeholder="Nama" value="{{ old('name') }}" autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>


<div class="wrap-input100 validate-input" data-validate = "Email Tidak Valid Tidak Ada @">

                        <input class="input100 form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>






<div class="wrap-input100 validate-input" data-validate = "Kelas Salah">

                        <input class="input100 form-control @error('kelas') is-invalid @enderror" type="text" name="kelas" placeholder="Kelas" value="{{ old('kelas') }}" >

                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </span>
                    </div>








<div class="wrap-input100 validate-input" data-validate = "Username Harus Di Isi">

                        <input class="input100 form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" value="{{ old('username') }}" >

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>


<div class="wrap-input100 validate-input" data-validate = "Password Minimal 8 Huruf">

 

<input id="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" type="password">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>


<div class="wrap-input100 validate-input" data-validate = "Password Konfirmasi Salah">


                        <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Konfirmasi">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>



                    <div class="container-login100-form-btn">

                                <button type="submit" class="login100-form-btn btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Have Account ? 
                        </span>
                        <a class="txt2" href="{{route('login')}}">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->  
    <script src="{{asset('abs/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('abs/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('abs/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('abs/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('abs/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="{{asset('abs/js/main.js')}}"></script>

</body>
</html>