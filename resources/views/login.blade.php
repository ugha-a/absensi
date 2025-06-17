<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Absensi SMA NEGERI 4 BARRU</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/pages/auth.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            min-height: 100vh;
        }

        #auth {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .row.h-100 {
            min-height: 100vh;
        }

        #auth-left {
            background: rgba(255, 255, 255, 0.88);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.13);
            position: relative;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            animation: fadeInLeft 0.8s;
            border-right: none;
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .auth-logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-logo img {
            margin: 0 auto;
        }

        .auth-title {
            font-weight: 700;
            color: #2575fc;
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-bottom: 1.2rem;
            margin-top: 0.5rem;
            text-align: center;
        }

        .form-control-xl {
            min-height: 42px;
            font-size: 1rem;
            border-radius: 0.8rem;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.13rem rgba(106, 17, 203, 0.10);
            border-color: #6a11cb;
        }

        .btn-primary {
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            border-radius: 0.8rem;
            font-weight: 700;
            font-size: 1rem;
            padding: 0.72rem 0;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 15px 0 rgba(106, 17, 203, 0.13);
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background: linear-gradient(90deg, #2575fc 0%, #6a11cb 100%);
        }

        .form-check-input:checked {
            background-color: #6a11cb;
            border-color: #6a11cb;
        }

        .alert {
            border-radius: 0.7rem;
            font-size: 0.97rem;
        }

        .text-gray-600 {
            color: #7a7a7a !important;
        }

        .font-bold {
            font-weight: 700;
            color: #6a11cb !important;
        }

        .form-control-icon {
            color: #6a11cb;
        }

        .form-check-label {
            font-size: 1rem;
        }

        .fs-5 {
            font-size: 0.98rem !important;
        }

        #auth-right {
            height: 100vh;
            overflow: hidden;
            padding: 0;
        }

        #auth-right img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            object-position: center;
            border-radius: 1.2rem 0 0 1.2rem;
            /* biar seamless */
            box-shadow: none;
        }

        /* Responsive tweaks */
        @media (max-width: 991.98px) {
            #auth-right {
                display: none;
            }

            #auth-left {
                border-radius: 1.2rem;
                height: auto;
                min-height: 100vh;
            }
        }

        @media (max-width: 575.98px) {
            #auth-left {
                padding: 1rem 0.5rem;
                border-radius: 0.7rem;
                margin: 0.5rem;
                min-height: 100vh;
            }

            .auth-title {
                font-size: 0.98rem;
                margin-bottom: 1.1rem;
            }
        }

        /* Card fade-in and slight slide */
        .animate-auth {
            animation: fadeInUp 1s cubic-bezier(.25, .8, .25, 1) 0s 1;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        /* Logo pop-in */
        .animate-logo {
            animation: popIn 1s cubic-bezier(.25, .8, .25, 1) 0.1s 1;
        }

        @keyframes popIn {
            0% {
                opacity: 0;
                transform: scale(0.7);
            }

            80% {
                opacity: 1;
                transform: scale(1.10);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Fade-in title and text */
        .animate-fadein {
            animation: fadeIn 1s 0.3s both;
        }

        .animate-fadein-delayed {
            animation: fadeIn 1.2s 0.7s both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Button subtle bounce on load */
        .animate-button {
            animation: bounceIn 0.8s cubic-bezier(.25, .8, .25, 1) 0.8s both;
        }

        .bounce-pulse-logo {
            animation: bouncePulse 1.6s infinite;
            display: block;
            margin: 0 auto;
        }

        @keyframes bouncePulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>

</head>

<body>
    <div id="auth">
        <div class="row h-100 w-100 m-0">
            <div class="col-lg-5 col-12 d-flex align-items-center justify-content-end p-0">
                <div id="auth-left" class="px-2 py-5 w-100 animate-auth">
                    <div class="auth-logo mb-1 d-flex justify-content-center align-items-center">
                        <img class="img-error rounded-circle bounce-pulse-logo"
                            src="{{ asset('assets/dist/images/logo/logio.png') }}" alt="Logo"
                            style="width: 150px; height: 150px; object-fit: cover;">
                    </div>

                    <p class="auth-title animate-fadein">Log in</p>

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show animate-shake" role="alert">
                            <h5 style="font-size:1rem;"><i class="bi bi-exclamation-triangle-fill"></i> Alert</h5>
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
                                <div class="invalid-feedback d-block animate-shake">{{ $message }}</div>
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
                                <div class="invalid-feedback d-block animate-shake">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check form-check-lg d-flex align-items-center justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" id="remember">
                            <label class="form-check-label text-gray-600" for="remember">
                                Keep me logged in
                            </label>
                        </div>

                        <button type="submit"
                            class="btn btn-primary btn-block btn-lg shadow-lg w-100 animate-button">Log in</button>
                    </form>

                    <div class="text-center mt-4 fs-5 animate-fadein-delayed">
                        <p class="text-gray-600">
                            Don't have an account?
                            <a href="{{ url('up') }}" class="font-bold">Sign up</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block p-0">
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
