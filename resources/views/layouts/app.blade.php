<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{env('app_name')}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    @yield('css')
</head>

<body class="side-menu-container">
<div id="preloader"></div>
<header class="side-menu-header side-menu-lateral" data-menu-anima="default">
    <div class="navbar-header">
        <a class="hamburger-button" data-menu-anima="fade-left">
            <i class="fa fa-bars"></i>
        </a>
        <a class="navbar-brand" href="../../index.html"><img src="{{URL::asset('HTWF/images/logo.png')}}" alt="logo" /> </a>
    </div>
    <div class="side-menu-fixed">
        <div class="top-area">
            <a class="brand" href="../../index.html">
                <img src="{{URL::asset('HTWF/images/logo.png')}}" alt="logo">
            </a>
        </div>
        <hr class="space xs" />
        <aside class="sidebar mi-menu">
            <nav class="sidebar-nav scroll-content">
                <ul class="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-dashboard"></i>Tableau de Bord</a>
                    </li>
                    <li class="{{ Request::is('employePointages*') ? 'active' : '' }}">
                        <a href="{{ route('employePointages.index') }}"><i class="fa fa fa-blind"></i><span>Employe Pointages</span></a>
                    </li>
                    <li class="{{ Request::is('employes*') ? 'active' : '' }}">
                        <a href="{{ route('employes.index') }}"><i class="fa fa-users"></i><span>Employes</span></a>
                    </li>

                    <li class="{{ Request::is('cartRfids*') ? 'active' : '' }}">
                        <a href="{{ route('cartRfids.index') }}"><i class="fa fa-tags"></i><span>Cart Rfids</span></a>
                    </li>

                    <li class="{{ Request::is('employeSortiePointages*') ? 'active' : '' }}">
                        <a href="{{ route('employeSortiePointages.index') }}"><i class="fa fa-sort"></i><span>Employe Sortie Pointages</span></a>
                    </li>

                    <li class="{{ Request::is('groupes*') ? 'active' : '' }}">
                        <a href="{{ route('groupes.index') }}"><i class="fa fa-users"></i><span>Groupes</span></a>
                    </li>

                    <li class="{{ Request::is('pointageParams*') ? 'active' : '' }}">
                        <a href="{{ route('pointageParams.index') }}"><i class="fa fa-cogs"></i><span>Pointage Params</span></a>
                    </li>

                    <li class="{{ Request::is('services*') ? 'active' : '' }}">
                        <a href="{{ route('services.index') }}"><i class="fa fa-edit"></i><span>Services</span></a>
                    </li>

                    <li class="{{ Request::is('users*') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}"><i class="fa fa-user-secret"></i><span>Users</span></a>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="bottom-area">
            <hr class="space xs" />
            <div class="social-group">
                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
            </div>
            <p>Copyright Horus Solutions 2020 </p>
        </div>
    </div>
</header>

<div class="navbar navbar-main fixed-area" style="background-color: #F3B007">
    <div class="container">
        <div class="collapse navbar-collapse">
            <div class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav lan-menu">
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span style="color: #FFFFFF">{{Auth::user()->name}}</span><span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item"><i class="fa fa-user"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-lock"></i>Mot de passe</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section-empty section-item">
    @yield('content')
</div>
</body>
</html>