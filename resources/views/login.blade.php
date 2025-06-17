<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/pages/auth.css') }}">
    <style>
        #auth-right {
            height: 100vh;
            overflow: hidden;
        }

        #auth-right img {
            width: 100%;
            height: 100vh;
            object-fit: fill;
            object-position: center;
        }
    </style>

</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left" class="px-4 py-5">
                    <div class="auth-logo d-flex justify-content-start mb-4">
                        <img class="img-error rounded-circle" src="{{ asset('assets/dist/images/logo/logio.png') }}"
                            alt="Logo" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>

                    <h1 class="auth-title">Log in</h1>

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h5><i class="bi bi-exclamation-triangle-fill"></i> Alert</h5>
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('auth') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text"
                                class="form-control form-control-xl @error('username') is-invalid @enderror"
                                name="username" placeholder="Username" value="{{ old('username') }}">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('username')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password"
                                class="form-control form-control-xl @error('password') is-invalid @enderror"
                                name="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check form-check-lg d-flex align-items-end mb-4">
                            <input class="form-check-input me-2" type="checkbox" id="remember">
                            <label class="form-check-label text-gray-600" for="remember">
                                Keep me logged in
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg">Log in</button>
                    </form>

                    <div class="text-center mt-4 fs-5">
                        <p class="text-gray-600">
                            Don't have an account?
                            <a href="{{ url('up') }}" class="font-bold">Sign up</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <img src="{{ asset('assets/dist/images/bg/login-bg.jpeg') }}" alt="Login Illustration"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
