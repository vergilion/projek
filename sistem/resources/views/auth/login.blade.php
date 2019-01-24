<!doctype html>
<html class="fixed">
    <head>
        <title>Login Page</title>        
        <!-- Basic -->
        <meta charset="UTF-8">

        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/font-awesome/css/font-awesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/magnific-popup/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('backend/stylesheets/theme.css') }}" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('backend/stylesheets/skins/default.css') }}" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('backend/stylesheets/theme-custom.css') }}">

        <!-- Head Libs -->
        <script src="{{ asset('backend/vendor/modernizr/modernizr.js') }}"></script>

    </head>
    <body>
        <!-- start: page -->
        <section class="body-sign">
            <div class="center-sign">
                <a href="/" class="logo pull-left">
                    <img src="{{ asset('backend/images/logo.png') }}" height="54" alt="Porto Admin" />
                </a>

                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group mb-lg">
                                <label>{{ __('E-Mail Address') }}</label>
                                <div class="input-group input-group-icon">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-lg" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <div class="clearfix">
                                    <label class="pull-left">{{ __('Password') }}</label>
                                    @if (Route::has('password.request'))
                                        <a class="pull-right" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="input-group input-group-icon">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-lg" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="checkbox-custom checkbox-default">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="RememberMe">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">{{ __('Login') }}</button>

                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
                                </div>
                            </div>

                            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                                <span>or</span>
                            </span>

                            <div class="mb-xs text-center">
                                <a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
                                <a class="btn btn-success mb-md ml-xs mr-xs">Connect with <i class="fa fa-google"></i></a>
                            </div>

                        </form>
                    </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved.</a>.</p>
            </div>
        </section>
        <!-- end: page -->

        <!-- Vendor -->
        <script src="{{ asset('backend/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
        <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('backend/vendor/nanoscroller/nanoscroller.js') }}"></script>
        <script src="{{ asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('backend/vendor/magnific-popup/magnific-popup.js') }}"></script>
        <script src="{{ asset('backend/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('backend/javascripts/theme.js') }}"></script>
        
        <!-- Theme Custom -->
        <script src="{{ asset('backend/javascripts/theme.custom.js') }}"></script>
        
        <!-- Theme Initialization Files -->
        <script src="{{ asset('backend/javascripts/theme.init.js') }}"></script>

    </body>
</html>