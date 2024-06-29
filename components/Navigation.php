<?php include_once "Header.php" ?>

<body style="background-color: #446129 !important;">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-3">
                    <div class="site-logo">
                        <a href="index.html" class="font-weight-bold">Articles</a>
                    </div>
                </div>

                <div class="col-9  text-right">


                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-primary site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-white"></span></a></span>


                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li <?php echo ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/#artikel') ? 'class="active"' : ''; ?>>
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li <?php echo (strpos($_SERVER['REQUEST_URI'], '/artikel?') === 0) ? 'class="active"' : ''; ?>>
                                <a href="#artikel" class="nav-link">Artikel</a>
                            </li>
                            <li><a href="auth/login" class="nav-link">Login</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>

    </header>