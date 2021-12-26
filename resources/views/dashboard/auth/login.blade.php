<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title> {{config('app.name')}} :: Sign In</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset("assets/dashboard/plugins/bootstrap/css/bootstrap.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/dashboard/css/style.min.css")}}">
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                @include('dashboard.layouts.messages')
                <form class="card auth_form" method="post" action="{{route('admin.authenticate')}}">
                    @csrf
                    <div class="header">
                        <img class="logo" src="{{asset("assets/dashboard/images/logo.svg")}}" alt="">
                        <h5>Log in</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Username">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="forgot-password.html" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" name="remember_me" type="checkbox">
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block waves-effect waves-light" value="SIGN IN">
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>Designed by <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{asset("assets/dashboard/images/signin.svg")}}" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset("assets/dashboard/bundles/libscripts.bundle.js")}}"></script>
<script src="{{asset("assets/dashboard/bundles/vendorscripts.bundle.js")}}"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>
