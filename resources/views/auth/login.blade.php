<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('app_name')}}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <script src="{{URL::asset('HTWF/scripts/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('HTWF/scripts/bootstrap/css/bootstrap.css')}}">
    <script src="{{URL::asset('HTWF/scripts/metismenu.jquery.min.js')}}"></script>
    <script src="{{URL::asset('HTWF/scripts/script.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('HTWF/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/scripts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/css/content-box.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/css/image-box.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/css/animations.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/css/components.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/scripts/flexslider/flexslider.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/scripts/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/scripts/php/contact-form.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/scripts/social.stream.css')}}">
    <link rel="stylesheet" href="{{URL::asset('HTWF/skin.css')}}">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
<header class="fixed-top scroll-change" data-menu-anima="fade-in">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
        <div class="navbar-mini scroll-hide">
            <div class="container">
                <div class="nav navbar-nav navbar-left">
                    <span><i class="fa fa-phone"></i>+223 00 00 00 00</span>
                    <hr />
                    <span><i class="fa fa-envelope-o"></i>info@contact.com</span>
                    <hr />
                    <span><i class="fa fa-clock-o"></i> Lun - Dim: 9:00 - 18:00 </span>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <div class="minisocial-group">
                        <a target="_blank" href="#"><i class="fa fa-facebook first"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-main">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img class="logo-default" src="{{URL::asset('HTWF/images/logo.png')}}" alt="logo" />
                        <img class="logo-retina" src="{{URL::asset('HTWF/images/logo-retina.png')}}" alt="logo" />
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                </div>
            </div>
        </div>
    </div>
</header>
<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-8 col-center text-center">
                <div class="row">
                    <div class="box animation flipInX">
                        <div class="box1">
                            <div class="text-center">
                                <img src="{{ asset('HTWF/images/logo.png') }}" alt="logo" class="img-fluid mar"></div>
                            <hr class="space s" />
                            <h2 class="">Bienvenue sur la Pateforme de Gestion de Pointage</h2>


                            <hr class="space s" />
                            <!-- Notifications -->
                            <div id="notific">
                                @include('notification.notify')
                            </div>
                            <form action="{{route('login')}}" class="omb_loginForm" autocomplete="off" method="POST">
                                <div class="row">
                                    <div class="col-md-6 col-center text-center">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                            <label class="sr-only">Email</label>
                                            <input type="email" class="form-control " name="email" placeholder="Email"
                                                   value="{!! old('email') !!}">
                                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                        </div>
                                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                            <label class="sr-only">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <span class="help-block">{{ $errors->first('password', ':message') }}</span>


                                        <button type="submit" class="anima-button btn-lg btn"><i class="fa fa-send-o"></i>Connection</button>
                                    </div>
                                </div>




                            </form>
                            <br />
                            <div class="bg-transparent animation flipInX">
                                <a href="#" class="text-color">Mot de passe oublié ?</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

<script async src="{{URL::asset('HTWF/scripts/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('HTWF/scripts/imagesloaded.min.js')}}"></script>
<script src="{{URL::asset('HTWF/scripts/parallax.min.js')}}"></script>
<script src="{{URL::asset('HTWF/scripts/flexslider/jquery.flexslider-min.js')}}"></script>
<script async src="{{URL::asset('HTWF/scripts/isotope.min.js')}}"></script>
<script async src="{{URL::asset('HTWF/scripts/php/contact-form.js')}}"></script>
<script async src="{{URL::asset('HTWF/scripts/jquery.progress-counter.js')}}"></script>
<script async src="{{URL::asset('HTWF/scripts/jquery.tab-accordion.js')}}"></script>
<script async src="{{URL::asset('HTWF/scripts/bootstrap/js/bootstrap.popover.min.js')}}"></script>
<script async src="{{URL::asset('HTWF/scripts/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('HTWF/scripts/social.stream.min.js')}}"></script>
<script src="{{URL::asset('HTWF/scripts/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::asset('HTWF/scripts/smooth.scroll.min.js')}}"></script>
<script src="{{URL::asset('HTWF/scripts/script.js')}}"></script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
