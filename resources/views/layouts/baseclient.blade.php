<!DOCTYPE html>
<html lang="en">

<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Doccure</title>

		<!-- Favicons -->
		<link type="image/x-icon" href="{{asset('guest/img/favicon.png" rel="icon"')}}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('guest/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('guest/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('guest/plugins/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

		<!-- Main CSS -->
		<link rel="stylesheet"href="{{ asset('guest/css/style.css')}}">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
        <div class="main-wrapper">

            <header class="header">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index-2.html" class="navbar-brand logo">
                            <!--<img src="assets/img/logo.png" class="img-fluid" alt="Logo">-->
                            <p>Agroapp</p>
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="/" class="menu-logo">
                                <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                                <p>Agroapp</p>
                            </a>

                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li>
                                <a href="/">Accueil</a>
                            </li>
                            <li><a href="doctor-dashboard.html">Produits</a></li>
                            <li><a href="doctor-dashboard.html">Categorie</a></li>


                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item contact-item">
                            <div class="header-contact-img">
                                <i class="far fa-hospital"></i>
                            </div>
                            <div class="header-contact-detail">
                                <p class="contact-header">Contactez_Nous</p>
                                <p class="contact-info-header"> +1 315 369 5943</p>
                            </div>
                        </li>
                        {{-- @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif --}}
                        {{-- @if (Route::has('login'))
                        @auth
                            <a href="{{ route('logout') }}" class="text-sm text-gray-700<li class="nav-item">
                                <a class="nav-link header-login" href="login.html">Home</a>
                            </li>
                        @else


                        @endauth

                        @endif --}}
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{ route('login') }}">login</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="cont">
                @yield('content')
            </div>



        </div>




        </div>


        <footer class="footer">

            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                   <h1 class="text-white">Agroapp</h1>
                                </div>
                                <div class="footer-about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>





                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Contact Us</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                        <p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
                                    </div>
                                    <p>
                                        <i class="fas fa-phone-alt"></i>
                                        +1 315 369 5943
                                    </p>
                                    <p class="mb-0">
                                        <i class="fas fa-envelope"></i>
                                        agroapp@example.com
                                    </p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container-fluid">

                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">

                                <!-- Copyright Menu -->
                                <div class="copyright-menu">
                                    <ul class="policy-menu">
                                        <li><a href="term-condition.html">Terms and Conditions</a></li>
                                        <li><a href="privacy-policy.html">Policy</a></li>
                                    </ul>
                                </div>
                                <!-- /Copyright Menu -->

                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->

                </div>
            </div>
            <!-- /Footer Bottom -->

        </footer>

		<!-- jQuery -->
		<script src="{{ asset('guest/js/jquery.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ asset('guest/js/popper.min.js')}}"></script>
		<script src="{{ asset('guest/js/bootstrap.min.js')}}"></script>

		<!-- Slick JS -->
		<script src="{{ asset('guest/js/slick.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('guest/js/script.js')}}"></script>

        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>

    var availableProducts = [];
    $.ajax({
        type: 'GET',
        url: '/allregions',
        success: function (data) {
            // console.log(data)
            startCompletePorducts(data);
        }

    });
    function startCompletePorducts(availableProducts){
            $( "#search_product" ).autocomplete({
            source: availableProducts
            });
        }

  </script>


	</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>
