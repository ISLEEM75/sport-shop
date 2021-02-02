<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="M_Adnan">
    <title>ISLEEM SPORT CENTER</title>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen"/>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ionicons.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="../js/modernizr.js"></script>

    <!-- Online Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<div id="loader">
    <div class="position-center-center">
        <div class="ldr"></div>
    </div>
</div>
<body>
<div id="wrap">
    <header>
        <div class="sticky">
            <div class="container">

                <!-- Logo -->
                <div class="logo"><a href="../"><img class="" width="200" src="images/logo.png" alt=""></a></div>
                <nav class="navbar ownmenu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#nav-open-btn" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"><i class="fa fa-navicon"></i></span></button>
                    </div>

                    <!-- NAV -->
                    <div class="collapse navbar-collapse" id="nav-open-btn">
                        <ul class="nav">
                            @if(Auth::check())
                                @if(Auth::user()->hasRole('Admin'))
                                    <li><a href="../admin/">Admin</a>
                                @elseif(Auth::user()->hasRole('Editor'))
                                    <li><a href="../admin/products">Editor</a>
                                @endif
                            @endif
                            <li><a href="../">Home</a>

                            </li>
                                <li class="dropdown"> <a href="../shop" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="../shopman">For Man </a> </li>
                                        <li> <a href="../shopwoman">For Woman</a> </li>
                                    </ul></li>

                            <li><a href="../about">About </a></li>

                            <li><a href="../contact"> contact</a></li>
                        </ul>
                    </div>

                    <!-- Nav Right -->
                    <div class="nav-right">
                        <ul class="navbar-right">
                            @guest
                                <li class="dropdown user-acc"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                 role="button"><i class="icon-user"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li>
                                                <a class="nav-link"
                                                   href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                                <!-- USER INFO -->
                            @else
                                <li class="dropdown user-acc"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                 role="button"><i class="icon-user"></i> </a>
                                    <ul class="dropdown-menu">

                                        <li>
                                            <h6>HELLO! {{ Auth::user()->name }}</h6>
                                        </li>
                                        <li class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                        @endguest

                        <!-- USER BASKET -->
                            <li class="dropdown user-basket"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                role="button" aria-haspopup="true" aria-expanded="true"><i
                                        class="icon-basket-loaded"></i> </a>
                                <ul class="dropdown-menu">


                                    <li class="margin-0">
                                        <div class="row">
                                            <div class="col-xs-6"><a href="{{url('../cart')}}" class="btn">VIEW CART</a></div>
                                            <div class="col-xs-6 "><a href="checkout" class="btn">CHECK OUT</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <div class="container">

            <!-- ABOUT Location -->
            <div class="col-md-3">
                <div class="about-footer"><img class="margin-bottom-30" width="120" src="images/logo.png" alt="">
                    <p><i class="icon-pointer"></i> Gaza,El Shjayea,Nazaz st <br>
                        PALESTINE.</p>
                    <p><i class="icon-call-end"></i> 0592382529</p>
                    <p><i class="icon-envelope"></i> isleem52@gmail.com</p>
                </div>
            </div>

            <!-- HELPFUL LINKS -->
            <div class="col-md-3">
                <h6>HELPFUL LINKS</h6>
                <ul class="link">
                    <li><a href="/"> Home</a></li>
                    <li><a href="../shop"> Shop</a></li>
                    <li><a href="../about"> About</a></li>
                    <li><a href="../contact">Contact</a></li>
                </ul>
            </div>

            <!-- SHOP -->
            <div class="col-md-3">
                <h6>SHOP</h6>
                <ul class="link">
                    <li><a href="../about"> About Us</a></li>
                    <li><a href="../shop"> Shop</a></li>
                    <li><a href="../contact"> Contact</a></li>
                    <li><a href="../contact"> Support</a></li>

                </ul>
            </div>

            <!-- MY ACCOUNT -->
            <div class="col-md-3">
                <h6>MY ACCOUNT</h6>
                <ul class="link">
                    <li><a href="../login"> Login</a></li>
                    <li><a href="../cart"> My Cart</a></li>
                    <li><a href="../checkout"> Checkout</a></li>
                </ul>
            </div>

            <!-- Rights -->

            <div class="rights">
                <p>© 2019 ISLEEM All right reserved. </p>
                <div class="scroll"><a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a></div>
            </div>
        </div>
    </footer>
</div>

<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/own-menu.js"></script>
<script src="../js/jquery.lighter.js"></script>
<script src="../js/owl.carousel.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="../rs-plugin/js/jquery.tp.t.min.js"></script>
<script type="text/javascript" src="../rs-plugin/js/jquery.tp.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/main.js"></script>

<!-- Begin Map Script -->
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
<script type="text/javascript">
    /*==========  Map  ==========*/
    var map;

    function initialize_map() {
        if ($('#map').length) {
            var myLatLng = new google.maps.LatLng(31.4992421, 34.4772405, 281);
            var mapOptions = {
                zoom: 17,
                center: myLatLng,
                scrollwheel: false,
                panControl: false,
                zoomControl: true,
                scaleControl: false,
                mapTypeControl: false,
                streetViewControl: false
            };
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                tittle: 'Envato',
                icon: './images/map-locator.png'
            });
        } else {
            return false;
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize_map);
</script>
</body>
</html>
