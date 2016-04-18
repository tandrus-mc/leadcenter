<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <title>pageNameVariable | pageDescriptionVariable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="pageDescriptionVariable">
    <meta name="author" content="authorVariable">
    <!-- CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    {{--<!--[if lte IE 9]>--}}

    {{--<![endif]-->--}}
    <!-- Fav and touch icons -->

</head>

<body style="background-color: #555">
<div class="wrapper full-page-wrapper page-auth page-login text-center">
    <div class="inner-page">
        <div class="logo" style="max-height: 175px; max-width: 175px;">
            <a href="index.html"><img src="https://clickpromise.com/images/ClickPromise.svg" alt="logo: ClickPromise" class="img-responsive"></a>
        </div>
        <div class="login-box center-block">
            {!! Form::open(['url' => '/login', 'class' => 'form-horizontal', 'role' => 'form']) !!}
            {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">--}}
                <div class="form-group">
                    <label for="email" class="control-label sr-only">Email</label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input type="text" placeholder="email" id="email" name="email" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <label for="password" class="control-label sr-only">Password</label>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input type="password" placeholder="password" id="password" name="password" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                    </div>
                </div>
                <label class="fancy-checkbox">
                    <input type="checkbox">
                    <span>Remember me next time</span>
                </label>
                <button class="btn btn-custom-primary btn-lg btn-block btn-auth"><i class="fa fa-arrow-circle-o-right"></i> Login</button>
            {{--</form>--}}
            {!! Form::close() !!}
            <div class="links">
                <p><a href="#">Forgot Username or Password?</a></p>
                <p><a href="#">Create New Account</a></p>
            </div>
        </div>
    </div>
</div>
<footer class="footer">footerTextVariable</footer>
<!-- Javascript -->
<script src="{{ asset('css/main.css') }}"></script>

</body>

</html>
