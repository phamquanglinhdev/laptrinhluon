<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from themesflat.com/html/educate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 17:32:33 GMT -->
<head>

    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{$title??"Lập trình luôn - Học lập trình đi còn chờ gì má !!"}}</title>
    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset("stylesheets/bootstrap.css")}}">

    <link rel="stylesheet" type="text/css" href="{{asset("stylesheets/shortcodes.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("stylesheets/style.css")}}">

    <link rel="stylesheet" type="text/css" href="{{asset("stylesheets/responsive.css")}}">

    <link rel="stylesheet" type="text/css" href="{{asset("stylesheets/colors/color1.css")}}" id="colors">

    <link rel="stylesheet" type="text/css" href="{{asset("revolution/css/layers.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("revolution/css/settings.css")}}">

    <link rel="stylesheet" type="text/css" href="{{asset("stylesheets/animate.css")}}">

    <link href="{{asset("icon/apple-touch-icon-48-precomposed.png")}}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{asset("icon/apple-touch-icon-57-precomposed.png")}}" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="{{asset("icon/favicon.png")}}" rel="shortcut icon">
    <!--[if lt IE 9]>
    <script src="{{asset("javascript/html5shiv.js")}}"></script>
    <script src="{{asset("javascript/respond.min.js")}}"></script>

    <![endif]-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.32/sweetalert2.min.css"/>
    <script src="{{asset("javascript/sweet.js")}}"></script>
</head>
<body class="header-sticky">
<div class="boxed">
    <div class="windows8">
        <div class="preload-inner">
            <div class="wBall" id="wBall_1">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_2">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_3">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_4">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_5">
                <div class="wInnerBall"></div>
            </div>
        </div>
    </div>
    <div class="header-inner-pages">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-information">
                            <p>Chào mừng tới với website học lập trình</p>
                        </div>
                        <div class="right-bar">
                            <ul class="flat-information">
                                <li class="phone">
                                    <a href="tel:+84904800240" title="Phone number">0904.800.240</a>
                                </li>
                                <li class="email">
                                    <a href="#"
                                       title="Email address">dldev.education@gmail.com</a>
                                </li>
                            </ul>
                            <ul class="flat-socials">
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="header" class="header clearfix">
        <div class="container">
            <div class="header-wrap clearfix">
                <div id="logo" class="logo">
                    <a href="{{route("index")}}" rel="home">
                        <img src="{{asset("images/logo.png")}}" alt="image">
                    </a>
                </div>
                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span></span>
                    </div>
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li class="has-sub">
                                <a class="active" href="{{route("index")}}">Trang chủ</a>
                                <ul class="submenu">
                                    <li><a href="index-onepage.html">Home OnePage</a></li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="courses-grid.html">Khóa học</a>
                                <ul class="submenu">
                                    <li><a href="courses-grid.html">Courses grid</a></li>
                                    <li><a href="courses-grid-sidebar.html">Courses grid sidebar</a></li>
                                    <li><a href="courses-list-sidebar.html">Courses list sidebar</a></li>
                                    <li><a href="courses-single.html">Courses single</a></li>
                                </ul>
                            </li>
                            </li>
                            <li><a href="blog.html">Trang</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">Liên hệ</a></li>
                                    <li><a href="blog-single.html">Đội ngũ</a></li>
                                    <li><a href="blog-single.html">Giới thiệu</a></li>
                                </ul>
                            </li>
                            @if(backpack_auth()->check())
                                <li class="has-sub">
                                    <a href="courses-grid.html">
                                        <i class="fa fa-user"></i> {{backpack_user()->name}}
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="{{route("logout")}}">Đăng xuất</a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{route("login")}}">Đăng nhập</a></li>
                            @endif
                            <li><a href="about-us.html">Giới thiệu</a>
                        </ul>
                    </nav>
                </div>
                <div id="s" class="show-search">
                    <a href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="submenu top-search">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="search" class="search-field" placeholder="Tìm kiếm ngay …">
                            <input type="submit" class="search-submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield("content")
    <footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget widget-text">
                            <img src="{{asset("images/blog/Footer-01.jpg")}}" alt="image">
                            <ul>
                                <li class="address">61 Ngo 381 Nguyen Khang, Yen Hoa, Cau Giay, Ha Noi</li>
                                <li class="phone"><a href="#">+84 904 800 240</a></li>
                                <li class="email"><a href="#">dldev.education@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget_tweets clearfix">
                            <h5 class="widget-title">User Links</h5>
                            <ul class="link-left">
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                            </ul>
                            <ul class="link-right">
                                <li>
                                    <a href="#">Become a Teacher</a>
                                </li>
                                <li>
                                    <a href="#">Maintenance</a>
                                </li>
                                <li>
                                    <a href="#">Language Packs</a>
                                </li>
                                <li>
                                    <a href="#">LearnPress</a>
                                </li>
                                <li>
                                    <a href="#">Release Status</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget_recent-courses">
                            <h5 class="widget-title">Recent Courses</h5>
                            <ul class="recent-courses-news clearfix">
                                <li>
                                    <div class="thumb">
                                        <img src="{{asset("images/blog/Footer-02.png")}}" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">UI-UX Designer Courses</a>
                                    </div>
                                    <div class="review-rating">
                                        <ul class="flat-reviews">
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            </li>
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </li>
                                        </ul>
                                        <p>25 Reviews</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="{{asset("images/blog/Footer-03.png")}}" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">PHP Shopify Courses</a>
                                    </div>
                                    <div class="review-rating">
                                        <ul class="flat-reviews">
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            </li>
                                            <li class="star">
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </li>
                                        </ul>
                                        <p>25 Reviews</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-quick-contact">
                            <h5 class="widget-title">Quick Contact</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="flat-contact-form" id="contactform" method="post"
                                          action="https://themesflat.com/html/educate/contact/contact-process.php">
                                        <input type="email" value="" tabindex="2" placeholder="Your Email" name="email"
                                               id="email-contact" required="">
                                        <textarea class="type-input" tabindex="3" placeholder="Message" name="message"
                                                  id="message-contact" required=""></textarea>
                                        <div class="submit-wrap">
                                            <button class="flat-button bg-orange"><i class="fa fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="go-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <div class="bottom">
        <div class="container">
            <ul class="flat-socials-v1">
                <li class="facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="vimeo">
                    <a href="#"><i class="fa fa-vimeo"></i></a>
                </li>
                <li class="rss">
                    <a href="#"><i class="fa fa-rss"></i></a>
                </li>
            </ul>
            <div class="row">
                <div class="container-bottom">
                    <div class="copyright">
                        <p>Copyright © 2016. Designer by <span><a href="#">NthPsd</a></span>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{asset("javascript/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/jquery.easing.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/owl.carousel.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/jquery-waypoints.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/jquery-countTo.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/parallax.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/jquery.cookie.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/jquery-validate.js")}}"></script>
<script type="text/javascript" src="{{asset("javascript/main.js")}}"></script>

<script type="text/javascript" src="{{asset("revolution/js/jquery.themepunch.tools.min.js")}}"></script>
<script type="text/javascript" src="{{asset("revolution/js/jquery.themepunch.revolution.min.js")}}"></script>
<script type="text/javascript" src="{{asset("revolution/js/slider.js")}}"></script>

<script type="text/javascript" src="{{asset("revolution/js/extensions/revolution.extension.actions.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("revolution/js/extensions/revolution.extension.carousel.min.js")}}"></script>
<script type="text/javascript" src="{{asset("revolution/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("revolution/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("revolution/js/extensions/revolution.extension.migration.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("revolution/js/extensions/revolution.extension.navigation.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("revolution/js/extensions/revolution.extension.parallax.min.js")}}"></script>
<script type="text/javascript"
        src="{{asset("revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script type="text/javascript" src="{{asset("revolution/js/extensions/revolution.extension.video.min.js")}}"></script>
</body>
</html>
