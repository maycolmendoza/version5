<!doctype html>
<html class="no-js" lang="<?php $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                            $acceptLang = ['en', 'uk', 'es'];
                            $lang = in_array($lang, $acceptLang) ? $lang : 'es'; ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="INAIGEM 2022 - DIGC">
    <!-- keywords -->
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <title>Simposio INAIGEM - Las Montañas Nuestro Futuro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Del 23 al 25 de noviembre de 2022 se celebrará en la ciudad de Arequipa  el Simposio Científico “Las Montañas, Nuestro Futuro 2022”, organizado por el Instituto Nacional de Investigación en Glaciares y Ecosistemas de Montaña (INAIGEM) y Forest Trends Association.">
    <meta property="og:url" content="https://inaigem.gob.pe/simposio/" />
    <meta property="og:image" content="https://res.cloudinary.com/dicmh7cfa/image/upload/v1658728949/Captura_de_pantalla_2022-07-25_010210_rzkjbv.png" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Simposio INAIGEM - Las Montañas Nuestro Futuro 2022" />
    <meta property="og:description" content="Del 23 al 25 de noviembre de 2022 se celebrará en la ciudad de Arequipa  el Simposio Científico “Las Montañas, Nuestro Futuro 2022”, organizado por el Instituto Nacional de Investigación en Glaciares y Ecosistemas de Montaña (INAIGEM) y Forest Trends Association." />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#0067C0">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0067C0">
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <!-- favicon -->
    <link rel="icon" href="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655220438/logos%20monfu%202022/image_1_wzq9wi.png" type="image/x-icon" integrity="sha384-pbBRQFBUC2XbzbDXPjcgkGfsIWzi6CPYSf3pWHonbOAee8HCytZE3D7uChfGCXwb" crossorigin="anonymous">
    <link rel='apple-touch-icon' href='https://res.cloudinary.com/dicmh7cfa/image/upload/v1655220438/logos%20monfu%202022/image_1_wzq9wi.png'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" integrity="sha384-LiiUGBuNnN5YC5Yp2wWaqOxm6FvAXbwpdCyRVtPCDQLVlzxAO17vU2C4QQjZZjM3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- animation -->
    <link rel="stylesheet" href="./utils/css/animate.min.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="./utils/css/bootstrap.min.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="./utils/css/font-awesome.min.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="./utils/css/magnific-popup.min.css" />
    <!-- cube Portfolio -->
    <link rel="stylesheet" href="./utils/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="./utils/css/responsive.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" href="./utils/revolution/css/settings.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="./utils/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./utils/css/owl.theme.default.min.css" />
    <!-- bundle css -->
    <link rel="stylesheet" href="./utils/css/core.css" />
    <!-- style -->
    <link rel="stylesheet" href="./utils/css/style.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="./utils/css/custom.css" />
    <link rel="stylesheet" href="./utils/css/poster.css" />


    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "111372388237568");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v14.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90" class="side-nav" style="background-color:#E0E0E0 ;">
    <div id="loader">
        <div id="preloader" class="preloader-container">
            <div class="animation">
                <div class="player">
                    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_zfvuugqg.json" background="transparent" style="width: 300px; height: 300px;" speed="0.5" autoplay integrity="sha384-Ay02jhIf4oD6AewoFu/30hCOedW1UXCB/ni/oJXNvpubyEkDQvptdcL/jHh3BqRt" crossorigin="anonymous"></lottie-player>
                </div>
                <a id="skip"></a>
            </div>
        </div>
    </div>


    <button class="scrollToTopBtn"><img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657641542/logos%20monfu%202022/punta-de-flecha-hacia-arriba_ygxwn2.png" width="30px" height="30px" alt=""></button>
    <style>
        .scrollToTopBtn {
            background-color: #949495;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 18px;
            line-height: 48px;
            width: 48px;

            /* place it at the bottom right corner */
            position: fixed;
            bottom: 0px;
            right: 20px;
            /* keep it at the top of everything else */
            z-index: 100;
            /* hide with opacity */
            opacity: 0;
            /* also add a translate effect */
            transform: translateY(100px);
            /* and a transition */
            transition: all 0.5s ease;
            transition: background-color .3s;
            -moz-transition: background-color .3s;
            -webkit-transition: background-color .3s;
            -o-transition: background-color .3s;
        }

        .showBtn {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <script>
        var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
        var rootElement = document.documentElement;

        function handleScroll() {
            // Do something on scroll
            var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
            if (rootElement.scrollTop / scrollTotal > 0.1) {
                // Show button
                scrollToTopBtn.classList.add("showBtn");
            } else {
                // Hide button
                scrollToTopBtn.classList.remove("showBtn");
            }
        }

        function scrollToTop() {
            // Scroll to top logic
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
        scrollToTopBtn.addEventListener("click", scrollToTop);
        document.addEventListener("scroll", handleScroll);
    </script>

    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="bg-transparent nav-white-text navbar navbar-default bootsnav navbar-fixed-top nav-white header-light nav_line">
            <div class="container nav-header-container">
                <div class="row">
                    <div class="col-md-2 col-xs-5">
                        <div class="logos">
                            <a href="#home" title="Simposio INAIGEM - Las Montañas Nuestro Futuro" class="logo scroll"><img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655722859/logos%20monfu%202022/2_logo_monta%C3%B1as_azul_2_n1ot5f.png" class="logo-dark" alt="boltex"><img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655722586/logos%20monfu%202022/2_logo_monta%C3%B1as_azul_1_mvrnno.png" alt="boltex" class="logo-light default"></a>
                        </div>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right hidden-sm hidden-xs">
                        <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">

                                <li class="active">
                                    <a href="#inicio" class="scroll">Inicio</a>
                                </li>
                                <li>
                                    <a href="#poster" class="scroll">Poster</a>
                                </li>
                                <li>
                                    <a href="#estadia" class="scroll">Estadia</a>
                                </li>
                                <li>
                                    <a href="#contact" class="scroll">Contacto</a>
                                </li>




                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-5">
                        <a title="Logo" class="logo scroll">


                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

                            <style>
                                .btn-shared {
                                    display: inline-block;
                                    cursor: pointer;
                                    padding: 1rem 1.5rem;
                                    line-height: 1;

                                    color: #000;
                                    font-size: 1rem;
                                    font-weight: bold;
                                    border: 2px solid #000;
                                    border-radius: 2rem;

                                    opacity: 1;
                                    background: rgba(255, 255, 255, 0.1);
                                    backdrop-filter: blur(3px);
                                    -webkit-backdrop-filter: blur(3px);
                                    border-radius: 10px;
                                    border: 1px solid rgba(255, 255, 255, 0.18);
                                }

                                .share {
                                    list-style: none;
                                    margin: 0 auto 2rem;
                                }

                                .share button {
                                    float: left;
                                    display: block;
                                    height: 64px;
                                    width: 64px;
                                    margin: 0.5rem;
                                    padding: 1rem;
                                    border-radius: 50%;
                                    font-size: 0;
                                    color: #000;
                                    cursor: pointer;
                                    background: #fff;
                                    transition: all 150ms ease-in-out;
                                    border: 2px solid #000;
                                }
                            </style>





















                        </a>
                    </div>
                    <div class="col-md-2 col-xs-5 width-auto sm-width-15 xs-width-20 no-padding">
                        <div class="header-social-icon sm-display-none" aria-hidden="true">
                            <a href="#home" title="Logo" class="logo scroll" style="margin-right: 100px;">

                                <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657894579/logo%20inaigem/Capa_2_ev2o15.svg" class="logo-dark" alt="boltex">

                                <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657894642/logo%20inaigem/Capa_2_2_rn0jip.svg" alt="boltex" class="logo-light default" style="margin-top: -10px;">

                            </a>
                            <!--<a href="#." class="facebook-bg-hvr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#." class="twitter-bg-hvr"><i class="fa fa-twitter"></i></a>
                            <a href="#." class="linkedin-bg-hvr"><i class="fa fa-linkedin"></i></a>-->
                        </div>
                    </div>
                    <!--side nav -->

                    <div id="menu_bars" class="right menu_bars">
                        <span class="t1"></span>
                        <span class="t2"></span>
                        <span class="t3"></span>
                    </div>

                    <div class="sidebar_menu">


                        <nav class="pushmenu pushmenu-right">

                            <ul class="circles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <a class="push-logo" href="#."><img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655722586/logos%20monfu%202022/2_logo_monta%C3%B1as_azul_1_mvrnno.png" alt="logo"></a>
                            <div class="medium-icon side-nav-social-icon list-inline">
                                <button id="myBtns" title="Compartir con tus amigos">
                                    <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657712765/logos%20monfu%202022/share_1_ymwtsv.png" alt="" />
                                </button>
                            </div>
                            <ul class="push_nav centered">
                                <li class="clearfix">
                                    <a href="#estadia" class="scroll">Inicio</a>

                                </li>
                                <li class="clearfix">
                                    <a href="#info" class="scroll">Poster</a>

                                </li>
                                <li class="clearfix">
                                    <a href="#gastronomia" class="scroll">Estadía</a>

                                </li>
                                <li class="clearfix">
                                    <a href="#atractivos" class="scroll">Contacto</a>

                                </li>


                            </ul>

                            <p class="text-blanco push-bottom text-small">Diseñado y programado por DIGC INAIGEM - 2022
                            </p>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->
    <!--Single portfolio item one-->
    <section class="single-items center-block parallax no-margin aleatoriomaycol" id="inicio" data-overlay-dark="6" style="height: 900px;">
        <script>
            const possibleVideos = [
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1662138954/Poster-monfu/Group_26_ltukvx.png",
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1659736501/logos%20monfu%202022/arequipa/Group_1_leossk.png",
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661469012/Poster-monfu/Group_23_ubq4eu.png",
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661469012/Poster-monfu/Group_22_i06w2z.png",
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661469010/Poster-monfu/Group_17_mldkro.png",
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661469009/Poster-monfu/Group_21_thlxla.png",
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661469009/Poster-monfu/Group_24_upmudc.png",

                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661469009/Poster-monfu/Group_18_xmttgq.png"


            ];
            const randomVideo =
                possibleVideos[Math.floor(Math.random() * possibleVideos.length)];
            document.getElementById("inicio").style.backgroundImage = "url('" + randomVideo + "')";
        </script>
        <div style=" z-index: 1;
        position: relative;margin-top: -300px;">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-9 col-md-10 col-sm-12 center-col">
                        <div class="text-center area-heading wow fadeInUp">
                            <h3 class="text-white area-title text-capitalize alt-font margin-5px-bottom font-weight-100">
                                <img class="img-evento" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655187006/logos%20monfu%202022/logo-arequipa_rwruyo.png" alt="">
                            </h3>
                            <p class="text-blanco font-weight-300" id="dias">
                            </p>

                            <div class="container-arequipa">
                                <!-- partial:index.partial.html -->
                                <!-- Please typing your favorite word!-->
                                <div id="ui" class="uix">
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                    <div class="text">Poster</div>
                                </div>
                            </div>




                            <br>
                            <p id="section03" class="demo-scroll ">
                                <a href="#poster" class="scroll"><span></span></a>
                            </p>
                            <style>
                                .demo-scroll a {

                                    position: absolute;
                                    bottom: 0px;
                                    left: 50%;
                                    transform: translate(-50%, 0%);
                                    z-index: 2;
                                    display: inline-block;
                                    color: #fff;
                                    text-decoration: none;
                                    transition: opacity 0.3s;
                                }

                                p.demo-scroll a:hover {
                                    opacity: 0.7;
                                }


                                #section03 a span {
                                    position: absolute;
                                    top: 0;
                                    left: 50%;
                                    width: 46px;
                                    height: 46px;
                                    margin-left: -23px;
                                    border: 1px solid #fff;
                                    border-radius: 100%;
                                    box-sizing: border-box;
                                }

                                #section03 a span::after {
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    content: "";
                                    width: 16px;
                                    height: 16px;
                                    border-left: 1px solid #fff;
                                    border-bottom: 1px solid #fff;
                                    margin: -12px 0 0 -8px;
                                    transform: rotate(-45deg);
                                    box-sizing: border-box;
                                }

                                #section03 a span::before {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    z-index: -1;
                                    content: "";
                                    width: 44px;
                                    height: 44px;
                                    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1);
                                    border-radius: 100%;
                                    opacity: 0;
                                    box-sizing: border-box;
                                    animation: sdb03 1.5s infinite;
                                }

                                @keyframes sdb03 {
                                    0% {
                                        opacity: 0;
                                    }

                                    30% {
                                        opacity: 1;
                                    }

                                    60% {
                                        box-shadow: 0 0 0 60px rgba(255, 255, 255, 0.1);
                                        opacity: 0;
                                    }

                                    100% {
                                        opacity: 0;
                                    }
                                }
                            </style>



                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden">
                <a data-fancybox="group-one" data-thumb="images/gallery-thumb1.jpg" href="images/gallery-thumb1.jpg"></a>
                <a data-fancybox="group-one" data-thumb="images/gallery-thumb2.jpg" href="images/gallery-thumb2.jpg"></a>
                <a data-fancybox="group-one" data-thumb="images/gallery-thumb3.jpg" href="images/gallery-thumb3.jpg"></a>
                <a data-fancybox="group-one" data-thumb="images/gallery-thumb4.jpg" href="images/gallery-thumb4.jpg"></a>
                <a data-fancybox="group-one" data-thumb="images/gallery-thumb5.jpg" href="images/gallery-thumb5.jpg"></a>
            </div>
        </div>
    </section>


    <div style="
    background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1658082784/ponentes4_bkpquk_1_pmiddx.svg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100px;
    margin-top: -200px;
    position: absolute;
    z-index: 1;
    
    " class="informacion-div">
    </div>
    <!--Single portfolio item two-->
    <section class="single-items center-block parallax poster" id="poster" style="
    background-color: #E0E0E0;margin-top: -100px;height: auto;">
        <div class="container evento-content" style="margin-top: -100px;">

            <div class="row title-poster">
                <div class="col-sm-10">
                    <div class="text-center col-sm-8">
                        <div class="md-text-left wow fadeInLeft">
                            <h3 class="text-left text-flama area-title text-capitalize alt-font margin-1px-bottom informacion title-posters" id="webshareapi">
                                <strong>Posters <i class="fa-solid fa-share" style="font-size: 18px;display: inline-block;"></i></strong>
                            </h3>
                            <hr class="sep-2" />
                        </div>
                    </div>
                </div>


            </div>
        </div>



        <!--sidebar scrollspy-->
        <?php include_once('./models/poster.php') ?>
        <!--end scrollspy-->
    </section>
    <section class="single-items center-block parallax" id="estadia" style="background-size: cover;clip-path: polygon(30.7% 8.5%, 65.2% 0.8%, 100% 9.3%, 100% 100%, 70% 100%, 30% 100%, 0% 100%, 0% 1.8%);background-color: #E0E0E0;">
        <section class="poster-estadia paragrama" style="margin-right: 5px;margin-bottom: 2px;padding:2px;margin-left: 5px;">
            <div class="container mg-5">
                <div class="row">
                    <div class="col-md-5 col-md-offset-7 col-sm-8 col-sm-offset-4 col-xs-11 col-xs-offset-1">
                        <div class="text-center area-heading wow fadeInRight">
                            <h3 class="text-flama text-center area-title alt-font font-weight-100 mb-0" style="text-align: center !important;color:#fff ;margin-top: 15px;">
                                <a class="gastronimia t-shadow" id="titleestadiarandom">ESTADIA</a>
                                <script>
                                    const randomvideoss = [
                                        "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661366138/logos%20monfu%202022/arequipa/square-5165633_xj5ufz.jpg",
                                        "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661368404/logos%20monfu%202022/arequipa/water-2934650_j1dnvf.jpg",
                                        "https://res.cloudinary.com/dicmh7cfa/image/upload/v1659972412/logos%20monfu%202022/arequipa/13193530_fy0bof.png",
                                        "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661983289/logos%20monfu%202022/arequipa/wp4201485-arequipa-wallpapers_xclf1x.jpg",
                                        "https://res.cloudinary.com/dicmh7cfa/image/upload/v1661983290/logos%20monfu%202022/arequipa/wp4201478-arequipa-wallpapers_nawjiq.jpg",
                                    ];
                                    const randomVideotxt =
                                        randomvideoss[Math.floor(Math.random() * randomvideoss.length)];
                                    document.getElementById("estadia").style.backgroundImage = "url('" + randomVideotxt + "')";
                                </script>

                                <style>
                                    .gastronimia {
                                        width: 100%;
                                        color: #fff;
                                        text-align: center;
                                        text-transform: uppercase;
                                        font-size: clamp(80px, 40px, 80px) !important;
                                        font-weight: bold;
                                        /* background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1661984679/logos%20monfu%202022/arequipa/title/pexels-francesco-ungaro-281260_sfxjdl.jpg');
                                        background-size: cover;
                                        background-position-y: top;

                                        background-clip: text;
                                        -webkit-background-clip: text;

                                        -webkit-text-fill-color: transparent;*/
                                    }

                                    @media (min-width: 320px) and (max-width: 881px) {

                                        .title-poster {
                                            margin-top: -150px !important;
                                            text-align: left !important;
                                        }
                                        .poster-estadia{
                                            margin-right: 5px;margin-bottom: 2px;padding:2px;margin-left: 5px;
                                        }
                                        .title-posters{
                                            text-align: left !important;
                                        }

                                    }

                                    .poster-estadia {
                                        background: rgba(255, 255, 255, 0.25);
                                        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                                        backdrop-filter: blur(4px);
                                        -webkit-backdrop-filter: blur(4px);
                                        border-radius: 10px;
                                        border: 1px solid rgba(255, 255, 255, 0.18);
                                    }

                                    .color-base {
                                        color: #fff;
                                        text-shadow: 10px;
                                    }

                                    .mg-5 {
                                        margin-bottom: 4rem !important;
                                    }

                                    .card-stadia {
                                        background-color: #fff;
                                    }

                                    .cb {
                                        color: #0067C0;
                                    }

                                    .name-txt {
                                        /* background-color: #0067C0;*/
                                        background-color: #fff;
                                        color: #0067C0;
                                    }

                                    .btn-txtr {
                                        background-color: #fff;
                                        border-radius: 10px !important;
                                        color: #0067C0 !important;
                                    }

                                    .btn-txtr:hover {
                                        background-color: #0067C0;
                                        border-radius: 10px !important;
                                        color: #fff !important;
                                    }

                                    .btnblue {
                                        background-color: #0067C0;
                                        border-radius: 10px !important;
                                        color: #fff !important;

                                    }

                                    .btnblue:hover {
                                        background-color: #fff;
                                        border: 2px solid #0067C0 !important;
                                        border-radius: 10px !important;
                                        color: #0067C0 !important;

                                    }

                                    .paragrama {
                                        -webkit-transform: skew(10deg);
                                        -moz-transform: skew(10deg);
                                        -o-transform: skew(10deg);
                                    }


                                    .blanco-hover:hover {
                                        background-color: #0067C0 !important;
                                        color: #fff !important;
                                        padding: 4px;
                                        margin-bottom: 10px;
                                        border-radius: 7px;

                                    }

                                    .blanco-hover {
                                        background-color: #fff !important;
                                        color: #0067C0 !important;
                                        padding: 4px;
                                        margin-bottom: 10px;
                                        border-radius: 7px;

                                    }

                                    #videopl {
                                        overflow-x: hidden;
                                        overflow-y: hidden;
                                        border: hidden;
                                        height: 630px;
                                        margin-top: -180px;

                                    }

                                    .newsletter {
                                        background-color: #fff;
                                        border-radius: 8px !important;
                                    }

                                    .nw-email {
                                        border-radius: 8px !important;
                                    }
                                    .nw-email:focus{
                                        border: 3px solid #0067C0 !important;
                                    }
                                    .nw-email:focus::after{
                                        content: 'Ingresa Email';
                                    }

                                    .t-shadow {
                                        text-shadow: 2px 1px 2px rgba(0, 0, 0, 0.28);

                                    }
                                </style>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-4" style="padding: 4px;margin-top: 0px;">
                <div class="row d-flex align-items-end p-4">

                    <div class="col-md-6 text-center " style="padding: 10px;padding-left: 10px;border-bottom: 5px;">
                        <div class="wow fadeInLeft" data-wow-duration=".5s" style="margin-right: 10px;padding:10px ;">
                            <h2 class="color-base mb-4 shadow-lg txt-stss " style="font-size: clamp(15px, 40px , 20px) !important;">
                                <span class="name-txt">Hola, <?php echo get_current_user(); ?> 👋 </span>:

                            </h2>
                            <p class="color-base t-shadow">Te presentamos los siguientes canales de atencion para que puedas realizar cualquier consulta
                            </p>
                            <div class="row color-base">
                                <div class="col-md-6 about-bullet">
                                    <ul class="bullet-check">
                                        <li class=" blanco-hover"><a href=""> <i class="fa-brands fa-facebook"></i> Facebook</a></li>
                                        <li class=" blanco-hover"><a href=""><i class="fa-brands fa-rocketchat"></i> Chatbot INAIGEM</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 about-bullet">
                                    <ul class="bullet-check">
                                        <li class=" blanco-hover"><a href=""><i class="fa-solid fa-at"></i> Email</a></li>
                                        <li class=" blanco-hover"> <a href="" id="contact"><i class="fa-solid fa-address-book"></i> Contacto</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=" text-center wrap-button mt-50">
                                <a href="#" class="btn mr-4 btn-txtr btn-block "><i class="fa-solid fa-backward"></i> Regresar a Estadia</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center wow fadeInRight">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-8 col-md-6 col-lg-6">
                                    <div class="newsletter wow fadeInRight" data-wow-duration=".5s" style="margin-right: 10px;padding:10px ;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h6 class="cb ">Suscríbe a nuestro evento científico</h6>
                                            </div>
                                            <form id="forms">
                                                <input type="email" class="nw-email" placeholder="🌍 Ingresa tu Email">
                                                <input class="btnblue btn-block" type="submit" value="Suscribirse">
                                            </form>

                                        </div>


                                        <!----->

                                        <!------->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        </div>
    </section>
    <?php include_once("./models/footer.php") ?>
    <div class="container" style="background-color: white;width: 100%;">
        <div class="row text-center">
            <div class="col-xl-8 col-md-12"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656444923/logos%20monfu%202022/lg_black_gpwdnw.png" alt="" style="width: 50px;"></div>
            <div class="col-xl-4 col-md-12">
                <p class="margin-10px-bottom margin-0px-top" style="color: #575756;font-size: 9px;">Diseñado y
                    programado por DIGC INAIGEM - 2022</p>
            </div>

        </div>
    </div>


    <!-- end footer -->
    <!-- javascript libraries -->
    <script src="./utils/js/jquery-3.2.1.js"></script>
    <script src="./utils/js/bootstrap.min.js"></script>
    <script src="./utils/js/jquery.appear.min.js"></script>
    <!-- owl carousel -->
    <script src="./utils/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="./utils/js/jquery.magnific-popup.min.js"></script>
    <!-- fancybox -->
    <script src="./utils/js/jquery.fancybox.min.js"></script>
    <!-- wow -->
    <script src="./utils/js/wow.js"></script>
    <script src="./utils/js/shared.js"></script>
    <script src="./utils/js/reloj.js"></script>
    <!-- parallax -->
    <script src="./utils/js/parallaxie.min.js"></script>
    <!-- equal hieght -->
    <script src="./utils/js/jquery.matchHeight-min.js"></script>
    <!-- text-rotate -->
    <script src="./utils/js/morphext.min.js"></script>
    <!-- text-rotate -->
    <script src="./utils/js/isotope.pkgd.min.js"></script>
    <script src="./utils/js/hddywhdshffurh.js"></script>
    <!-- revolution -->
    <script src="./utils/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="./utils/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- revolution extension -->
    <script src="./utils/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="./utils/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="./utils/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="./utils/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="./utils/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="./utils/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="./utils/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="./utils/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="./utils/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="./utils/js/sha384-1CGEsf3PEKE1xdnNjxCd9iVWyPstVX8xTVMtI+CTXAEoLQG2MjyXJ6QhWC2ecnbu.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657649202/code/contador/count-maycol-mendoza_cqpuhu.js" integrity="sha384-tUcyaUlk5ikBAb9qRKiQjDia/HqPykdPVItwbqmWAfHtwo0/owDz1TS4JLB8fNJV" crossorigin="anonymous">
    </script>

    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657652988/code/acordion/acordion-inaigem_ecr2uq.js" integrity="sha384-F5UrHfe/uv44b/XYD4ScC0g1KB4zVCvsheey3ZtunDxkKnOoh4Lo+PUPpxcB9l62" crossorigin="anonymous">
    </script>

    <!-- setting -->
    <script src="./utils/js/main.js"></script>

    <script src="./utils/js/    hotels.js"></script>

    <!-- partial -->
    <script src='https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js' integrity="sha384-kKY2i/YghyyToHFUl3/rW3jCVqfYKpSzyK4laHouY2/9ehIdHOgyHacS5UomjVrr" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js" integrity="sha384-gKRru23iCvd8Rkag2bU3BhwzzjHsRxT6tzadTIGvNb9cx4zGNkQZt+1DCH3n/0f6" crossorigin="anonymous">
    </script>

</body>

</html>
<script>
    function limpiarFormulario() {
        document.getElementById("forms").reset();
    }
    const scriptURLS =
        "https://script.google.com/macros/s/AKfycbw3no9xvDv6Ene3MPYCQ4sftjTwxRtFXmvWujW4rHURq66meLC43pgKGeZN1kAHJ4M9/exec";
    const forms = document.querySelector("#forms");
    const btnxs = document.querySelector("#submits");

    forms.addEventListener("submit", (e) => {
        e.preventDefault();
        btnxs.disabled = true;
        btnxs.innerHTML = "Loading...";

        console.log(forms);
        fetch(scriptURLS, {
                method: "POST",
                body: new FormData(forms)
            })
            .then((response) => {
                btnxs.disabled = false;
                btnxs.innerHTML = "Enviar";

                alertify.success(
                    '<h6 style="color:white;font-size:clamp(14px,2vw,15px)">Mensaje Enviado</h6>  '
                );
                limpiarFormulario();

            })
            .catch((error) => {
                btnxs.disabled = false;
                btnxs.innerHTML = "Submit";
                alert("Error!", error.message);
            });
    });
</script>
<style>
    /*arequipa*/

    .container-arequipa {
        height: 25vh;

        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        perspective: 500px;
    }

    .uix {
        will-change: transform;
    }

    #ui {
        transform-style: preserve-3d;
    }

    #ui .text {
        position: absolute;
        font-size: clamp(15rem, 8rem, 5rem);
        color: #fff;
        line-height: 15rem;
        font-family: "Anton", sans-serif;
        padding: 20px 0;
        mix-blend-mode: screen;
        transform-style: preserve-3d;
    }

    #ui .text:nth-child(1) {
        -webkit-clip-path: polygon(-30% 0, -20% 0, 20% 100%, 0% 100%);
        clip-path: polygon(-30% 0, -20% 0, 20% 100%, 0% 100%);
        -webkit-animation: wave 2000ms -10000ms ease-in-out infinite alternate;
        animation: wave 2000ms -10000ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(2) {
        -webkit-clip-path: polygon(-25% 0, -15% 0, 25% 100%, 5% 100%);
        clip-path: polygon(-25% 0, -15% 0, 25% 100%, 5% 100%);
        -webkit-animation: wave 2000ms -9800ms ease-in-out infinite alternate;
        animation: wave 2000ms -9800ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(3) {
        -webkit-clip-path: polygon(-20% 0, -10% 0, 30% 100%, 10% 100%);
        clip-path: polygon(-20% 0, -10% 0, 30% 100%, 10% 100%);
        -webkit-animation: wave 2000ms -9600ms ease-in-out infinite alternate;
        animation: wave 2000ms -9600ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(4) {
        -webkit-clip-path: polygon(-15% 0, -5% 0, 35% 100%, 15% 100%);
        clip-path: polygon(-15% 0, -5% 0, 35% 100%, 15% 100%);
        -webkit-animation: wave 2000ms -9400ms ease-in-out infinite alternate;
        animation: wave 2000ms -9400ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(5) {
        -webkit-clip-path: polygon(-10% 0, 0% 0, 40% 100%, 20% 100%);
        clip-path: polygon(-10% 0, 0% 0, 40% 100%, 20% 100%);
        -webkit-animation: wave 2000ms -9200ms ease-in-out infinite alternate;
        animation: wave 2000ms -9200ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(6) {
        -webkit-clip-path: polygon(-5% 0, 5% 0, 45% 100%, 25% 100%);
        clip-path: polygon(-5% 0, 5% 0, 45% 100%, 25% 100%);
        -webkit-animation: wave 2000ms -9000ms ease-in-out infinite alternate;
        animation: wave 2000ms -9000ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(7) {
        -webkit-clip-path: polygon(0% 0, 10% 0, 50% 100%, 30% 100%);
        clip-path: polygon(0% 0, 10% 0, 50% 100%, 30% 100%);
        -webkit-animation: wave 2000ms -8800ms ease-in-out infinite alternate;
        animation: wave 2000ms -8800ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(8) {
        -webkit-clip-path: polygon(5% 0, 15% 0, 55% 100%, 35% 100%);
        clip-path: polygon(5% 0, 15% 0, 55% 100%, 35% 100%);
        -webkit-animation: wave 2000ms -8600ms ease-in-out infinite alternate;
        animation: wave 2000ms -8600ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(9) {
        -webkit-clip-path: polygon(10% 0, 20% 0, 60% 100%, 40% 100%);
        clip-path: polygon(10% 0, 20% 0, 60% 100%, 40% 100%);
        -webkit-animation: wave 2000ms -8400ms ease-in-out infinite alternate;
        animation: wave 2000ms -8400ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(10) {
        -webkit-clip-path: polygon(15% 0, 25% 0, 65% 100%, 45% 100%);
        clip-path: polygon(15% 0, 25% 0, 65% 100%, 45% 100%);
        -webkit-animation: wave 2000ms -8200ms ease-in-out infinite alternate;
        animation: wave 2000ms -8200ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(11) {
        -webkit-clip-path: polygon(20% 0, 30% 0, 70% 100%, 50% 100%);
        clip-path: polygon(20% 0, 30% 0, 70% 100%, 50% 100%);
        -webkit-animation: wave 2000ms -8000ms ease-in-out infinite alternate;
        animation: wave 2000ms -8000ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(12) {
        -webkit-clip-path: polygon(25% 0, 35% 0, 75% 100%, 55% 100%);
        clip-path: polygon(25% 0, 35% 0, 75% 100%, 55% 100%);
        -webkit-animation: wave 2000ms -7800ms ease-in-out infinite alternate;
        animation: wave 2000ms -7800ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(13) {
        -webkit-clip-path: polygon(30% 0, 40% 0, 80% 100%, 60% 100%);
        clip-path: polygon(30% 0, 40% 0, 80% 100%, 60% 100%);
        -webkit-animation: wave 2000ms -7600ms ease-in-out infinite alternate;
        animation: wave 2000ms -7600ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(14) {
        -webkit-clip-path: polygon(35% 0, 45% 0, 85% 100%, 65% 100%);
        clip-path: polygon(35% 0, 45% 0, 85% 100%, 65% 100%);
        -webkit-animation: wave 2000ms -7400ms ease-in-out infinite alternate;
        animation: wave 2000ms -7400ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(15) {
        -webkit-clip-path: polygon(40% 0, 50% 0, 90% 100%, 70% 100%);
        clip-path: polygon(40% 0, 50% 0, 90% 100%, 70% 100%);
        -webkit-animation: wave 2000ms -7200ms ease-in-out infinite alternate;
        animation: wave 2000ms -7200ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(16) {
        -webkit-clip-path: polygon(45% 0, 55% 0, 95% 100%, 75% 100%);
        clip-path: polygon(45% 0, 55% 0, 95% 100%, 75% 100%);
        -webkit-animation: wave 2000ms -7000ms ease-in-out infinite alternate;
        animation: wave 2000ms -7000ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(17) {
        -webkit-clip-path: polygon(50% 0, 60% 0, 100% 100%, 80% 100%);
        clip-path: polygon(50% 0, 60% 0, 100% 100%, 80% 100%);
        -webkit-animation: wave 2000ms -6800ms ease-in-out infinite alternate;
        animation: wave 2000ms -6800ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(18) {
        -webkit-clip-path: polygon(55% 0, 65% 0, 105% 100%, 85% 100%);
        clip-path: polygon(55% 0, 65% 0, 105% 100%, 85% 100%);
        -webkit-animation: wave 2000ms -6600ms ease-in-out infinite alternate;
        animation: wave 2000ms -6600ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(19) {
        -webkit-clip-path: polygon(60% 0, 70% 0, 110% 100%, 90% 100%);
        clip-path: polygon(60% 0, 70% 0, 110% 100%, 90% 100%);
        -webkit-animation: wave 2000ms -6400ms ease-in-out infinite alternate;
        animation: wave 2000ms -6400ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(20) {
        -webkit-clip-path: polygon(65% 0, 75% 0, 115% 100%, 95% 100%);
        clip-path: polygon(65% 0, 75% 0, 115% 100%, 95% 100%);
        -webkit-animation: wave 2000ms -6200ms ease-in-out infinite alternate;
        animation: wave 2000ms -6200ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(21) {
        -webkit-clip-path: polygon(70% 0, 80% 0, 120% 100%, 100% 100%);
        clip-path: polygon(70% 0, 80% 0, 120% 100%, 100% 100%);
        -webkit-animation: wave 2000ms -6000ms ease-in-out infinite alternate;
        animation: wave 2000ms -6000ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(22) {
        -webkit-clip-path: polygon(75% 0, 85% 0, 125% 100%, 105% 100%);
        clip-path: polygon(75% 0, 85% 0, 125% 100%, 105% 100%);
        -webkit-animation: wave 2000ms -5800ms ease-in-out infinite alternate;
        animation: wave 2000ms -5800ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(23) {
        -webkit-clip-path: polygon(80% 0, 90% 0, 130% 100%, 110% 100%);
        clip-path: polygon(80% 0, 90% 0, 130% 100%, 110% 100%);
        -webkit-animation: wave 2000ms -5600ms ease-in-out infinite alternate;
        animation: wave 2000ms -5600ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(24) {
        -webkit-clip-path: polygon(85% 0, 95% 0, 135% 100%, 115% 100%);
        clip-path: polygon(85% 0, 95% 0, 135% 100%, 115% 100%);
        -webkit-animation: wave 2000ms -5400ms ease-in-out infinite alternate;
        animation: wave 2000ms -5400ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(25) {
        -webkit-clip-path: polygon(90% 0, 100% 0, 140% 100%, 120% 100%);
        clip-path: polygon(90% 0, 100% 0, 140% 100%, 120% 100%);
        -webkit-animation: wave 2000ms -5200ms ease-in-out infinite alternate;
        animation: wave 2000ms -5200ms ease-in-out infinite alternate;
    }

    #ui .text:nth-child(26) {
        -webkit-clip-path: polygon(95% 0, 105% 0, 145% 100%, 125% 100%);
        clip-path: polygon(95% 0, 105% 0, 145% 100%, 125% 100%);
        -webkit-animation: wave 2000ms -5000ms ease-in-out infinite alternate;
        animation: wave 2000ms -5000ms ease-in-out infinite alternate;
    }

    @-webkit-keyframes wave {
        0% {
            transform: translate(-50%, -50%) scale(0.9) rotateX(20deg) rotateY(20deg) rotateZ(0deg);
            color: #1c3f91;
        }

        100% {
            transform: translate(-50%, -50%) scale(1.1) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
            color: #32e6ff;
        }
    }

    @keyframes wave {
        0% {
            transform: translate(-50%, -50%) scale(0.9) rotateX(20deg) rotateY(20deg) rotateZ(0deg);
            color: #001e64;
        }

        100% {
            transform: translate(-50%, -50%) scale(1.1) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
            color: #32e6ff;
        }
    }

    .zoom {

        transition: transform .2s !important;
        /* Animation */

    }

    .zoom:hover {
        transform: scale(1.5) !important;
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
</style>
<script>
    $(document).ready(function() {
        activaTab('aaa');
    });

    function activaTab(tab) {
        $('.nav-tabs a[href="#' + tab + '"]').tab('show');
    };
</script>