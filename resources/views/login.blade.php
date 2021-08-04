<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('/css/style.css')}}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <title>Sign In</title>
</head>

<body>
    <!-- @extends('layouts.app') -->

    <!-- @section('content') -->

    <div class="card-body" id="card-body">

    	<!-- This is the Sign Up form -->
        <div class="form-login sign-in-container ">
            <form>
                <h1 class="title">Sign Up</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span class="text">or use another email account</span>


                <div class="col-md-6">
                    <input id="email_sign_up" type="email"
                        name="email" placeholder="Email" required autocomplete="email">
                </div>

                <div class="col-md-6">
                    <input id="password_sign_up" type="password"
                        name="password" placeholder="Password" required autocomplete="new-password">
                </div>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        placeholder="Confirm Password" required autocomplete="new-password">
                </div>               

                <div class="col-md-6">
                    <button type="button" onclick="register()" class="btn btn-primary">
                        Register
                    </button>
                </div>

            </form>
        </div>

        <!-- This is the login form -->

        <div class="form-login register-container ">
            <form>
                <h1 class="title">Login</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
                    <!-- <a href="{{ url('auth/google') }}" class="social"><i class="fa fa-google"></i> --></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span class="text">or use your email account</span>

                <div class="col-md-8">
                    <input id="email_login" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" placeholder="Email" required autocomplete="email"
                        autofocus>
                </div>

                <div class="col-md-8">
                    <input id="password_login" type="password"
                        name="password" placeholder="Password" required autocomplete="current-password">
                </div>

                <div class="col-md-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">

                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>

                <div class="col-md-8">
                    <button type="button" onclick="login()" class="btn btn-primary">
                        Login
                    </button>
                    <br>

                    <a class="btn btn-link frgt">
                        Forgot Your Password
                    </a>
                </div>

            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">

                    <h1>Hello</h1>
                    <p>Sign in here to continue where we left off</p>
                    <button class="ghost" id="Back">Login</button>
                </div>
                <div class="overlay-panel overlay-right">

                    <h1>Welcome</h1>
                    <p>Sign up here and travel with us</p>
                    <button class="ghost" id="Reset">Sign Up</button>
                    <button class="ghost" id="cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <script src="{{url('/js/style.js')}}"></script>
    
   <!--  @endsection -->

    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-app.js"></script>

        <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
        <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-analytics.js"></script>

        <!-- Add Firebase products that you want to use -->
        <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-firestore.js"></script>
        
        <script type="text/javascript" src="{{ url('/js/firebase-cred.js') }}"></script>

        <script type="text/javascript" src="{{ url('js/login.js') }}"></script>

</body>

</html>