<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="/style/signup.css" />

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
</head>

<body>
    <div class="bg-back">
        <img src="img/login-register/bg.jpg" alt="">
    </div>
    <div class="container">
        <div class="register">
            <div class="back-logo">
                <button onclick="goBack()" class="back-button">
                    <img src="/img/login-register/logoback.png" alt="">
                    Back
                </button>
            </div>
            <div class="header-logo">
                <img src="/img/login-register/Logo.png" alt="">
            </div>
            <h1 class="reg-judul">Sign up</h1>
            <p>we are happy to see you back again!</p>
            <div class="form-frame">
                <form action="{{ route('signup.store') }}" method="POST">
                    @csrf
                    <div class="form-columns">
                        <div class="left-column">
                            <div class="user">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" placeholder="Enter username"
                                    value="{{ old('username') }}"
                                    class="form-control @error('username') is-invalid @enderror" autofocus required />
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="phone_number">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" id="phone_number"
                                    placeholder="Enter phone number" value="{{ old('phone_number') }}"
                                    class="form-control @error('phone_number') is-invalid @enderror"
                                    required />
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="email">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" required />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="pass">
                                <label for="pass">Password</label>
                                <input type="password" name="password" id="pass" placeholder="Create a password"
                                    class="form-control @error('password') is-invalid @enderror" required />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="costume-button">
                        <button type="submit">Sign Up</button>
                    </div>
                </form>
            </div>

            <div class="signup">
                <span class="signup-page">Alredy have an account?<a href="/login"> Log in</a></span>
            </div>
        </div>
        <div class="image-signup">
            <img src="/img/login-register/login-register.jpg" alt="Login Register Image" />
        </div>
    </div>

    <script src="/js/signup.js"></script>
</body>

</html>
