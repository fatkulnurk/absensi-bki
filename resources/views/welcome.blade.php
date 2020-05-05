<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sistem Kepegawaian BKI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ asset('web/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('web/css/zoomslider.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('web/css/style6.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('web/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('web/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>

<body>
<!-- banner-inner -->
<div id="demo-1" data-zs-src='["{{ asset('web/images/1.jpg') }}","{{ asset('web/images/2.jpg') }}","{{ asset('web/images/3.jpg') }}","{{ asset('web/images/4.jpg') }}"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <div class="header-top">
            <header>
                <div class="top-head ml-lg-auto text-center">
                    <div class="row">

                        <div class="col-md-4">
                            <span>Welcome Back!</span>
                        </div>
                        <div class="col-md-3 sign-btn">
{{--                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">--}}
{{--                                <i class="fas fa-lock"></i> Sign In</a>--}}
                            <a href="{{ route('login') }}">
                                <i class="fas fa-lock"></i> Sign In</a>
                        </div>
                        <div class="col-md-3 sign-btn">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                                <i class="far fa-user"></i> Register</a>
                        </div>
                        <div class="search col-md-2">
                            <!-- open/close -->
                            <div class="overlay overlay-door">
                                <button type="button" class="overlay-close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <form action="#" method="post" class="d-flex">
                                    <input class="form-control" type="search" placeholder="Search here..." required="">
                                    <button type="submit" class="btn btn-primary submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- open/close -->
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="logo">
                        <h1>
                            <a class="navbar-brand" href="?">
                                <i class="fab fa-codepen"></i> Sistem Kepegawaian BKI</a>
                        </h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                    </button>
                </nav>
            </header>
        </div>
        <!--/banner-info-w3layouts-->
        <div class="banner-info-w3layouts text-center">

            <h3>
                <span>To be a world-class classification society and independent assurance provider</span>
            </h3>
            <p>PT Biro Klasifikasi Indonesia (PERSERO) Cabang Madya Komersil Surabaya</p>
        </div>
        <!--//banner-info-w3layouts-->
    </div>
</div>
<!-- banner-text -->
<!-- banner-bottom-wthree -->
<section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5  py-3">
            <h3 class="tittle text-center mb-lg-4 mb-3">
                <span>Our Features</span>Main Categories</h3>
            <div class="row populor_category_grids mt-5">
                <div class="col-md-3 category_grid">
                    <div class="view view-tenth">
                        <div class="category_text_box">
                            <i class="fas fa-users"></i>
                            <h3> Profil Pegawai</h3>
                            <p></p>
                        </div>
                        <div class="mask">
                            <a href="#">
                                <img src="{{ asset('web/images/p1.jpg') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 category_grid">
                    <div class="view view1 view-tenth">
                        <div class="category_text_box">
                            <i class="fab fa-accusoft"></i>
                            <h3>Data Absensi</h3>
                            <p></p>
                        </div>
                        <div class="mask">
                            <a href="#">
                                <img src="{{ asset('web/images/p4.jpg') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 category_grid">
                    <div class="view view2 view-tenth">
                        <div class="category_text_box">
                            <i class="fab fa-accusoft"></i>
                            <h3>Data Cuti</h3>
                            <p></p>
                        </div>
                        <div class="mask">
                            <a href="#">
                                <img src="{{ asset('web/images/p3.jpg') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 category_grid">
                    <div class="view view3 view-tenth">
                        <div class="category_text_box">
                            <i class="fas fa-users"></i>
                            <h3>Kualifikasi Personal</h3>
                            <p></p>
                        </div>
                        <div class="mask">
                            <a href="#">
                                <img src="{{ asset('web/images/p4.jpg') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="col-md-3 category_grid">
                    <div class="view view5 view-tenth">
                        <div class="category_text_box">
                            <i class="fas fa-user"></i>
                            <h3>Penunjukan Inspektur</h3>
                            <p></p>
                        </div>
                        <div class="mask">
                            <a href="#">
                                <img src="{{ asset('web/images/p4.jpg') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 category_grid">
                    <div class="view view4 view-tenth">
                        <div class="category_text_box">
                            <i class="fas fa-user"></i>
                            <h3>Jasa Inspeksi</h3>
                            <p></p>
                        </div>
                        <div class="mask">
                            <a href="#">
                                <img src="{{ asset('web/images/p4.jpg') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 category_grid">
                    <div class="view view5 view-tenth">
                        <div class="category_text_box">
                            <i class="fas fa-book"></i>
                            <h3>Informasi dan Pengumuman</h3>
                            <p></p>
                        </div>
                        <div class="mask">
                            <a href="#">
                                <img src="{{ asset('web/images/p4.jpg') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner-bottom-wthree -->
<!--/process-->
<!--job -->
<section class="banner-bottom-wthree mid py-lg-5 py-3">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5  py-3">
            <div class="mid-info text-center pt-3">
                <h3 class="tittle text-center cen mb-lg-5 mb-3">
                    <span>Make a Difference with BKI</span>PT. Biro Klasifikasi Indonesia (Persero)</br>Cabang Madya Komersil Surabaya</h3>
                <p></p>
                <div class="resume">
{{--                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">--}}
{{--                        <i class="far fa-user"></i> Sign In</a>--}}

                    <a href="{{ route('login') }}">
                        <i class="far fa-user"></i> Sign In</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--//job -->
<!--/candidates -->
<section class="banner-bottom-wthree bg-light py-lg-5 py-3 text-center">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3">
                <span>Some Info</span>STAFF</h3>
            <div class="row mt-5">
                <div class="col-lg-3 member-main text-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="member-img">
                                <img src="{{ asset('web/images/team1.jpg') }}" alt=" " class="img-fluid rounded-circle">
                            </div>
                            <div class="member-info text-center py-lg-4 py-2">
                                <h4>Mark Jackman</h4>

                                <p class="my-4"> Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 member-main text-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="member-img">
                                <img src="{{ asset('web/images/team2.jpg') }}" alt=" " class="img-fluid rounded-circle">
                            </div>
                            <div class="member-info text-center py-lg-4 py-2">
                                <h4>Janet Levine</h4>

                                <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 member-main text-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="member-img">
                                <img src="{{ asset('web/images/team3.jpg') }}" alt=" " class="img-fluid rounded-circle">
                            </div>
                            <div class="member-info text-center py-lg-4 py-2">
                                <h4>Rene Rickman</h4>

                                <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 member-main text-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="member-img">
                                <img src="{{ asset('web/images/team4.jpg') }}" alt=" " class="img-fluid rounded-circle">
                            </div>
                            <div class="member-info text-center py-lg-4 py-2">
                                <h4>Daniele Norwich</h4>
                                <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/candidates -->
<!--/stats-->
<!--//stats-->

<!--job -->
<section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5  py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3">
                <span>Some Info</span> Quick Career Tips</h3>
            <div class="row mt-5">

                <div class="card-deck">
                    <div class="card">
                        <img src="{{ asset('images/g1.jpg') }}" alt="Card image cap" class="img-fluid card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Would Disruption Work for Your Business?</h5>
                            <p class="card-text">When talking about movers and shakers in different industries, the word “disruption” often comes up. Disruption has become one of the most overused words in the business world – so overused that it’s difficult to pinpoint a consistent disruption definition.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/g2.jpg') }}" alt="Card image cap" class="img-fluid card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">The New Mix of a Multigenerational Workforce</h5>
                            <p class="card-text">One problem with identifying disruptors is that often they need lots of time to make a real impact in their respective fields. Sometimes it can take years for the true effects of disruption to present itself in the market. Additionally, a disruptor’s business model can look completely different than what’s already there, so it can be hard to identify disruptive innovation in its early stages.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/g3.jpg') }}" alt="Card image cap" class="img-fluid card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Would Disruption Work for Your Business?</h5>
                            <p class="card-text">When talking about movers and shakers in different industries, the word “disruption” often comes up. Disruption has become one of the most overused words in the business world – so overused that it’s difficult to pinpoint a consistent disruption definition.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//job -->
<!--/mobile-app -->
<section class="banner_bottom mobile-app">
    <div class="dotts py-lg-5 py-3">
        <div class="container">
            <!--/mobile-app -->
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="row">
                    <div class="col-md-7 app-info">
                        <h3 class="header">Free Access for Employee &amp; Enjoy</h3>
                        <p class="para_vl">Cek absensi pegawai secara realtime</p>
                        <ul class="app-devices mt-5">
                            <li>
                                <a href="#" title="">
                                    <i class="fab fa-apple"></i>
                                    <span class="app-con">App Store
                                            <span class="avail">Available now on the </span>
                                        </span>

                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fab fa-google-play"></i>

                                    <span class="app-con">Google Play
                                            <span class="avail">Get in on</span>
                                        </span>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <p class="para_vl">
                    </div>
                    <div class="col-md-5 app-img">
                        <img src="{{ asset('web/images/mobile.png') }}" alt=" " class="img-fluid">
                    </div>
                </div>
                <!--//mobile-app -->
            </div>
        </div>
    </div>
</section>
<!--clients-->
<!--//clients-->
<!--footer -->
<footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row footer-top">
            <div class="col-lg-3 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>About Us</h3>
                </div>
                <div class="footer-text">
                    <p>To be a world-class classification society and independent assurance provider</p></br>
                    <p>PT. Biro Klasifikasi Indonesia (Persero)</br>Cabang Madya Komersil Surabaya</p>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>Get in touch</h3>
                </div>
                <div class="contact-info">
                    <h4>Location :</h4>
                    <p>Jl. Kalianget No. 14 Surabaya - 60615</p>
                    <div class="phone">
                        <h4>Contact :</h4>
                        <p>Phone : (+62)31 3295448</p>
                        <p>Email :
                            <a href="mailto:info@example.com">sbc@bki.co.id</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>Quick Links</h3>
                </div>
                <ul class="links">
                    <li>
                        <a href="?">Home</a>
                    </li>
                </ul>
                <ul class="links">
                </ul>

                <div class="clearfix"></div>
            </div>
            <div class="col-lg-3 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>Sign up for your offers</h3>
                </div>
                <div class="footer-text">
                    <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                </div>
            </div>
        </div>
        <div class="copyright mt-4">
            <p class="copy-right text-center ">&copy; 2020 Absens BKI. All Rights Reserved | Design by
                <a href="http://w3layouts.com/"> Almira </a>
            </p>
        </div>
    </div>
</footer>
<!-- //footer -->

<!--model-forms-->
<!--/Login-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Login Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="mb-2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                        <p class="text-center pb-4">
                            <a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
<!--/Register-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Register Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>First name</label>

                            <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="" required="">
                        </div>

                        <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                        <p class="text-center pb-4">
                            <a href="#">By clicking Register, I agree to your terms</a>
                        </p>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!--//Register-->

<!--//model-form-->
<!-- js -->
<!--/slider-->
<script src="{{ asset('web/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('web/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.zoomslider.min.js') }}"></script>
<!--//slider-->
<!--search jQuery-->
<script src="{{ asset('web/js/classie-search.js') }}"></script>
<script src="{{ asset('web/js/demo1-search.js') }}"></script>
<!--//search jQuery-->

<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<!-- password-script -->
<script>
    window.onload = function() {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- stats -->
<script src="{{ asset('web/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.countup.js') }}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!-- //js -->
<script src="{{ asset('web/js/bootstrap.js') }}"></script>
<!--/ start-smoth-scrolling -->
<script src="{{ asset('web/js/move-top.js') }}"></script>
<script src="{{ asset('web/js/easing.js') }}"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->
</body>

</html>
