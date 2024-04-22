<?php include("./server/server.php"); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title For This Document -->
    <title> Giri Gifts - Login</title>
    <!-- Favicon For This Document -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon-32x32.png" type="image/x-icon">
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.5.1.1.min.css">
    <!-- Google fonts --> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&amp;family=Jost:wght@300;400;500;600;700&amp;family=Marcellus&amp;family=Poppins:wght@300;400;500;600;700;800&amp;family=Roboto:wght@300;400;500;700&amp;family=Rubik:wght@300;400;500;600;700&amp;family=The+Nautigal:wght@400;700&amp;display=swap" rel="stylesheet">
    <!-- Animate Css -->
    <link rel="stylesheet" href="../assets/css/plugin/animate.css">
    <!-- Jquery Ui Css -->
    <link rel="stylesheet" href="../assets/css/plugin/jquery-ui.min.css">
    <!-- FlatIcon Css -->
    <link rel="stylesheet" href="../assets/fonts/flaticon.css">
    <!-- FlatIcon Css -->
    <link rel="stylesheet" href="../assets/css/plugin/img-comparison-slider.css">
    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="../assets/css/plugin/slick.css">
    <!-- Magnific-popup Css -->
    <link rel="stylesheet" href="../assets/css/plugin/magnific-popup.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <!-- Page Loader -->
    <!-- <div id="pre-loader"><img src="assets/images/logo/loader.gif" alt="Loading..." /> </div> -->
    <!-- End Page Loader -->

    <!-- Page-wrapper Start -->
    <div class="page-wrapper overflow-x">

        <!-- Anouncement Start -->
        <div class="anouncement-bar bgBlack">
            <div class="container auto-container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-lg-between justify-content-center align-items-center">
                        <ul
                            class="media-box anouncement-list w-auto d-xl-flex d-none align-items-center justify-content-center d-none">
                            <li class="mediaLIst m-0 pe-3 anouncAfter">
                                <a class="color-white" href="https://www.facebook.com/" target="_blank">
                                    <i class="flaticon-facebook-app-symbol"></i>
                                </a>
                            </li>
                            <li class="mediaLIst m-0 ps-3 pe-3 anouncAfter">
                                <a class="color-white" href="https://www.instagram.com/" target="_blank">
                                    <i class="flaticon-instagram"></i>
                                </a>
                            </li>
                            <li class="mediaLIst m-0 ps-3 pe-3 anouncAfter">
                                <a class="color-white" href="https://youtube.com/" target="_blank">
                                    <i class="fa fa-whatsapp" style="font-size:18px"></i>
                                </a>
                            </li>
                     
                        </ul>
                        <ul class="media-box anouncement-list w-auto align-items-center justify-content-center">
                            <li class="mediaLIst m-0 pe-0">
                                <p class="color-white font-12 font-josefin text-uppercase">
                                    WELCOME TO GIRI GIFTS AND ACCESSORIES.
                                </p>
                            </li>
                        </ul>
                        <ul class="anouncement-list w-auto d-lg-flex d-none align-items-center justify-content-center">
                            <li class="dropdown sellector anouncAfter pe-3 d-flex align-items-center hover-white lh-0">
                                <a class="color-white font-josefin font-12" href="admin/login.php" target="_blank">
                                   ADMIN LOGIN
                                </a>
                            </li>
                            <li class="dropdown sellector ps-3 d-flex align-items-center hover-white lh-0">
                                <div>
                                    <button class="btn font-12 white font-josefin text-capitalize dropdown-toggle"
                                        type="button" id="dropdownMenu22" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        MY ACCOUNT
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu22">
                                  
                                        <li><button class="dropdown-item text-center" type="button">User Login</button></li>
                                        <li><button class="dropdown-item text-center" type="button">Register</button></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Anouncement End -->

        <!-- Header-default Start -->
        <header>
            <div class="menu-box">
                <div class="container auto-container position-relative">
                    <div class="mobile-header d-lg-none d-block pt-3 pb-3">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <ul class="micon-box d-flex align-items-center transparent">
                                    <li>
                                        <button class="micon colorrBlack ps-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasmenu">
                                            <span><i class="flaticon-menu-1"></i> </span>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="#0" class="micon ps-3 colorrBlack" data-bs-toggle="offcanvas" data-bs-target="#menusearch">
                                            <span><i class="flaticon-loupe"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4 text-center">
                                <a href="index.html" class="logo d-inline-block">
                                    <img src="../assets/images/logo/logo.png" alt="img">
                                </a>
                            </div>
                            <div class="col-4">
                                <ul class="micon-box d-flex align-items-center transparent justify-content-end">
                                    <li>
                                        <a href="wishlist.html" class="micon colorrBlack">
                                            <span> <i class="flaticon-heart"> </i> </span>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="micon ps-3 colorrBlack" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">
                                            <span><i class="flaticon-shopping-cart"></i></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row d-lg-block d-none">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="logo-holder pt-3 pb-3 d-flex align-items-center">
                                <a href="index.html" class="logo">
                                    <img src="assets/images/logo/logo.png" alt="#0">
                                </a>
                            </div>
                            <nav class="d-flex justify-content-center align-items-center">
                                <ul class="navbar-nav menu">
                                    <li class="nav-item has-dropdown">
                                        <a class="nav-link borderRound hover-base" href="index.php">
                                            <span class="font-josefin">Home</span>

                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link hover-base" href="#"> <span class="font-josefin">About</span> </a>
                                    </li>
                                    <li class="nav-item has-dropdown">
                                        <a class="nav-link borderRound hover-base" href="#0">
                                            <span class="font-josefin">Categories</span>
                                            <span class="miarrow ps-2"> <i class=" tr flaticon-down-arrow"></i></span>
                                        </a>
                                        <ul class="dropdown bgWhite">
                                            <li>
                                                <a class="dropdown-item font-josefin lineAfterBlack" href="decoration-items.php">
                                                    <span>Decoration Items</span> <span class="menubadge bgBage1">New</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-josefin lineAfterBlack" href="china-items.php">
                                                    <span>China Items</span> <span class="menubadge bgred">New</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-josefin lineAfterBlack" href="birthday-poppers.php">
                                                    <span>Birthday Poppers</span> <span class="menubadge bggreen">New</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-josefin lineAfterBlack" href="gift-items.php">
                                                    <span>Gift Items</span> <span class="menubadge bgblue">New</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link hover-base" href="#"> <span class="font-josefin">Gallery</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link hover-base" href="#"> <span class="font-josefin">Contact us</span> </a>
                                    </li>

                                </ul>
                            </nav>
                            <ul class="micon-box d-flex lh-0 align-items-center justify-content-end">
                                <li class="pe-3 anouncAfter">
                                    <a href="admin/login.html" class="micon hover-base lh-1 colorBlack d-flex align-items-center">
                                        <span><i class="flaticon-user-2"></i></span>
                                    </a>
                                </li>

                                <li class="ps-3 pe-3 anouncAfter">
                                    <button class="micon hover-base lh-1 colorBlack d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">
                                        <span><i class="flaticon-shopping-cart"></i></span>
                                    </button>
                                </li>
                                <li class="ps-3">
                                    <button class="micon hover-base lh-1 colorBlack d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <span class="sidebarLine">
                                            <span class="sline d-block"></span>
                                        <span class="sline d-block mt-2 mb-2"></span>
                                        <span class="sline d-block"></span>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header-default End -->

        <!-- Body Container -->
        <div class="page-content overflow-hidden">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url(../assets/images/innerpage/breadcum-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content margintop--5 text-center wow fadeInUp animated">
                                <h2 class="fw-700">Login</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="index.php"><i class="flaticon-home pe-2"></i>Home</a></li>
                                        <li> <i class="flaticon-next"></i> </li>
                                        <li class="active">Login</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->

            <!--Start Login Page-->
            <section class="login-page pt-120 pb-120 wow fadeInUp animated">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <div class="login-register-form"
                                style="background-image: url('../assets/images/innerpage/login-bg.png');">
                                <div class="top-title text-center ">
                                    <h2 class="font-josefin fw-700">Admin Login</h2>
                                   
                                </div>
                                <form class="common-form" id="login-form" action="login.php" method="post">

                                <div class="top-title text-center ">
                       
                            
                                        <p><?php include('./server/errors.php'); ?> </p>
                                    </div>
                                <!-- <div><h4  style="font-size: 12px;"></h4></div> -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="admin_username" id="your_name"  placeholder="Enter User Name">
                                    </div>

                                    <div class="form-group eye">
                                        <div class="icon icon-1"> <i class="flaticon-hide"></i></div>
                                        <input type="password"class="form-control" name="password" id="your_pass"
                                            placeholder="Password">
                                        <div class="icon icon-2 "><i class="flaticon-view"></i> </div>
                                    </div>

                                    <div class="checkk ">
                                        <div class="form-check p-0 m-0">
                                            <input type="checkbox" id="remember">
                                            <label class="p-0 font-roboto" for="remember"> Remember Me</label>
                                        </div>
                                       
                                    </div>

                                    <div class="top-title text-center ">
                                        
                                        <p class="font-roboto">Back to <a class="font-roboto"
                                                href="../index.html">Home</a></p>
                                    </div>
                                    <button type="submit" class="btn--primary style2" name="login_admin" id="signin">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Login Page-->
        </div>
        <!-- End Body Container -->

        <!-- Footer Start  -->
        <footer class="footer-default">
            <!--Start Footer-->
            <div class="footer-default__main-footer position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="company-info">
                                    <div class="footer-logo">
                                        <a href="index.html"> <img src="assets/images/logo/logo-white.png" alt=""> </a>
                                    </div>
                                    <div class="text1 font-roboto">
                                        <p style="text-align:justify;">Thank you for your interest in the GIRI Gift Shop! We're here to assist you with any questions or inquiries you may have. Please feel free to reach out to us using the information below, and we'll get back to you as soon as possible.
                                          </p>
                                    </div>
                                    <div class="footer__medio-boxx mt-3 medio-boxx d-flex align-items-center">
                                        <ul class="d-flex align-items-center">
                                            <li class="ps-0">
                                                <a href="https://www.facebook.com/" target="_blank" class="active ">
                                                    <i class="flaticon-facebook-app-symbol"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank">
                                                    <i class="flaticon-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank">
                                                    <i class="fa fa-whatsapp" style="font-size:20px"></i>
                                                </a>
                                            </li>
                                
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box d-md-block d-none">
                                <div class="footer-title">
                                    <h5 class="font-24 color-white font-josefin"> Our Links </h5>
                                </div>
                                <ul class="footer-links">
                                    <li><a class="hover-base font-roboto" href="my-account.html">Home</a></li>
                                    <li><a class="hover-base font-roboto" href="login.html">About us</a></li>
                                    <li><a class="hover-base font-roboto" href="chat.html">Gallery</a></li>
                                    <li><a class="hover-base font-roboto" href="wishlist.html">Contact us</a></li>
                                    <li><a class="hover-base font-roboto" href="compare.html">Terms and Conditions</a></li>
                                </ul>
                            </div>
                            <div
                                class="footer-default__single-box aline blackstyle commonAccordian borderLine whiteLine d-md-none d-block">
                                <div class="accordio " id="accordionExamplem">
                                    <div class="accordion-item footer-accordian">
                                        <h2 class="accordion-header border-0" id="headingm">
                                            <button
                                                class="accordion-button font-josefin justify-content-start p-0 collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapsem"
                                                aria-expanded="false" aria-controls="collapsem">
                                                Our Links
                                            </button>
                                        </h2>
                                        <div id="collapsem" class="accordion-collapse collapse"
                                            aria-labelledby="headingm" data-bs-parent="#accordionExamplem">
                                            <div class="accordion-body">
                                                <ul class="footer-links">
                                                <li><a class="hover-base font-roboto" href="my-account.html">Home</a></li>
                                    <li><a class="hover-base font-roboto" href="login.html">About us</a></li>
                                    <li><a class="hover-base font-roboto" href="chat.html">Gallery</a></li>
                                    <li><a class="hover-base font-roboto" href="wishlist.html">Contact us</a></li>
                                    <li><a class="hover-base font-roboto" href="compare.html">Terms and Conditions</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box d-md-block d-none">
                                <div class="footer-title">
                                    <h4 class="font-24 color-white  font-josefin"> Product Categories </h4>
                                </div>
                                <ul class="footer-links">
                                    <li><a class="hover-base font-roboto" href="about.html">Decoration Items</a></li>
                                    <li><a class="hover-base font-roboto" href="contact.html">China Items </a></li>
                                    <li><a class="hover-base font-roboto" href="faq.html">Birthday Poppers</a></li>
                                    <li><a class="hover-base font-roboto" href="blog.html">Gift Items</a></li>
                            
                                </ul>
                            </div>
                            <div
                                class="footer-default__single-box aline blackstyle commonAccordian  borderLine whiteLine d-md-none d-block">
                                <div class="accordio " id="accordionExamplen">
                                    <div class="accordion-item footer-accordian">
                                        <h2 class="accordion-header border-0" id="headingn">
                                            <button
                                                class="accordion-button  font-josefin justify-content-start p-0 collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapsen"
                                                aria-expanded="false" aria-controls="collapsen">
                                                Product Categories
                                            </button>
                                        </h2>
                                        <div id="collapsen" class="accordion-collapse collapse"
                                            aria-labelledby="headingn" data-bs-parent="#accordionExamplen">
                                            <div class="accordion-body">
                                                <ul class="footer-links">
                                                <li><a class="hover-base font-roboto" href="about.html">Decoration Items</a></li>
                                    <li><a class="hover-base font-roboto" href="contact.html">China Items </a></li>
                                    <li><a class="hover-base font-roboto" href="faq.html">Birthday Poppers</a></li>
                                    <li><a class="hover-base font-roboto" href="blog.html">Gift Items</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box d-md-block d-none">
                                <div class="footer-title">
                                    <h4 class="font-24 color-white font-josefin"> Office </h4>
                                </div>
                                <div class="footer-address-box">
                                    <div class="text1 pt-3">
                                        <p>SUPPAN STREET, Scheme Rd, <br> cs complex, Theni, Tamil Nadu 625531</p>
                                    </div>
                                 
                                </div> 
                            </div>
                            <div
                                class="footer-default__single-box aline blackstyle commonAccordian  borderLine whiteLine d-md-none d-block">
                                <div class="accordio " id="accordionExampleb">
                                    <div class="accordion-item footer-accordian">
                                        <h2 class="accordion-header border-0" id="headingb">
                                            <button
                                                class="accordion-button font-josefin justify-content-start p-0 collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseb"
                                                aria-expanded="false" aria-controls="collapseb">
                                                Office
                                            </button>
                                        </h2>
                                        <div id="collapseb" class="accordion-collapse collapse"
                                            aria-labelledby="headingb" data-bs-parent="#accordionExampleb">
                                            <div class="accordion-body">
                                                <div class="footer-address-box">
                                                    <div class="text1 pt-3">
                                                    <p>SUPPAN STREET, Scheme Rd, <br> cs complex, Theni, Tamil Nadu 625531</p>
                                                    </div>
                                             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- footer-bottom Footer-->
            <div class="footer_bottom position-relative">
                <div class="container">
                    <div class="footer_bottom_content">
                        <div class="copyright wow fadeInUp animated">
                            <p>© 2024 <a href="index.html" class="colorBage1">Nearlook Mart Pvt.</a> All Rights Reserved.</p>
                        </div>
                        <div class="footer-payment wow fadeInUp animated">
                            <a href="#0"> <img src="assets/images/home-4/payment_1.png" alt="payment"> </a>
                            <a href="#0"> <img src="assets/images/home-4/payment_2.png" alt="payment"> </a>
                            <a href="#0"> <img src="assets/images/home-4/payment_3.png" alt="payment"> </a>
                            <a href="#0"> <img src="assets/images/home-4/payment_4.png" alt="payment"> </a>
                        </div>
                        <div class="footer-bottom-menu wow fadeInUp animated">
                            <ul class="d-flex align-items-center">
                            
                                <li> <a href="contact.html">Terms & Conditionss</a> </li>
                                <li> <a href="contact.html">Privacy Policy</a> </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
 
        <!-- Mobile Nav Start -->
        <div class="offcanvas offcanvas-start mobile-nav-wrapper" tabindex="-1" id="offcanvasmenu">
            <div class="offcanvas-header d-flex justify-content-end p-0">
                <button type="button" class="btn-close animationCloser nev-cross text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                    <span class="span1 animationLine"> </span>
                    <span class="span2 animationLine"> </span>
                </button>
            </div>
            <div class="offcanvas-body p-0">
                <nav>
                    <ul class="mobile-nav navbar-nav flex-column">
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Home </span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="index.html">Home 01</a> </li>
                                <li> <a class="dropdown-item" href="index-2.html">Home 02</a> </li>
                                <li> <a class="dropdown-item" href="index-3.html">Home 03</a> </li>
                                <li> <a class="dropdown-item" href="index-4.html">Home 04</a> </li>
                                <li> <a class="dropdown-item" href="index-5.html">Home 05</a> </li>
                                <li> <a class="dropdown-item" href="index-6.html">Home 06</a> </li>
                                <li> <a class="dropdown-item" href="index-7.html">Home 07</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Shop </span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="shop-grid.html">Shop Grid 01</a> </li>
                                <li> <a class="dropdown-item" href="shop-grid-left-sidebar.html">Shop Grid 02</a> </li>
                                <li> <a class="dropdown-item" href="shop-grid-right-sidebar.html">Shop Grid 03</a> </li>
                                <li> <a class="dropdown-item" href="shop-list-left-sidebar.html">Shop List 01</a> </li> 
                                <li> <a class="dropdown-item" href="shop-list-right-sidebar.html">Shop List 02</a> </li> 
                            </ul>
                        </li>
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Single Product </span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="shop-details-1.html">Single Product 01</a> </li>
                                <li> <a class="dropdown-item" href="shop-details-2.html">Single Product 02</a> </li>
                                <li> <a class="dropdown-item" href="shop-details-3.html">Single Product 03</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Pages</span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="about.html">About </a> </li>
                                <li> <a class="dropdown-item" href="cart.html">Cart </a> </li> 
                                <li> <a class="dropdown-item" href="compare.html">Compare </a> </li>
                                <li> <a class="dropdown-item" href="error.html">Error</a> </li>
                                <li> <a class="dropdown-item" href="faq.html">Faq</a> </li>
                                <li> <a class="dropdown-item" href="login.html">Login</a> </li>
                                <li> <a class="dropdown-item" href="register.html">Registration </a> </li>
                                <li> <a class="dropdown-item" href="wishlist.html">Wishlist</a> </li>
                                <li> <a class="dropdown-item" href="my-account.html">Account</a> </li>
                                <li> <a class="dropdown-item" href="order-track.html">Order Track</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown-list nav-item p-0">
                            <a href="#0" class="nav-link">
                                <span>Blog</span>
                                <span class="mnav-plus-minus">
                                    <i class="flaticon-plus-1"></i>
                                    <i class="flaticon-minus-sign"></i>
                                </span>
                            </a>
                            <ul class="dropdown">
                                <li> <a class="dropdown-item" href="blog.html">Blog </a> </li>
                                <li> <a class="dropdown-item" href="blog-single.html">Blog Details </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item p-0"><a class="nav-link bb-0" href="contact.html">Contact </a></li>
                    </ul>
                </nav>
                <ul class="mobile-contact-info">
                    <li class="single-minfo">
                        <a href="contact.html"><i class="flaticon-location-1"></i>Our location</a>
                    </li>
                    <li class="single-minfo">
                        <a href="login.html"><i class="flaticon-account"></i>Log In / Sign Up</a>
                    </li>
                    <li class="single-minfo">
                        <a href="tel:+1234567890"><i class="flaticon-phone-call"></i>(+01) - 2345 - 6789</a>
                    </li>
                </ul>
                <p class="site-copyright">Copyright 2022 &copy; <a class="underline"
                        href="https://themeforest.net/user/mate_themes">Karte</a>.
                    All rights reserved. Powered by <a class="underline"
                        href="https://themeforest.net/user/mate_themes">Mate_Themes</a>.
                </p>
            </div>
        </div>
        <!-- Mobile Nav End -->

        <!-- Offcanvas Menu-Search Start -->
        <div class="offcanvas menusearch-offcanvas-top offcanvas-top" tabindex="-1" id="menusearch">
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <div class="menusearch">
                            <div class="offcanvas-header p-0">
                                <h5 class="fw-500">What are you looking for?</h5>
                                <button type="button" class="btn-close animationCloser text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close">
                                    <span class="span1 animationLine"> </span>
                                    <span class="span2 animationLine"> </span>
                                </button>
                            </div>
                            <div class="offcanvas-body p-0">
                                <form action="#0" class="newsletterBox searchbox">
                                    <div class="newsletter-input-group border-0 p-0 pt-2">
                                        <input type="search" class="form-control"
                                            placeholder="Search for products brands and more">
                                        <button class="w-auto searchboxButton me-3 p-0" type="submit"> <i
                                                class="flaticon-loupe"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Offcanvas Start -->
        <div class="offcanvas p-4 pt-0 pe-0 offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasRight">
            <div class="offcanvas-header d-flex justify-content-end pe-4">
                <button type="button" class="btn-close p-0 animationCloser whiteCloser" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                    <span class="span1 animationLine"> </span>
                    <span class="span2 animationLine"> </span>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="sidebar-info-contents">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/logo-white.png" alt=""></a>
                    </div>
                    <div class="content-box">
                        <h4 class="color-white mt-3 pt-2 animationLine d-inline-block font-josefin">About Us</h4>
                        <div class="inner-text pt-2">
                            <p class="font-roboto color-textwhite">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                    </div>
                    <div class="form_inner mt-3 pt-1">
                        <h4 class="color-white font-josefin animationLine d-inline-block ">Support</h4>
                        <form class="mt-2" action="https://html.matethemes.com/karte/karte/index.html" method="post">
                            <div class="form-group mt-4"> <input type="text" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group mt-4"> <input type="email" name="email" placeholder="Email"
                                    required="">
                            </div>
                            <div class="form-group mt-4"> <textarea name="message" placeholder="Message..."></textarea>
                            </div>
                            <div class="form-group message-btn mt-4">
                                <button type="submit" class="btn--secondary"> <span class="txt">Submit Now</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-contact-info mt-3 pt-3">
                        <h4 class="color-white font-josefin animationLine d-inline-block ">Contact Info</h4>
                        <ul class="mt-2 pt-1">
                            <li class="font-roboto color-textwhite d-flex align-items-center">
                                <i class="me-2 flaticon-location-1"></i> New York, United States
                            </li>
                            <li class="font-roboto pt-2 color-textwhite d-flex align-items-center">
                                <i class="me-2 flaticon-phone-call"></i>
                                <a href="tel:+44203700001" class="color-textwhite">+44 123 456 789</a>
                            </li>
                            <li class="font-roboto pt-2 color-textwhite d-flex align-items-center">
                                <i class="me-2 flaticon-envelope"></i>
                                <a href="mailto:info@example.com" class="color-textwhite">info@example.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="thm-medio-boxx1 mt-3">
                        <ul class="social-box">
                            <li class="facebook"> <a href="https://www.facebook.com/" target="_blank"><i
                                        class="flaticon-facebook-app-symbol"></i></a> </li>
                            <li class="twitter"> <a href="https://twitter.com/" target="_blank"><i
                                        class="flaticon-twitter"></i></a> </li>
                            <li class="instagram"> <a href="https://www.instagram.com/" target="_blank"><i
                                        class="flaticon-instagram"></i></a> </li>
                            <li class="youtube"> <a href="https://www.youtube.com/" target="_blank"><i
                                        class="flaticon-youtube"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart Offcanvas Start -->
        <div class="offcanvas offcanvascart p-4 pt-3 offcanvas-end" tabindex="-1" id="offcanvasRight2" >
            <div class="offcanvas-header d-flex justify-content-between align-content-center">
                <h6 class="text-uppercase font-josefin colorrBlack fw-500">Your Cart (03)</h6>
                <button type="button" class="btn-close p-0 animationCloser" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                    <span class="span1 animationLine"> </span>
                    <span class="span2 animationLine"> </span>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="side-cart h-100 d-flex flex-column justify-content-between">
                    <div class="top">
                        <div class="cart_items">
                            <div class="items d-flex justify-content-between align-items-center">
                                <div class="left d-flex align-items-center">
                                    <a href="shop-details-1.html"
                                        class="thumb d-flex justify-content-between align-items-center">
                                        <img src="assets/images/home-4/products-img1.jpg" alt="">
                                    </a>
                                    <div class="text">
                                        <a href="shop-details-1.html">
                                            <h6 class="colorrBlack font-josefin fw-500">Diamond Bracelet</h6>
                                        </a>
                                        <p>2 X <span>$350.00</span> </p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="item-remove"> <i class="flaticon-cross"></i> </div>
                                </div>
                            </div>
                            <div class="items d-flex justify-content-between align-items-center">
                                <div class="left d-flex align-items-center">
                                    <a href="shop-details-1.html"
                                        class="thumb d-flex justify-content-between align-items-center">
                                        <img src="assets/images/home-4/products-img2.jpg" alt="">
                                    </a>
                                    <div class="text"> <a href="shop-details-1.html">
                                            <h6 class="colorrBlack font-josefin fw-500">Blacked Neckles </h6>
                                        </a>
                                        <p>1 X <span>$150.00</span> </p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="item-remove"> <i class="flaticon-cross"></i> </div>
                                </div>
                            </div>
                            <div class="items d-flex justify-content-between align-items-center">
                                <div class="left d-flex align-items-center">
                                    <a href="shop-details-1.html"
                                        class="thumb d-flex justify-content-between align-items-center">
                                        <img src="assets/images/home-4/products-img3.jpg" alt="">
                                    </a>
                                    <div class="text"> <a href="shop-details-1.html">
                                            <h6 class="colorrBlack font-josefin fw-500">Diamond Ring </h6>
                                        </a>
                                        <p>1 X <span>$200.00</span> </p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="item-remove"> <i class="flaticon-cross"></i> </div>
                                </div>
                            </div>
                            <div class="items d-flex justify-content-between align-items-center">
                                <div class="left d-flex align-items-center">
                                    <a href="shop-details-1.html"
                                        class="thumb d-flex justify-content-between align-items-center">
                                        <img src="assets/images/home-4/products-img4.jpg" alt="">
                                    </a>
                                    <div class="text"> <a href="shop-details-1.html">
                                            <h6 class="colorrBlack font-josefin fw-500">Women Earring</h6>
                                        </a>
                                        <p>1 X <span>$150.00</span> </p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="item-remove"> <i class="flaticon-cross"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="total-ammount d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase colorrBlack font-josefin fw-500">Total:</h6>
                            <h6 class="ammount text-uppercase colorrBlack font-josefin fw-500">$850.00</h6>
                        </div>
                        <div class="button-box d-flex justify-content-between">
                            <a href="cart.html" class="btn_black"> View Cart </a>
                            <a href="cart.html" class="button-2 btn_theme"> Chekout </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===scroll bottom to top===-->
        <a href="#0" class="scrollToTop"><i class="flaticon-up-arrow"></i></a>
        <!--===scroll bottom to top===-->


        <!--==== Js Scripts Start ====-->
        <!-- Jquery v3.6.0 Js -->
        <script src="../assets/js/jqurey.v3.6.0.min.js"></script>
        <!-- Popper v2.9.3 Js -->
        <script src="../assets/js/popper.v2.9.3.min.js"></script>
        <!-- Bootstrap v5.1.1 js -->
        <script src="../assets/js/bootstrap.v5.1.1.min.js"></script>
        <!-- Jquery Ui js -->
        <script src="../assets/js/plugin/jquery-ui.min.js"></script>
        <!-- Slick Slider Js -->
        <script src="../assets/js/plugin/slick.min.js"></script>
        <!-- Jarallax Js -->
        <script src="../assets/js/plugin/jarallax.min.js"></script>
        <!-- Image Comparison Slider Js -->
        <script src="../assets/js/plugin/img-comparison-slider.js"></script>
        <!-- magnific-popup v2.3.4 Js -->
        <script src="../assets/js/plugin/jquery.magnific-popup.min.js"></script>
        <!-- Countdown Js -->
        <script src="../assets/js/plugin/jquery.countdown.min.js"></script>
        <!-- Wow Js -->
        <script src="../assets/js/plugin/wow.v1.3.0.min.js"></script>
        <!-- Main js -->
        <script src="../assets/js/main.js"></script>

    </div>
    <!-- Page-wrapper End -->

</body>

</html>