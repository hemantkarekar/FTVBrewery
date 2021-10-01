<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/stylesheet.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style type="text/css">
        /* END: Style the navbar */

        /*

@media (min-width:320px)  { /* smartphones, portrait iPhone, portrait 480x320 phones (Android)  }
@media (min-width:480px)  { /* smartphones, Android phones, landscape iPhone  }
@media (min-width:600px)  { /* portrait tablets, portrait iPad, e-readers (Nook/Kindle), landscape 800x480 phones (Android)  }
@media (min-width:801px)  { /* tablet, landscape iPad, lo-res laptops ands desktops  }
@media (min-width:1025px) { /* big landscape tablets, laptops, and desktops  }
@media (min-width:1281px) { /* hi-res laptops and desktops  }

*/



        /*For Mobile Phones*/
        @media (max-width:480px) {

            body {
                background-color: black;
            }

            @import url(stylesheet.css);

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .container {
                max-width: 1920px;
                width: 100%;
            }

            /*----------NAVBAR----------*/
            /* START: Style the navbar */
            /*  NavBar  */

            #navbar {
                position: absolute;
                top: 0;
                z-index: 10;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.45);
            }

            .wholeNavbar {
                width: 100%;
                z-index: 9;
            }

            ul.addressMenu li {
                padding: 0 20px;
            }

            ul.socialIcon li {
                margin: 15px 5px;
            }

            .logo {
                display: inline-block;
                margin: 25px;
                width: 15%;
            }

            .rightNavbar {
                display: none;
            }

            .leftNavbar img {
                max-width: 206px;
                width: 100%;
            }

            .centerNavbar a {
                /* width: 10%; */
                display: inline-block;
                position: absolute;
                top: 25%;
                /* right: 7%; */
                box-shadow: 0 0 0 0 #000000;
                border-radius: 30px;
                padding: 10px;
                margin: 0;
                transition: 0.5s;
                transform: scale(0.95);
            }

            .centerNavbar a:hover {
                transform: scale(1);
                box-shadow: 0 0 12px 6px white;
            }

            .centerNavbar a img {
                max-width: 459px;
                width: 100%;
            }

            .rightNavbar {
                position: absolute;
                top: 0;
                bottom: 0;
                left: auto;
                right: 0;
                z-index: 12;
                background-color: #000000;
            }

            .rightNavbar {
                width: 75%;
                height: 80vh;
                background-repeat: no-repeat;
                background-position: left center;
                background-size: cover;
            }

            .rightNavbar .mainNavbar {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 100%;
                list-style-type: none;
                line-height: 3;
            }

            .rightNavbar .mainNavbar {
                /*margin-top: -139px;*/
                margin-top: 17px;

            }

            .rightNavbar .mainNavbar li {
                padding: 10px 0;
            }

            .rightNavbar .mainNavbar li a {
                color: #ffffff;
                text-decoration: none;
                font-family: 'opificioregular';
                font-size: 22px;
                line-height: 24px;
                transition: 1s;
                position: relative;
            }

            .rightNavbar .mainNavbar li a::after {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                right: 0;
                width: 0%;
                height: 3px;
                background-color: white;
                transition: 1s;
            }

            .rightNavbar .mainNavbar li a:hover {
                color: #ffef01;
            }

            .rightNavbar .mainNavbar li a:hover::after {
                width: 100%;
            }

            .sticky .rightNavbar {
                top: 60px;
            }


            /* Collaped Navbar */
            #nav-icon {
                width: 40px;
                height: 0;
                z-index: 13;
                position: absolute;
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transition: .5s ease-in-out;
                -moz-transition: .5s ease-in-out;
                -o-transition: .5s ease-in-out;
                transition: .5s ease-in-out;
                cursor: pointer;
                display: block;
                right: 35px;
                margin-top: 22px;
                background-image: url(img/hambugerBackground.png);
                background-repeat: no-repeat;
                background-size: 100%;
            }

            #nav-icon .icon-wrapper {
                margin: 15px 0px 0;
                position: relative;
            }

            #nav-icon span {
                display: block;
                position: absolute;
                height: 3px;
                border-radius: 2px;
                width: 80%;
                background: #ffffff;
                opacity: 1;
                right: 0;
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transition: .25s ease-in-out;
                -moz-transition: .25s ease-in-out;
                -o-transition: .25s ease-in-out;
                transition: .25s ease-in-out;
            }

            #nav-icon span:nth-child(1) {
                top: 0px;
            }

            #nav-icon span:nth-child(2),
            #nav-icon span:nth-child(3) {
                top: 10px;
            }

            #nav-icon span:nth-child(4) {
                top: 20px;
            }

            #nav-icon.open span:nth-child(1) {
                top: 18px;
                width: 0%;
                left: 50%;
            }

            #nav-icon.open span:nth-child(2) {
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            #nav-icon.open span:nth-child(3) {
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            #nav-icon.open span:nth-child(4) {
                top: 18px;
                width: 0%;
                left: 50%;
            }

            /**** OTHERS *****/

            .homeintro2 video {
                padding: 0px;
                width: 100%;
                margin-left: 0px;
                margin-top: -3065px;
            }

            .homeintro2 h1 {
                top: -235px;
                color: white;
                font-size: 50px;
                font-weight: 600;
                font-family: Tw Cen MT Condensed;
                position: relative;
                z-index: 1;
                margin-left: 15%;
            }


        }

        /*For Tablets*/
        @media (max-width:960px) {}

        /*For Laptops/Desktop*/
        @media (min-width:1025px) {

            body {
                background-color: black;
            }

            @import url(stylesheet.css);

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .container {
                max-width: 1920px;
                width: 100%;
            }

            /*----------NAVBAR----------*/
            /* START: Style the navbar */
            /*  NavBar  */

            #navbar {
                position: fixed;
                top: 0;
                z-index: 10;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.45);
            }

            .wholeNavbar {
                width: 100%;
                z-index: 9;
            }

            ul.addressMenu li {
                padding: 0 20px;
            }

            ul.socialIcon li {
                margin: 15px 5px;
            }

            .logo {
                display: inline-block;
                margin: 5px 0 5px 35px;
                width: 4%;
            }

            .rightNavbar {
                display: none;
            }

            .leftNavbar img {
                max-width: 206px;
                width: 100%;
            }

            .centerNavbar {}

            .centerNavbar a {
                width: 10%;
                display: inline-block;
                position: absolute;
                top: 25%;
                right: 7%;
                box-shadow: 0 0 0 0 #000000;
                border-radius: 30px;
                padding: 10px;
                margin: 0;
                line-height: 0;
                transition: 0.5s;
                transform: scale(0.95);
            }

            .centerNavbar a:hover {
                transform: scale(1);
                box-shadow: 0 0 12px 6px white;
            }

            .centerNavbar a img {
                max-width: 459px;
                width: 100%;
            }

            .rightNavbar {
                position: absolute;
                top: 0;
                bottom: 0;
                left: auto;
                right: 0;
                z-index: 12;
                background-color: #000000;
            }

            .rightNavbar {
                width: 25%;
                height: 100vh;
                background-repeat: no-repeat;
                background-position: left center;
                background-size: cover;
            }

            .rightNavbar .mainNavbar {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 100%;
                list-style-type: none;
                line-height: 3;
            }

            .rightNavbar .mainNavbar {
                margin: 0 auto;
            }

            .rightNavbar .mainNavbar li {
                padding: 10px 0;
            }

            .rightNavbar .mainNavbar li a {
                color: #ffffff;
                text-decoration: none;
                font-family: 'opificioregular';
                font-size: 22px;
                line-height: 24px;
                transition: 1s;
                position: relative;
            }

            .rightNavbar .mainNavbar li a::after {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                right: 0;
                width: 0%;
                height: 3px;
                background-color: white;
                transition: 1s;
            }

            .rightNavbar .mainNavbar li a:hover {
                color: #ffef01;
            }

            .rightNavbar .mainNavbar li a:hover::after {
                width: 100%;
            }

            .sticky .rightNavbar {
                top: 60px;
            }


            /* Collaped Navbar */
            #nav-icon {
                width: 40px;
                height: 75px;
                z-index: 13;
                position: absolute;
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transition: .5s ease-in-out;
                -moz-transition: .5s ease-in-out;
                -o-transition: .5s ease-in-out;
                transition: .5s ease-in-out;
                cursor: pointer;
                display: block;
                right: 35px;
                margin-top: 22px;
                background-image: url(img/hambugerBackground.png);
                background-repeat: no-repeat;
                background-size: 100%;
            }

            #nav-icon .icon-wrapper {
                margin: 20px 10px 0;
                position: relative;
            }

            #nav-icon span {
                display: block;
                position: absolute;
                height: 1.5px;
                border-radius: 2px;
                width: 90%;
                background: #000000;
                opacity: 1;
                right: 0;
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transition: .25s ease-in-out;
                -moz-transition: .25s ease-in-out;
                -o-transition: .25s ease-in-out;
                transition: .25s ease-in-out;
            }

            #nav-icon span:nth-child(1) {
                top: 0px;
            }

            #nav-icon span:nth-child(2),
            #nav-icon span:nth-child(3) {
                top: 10px;
            }

            #nav-icon span:nth-child(4) {
                top: 20px;
            }

            #nav-icon.open span:nth-child(1) {
                top: 18px;
                width: 0%;
                left: 50%;
            }

            #nav-icon.open span:nth-child(2) {
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            #nav-icon.open span:nth-child(3) {
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            #nav-icon.open span:nth-child(4) {
                top: 18px;
                width: 0%;
                left: 50%;
            }

        }

        /*For Hi-Res Laptops*/
        @media (max-width:1280px) {}
    </style>
</head>

<body>
    <nav id="navbar">
        <div class="wholeNavbar clearfix">
            <div id="nav-icon" class="">
                <div class="icon-wrapper">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="leftNavbar">
                <a class="logo" href="index.php"><img src="img/brewerylogo.png" alt="..."></a>
            </div>
            <div class="centerNavbar">
                <a href="franchise.php"><img src="img/img1.png" alt="..."></a>
            </div>
            <div class="rightNavbar">
                <ul class="mainNavbar">
                    <li>
                        <a class="cool-link" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="cool-link" href="micheladam.php">Michel Adam</a>
                    </li>
                    <li>
                        <a class="cool-link" href="kashiffkhan.php">Kashiff Khan</a>
                    </li>
                    <li>
                        <a class="cool-link" href="fashionTV.php">FashionTV</a>
                    </li>
                    <li>
                        <a class="cool-link" href="channel.php">Channels</a>
                    </li>
                    <li>
                        <a class="cool-link" href="ourfeatures.php">Our features</a>
                    </li>
                    <li>
                        <a class="cool-link" href="franchise.php">Franchise</a>
                    </li>
                    <li>
                        <a class="cool-link" href="whyus.php">Why Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery 3.5.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            //NavBar
            $('#nav-icon').click(function() {
                $(this).toggleClass('open');
                $(".rightNavbar").slideToggle("slow");
            });

        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            lazyLoad: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1500,
            items: 1,
            animateOut: 'fadeOut'
        })



        $('#states').select2({
            data: state_arr
        });
        $('#city').select2();
        $('#vertical').select2({
            data: vertical_arr
        });
    </script>
    <script>
        //Animation JS Init
        AOS.init();
    </script>