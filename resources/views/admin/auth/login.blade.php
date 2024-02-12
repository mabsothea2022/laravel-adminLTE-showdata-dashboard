<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel - AdminLTE</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('asset/admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('asset/admin_assets/css/sb-admin-2.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    {{-- New modify --}}
                                    <div class="text-center">
                                        @if (session('error'))
                                            <div class="text-danger text-center">{{ session('error') }}</div>
                                        @endif
                                        @if (session('success'))
                                            <div class="text-success text-center">{{ session('success') }}</div>
                                        @endif
                                        <h1 class="login-box-msg">Sign in to start your session</h1>
                                    </div>

                                    <form class="user" action="{{ route('postLogin') }}" method="POST">
                                        @csrf
                                            {{-- Email Address --}}
                                            <div class="form-group">
                                                <input type="email" type="email" id="email" class="form-control form-control-user"
                                                    aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address...">
                                                    @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            {{-- Password --}}
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password" placeholder="Password" >
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- button login --}}
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Sign In</button>
                                            <hr>
                                            {{-- Login with google --}}
                                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login with Google
                                            </a>
                                            {{-- Login with facebook --}}
                                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                            </a>
                                    </form>
                                    <hr>
                                    {{-- button forgot password --}}
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot Password?</a>
                                    </div>
                                    {{-- button create/registre account --}}
                                    <div class="text-center">
                                        <a class="small" href="#">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('asset/admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('asset/admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('asset/admin_assets/js/sb-admin-2.min.js') }}"></script>

</body>
</html>