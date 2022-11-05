<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BadaBusiness.com</title>
    <meta name="next-head-count" content="3">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="../css/a74f6e1f5cb94126.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="../css/bootstrap.css" rel="stylesheet"> -->
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">


    <style class="fslightbox-styles">
        .col-half-offset {
            margin-left: 4.166666667%
        }
        
        .fslightbox-absoluted {
            position: absolute;
            top: 0;
            left: 0
        }
        
        .input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }
        
        .boder_lftradius {
            width: 90px!important;
            border-bottom-left-radius: 2rem !important;
            border-top-left-radius: 2rem !important;
            border: none !important;
        }
        
        .custom-select {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0;
        }
        
        .isticky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 99999;
            background-color: #221638;
        }
        
        .arrow {
            border: solid white;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
        }
        
        .right {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        
        .left {
            transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
        }
        
        .up {
            transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
        }
        
        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }
        
        .fslightbox-fade-in {
            animation: fslightbox-fade-in .25s cubic-bezier(0, 0, .7, 1)
        }
        
        .fslightbox-fade-out {
            animation: fslightbox-fade-out .25s ease
        }
        
        .fslightbox-fade-in-strong {
            animation: fslightbox-fade-in-strong .25s cubic-bezier(0, 0, .7, 1)
        }
        
        .fslightbox-fade-out-strong {
            animation: fslightbox-fade-out-strong .25s ease
        }
        
        @keyframes fslightbox-fade-in {
            from {
                opacity: .65
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes fslightbox-fade-out {
            from {
                opacity: .35
            }
            to {
                opacity: 0
            }
        }
        
        @keyframes fslightbox-fade-in-strong {
            from {
                opacity: .3
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes fslightbox-fade-out-strong {
            from {
                opacity: 1
            }
            to {
                opacity: 0
            }
        }
        
        .fslightbox-cursor-grabbing {
            cursor: grabbing
        }
        
        .fslightbox-full-dimension {
            width: 100%;
            height: 100%
        }
        
        .fslightbox-open {
            overflow: hidden;
            height: 100%
        }
        
        .fslightbox-flex-centered {
            display: flex;
            justify-content: center;
            align-items: center
        }
        
        .fslightbox-opacity-0 {
            opacity: 0!important
        }
        
        .fslightbox-opacity-1 {
            opacity: 1!important
        }
        
        .fslightbox-scrollbarfix {
            padding-right: 17px
        }
        
        .fslightbox-transform-transition {
            transition: transform .3s
        }
        
        .fslightbox-container {
            font-family: Arial, sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(rgba(30, 30, 30, .9), #000 1810%);
            z-index: 1000000000;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent
        }
        
        .fslightbox-container * {
            box-sizing: border-box
        }
        
        .fslightbox-svg-path {
            transition: fill .15s ease;
            fill: #ddd
        }
        
        .fslightbox-nav {
            height: 45px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0
        }
        
        .fslightbox-slide-number-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 100%;
            font-size: 15px;
            color: #d7d7d7;
            z-index: 0;
            max-width: 55px;
            text-align: left
        }
        
        .fslightbox-slash {
            display: block;
            margin: 0 5px;
            width: 1px;
            height: 12px!important;
            transform: rotate(15deg);
            background: #fff
        }
        
        .fslightbox-toolbar {
            position: absolute;
            z-index: 3;
            right: 0;
            top: 0;
            height: 100%;
            display: flex;
            background: rgba(35, 35, 35, .65)
        }
        
        .fslightbox-toolbar-button {
            height: 100%;
            width: 45px;
            cursor: pointer
        }
        
        .fslightbox-toolbar-button:hover .fslightbox-svg-path {
            fill: #fff
        }
        
        .fslightbox-slide-btn-container {
            display: flex;
            align-items: center;
            padding: 12px 12px 12px 6px;
            position: absolute;
            top: 50%;
            cursor: pointer;
            z-index: 3;
            transform: translateY(-50%)
        }
        
        @media (min-width:476px) {
            .fslightbox-slide-btn-container {
                padding: 22px 22px 22px 6px
            }
        }
        
        @media (min-width:768px) {
            .fslightbox-slide-btn-container {
                padding: 30px 30px 30px 6px
            }
        }
        
        .fslightbox-slide-btn-container:hover .fslightbox-svg-path {
            fill: #f1f1f1
        }
        
        .fslightbox-slide-btn {
            padding: 9px;
            font-size: 26px;
            background: rgba(35, 35, 35, .65)
        }
        
        @media (min-width:768px) {
            .fslightbox-slide-btn {
                padding: 10px
            }
        }
        
        @media (min-width:1600px) {
            .fslightbox-slide-btn {
                padding: 11px
            }
        }
        
        .fslightbox-slide-btn-previous-container {
            left: 0
        }
        
        @media (max-width:475.99px) {
            .fslightbox-slide-btn-previous-container {
                padding-left: 3px
            }
        }
        
        .fslightbox-slide-btn-next-container {
            right: 0;
            padding-left: 12px;
            padding-right: 3px
        }
        
        @media (min-width:476px) {
            .fslightbox-slide-btn-next-container {
                padding-left: 22px
            }
        }
        
        @media (min-width:768px) {
            .fslightbox-slide-btn-next-container {
                padding-left: 30px
            }
        }
        
        @media (min-width:476px) {
            .fslightbox-slide-btn-next-container {
                padding-right: 6px
            }
        }
        
        .fslightbox-down-event-detector {
            position: absolute;
            z-index: 1
        }
        
        .fslightbox-slide-swiping-hoverer {
            z-index: 4
        }
        
        .fslightbox-invalid-file-wrapper {
            font-size: 22px;
            color: #eaebeb;
            margin: auto
        }
        
        .fslightbox-video {
            object-fit: cover
        }
        
        .fslightbox-loader {
            display: block;
            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 67px;
            height: 67px
        }
        
        .fslightbox-loader div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 54px;
            height: 54px;
            margin: 6px;
            border: 5px solid;
            border-color: #999 transparent transparent transparent;
            border-radius: 50%;
            animation: fslightbox-loader 1.2s cubic-bezier(.5, 0, .5, 1) infinite
        }
        
        .fslightbox-loader .fslightbox-loader-child-1 {
            animation-delay: -.45s
        }
        
        .fslightbox-loader .fslightbox-loader-child-2 {
            animation-delay: -.3s
        }
        
        .fslightbox-loader .fslightbox-loader-child-3 {
            animation-delay: -.15s
        }
        
        @keyframes fslightbox-loader {
            0% {
                transform: rotate(0)
            }
            100% {
                transform: rotate(360deg)
            }
        }
        
        .fslightbox-source {
            position: relative;
            z-index: 2;
            opacity: 0;
            transform: translateZ(0);
            margin: auto;
            backface-visibility: hidden
        }
    </style>
</head>

<body>
    <div id="__next">
        <div class="body_overlay"></div>
        <div class="navbar-area navbar-style-two" id="mobnav1">
            <div class="miran-responsive-nav">
                <div class="container">
                    <div class="miran-responsive-menu">
                        <div class="hamburger-menu" id="ham-icon"><i class="fa fa-bars" style="font-size: 35px;padding: 15px;"></i></div>
                        <div class="logo">
                            <a class="" href="/"><img src="img/logo1.png" alt="logo" width="150" height="50"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="miran-nav" id="mobnav">
                <div class=" container-fluid ">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand " href="/"><img src="img/logo1.png " alt="logo " width="100 " height="50 "></a>
                        <div class="collapse navbar-collapse mean-menu ">
                            <ul class="navbar-nav ">
                                <li class="nav-item "><a href="# " class="dropdown-toggle nav-link ">Home</a></li>
                                <li class="nav-item "><a href="# " class="dropdown-toggle nav-link ">LTM</a></li>
                                <li class="nav-item "><a href="# " class="dropdown-toggle nav-link ">IBC</a></li>
                                <li class="nav-item "><a href="# " class="dropdown-toggle nav-link ">PSC</a></li>
                                <li class="nav-item " id="submenu " onclick="onClick(); "><a class="dropdown-toggle nav-link ">7 Star</a>
                                    <ul class="dropdown-menu " id="d-menu ">
                                        <li class="nav-item "><a class="nav-link " href="/ ">Freelancer</a></li>
                                        <li class="nav-item "><a class="nav-link " href="/index-2/ ">Retailer</a></li>
                                        <li class="nav-item "><a class="nav-link " href="/index-3/ ">Service</a></li>
                                        <li class="nav-item "><a class="nav-link " href="/index-4/ ">Entrepreneur</a></li>
                                        <li class="nav-item "><a class="nav-link " href="/index-4/ ">Womenpreneur</a></li>
                                        <li class="nav-item "><a class="nav-link " href="/index-4/ ">Student</a></li>
                                        <li class="nav-item "><a class="nav-link " href="/index-4/ ">Manufacturer</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item "><a href="# " class="dropdown-toggle nav-link ">Bounce Back</a></li>
                                <li class="nav-item "><a href="# " class="dropdown-toggle nav-link ">Contact Us </a></li>
                                <!-- <li class="nav-item "><a href="# " class="dropdown-toggle nav-link ">Pages</a>
                                                            <ul class="dropdown-menu ">
                                                                <li class="nav-item "><a class="nav-link " href="/about/ ">About Us</a></li>
                                                                <li class="nav-item "><a class="nav-link " href="/how-it-works/ ">How It Work</a></li>
                                                                <li class="nav-item "><a class="nav-link " href="/pricing/ ">Pricing</a></li>
                                                                <li class="nav-item "><a class="nav-link " href="/gallery/ ">Gallery</a></li>
                                                                <li class="nav-item "><a href="# " class="nav-link ">Events <i class="bx bx-chevron-right "></i></a>
                                                                    <ul class="dropdown-menu ">
                                                                        <li class="nav-item "><a class="nav-link " href="/events/ ">Events</a></li>
                                                                        <li class="nav-item "><a class="nav-link " href="/single-events/ ">Events Details</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="nav-item "><a class="nav-link " href="/testimonial/ ">Testimonials</a></li>
                                                                <li class="nav-item "><a class="nav-link " href="/faq/ ">FAQ</a></li>
                                                                <li class="nav-item "><a class="nav-link " href="/404/ ">404 Error</a></li>
                                                                <li class="nav-item "><a class="nav-link " href="/coming-soon/ ">Coming Soon</a></li>
                                                                <li class="nav-item "><a class="nav-link " href="/contact/ ">Contact</a></li>
                                                            </ul>
                                                        </li> -->
                            </ul>
                            <div class="others-option d-flex align-items-center ">
                                <a class="option-item " href="tel:+91 9167729245 "><span data-toggle="modal " class="auth-one "><i class='fas fa-phone-square-alt mr-4'></i>  9167729245</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive ">
                <div class="container ">
                    <div class="dot-menu ">
                        <div class="inner ">
                            <!-- <div class="circle circle-one "></div>
                            <div class="circle circle-two "></div>
                            <div class="circle circle-three "></div> -->
                        </div>
                    </div>
                    <div class="container ">
                        <div class="option-inner ">
                            <div class="others-option ">
                                <div class="option-item ">
                                    <form class="navbar-search-box "><label></label><input type="text " class="input-search " placeholder="What are you looking for? "></form>
                                </div>
                                <div class="option-item "><span data-toggle="modal "><i class="flaticon-user "></i> Login / Register</span></div>
                                <!-- <div class="option-item "><a class="default-btn " href="/dashboard/add-listing/ "><i class="flaticon-more "></i> Add Listing</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-title-area page-title-bg2">
            <div class="container">
                <div class="page-title-content">
                    <h2>Privacy Policies</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Privacy Policies</li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="about-area ptb-100 bg-f9f9f9">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="d-block section-heading-sub text-capitalize">Privacy Policies</h3>
                    <p>In our endeavor and commitment of protecting your personal information, we have designed this comprehensive privacy policy. This is to keep your interests and information safe on our website.This privacy policy is subject to undergo
                        change and review without any prior notice or approval. So to keep yourself updated on the changes introduced, please keep visiting and reviewing the terms and conditions of this privacy policy.</p>

                    <h3 class="d-block section-heading-sub text-capitalize">Terms &amp; Conditions</h3>
                    <p>By using our website, you agree to abide by the rules laid out by us and consent to collection and use of all such information that you may furnish to, or through, our website. In some cases, while you visit our website, you may not
                        need to provide any personal information. But in certain instances, we must have your personal information in order for us to grant you access to some of the links or sites. Such links/ pages may ask for your name, e-mail address,
                        phone number etc. The information furnished by you is used to provide relevant products and services and to acknowledge receipt of your communication or to send out information and updates to you. You have option of requesting
                        removal from our mailing list. We do not give away your personal information to any third party.</p>
                    <br>
                    <p>To ensure security while transferring sensitive information, all the ongoing transmissions between client and server are encrypted using advanced and standard protocols. We also practice restricted access by employees and hold them
                        to high levels of confidentiality. Use of cookies We may use cookies for security, session continuity, and customization purposes. In case of a user opting to reject a cookie, he/ she may not be able to gain access to some of the
                        limited services or use some features of the site. In case of any queries or suggestions regarding privacy statement or your dealings with this web site, please contact.</p>

                </div>
            </div>
        </section>


        <footer class="footer-area undefined ">
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-4 col-sm-6 col-md-6 ">
                        <div class="single-footer-widget ">
                            <div class="single-footer-widget ">
                                <a href="#"><img src="img/black-logo.png" class="img-fluid"></a><br>
                                <p class="mt-2"><small> For A Better Learning Experience And Outcome, Every Course Has A Combination Of Graphics, Videos, Animation, Reading Material &amp; Assesments</small></p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 ">
                        <div class="single-footer-widget ">
                            <h3>About</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="link-list ">
                                        <li><a href="/testimonial/ "><i class="flaticon-left-chevron "></i> Home</a></li>
                                        <li><a href="/gallery/ "><i class="flaticon-left-chevron "></i>LTM</a></li>
                                        <li><a href="/events/ "><i class="flaticon-left-chevron "></i> IBC</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="link-list ">
                                        <li><a href="/testimonial/ "><i class="flaticon-left-chevron "></i>PSC</a></li>
                                        <li><a href="/contact/ "><i class="flaticon-left-chevron "></i>7 Star</a></li>
                                        <li><a href="/blog-1/ "><i class="flaticon-left-chevron "></i> Bounce Back</a></li>
                                        <li><a href="/faq/ "><i class="flaticon-left-chevron "></i>Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 ">
                        <div class="single-footer-widget listings-details-desc m-0">
                            <h3>Contact Us</h3>
                            <ul class="amenities-list flex-column">
                                <li style="max-width: 100%;"><span><i class="fas fa-envelope"></i> knowledgecenter.bb@badabusiness.com</span></li>
                                <li style="max-width: 100%;"><span><i class="fa fa-map-marker icon"></i> Plot No- 15, Okhla Phase III, New Delhi - 110020</span></li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="copyright-area ">
                        <p><span><a class="mb-3" href="privacy.php">Terms and Condition | Privacy</a></span></p>
                        <p> Disclaimer & Privacy Policy : Information Purpose Website | Content Provided By Respective Owners | Authorized Channel Partner <br>2022 © Copyright - All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>

    </div>
    <div class="footer-image text-center "><img src="img/bb-footer-image.png " alt="image "></div>
    </footer>
    </div>

    <script src="../js/jquery.min.js "></script>
    <script src="../js/bootstrap.bundle.min.js "></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script>
        $(document).ready(function() {
            $("#ham-icon ").bind('click', function() {
                $('#mobnav').toggle('d-block');
            });
            var header = $(".start-style ");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 10) {
                    $("#mobnav ").addClass("isticky ");
                    $("#mobnav1 ").addClass("isticky ");
                } else {
                    $("#mobnav ").removeClass("isticky ");
                    $("#mobnav1 ").removeClass("isticky ");
                }
            });


        });

        function onClick() {
            $("#submenu ").bind('click', function() {

                $('#d-menu').toggle('d-block');
            });

        }
    </script>
    <script>
        $("#_idmyform1").on("submit", function(e) {
            var dataString = $(this).serialize();

            $('#myBtn1').prop('disabled', true);
            $("#myBtn1").prop('value', 'Please wait...');

            // alert(dataString); return false;

            $.ajax({
                type: "POST",
                url: "includes/api.php",
                //headers: {  'Access-Control-Allow-Origin': '*' },
                data: dataString,
                success: function() {

                    window.location.href = "thanks.php";
                }
            });

            e.preventDefault();
        });
    </script>


    <script>
        document.getElementById("myBtn1").addEventListener("click", function() {
            var mobile = $("input[name=mobile]").map(function() {
                return $(this).val();
            }).get();
            var lastname = $("input[name=lastname]").map(function() {
                return $(this).val();
            }).get();
            var email = $("input[name=email]").map(function() {
                return $(this).val();
            }).get();

            arr = mobile.filter(v => v != '');
            arr1 = lastname.filter(v => v != '');
            arr2 = email.filter(v => v != '');

            var test = arr.toString();
            var test1 = arr1.toString();
            var test2 = arr2.toString();

            $.post('checkmobile.php', {
                mobile: test,
                lastname: test1,
                email: test2
            }, function(data) {

            });

        });
    </script>


</body>

</html>