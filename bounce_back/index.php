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
            width: 90px;
            border-bottom-left-radius: 2rem !important;
            border-top-left-radius: 2rem !important;
            border: 1px #b2eaea solid !important;
        }
        
        .custom-select {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0;
        }
        
        .boder_lftradius {
            width: 90px;
            border-bottom-left-radius: 2rem !important;
            border-top-left-radius: 2rem !important;
            border: 1px #b2eaea solid !important;
        }
        
        .isticky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
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
                <div class=" container">
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
                                <li class="nav-item "><a href="# " class="dropdown-toggle nav-link ">Contact Us
                                                </a></li>
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
                                <div class="option-item ">
                                    <div class="submit-btn"><button type="submit" data-bs-toggle="modal" data-bs-target="#myModal">Get Tickets</button></div>
                                </div>
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
                                <div class="option-item "><a class="default-btn " href="/dashboard/add-listing/ "><i class="flaticon-more "></i> Add Listing</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal loginRegisterModal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered " style="z-index:2;">
                <div class="modal-content ">
                    <div class="react-tabs " data-rttabs="true "><button type="button " class="close " data-bs-dismiss="modal"><i class="fa fa-">&#10006;</i></button>
                        <ul class="nav nav-tabs " id="myTab ">
                            <ul class="react-tabs__tab-list " role="tablist ">
                                <li class="nav-item react-tabs__tab--selected " role="tab " id="tab:Rcb6:0 " aria-selected="true " aria-disabled="false " aria-controls="panel:Rcb6:0 " tabindex="0 " data-rttab="true "><a class="nav-link " id="login-tab ">Enquiry Now</a></li>
                            </ul>
                        </ul>
                        <div class="tab-content " id="myTabContent ">
                            <div class="react-tabs__tab-panel react-tabs__tab-panel--selected " role="tabpanel " id="panel:Rcb6:0 " aria-labelledby="tab:Rcb6:0 ">
                                <div class="tab-pane fade show active " id="login ">
                                    <div class="miran-login ">

                                        <form class="formsales" id="_idmyform1" name=" Badabusiness Leads" action="" accept-charset="utf-8" enctype="multipart/form-data">
                                            <input type="hidden" name="__vtrftk" value="sid:2777ac0be5be5fd6d446d23f6a6d4d22c0a93e52,1665487057">
                                            <input type="hidden" name="publicid" value="76a79ea12be03378c8ba3c7a92b4389f">
                                            <!--   <input name="cf_915"  value="https://www.badabusiness.com/bounceback/" type="hidden"> -->
                                            <input type="hidden" name="urlencodeenable" value="1">
                                            <input type="hidden" name="name" value=" Bada Business bounceback  ">
                                            <input name="cf_877" data-label="" value="Bada Business bounceback" type="hidden">

                                            <input type="hidden" name="cf_977" value="-">
                                            <input type="hidden" name="cf_963" data-label="" value="Windows">
                                            <input type="hidden" name="cf_971" data-label="" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36">
                                            <input type="hidden" name="cf_976" data-label="" value="October 16 2022, 3:04pm: Country=IndiaCountry Code=INState=MaharashtraTime ZOne=Asia/KolkataCity=MumbaiZIp Code=400071Visitor IP=103.210.198.13Latitude=19.0748Longitude=72.8856">
                                            <input name="cf_973" data-label="" value="103.44.119.173" type="hidden">
                                            <input name="leadsource" data-label="" value="website" type="hidden">
                                            <input name="cf_905" data-label="" value="Website" type="hidden">

                                            <!--User Details-->
                                            <input name="cf_897" data-label="" value="19.0748" type="hidden">
                                            <input name="cf_899" data-label="" value="72.8856" type="hidden">
                                            <input name="cf_873" data-label="" value="Maharashtra" type="hidden">
                                            <!-- can assign state-->
                                            <input name="cf_875" data-label="" value="Mumbai" type="hidden">
                                            <input name="cf_893" data-label="" value="India" type="hidden">
                                            <input name="cf_889" data-label="" value="400071" type="hidden">
                                            <input name="cf_891" data-label="" value="Asia/Kolkata" type="hidden">
                                            <input name="cf_895" data-label="" value="103.210.198.13" type="hidden">
                                            <!-- End User Details -->
                                            <!-- -**********************-->
                                            <input name="cf_921" data-label="" value="" type="hidden">
                                            <input name="cf_1293" data-label="" value="" type="hidden">
                                            <input name="cf_1277" data-label="" value="" type="hidden">
                                            <input type="hidden" name="cf_952" data-label="" value="">
                                            <input type="hidden" name="cf_974" data-label="" value="">
                                            <input type="hidden" name="cf_970" data-label="" value="">
                                            <input type="hidden" name="cf_978" data-label="" value="">
                                            <input type="hidden" name="cf_962" data-label="" value="">
                                            <input type="hidden" name="cf_982" data-label="" value="">
                                            <input type="hidden" name="cf_966" data-label="" value="">
                                            <input type="hidden" name="cf_967" data-label="" value="">
                                            <!-- Ad source-->
                                            <!-- -**********************-->
                                            <input type="hidden" name="cf_997" data-label="" value="bounceback">
                                            <!-- Product Name-->
                                            <input type="hidden" name="cf_903" data-label="" value="https://www.badabusiness-trainings.com/bounceback">
                                            <!--url-->
                                            <input type="hidden" name="cf_905" data-label="" value="">
                                            <!-- Backend source-->
                                            <input type="hidden" name="cf_986" data-label="" value="">
                                            <input name="enu" id="enu" data-label="" value="aHR0cHM6Ly93d3cuYmFkYWJ1c2luZXNzLXRyYWluaW5ncy5jb20vYmJteWxvZ2luL21vZHVsZXMvV2ViZm9ybXMvY2FwdHVyZS5waHA=" type="hidden">
                                            <input name="cf_984" data-label="" value="46" type="hidden">
                                            <input name="cf_1038" data-label="" value="" type="hidden">

                                            <div class="form-group "><input type="text " placeholder="Name" class="form-control " name="lastname"></div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <select name="cf_888" data-label="label:Country+Code" class="form-control" id="cc1">
                                                        <option value="India+91">India +91</option>
                                                        <option value=" Afghanistan +93"> Afghanistan +93</option>
                                                        <option value=" Albania +355">Albania +355</option>
                                                        <option value="Algeria +213">Algeria +213</option>
                                                        <option value="Andorra +376">Andorra +376</option>
                                                        <option value="Angola +244">Angola +244</option>
                                                        <option value="Argentina +54">Argentina +54</option>
                                                        <option value="Armenia +374">Armenia +374</option>
                                                        <option value="Australia +61">Australia +61</option>
                                                        <option value="Austria +43">Austria +43</option>
                                                        <option value="Azerbaigan +994">Azerbaigan +994</option>
                                                        <option value="Bahrain +973">Bahrain +973</option>
                                                        <option value="Bangladesh +880">Bangladesh +880</option>
                                                        <option value="Belarus +375">Belarus +375</option>
                                                        <option value="Belgium +32">Belgium +32</option>
                                                        <option value="Bolivia +591">Bolivia +591</option>
                                                        <option value="Bosnia +387">Bosnia +387</option>
                                                        <option value="Brazil +55">Brazil +55</option>
                                                        <option value="Bulgaria +359">Bulgaria +359</option>
                                                        <option value="Cameroon +237">Cameroon +237</option>
                                                        <option value="Canada +1">Canada +1</option>
                                                        <option value="Chad +235">Chad +235</option>
                                                        <option value="Chile +56">Chile +56</option>
                                                        <option value="China[People's Republic] +86">China[People's Republic] +86</option>
                                                        <option value="Colombia +57">Colombia +57</option>
                                                        <option value="Congo +242">Congo +242</option>
                                                        <option value="Costa Rica +506">Costa Rica +506</option>
                                                        <option value="Croatia +385">Croatia +385</option>
                                                        <option value="Cuba +53">Cuba +53</option>
                                                        <option value="Cyprus +357">Cyprus +357</option>
                                                        <option value="Czech Republic +420">Czech Republic +420</option>
                                                        <option value="Denmark +45">Denmark +45</option>
                                                        <option value="Ecuador +593">Ecuador +593</option>
                                                        <option value="Egypt +20">Egypt +20</option>
                                                        <option value="France +33">France +33</option>
                                                        <option value="Georgia +995">Georgia +995</option>
                                                        <option value="Germany +49">Germany +49</option>
                                                        <option value="Hong Kong +852">Hong Kong +852</option>
                                                        <option value="Iceland +354">Iceland +354</option>
                                                        <option value="Indonesia +62">Indonesia +62</option>
                                                        <option value="Iran +98">Iran +98</option>
                                                        <option value="Iraq +964">Iraq +964</option>
                                                        <option value="Ireland +353">Ireland +353</option>
                                                        <option value="Italy +36">Italy +36</option>
                                                        <option value="Japan +81">Japan +81</option>
                                                        <option value="Kenya +254">Kenya +254</option>
                                                        <option value="Korea +85">Korea +85</option>
                                                        <option value="Liberia +231">Liberia +231</option>
                                                        <option value="Libya +218">Libya +218</option>
                                                        <option value="Liechtenstein +41">Liechtenstein +41</option>
                                                        <option value="Nepal +977">Nepal +977</option>
                                                        <option value="New Zealand +64">New Zealand +64</option>
                                                        <option value="Nigeria +234">Nigeria +234</option>
                                                        <option value="North Korea +850">North Korea +850</option>
                                                        <option value="Pakistan +92">Pakistan +92</option>
                                                        <option value="Romania +40">Romania +40</option>
                                                        <option value="Russia +70">Russia +70</option>
                                                        <option value="Saudi Arabia +966">Saudi Arabia +966</option>
                                                        <option value="Senegal +221">Senegal +221</option>
                                                        <option value="Serbia +381">Serbia +381</option>
                                                        <option value="Singapore+65">Singapore +65</option>
                                                        <option value="Somalia +252">Somalia +252</option>
                                                        <option value="South Africa +27">South Africa +27</option>
                                                        <option value="Sri Lanka +94">Sri Lanka +94</option>
                                                        <option value="Sweden +46">Sweden +46</option>
                                                        <option value="Switzerland +41">Switzerland +41</option>
                                                        <option value="Turkey +90">Turkey +90</option>
                                                        <option value="United-Arab-Emirates+971">United Arab Emirates +971</option>
                                                        <option value="United-Kingdom+44">United Kingdom +44</option>
                                                        <option value="USA+1">USA+1</option>
                                                        <option value="Zaire +243">Zaire +243</option>
                                                        <option value="Zambia +260">Zambia +260</option>
                                                        <option value="Zimbabwe +263">Zimbabwe +263</option>
                                                    </select>
                                                </div>
                                                <input type="text" maxlength="16" required="required" name="mobile" id="ib_mobile" class="ib_mobile form-control boder_lft" aria-label="" aria-describedby="basic-addon1" require="">
                                            </div>
                                            <div class="form-group "><input type="password " placeholder="Email" class="form-control " name="email"></div>
                                            <div class="form-group round_btn mt-4">
                                                <input id="myBtn1" class="btn text-light p-0" type="submit" value="Enquiry Now">
                                            </div>
                                            <!-- <button type="submit " id="myBtn1" value="Enquiry Now">Enquiry Now</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="react-tabs__tab-panel " role="tabpanel " id="panel:Rcb6:1 " aria-labelledby="tab:Rcb6:1 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="banner-wrapper-area ">
            <div class="container ">

            </div>
        </section>
        <section class="bg-f9f9f9 about-area pt-70 pb-70  ">
            <div class="container ">
                <section class="when_where pb-70">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-6 bg_blue">
                            <div class="card_BB">
                                <img src="../img/when.png" alt="when">
                                <b>When</b>
                                <p class="text-white p-0 m-0"><b></b> 20th November 2022 (11 AM - 3 PM)</p>
                                <!-- <p class="text-white"> <b>End date</b> 2022-11-21 02:18:00 </p> -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 bg_blue">
                            <div class="card_BB">
                                <img src="../img/where.png" alt="where">
                                <b>Where</b>
                                <p class="text-white p-0 m-0"></p>
                                <p class="text-white">Shanmukhananda Auditorium, Mumbai</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 bg-dark get_none_mob text-center">
                            <a href="#" class="get_ticket_card" data-bs-toggle="modal" data-bs-target="#myModal"> Get <br> Tickets <br> Now </a>
                        </div>
                    </div>
                </section>

                <div class="row  my-profile-box">
                    <div class="col-lg-6 col-md-12 ">
                        <div class="about-content p-5">
                            <h2>ABOUT THE EVENT</h2>

                            <p class="text-justify">Don't let the uncertain times, affect your business! With the Bounce Back Seminar, your business not only can get ahead of numerous challenges but can also experience exponential growth. So, optimize your entrepreneurial journey
                                with power-packed business training by the world’s best business coach-Dr. Vivek Bindra.</p>

                            <div class="submit-btn"><button type="submit" data-bs-toggle="modal" data-bs-target="#myModal"> Book Your Seat Now</button></div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="embed-responsive embed-responsive-16by9 ">
                            <img src="img/about_event.jpg">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="bg-light-blue ">
            <section class="category-area pt-70 pb-70 ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 pb-5">
                            <div class="user-review listings-review">
                                <div class="row m-0">
                                    <div class="col-xs-3 col-sm-3 col-lg-3 col-md-3 p-0 ">
                                        <div class="user p-2">
                                            <div class="d-flex">
                                                <img src="img/royal_dimond.png" alt="image" class="d-none d-md-block" width="200" height="200">
                                                <!-- <div class="title">
                                                    <h4>Jason Smith</h4>
                                                    <span>New York, USA</span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-9 col-sm-9 col-lg-9 col-md-9 p-0">
                                        <div class="comments p-4">
                                            <div class="text-uppercase">
                                                <h5>ROYAL DIAMOND</h5>
                                            </div>
                                            <p>Selfie with Dr. Vivek Bindra, Lunch, Goodie bag, Front Rows, VVIP ENTRY.
                                            </p>

                                            <div class=""><button type="submit" class="round_btn" data-bs-toggle="modal" data-bs-target="#myModal">Book Now</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 pb-5">
                            <div class="user-review listings-review">
                                <div class="row m-0">
                                    <div class="col-xs-3 col-sm-3 col-lg-3 col-md-3 p-0">
                                        <div class="user p-2">
                                            <div class="d-flex">
                                                <img src="img/royal_dimond.png" alt="image" class="d-none d-md-block">
                                                <!-- <div class="title">
                                                    <h4>Jason Smith</h4>
                                                    <span>New York, USA</span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-9 col-sm-9 col-lg-9 col-md-9 p-0">
                                        <div class="comments p-1">
                                            <div class="text-uppercase">
                                                <h5>Diamond (67 Seats Left Only)</h5>
                                            </div>
                                            <p>Goodie Bag, Comfortable Seating (Just behind the Royal Diamond Seating), VIP ENTRY.
                                            </p>
                                            <div class=""><button type="submit" class="round_btn" data-bs-toggle="modal" data-bs-target="#myModal">Book Now</button></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pb-5">
                            <div class="user-review listings-review">
                                <div class="row m-0">
                                    <div class="col-sm-3 col-lg-3 col-md-3 p-0">
                                        <div class="user">
                                            <div class="d-flex">
                                                <img src="img/royal_dimond.png" alt="image" class="d-none d-md-block">
                                                <!-- <div class="title">
                                                    <h4>Jason Smith</h4>
                                                    <span>New York, USA</span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-lg-9 col-md-9 p-0">
                                        <div class="comments p-4">
                                            <div class="text-uppercase">
                                                <h5>Diamond (67 Seats Left Only)</h5>
                                            </div>
                                            <p>Goodie Bag, Special Entry
                                            </p>
                                            <div class=""><button type="submit" class="round_btn" data-bs-toggle="modal" data-bs-target="#myModal">Book Now</button></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-5">
                            <div class="user-review listings-review">
                                <div class="row m-0">
                                    <div class="col-sm-3 col-lg-3 col-md-3 p-0">
                                        <div class="user">
                                            <div class="d-flex">
                                                <img src="img/royal_dimond.png" alt="image" class="d-none d-md-block">
                                                <!-- <div class="title">
                                                    <h4>Jason Smith</h4>
                                                    <span>New York, USA</span>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-lg-9 col-md-9 p-0">
                                        <div class="comments p-4">
                                            <div class="text-uppercase">
                                                <h5>Diamond (67 Seats Left Only)</h5>
                                            </div>
                                            <p>Goodie Bag, Balcony Seating
                                            </p>
                                            <div class=""><button type="submit" class="round_btn" data-bs-toggle="modal" data-bs-target="#myModal">Book Now</button></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="places-area pt-100 pb-0">
            <div class="container">
                <div class="d-flex">
                    <h2 class="title position-relative w-50">BENIFITS OF EVENT</h2>
                    <div class="d-flex justify-content-end w-50"> <button class=" round_btn" data-bs-toggle="modal" data-bs-target="#myModal">Book Tickets</button></div>

                </div>
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="listings-details-desc">
                            <div id="container">
                            <ul class="pricing-list row p-2">
                                    <li class="col-sm-12 col-md-12 p-1  mr-5">Unlock your hidden potential<span><i class="fa fa-check"></i></span></li>
                                    <li class="col-sm-12 col-md-12 p-1  mr-5">Build a customer-first company <span><i class="fa fa-check"></i></span></li>
                                    <li class="col-sm-12 col-md-12 p-1  mr-5">Build a high-performance culture <span><i class="fa fa-check"></i></span></li>
                                    <li class="col-sm-12 col-md-12 p-1  mr-5">Increase efficiency & productivity<span><i class="fa fa-check"></i></span></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="listings-details-desc">
                            <div id="container">
                                <ul class="pricing-list row p-2">
                                   <li class="col-sm-12 col-md-12 p-1  mr-5">Build an Effective Business Model <span><i class="fa fa-check"></i></span></li>
                                    <li class="col-sm-12 col-md-12 p-1  mr-5"> Leverage people, processes & technology to grow Business<span><i class="fa fa-check"></i></span></li>
                                    <li class="col-sm-12 col-md-12 p-1  mr-5"> Automate business for Growth<span><i class="fa fa-check"></i></span></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mb-5">
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

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script> -->
    <script src="js/jquery.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js "></script> -->
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