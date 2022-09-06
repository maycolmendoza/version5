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
    <link rel="stylesheet" href="./utils/css/estadia.css" />
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

<body data-spy="scroll" data-target=".navbar" data-offset="90" class="side-nav">
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
                                    <a href="#estadia" class="scroll">Estadía</a>
                                </li>
                                <li>
                                    <a href="#info" class="scroll">Sede</a>
                                </li>
                                <li>
                                    <a href="#gastronomia" class="scroll">Gastronomía</a>
                                </li>
                                <li>
                                    <a href="#atractivos" class="scroll">Lugares</a>
                                </li>
                                <li>
                                    <a href="#hoteles" class="scroll">Hoteles</a>
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
                                    <a href="#estadia" class="scroll">Estadía</a>

                                </li>
                                <li class="clearfix">
                                    <a href="#info" class="scroll">Información</a>

                                </li>
                                <li class="clearfix">
                                    <a href="#gastronomia" class="scroll">Gastronomía</a>

                                </li>
                                <li class="clearfix">
                                    <a href="#atractivos" class="scroll">Atractivos</a>
                                </li>
                                <li class="clearfix">
                                    <a href="#hoteles" class="scroll">Hoteles</a>
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
  
    <section class="single-items center-block parallax no-margin aleatoriomaycol" id="estadia" data-overlay-dark="6" style="height: 900px;">
        <script>
            const possibleVideos = [
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1658336416/logos%20monfu%202022/sidebar/Group_2_1_dwmyym.png",
                "https://res.cloudinary.com/dicmh7cfa/image/upload/v1659736501/logos%20monfu%202022/arequipa/Group_1_leossk.png",
            ];
            const randomVideo =
                possibleVideos[Math.floor(Math.random() * possibleVideos.length)];
            document.getElementById("estadia").style.backgroundImage = "url('" + randomVideo + "')";
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
                     
                                <div id="ui" class="uix">
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                    <div class="text">Arequipa</div>
                                </div>
                            </div>
                            <br>
                            <p id="section03" class="demo-scroll ">
                                <a href="#info" class="scroll"><span></span></a>
                            </p>
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

    <section class="single-items center-block parallax" id="info" style="
    background-color: #E0E0E0;margin-top: -100px;">
        <div class="container evento-content c-info" style="margin-top: -130px;">

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="text-center col-sm-8">
                    <div class="md-text-left wow fadeInLeft">
                        <h3 class="text-left text-flama area-title text-capitalize alt-font margin-1px-bottom informacion">
                            <!--<a data-fancybox="group-two" href=""></a>-->
                            <a href="https://inaigem.gob.pe/simposio/"><img class="icon-img" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1662473129/icons%20png%20/icons8-atr%C3%A1s-48_z49h0t.png" alt=""></a>&nbsp;<strong>INFORMACIÓN</strong>
                        </h3><hr class="sep-2">
                        <p class="text-white font-weight-300">
                        <p class="lead" style="text-align: justify;line-height: 40px;font-size: clamp(1rem, 4vw, 2rem);">
                            <strong class="toolTip">Arequipa
                            </strong> esta ubicada al suroeste del Peru a una altura de 2325 m.s.n.m.Debido a su
                            ubicacion el clima es seco en invierno, otoño y primavera, apodada como "Ciudad de eterno
                            cielo azul"
                            porque presenta temperaturas entre 25ºC a 10ºC.
                        </p>
                        <p class="lead" style="text-align: justify;line-height: 40px;font-size: clamp(1rem, 4vw, 2rem);">
                            Arequipa ofrece una gran variedad diversidad cultural y natural de profundos cañones,
                            nevados, una increible gastronomía y construcciones con un legado histórico, religioso o
                            anscentral.
                        </p>
                        </p>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="text-center  justify-content-center col-sm-4">
                </div>
                <div class="text-center  justify-content-center col-sm-4">
                    <div class="wow fadeInUp" data-wow-duration=".5s">

                        <div class="card text-center card-weather lead" style=" background-color: #EDEFF2;">
                            <?php include_once("./models/weather.php") ?>
                            <div class="card-header climaarequipa">

                                <?php foreach ($clima as $country) {
                                    $iconoweather = $country['icon'] . ".png";
                                    $description = $country['description'];
                                    $url_img =  'http://openweathermap.org/img/w/' . $iconoweather . '';
                                ?>
                                    <div class="card-image ">
                                        <?php echo  $data['name'] . ",&nbsp" . $sys['country'];
                                        ?> <img class="iconx" src="<?php echo $url_img ?>" class="img-fluid" alt="">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo round($data['main']['temp'] - 273.15) . " °C" ?></h5>
                            </div>
                            <div class="card-footer text-muted text-blanco">
                                <?php echo  $data['name'] . "&nbsp tiene" ?> <?php
                                                                            date_default_timezone_set('America/lima');
                                                                            $DateAndTime = date('m-d-Y h:i:s a', time());
                                                                            foreach ($clima as $country) echo $country['description'] . "<br> (" . $DateAndTime . ")" ?>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                </div>
                <div class="text-center  justify-content-center col-sm-4">

                </div>

            </div>
    </section>
    <!--gastronomia-->
    <div class="gastronomia"></div>
    <!--Single portfolio item six-->
    <section class="single-items center-block parallax" id="gastronomia" style="background-color: #EDEFF2;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 col-sm-8 col-sm-offset-4 col-xs-11 col-xs-offset-1">
                    <div class="text-right area-heading wow fadeInRight">
                        <h3 class="text-flama area-title alt-font margin-1px-bottom font-weight-100">
                            <a class="text-estadia" sdata-fancybox="group-six" href="images/single-portfolio6.jpg">GASTRONOMÍA</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="card">
                <div class="row ">
                    <div class="col-md-7">
                        <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1661368404/logos%20monfu%202022/arequipa/water-2934650_j1dnvf.jpg" class="w-100 img-estadia wow fadeInLeft zoom">

                    </div>
                    <div class="px-3 col-md-5">
                        <div class="px-3 card-block wow fadeInRight">
                            <p class="card-text">
                            <h3 class="py-4 arequipa" style="font-size: clamp(18px, 3vw, 22px);line-height: 32px;   /* within paragraph */
                                margin-bottom: 30px; /* between paragraphs */;color: #646363;font-family: flama-ligth;letter-spacing: 0.5px;">
                                <strong style="color: #575756;font-family: flama-medium;">Las picanterias</strong>, son
                                lugares famosos donde convergen lo rural y lo urbano de la gastronomia, conservando así
                                las costumbres ancestrales de la ciudad.
                            </h3>
                            </p>
                            <a data-fancybox="comidastipicas" href="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659737485/logos%20monfu%202022/arequipa/Group_3_ppxito.png" class="texto-blanco btn btn-primary btn-estadia">Conoce Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="hidden">
            <a data-fancybox="comidastipicas" data-thumb="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659737418/logos%20monfu%202022/arequipa/Group_6_hygihl.png" href="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659737418/logos%20monfu%202022/arequipa/Group_6_hygihl.png"></a>
            <a data-fancybox="comidastipicas" data-thumb="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659737437/logos%20monfu%202022/arequipa/Group_5_z9rwrh.png" href="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659737437/logos%20monfu%202022/arequipa/Group_5_z9rwrh.png"></a>
            <a data-fancybox="comidastipicas" data-thumb="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659737441/logos%20monfu%202022/arequipa/Group_4_zzaygr.png" href="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659737441/logos%20monfu%202022/arequipa/Group_4_zzaygr.png"></a>

        </div>
    </section>
    <!--atractivos-->
    <div class="atractivos-svg">
    </div>
    <!--Single portfolio item two-->
    <section class="single-items center-block parallax" id="atractivos" style="
    background-color: #E0E0E0;">
        <div class="container c-atractivos">
            <div class="row">
                <div class="col-md-5 col-sm-8 col-xs-11">
                    <div class="text-left area-heading wow fadeInLeft">
                        <h3 class=" text-flama area-title text-capitalize alt-font margin-2px-bottom font-weight-100">
                            <a data-fancybox="group-five" href="images/single-portfolio5.jpg">Lugares </a>
                        </h3>
                        <div class="col-sm-10">
                            <p class="lead" style="letter-spacing: 1.5px;text-align: left;word-spacing: 1px;">Arequipa rodeada de nevados,naturaleza y una gran historia colonial,la
                                ciudad muestra grandes atractivos turísticos tanto naturales como históricos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-4 col-xs-1" style="margin-top: -100px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="team-slidersx owl-carousel wow fadeInRight">
                                    <div class="text-center single-boxsx">
                                        <div class="img-areasx">
                                            <img alt="" class="img-fluid move-animations zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659738735/logos%20monfu%202022/arequipa/colca-g906feefe5_1920_2_zz0qvk.png" />
                                        </div>
                                        <div class="info-areasx">
                                            <p class="lead">
                                                Cañón del Colcal
                                            </p>
                                        </div>
                                    </div>
                                    <div class="text-center single-boxsx">
                                        <div class="img-areasx">
                                            <img alt="" class="img-fluid move-animations zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659740763/logos%20monfu%202022/arequipa/santa-catalina-g39f1a465f_1920_1_1_x6jxgk.png" />
                                        </div>
                                        <div class="info-areasx">
                                            <p class="lead"> Monasterio de Santa Catalina</p>
                                        </div>
                                    </div>
                                    <div class="text-center single-boxsx">
                                        <div class="img-areasx">
                                            <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659740762/logos%20monfu%202022/arequipa/cathedral-of-arequipa-g014df5ecf_1920_1_1_a0k7ma.png" />
                                        </div>
                                        <div class="info-areasx">
                                            <p class="lead">Catedral de Arequipa</p>
                                        </div>
                                    </div>
                                    <div class="text-center single-boxsx">
                                        <div class="img-areasx">
                                            <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659973314/logos%20monfu%202022/arequipa/plaza_de_armas_1_w5a9sg.png" />
                                        </div>
                                        <div class="info-areasx">
                                            <p class="lead">Plaza de armas de Arequipa</p>
                                        </div>
                                    </div>
                                    <div class="text-center single-boxsx">
                                        <div class="img-areasx">
                                            <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659973310/logos%20monfu%202022/arequipa/yanahuara_1_vfkpgf.png" />
                                        </div>
                                        <div class="info-areasx">
                                            <p class="lead">Yanahuara</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
                    </script>
                    <script>
                        $(".team-slidersx").owlCarousel({
                            loop: true,
                            nav: false,
                            autoplay: true,
                            autoplayTimeout: 5000,
                            smartSpeed: 450,
                            margin: 20,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                768: {
                                    items: 2
                                },
                                991: {
                                    items: 3
                                },
                                1200: {
                                    items: 3
                                },
                                1920: {
                                    items: 3
                                }
                            }
                        });
                    </script>
                </div>
                <div class="col-lg-12  col-sm-12">
                    <?php

                    // Include and instantiate the class.
                    require_once './models/Mobile_Detect.php';
                    $detect = new Mobile_Detect;
                    // Any mobile device (phones or tablets).
                    if ($detect->isMobile()) {
                    ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="team-slidersx owl-carousel wow fadeInRight">
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659738735/logos%20monfu%202022/arequipa/colca-g906feefe5_1920_2_zz0qvk.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead">
                                                    Cañón del Colcal
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659740763/logos%20monfu%202022/arequipa/santa-catalina-g39f1a465f_1920_1_1_x6jxgk.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead"> Monasterio de Santa Catalina</p>
                                            </div>
                                        </div>
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659973309/logos%20monfu%202022/arequipa/catedral_1_g5fgxg.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead">Catedral de Arequipa</p>
                                            </div>
                                        </div>
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659973314/logos%20monfu%202022/arequipa/plaza_de_armas_1_w5a9sg.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead">Plaza de armas de Arequipa</p>
                                            </div>
                                        </div>
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659973310/logos%20monfu%202022/arequipa/yanahuara_1_vfkpgf.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead">Yanahuara</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
                        </script>
                        <script>
                            $(".team-slidersx").owlCarousel({
                                loop: true,
                                nav: false,
                                autoplay: true,
                                autoplayTimeout: 5000,
                                smartSpeed: 450,
                                margin: 20,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    768: {
                                        items: 2
                                    },
                                    991: {
                                        items: 3
                                    },
                                    1200: {
                                        items: 3
                                    },
                                    1920: {
                                        items: 3
                                    }
                                }
                            });
                        </script>
                    <?php

                    }

                    // Any tablet device.
                    if ($detect->isTablet()) {

                    ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="team-slidersx owl-carousel wow fadeInRight">
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659738735/logos%20monfu%202022/arequipa/colca-g906feefe5_1920_2_zz0qvk.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead">
                                                    Cañón del Colcal
                                                </p>

                                            </div>


                                        </div>
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659740763/logos%20monfu%202022/arequipa/santa-catalina-g39f1a465f_1920_1_1_x6jxgk.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead"> Monasterio de Santa Catalina</p>

                                            </div>

                                        </div>
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659973309/logos%20monfu%202022/arequipa/catedral_1_g5fgxg.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead">Catedral de Arequipa</p>

                                            </div>


                                        </div>
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659973314/logos%20monfu%202022/arequipa/plaza_de_armas_1_w5a9sg.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead">Plaza de armas de Arequipa</p>

                                            </div>


                                        </div>
                                        <div class="text-center single-boxsx">
                                            <div class="img-areasx">
                                                <img alt="" class="img-fluid move-animations" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659973310/logos%20monfu%202022/arequipa/yanahuara_1_vfkpgf.png" />
                                            </div>
                                            <div class="info-areasx">
                                                <p class="lead">Yanahuara</p>

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
                        </script>
                        <script>
                            $(".team-slidersx").owlCarousel({
                                loop: true,
                                nav: false,
                                autoplay: true,
                                autoplayTimeout: 5000,
                                smartSpeed: 450,
                                margin: 20,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    768: {
                                        items: 2
                                    },
                                    991: {
                                        items: 3
                                    },
                                    1200: {
                                        items: 3
                                    },
                                    1920: {
                                        items: 3
                                    }
                                }
                            });
                        </script>
                    <?php

                    }

                    // Exclude tablets.
                    if ($detect->isMobile() && !$detect->isTablet()) {
                    }

                    // Check for a specific platform with the help of the magic methods:
                    if ($detect->isiOS()) {
                    }

                    if ($detect->isAndroidOS()) {
                    }

                    // Alternative method is() for checking specific properties.
                    // WARNING: this method is in BETA, some keyword properties will change in the future.
                    $detect->is('Chrome');
                    $detect->is('iOS');
                    $detect->is('UC Browser');
                    // [...]

                    // Batch mode using setUserAgent():
                    $userAgents = array(
                        'Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19',
                        'BlackBerry7100i/4.1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/103',
                        // [...]
                    );
                    foreach ($userAgents as $userAgent) {

                        $detect->setUserAgent($userAgent);
                        $isMobile = $detect->isMobile();
                        $isTablet = $detect->isTablet();
                        // Use the force however you want.

                    }

                    // Get the version() of components.
                    // WARNING: this method is in BETA, some keyword properties will change in the future.
                    $detect->version('iPad'); // 4.3 (float)
                    $detect->version('iPhone'); // 3.1 (float)
                    $detect->version('Android'); // 2.1 (float)
                    $detect->version('Opera Mini'); // 5.0 (float)
                    // [...]





                    ?>
                </div>
            </div>
        </div>
    </section>























    <!--hoteles-->
    <div style="
    background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1658353601/ponentes4_bkpquk_1_pmiddx_1_ghs8dh.svg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100px;
    position: relative;
    z-index: 1;
    background-color: #E0E0E0;
    ">
    </div>
    <section class="single-items center-block item-seven parallax" id="hoteles" style="background-color: #EDEFF2;">
        <div class="container c-hoteles">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-left area-heading wow fadeInLeft">
                        <h3 class="text-flama area-title text-capitalize alt-font margin-1px-bottom font-weight-100">
                            <a data-fancybox="group-seven" href="images/single-portfolio7.jpg">HOTELES</a>
                        </h3>
                        <p class="text-white text-organizacion" style="font-family: flama-ligth; color: #646363;">
                            Descubre los mejores hospedajes y reservaciones de Arequipa, para el evento <strong style="color: #575756;">MONFU 2022</strong>.</p><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12" style="overflow-y: auto; margin-bottom: 120px;max-height: 700px;">
                    <div class="md-text-left">
                        <div class="container-acordion wow fadeInRight">
                            <div class="accordion active-acordion">
                                <h5><i class="fa-thin fa-1"></i> - Le Foyer Arequipa</h5>
                                <i class="fas fa-minus"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="panal xdf">
                                <div class="card">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#aaa" data-toggle="tab"><i class="fa-solid fa-location-pin"></i> Ubicación</a></li>
                                            <li><a href="#bbb" data-toggle="tab"><i class="fa-solid fa-phone"></i> Contácto</a></li>
                                        </ul>
                                        <div class="tab-content" id="tabs">
                                            <div class="tab-pane" id="aaa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.5561378960174!2d-71.53744448452107!3d-16.396557942422657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a50ecee62eb%3A0x696925f814fca615!2sLe%20Foyer%20Arequipa!5e0!3m2!1ses-419!2spe!4v1659975788412!5m2!1ses-419!2spe" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                                            <div class="tab-pane container" id="bbb"><a href="tel:054286473"><i class="fa-solid fa-phone"></i>+(054) 286473</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card-image zoom" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 12% 100%);">
                                            <img class="zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659971677/logos%20monfu%202022/arequipa/1_pl3ywv.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <h5> <i class="fa-thin fa-2"></i> - Los Andes Bead & Breakfast</h5>
                                <i class="fas fa-minus"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="panal">
                                <div class="card">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#ccc" data-toggle="tab"><i class="fa-solid fa-location-pin"></i> Ubicación</a></li>
                                            <li><a href="tel:920762838"><i class="fa-solid fa-phone"></i> + 920 762 838</a></li>
                                        </ul>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.4931922789583!2d-71.54010438452099!3d-16.399759842505233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424af972702a39%3A0xccdfbdd5d37d6c03!2sLOS%20ANDES%20BED%20%26%20BREAKFAST!5e0!3m2!1ses-419!2spe!4v1659978105997!5m2!1ses-419!2spe" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card-image zoom" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 12% 100%);">
                                        <img class="zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659972099/logos%20monfu%202022/arequipa/221686439_umgtxn.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <h5> <i class="fa-thin fa-3"></i> - San Agustin Posada del monasterio</h5>
                                <i class="fas fa-minus"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="panal">
                                <div class="card">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#aaa" data-toggle="tab"><i class="fa-solid fa-location-pin"></i> Ubicación</a></li>
                                            <li><a href="tel:012032840"><i class="fa-solid fa-phone"></i> + 01 2032840</a></li>
                                        </ul>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.5685195877804!2d-71.53822868452083!3d-16.39592804240639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a5083d7f45d%3A0x65f8f469b187a560!2sSan%20Agust%C3%ADn%20Posada%20del%20Monasterio%20Hotel!5e0!3m2!1ses-419!2spe!4v1659978250311!5m2!1ses-419!2spe" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card-image zoom" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 12% 100%);">
                                        <img class="zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659972239/logos%20monfu%202022/arequipa/hotel-san-agustin-posada_nztpju.jpg" alt="">
                                    </div>
                                </div>
                            </div>


                            <div class="accordion">
                                <h5> <i class="fa-thin fa-4"></i> - Acolpacha Tambo Boutique</h5>
                                <i class="fas fa-minus"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="panal">
                                <div class="card">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#aaa" data-toggle="tab"><i class="fa-solid fa-location-pin"></i> Ubicación</a></li>
                                            <li><a href="tel:054655626"><i class="fa-solid fa-phone"></i> + 05 4655626</a></li>

                                        </ul>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.563123908203!2d-71.54477508452094!3d-16.39620254241356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b0526f656b5%3A0x5f499f6eb20bee3!2sACOLPACHA%20-%20TAMBO%20BOUTIQUE!5e0!3m2!1ses-419!2spe!4v1659978310316!5m2!1ses-419!2spe" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card-image zoom" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 12% 100%);">
                                        <img class="zoom" src=https://res.cloudinary.com/dicmh7cfa/image/upload/v1659972412/logos%20monfu%202022/arequipa/13193530_fy0bof.png" alt="">
                                    </div>
                                </div>
                            </div>



                            <div class="accordion">
                                <h5><i class="fa-thin fa-5"></i> - Hotel Correguidor</h5>
                                <i class="fas fa-minus"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="panal">
                                <div class="card">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#aaa" data-toggle="tab"><i class="fa-solid fa-location-pin"></i> Ubicación</a></li>
                                            <li><a href="tel:054288081" data-toggle="tab"><i class="fa-solid fa-phone"></i> + (054) 288081</a></li>

                                        </ul>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1913.7529982121207!2d-71.53109349176923!3d-16.399108574075903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHotel%20Correguidor!5e0!3m2!1ses-419!2spe!4v1659978386132!5m2!1ses-419!2spe" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card-image zoom" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 12% 100%);">
                                        <img class="zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659972371/logos%20monfu%202022/arequipa/fachada-hotel-corregidor_l7qjtj.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="accordion">
                                <h5> <i class="fa-thin fa-6"></i> - Hotel Conquistador</h5>
                                <i class="fas fa-minus"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="panal">
                                <div class="card">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#aaa" data-toggle="tab"><i class="fa-solid fa-location-pin"></i> Ubicación</a></li>
                                            <li><a href="tel: 997480049"><i class="fa-solid fa-phone"></i> + 997 480 049</a></li>

                                        </ul>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15309.063744781499!2d-71.54554136167869!3d-16.411314785203167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHotel%20Conquistador!5e0!3m2!1ses-419!2spe!4v1659978492483!5m2!1ses-419!2spe" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card-image zoom" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 12% 100%);">
                                        <img class="zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659972436/logos%20monfu%202022/arequipa/IMGL1269-1-scaled_pen5ju.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="accordion">
                                <h5><i class="fa-thin fa-7"></i> - El caminante Class</h5>
                                <i class="fas fa-minus"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="panal">
                                <div class="card">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#aaa" data-toggle="tab"><i class="fa-solid fa-location-pin"></i> Ubicación</a></li>
                                            <li><a href="tel: 054203444"><i class="fa-solid fa-phone"></i> + 05 4203444</a></li>

                                        </ul>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.5556110889015!2d-71.53891888452094!3d-16.396584742423343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a5082defbc9%3A0xf29c508c04d1cdb1!2sEl%20Caminante%20Class!5e0!3m2!1ses-419!2spe!4v1659978582059!5m2!1ses-419!2spe" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card-image zoom" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 12% 100%);">
                                        <img class="zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659972437/logos%20monfu%202022/arequipa/el-caminante-class_zotpku.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <h5><i class="fa-thin fa-8"></i> - Los Tambos</h5>
                                <i class="fas fa-minus"></i>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="panal">
                                <div class="card">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#aaa" data-toggle="tab"><i class="fa-solid fa-location-pin"></i> Ubicación</a></li>
                                            <li><a href="tel:054206206"><i class="fa-solid fa-phone"></i> + (054)206206</a></li>
                                        </ul>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3827.555813853787!2d-71.53891888460437!3d-16.39657442726957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sLos%20Tambos!5e0!3m2!1ses-419!2spe!4v1659978639387!5m2!1ses-419!2spe" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card-image zoom" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 12% 100%);">
                                        <img class="zoom" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1659972239/logos%20monfu%202022/arequipa/hotel-san-agustin-posada_nztpju.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 text-center w-100 mb-5 p-4 py-4 mt-3 estadia-sh">
                <button class="btn-shared-posters  paragrama text-center" id="webshareapi">Compartir con tu Comunidad &nbsp;<i data-feather="share"></i><i class="fa-solid fa-share"></i></button>
                </div><br>
            </div>
        </div>
    </section>

    <!--footer Start 0067c0---->
    <footer class="text-center bg-extra-dark-gray padding-30px-tb" style="background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1658075434/Group_9_2_kwa6xs.png');">
        <div class="footer-widget-area">
            <div class="container">
                <div class="col-sm-12">
                    <div class="col-sm-7">
                        <div class="col-sm-12">
                            <img class="logo-montañas wow fadeInUp" data-wow-duration=".5s" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655187006/logos%20monfu%202022/logo-arequipa_rwruyo.png" style="  text-indent: -9999px;
                            display: block;
                            max-width: 60%;
                            max-height: 60%;
                            top: 0%;
                            background-size: 100% 100%;
                            margin-right: auto;
                            margin-left: auto;" alt="">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <p class="footer-links wow fadeInDown" data-wow-duration=".5s" style="position: relative;color: #fff;">
                                    <i class="fa-solid fa-location-dot"></i> Jr. Juan Bautista Mejía 887 Huaraz,<br />
                                    Áncash, Perú (043) 221766 – (043) 456234
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p class="footer-links wow fadeInDown" data-wow-duration=".5s" style="position: relative;color: #fff;">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Av. Prolongación Túpac Amaru A-2 <br />Wanchaq 08002, Cusco (084) 200259
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p class="footer-links wow fadeInDown" data-wow-duration=".5s" style="position: relative;color: #fff;">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Jr. Nicolás de Piérola 399, Urb. Liguria <br />Santiago de Surco, Lima, Perú (01)
                                    3017443
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text-left col-sm-5">
                        <form class="wow fadeInDown" id="forms" data-wow-duration=".5s">
                            <label>Correo</label>
                            <input type="text" id="Correo" name="Correo" required placeholder="Escribe tu Email" />
                            <label>Mensaje</label>
                            <textarea id="Mensaje" name="Mensaje" required placeholder="Escribe tu Consulta"></textarea>
                            <button id="submits" type="submit" class="btn-block boton-inaigem2" style="border-radius: 4px;">Enviar <i class="fa-solid fa-message-arrow-up"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656444923/logos%20monfu%202022/lg_black_gpwdnw.png" alt="" style="width: 50px;">
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
    $(document).ready(function() {
        activaTab('aaa');
    });

    function activaTab(tab) {
        $('.nav-tabs a[href="#' + tab + '"]').tab('show');
    };
</script>