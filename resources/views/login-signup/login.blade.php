<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css" />

    <!-- Connect Google Font "Koulen" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <!-- Connect Google Font "Koulen" -->

    <!-- Connect Google Font "Poppins" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Connect Google Font "Poppins" -->

    <!-- Link ini digunakan untuk mengcostume icon pada tab web -->
    <link rel="icon" href="/img/login-register/Logo.png">
    <!-- Link ini digunakan untuk mengcostume icon pada tab web -->

    <!-- Bootstrap connect cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        .alert-container {
            position: absolute;
            top: 6.3%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            width: 100%;
            border-radius: 5px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .alert .close {
            box-shadow: none;
            padding: 0 0 0 10px;
            width: auto;
            text-align: center;
        }

        .close {
            font-size: 25px;
        }

        .alert {
            max-width: 100%;
            width: auto;
            padding: 10px 15px;
            font-size: 19px;
        }

        @media (max-width: 1024px) {
            .alert {
                width: auto;
                text-align: center;
                display: flex;
                justify-content: center;
            }
        }

        @media (max-width: 240px) {
            .alert-container {
                display: inline-flex;
                text-align: center;
            }

            .alert {
                display: flex;
                width: auto;
                align-items: center;
                max-width: calc(100% - 20px);
                padding: 5px;
                font-size: 12px;
            }

            .close {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>
    <div class="bg-back">
        <img src="img/login-register/bg.jpg" alt="">
    </div>
    <div class="alert-container">
        @if (session()->has('success'))
            <div class="alert alert-success d-flex fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

    <div class="alert-container">
        @if (session()->has('loginError'))
            <div class="alert alert-danger d-flex fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

    <div class="container">
        <div class="login">
            <div class="back-logo">
                <button onclick="goBack()" class="back-button">
                    <img src="/img/login-register/logoback.png" alt="">
                    Back
                </button>
            </div>
            <div class="header-logo">
                <img src="/img/login-register/Logo.png" alt="">
            </div>
            <h1 class="log-judul">Login</h1>
            <p>we are happy to see you back again!</p>
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter email"
                        value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" autofocus
                        required />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pass">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" placeholder="Enter password"
                        class="form-control @error('password') is-invalid @enderror" required />
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="costume-button">
                    <button type="submit">Login</button>
                </div>
                <div class="forgetten-pass">
                    <a href="">Forgot password</a>
                </div>
            </form>
            <div class="login-akun">
                <span class="login-page">Dont have account?<a href="/signup"> Sign up</a></span>
            </div>
        </div>
        <div class="image-login">
            <img src="/img/login-register/login-register.jpg" alt="Login Register Image" />
        </div>
    </div>

    <script src="/js/login.js"></script>
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $(".alert").alert();
        });
    </script>
</body>

</html>
