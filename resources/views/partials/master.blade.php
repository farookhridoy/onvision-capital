<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title  -->
    <title>Apply now for primium merchant funding </title>
    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('logo') }}/logo.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/style.css">
    @yield('styles')
</head>

<body>
    <!--<header class="header_area">-->
    <!--    <div class="bigshop-main-menu">-->
    <!--        <div class="container">-->
    <!--            <div class="classy-nav-container breakpoint-off">-->
    <!--                <nav class="classy-navbar" id="bigshopNav">-->

    <!--                     Nav Brand -->
    <!--                    <a href="{{URL::to('/')}}" class="nav-brand">-->
    <!--                        <img style="height:60px !important" src="{{ asset('logo') }}/logo.png" alt="logo">-->
    <!--                    </a>-->

    <!--                     Toggler -->
    <!--                    <div class="classy-navbar-toggler">-->
    <!--                        <span class="navbarToggler">-->
    <!--                            <span></span>-->
    <!--                            <span></span>-->
    <!--                            <span></span>-->
    <!--                        </span>-->
    <!--                    </div>-->
    <!--                     Menu -->
    <!--                    <div class="classy-menu">-->
    <!--                        <div class="classynav">-->
    <!--                            <ul>-->
    <!--                                <li><a href="{{URL::to('/')}}">Home</a></li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </nav>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</header>-->
    
    <main>
       @yield('content')
    </main>

    <script src="{{asset('assets')}}/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.easing.min.js"></script>
    <script src="{{asset('assets')}}/js/default/classy-nav.min.js"></script>
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/default/scrollup.js"></script>
    <script src="{{asset('assets')}}/js/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.countdown.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery-ui.min.js"></script>
    <script src="{{asset('assets')}}/js/jarallax.min.js"></script>
    <script src="{{asset('assets')}}/js/jarallax-video.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.nice-select.min.js"></script>
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <script src="{{asset('assets')}}/js/default/active.js"></script>
    <script>
        setTimeout(function(){
          $('#alert').slideUp()
        },4000)
    </script>
    @yield('scripts')
</body>
</html>
