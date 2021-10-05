<!DOCTYPE html>
<html>

<head>
    <?php include "includes/_head.php"; ?>
    <title>Home | FTV Brewery</title>
</head>
<style type="text/css">
    #more {
        display: none;
        margin-top: -58px;
    }
</style>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="index">
        <section class="section our-brewery">
            <div class="content full-cover">
                <h1>Brewery</h1>
            </div>
        </section>
        <section class="section introduction">
            <div class="intro">
                <div class="text-content">
                    <div class="image">
                        <img src="assets/media/images/homeintro2img1.png" alt="">
                    </div>
                    <div class="content">
                        <h1>INTRODUCTION</h1>
                        <div class="brief">
                            FTV Brewery is the premium bar by the world’s largest fashion media, FashionTV. With the passion to infuse luxury into hospitality, FashionTV established FTV Brewery across the globe.
                            FTV Brewery is a fashionable leisure place to unwind and sip branded drinks while enjoying the luxurious ambience. It is an elite bar, rich in glamour and a de-stressing environment. Studded with luxury, it crafts a
                            lavish experience for the people of India.
                        </div>
                    </div>
                </div>
                <div class="video-content">
                    <video class="video-fluid mob-video" id="vControls" autoplay loop muted>
                        <source src="assets/media/videos/Home Page/Brewery-Intro3.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
            <div class="stamp">
                <img src="assets/media/images/circlelogo.png" alt="">
            </div>
        </section>
        <section class="section potential">
            <div class="potential-content">
                <div class="video-content">
                    <video class="video-fluid mob-video" id="vControls" autoplay loop muted>
                        <source src="assets/media/videos/Home Page/Potential.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="text-content">
                    <div class="content">
                        <div class="wrap-right">
                            <h1>POTENTIAL IN INDIA</h1>
                        </div>
                        <div class="brief">
                            Indians are shifting to an ultra-modern lifestyle and this lifestyle has accelerated the growth of premium breweries in recent times.
                            There is a huge scope for profits for the brewery in a booming market like India as there continues to be a dire need of premium, luxurious breweries for this niche section of the society.
                        </div>
                    </div>
                </div>
            </div>
            <div class="stamp">
                <img src="assets/media/images/beerlogo.png" alt="">
            </div>
        </section>
        <section class="section mission">
            <div class="abstract">
                <div class="glass-splash"><img src="assets/media/images/glass-splash.png" alt=""></div>
                <div class="philo-text"><img src="assets/media/images/philosophy.png" alt=""></div>
                <div class="f-logo"><img src="assets/media/images/ftvsmalllogo.png" alt=""></div>
            </div>
            <div class="mission-content-wrap">
                <div class="mission-content">
                    <div class="image-content">
                        <img src="assets/media/images/home-mission41.png" alt="">
                    </div>
                    <div class="text-content">
                        <div class="mission-carousel">
                            <style>
                                .swiper {
                                    width: 400px;
                                    height: 100%;
                                }

                                .swiper-slide {
                                    text-align: center;
                                    font-size: 18px;
                                    background: #fff;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    width: 200px;
                                    height: 200px;
                                }

                                .swiper-slide img {
                                    display: block;
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }
                            </style>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">Slide 1</div>
                                    <div class="swiper-slide">Slide 2</div>
                                    <div class="swiper-slide">Slide 3</div>
                                    <div class="swiper-slide">Slide 4</div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                    <div class="swiper-slide">Slide 9</div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    spaceBetween: 30,
                                    centeredSlides: true,
                                    autoplay: {
                                        delay: 2500,
                                        disableOnInteraction: false,
                                    },
                                    pagination: {
                                        el: ".swiper-pagination",
                                        clickable: true,
                                    },
                                    navigation: {
                                        nextEl: ".swiper-button-next",
                                        prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section beverages">
            <div class="f-logo">
                <img src="assets/media/images/ftvlargelogo.png" alt="">
            </div>
            <div class="image-video-abstracts">
                <div class="sect img1">
                    <img src="assets/media/images/beverageimg1.png" alt="">
                </div>
                <div class="sect video">
                    <video autoplay loop muted>
                        <source src="assets/media/videos/Home Page/Beverages.mp4">
                    </video>
                </div>
                <div class="sect img2">
                    <img src="assets/media/images/beverageimg2.png" alt="">
                </div>
            </div>
            <div class="down-video">
                <!-- <video autoplay loop muted>
                    <source src="assets/media/videos/Home Page/Ambeince-Brewery.mp4">
                </video> -->
                <img src="assets/media/images/introb1.png" alt="">
            </div>
            <div class="f-logo down">
                <img src="assets/media/images/ftvlargelogo.png" alt="">
            </div>
            <div class="section-title">
                <h1>Beverages</h1>
            </div>
            <div class="beer-glass">
                <img src="./assets/media/images/bevglass1.png" alt="">
            </div>
            <div class="elegant-heading">
                <h1>Elegant Relaxing Instagram Worthy Experience</h1>
            </div>
            <div class="stamp">
                <img src="assets/media/images/circlelogo.png" alt="">
            </div>
        </section>
        <section class="section gallery">
            <div class="f-brand-logo">
                <img src="assets/media/images/ftvsmalllogo.png" alt="">
            </div>
            <div class="section-title">
                <div class="title-content">
                    <div class="content">
                        <h1>Gallery</h1>
                        <img src="assets/media/images/brewery.png" alt="">
                    </div>
                </div>
            </div>
            <div class="section-gallery-wrap">
                <div class="main-gallery">
                    <div class="single">
                        <video autoplay muted loop>
                            <source src="/assets/media/videos/Brewery-Gallery-1.mp4">
                        </video>
                    </div>
                    <div class="single">
                        <video autoplay muted loop>
                            <source src="/assets/media/videos/Brewery-Gallery-2.mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "includes/_footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script type="text/javascript">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>