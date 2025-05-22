<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1585956215157863');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1585956215157863&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cubicol para colegios es la plataforma ideal que comunica a padres de familia, estudiantes, docentes y directivos, con la más alta tecnología.">
    <link rel="shortcut icon" href="./public/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <title>CUBICOL - Plataforma para instituciones educativas</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"><!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-193347391-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-193347391-1');
    </script>
</head>

<body>

    <style>
        #slider .titleContainer {
            /* background: rgb(0 0 0 / 10%); */
            position: absolute;
            /* left: 10%; */
            /* padding-left: 10%; */
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: end;
            height: 100%;
            padding-bottom: 2%;
        }

        #slider .titleContainer .title {
            font-size: 40px;
            color: #fff;
        }

        #slider .titleContainer .title2 {
            font-size: 18px;
            color: #fff;
            border-left: 6px solid #20DAF3;
            padding-left: 16px;
            font-weight: lighter;
            margin-top: 3rem;
        }

        #slider .btn {
            background-color: var(--color1);
            color: #fff;
            padding: 20px 36px;
            font-size: 16px;
            font-weight: bold;
            font-family: 'Nunito Sans', sans-serif;
        }

        #slider .btn:hover {
            background-color: #7704A5;
            color: #fff;
            animation: shake 2s infinite;
        }

        #slider img {
            width: 100%;
            height: 660px;
            object-fit: cover;
            object-position: top;
            /* height: 100%; */
            /* height: 100vh; */
        }


        #cubicol {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background: url('./public/img/web/bg-hexagonal.png');
            background-size: 30%;
            background-position: -10% 50%;
            background-repeat: no-repeat;
        }

        #cubicol .video {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            /* background-color: #0093E9; */
            background-image: linear-gradient(90deg, #512FF5 0%, #9312D5 100%);
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 75%); */
            box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 70%);
        }

        #cubicol .video i {
            color: #fff;
        }

        #cubicol .imgRocket {
            /* position: absolute; */
            position: fixed;
            z-index: -1;
            /* right: -140px; */
            right: 8%;
            bottom: 160px;
            width: 160px;
            /* bottom: -200px; */
            /* width: 30%; */
        }

        #servicios {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #servicios .item .titulo {
            font-size: 24px;
            color: #252525;
        }

        #servicios .item {
            padding: 45px 30px;
            text-align: center;
            background: #fff;
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 75%); */
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 15%);
            /* max-height: 500px;
            height: 480px; */
            border-radius: 6px;
            transition: .3s all ease;
        }

        #servicios .item:hover {
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 30%);

        }

        #servicios .item .seofy_hexagon {
            width: 84%;
            height: 84%;
            left: 8%;
            top: 8%;
        }

        #servicios .item .seofy_hexagon:nth-child(1) {
            transform: rotate(0);
            animation: service_hexagon_1 2s infinite linear;
            animation-play-state: paused
        }

        #servicios .item .seofy_hexagon:nth-child(2) {
            transform: rotate(180deg);
            animation: service_hexagon_1 2s infinite linear;
            animation-play-state: paused
        }

        #servicios .item:hover .seofy_hexagon {
            animation-play-state: running;
        }

        #servicios .item .svg1 {
            width: 18px;
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
        }

        #servicios .item .svg2 {
            width: 18px;
            position: absolute;
            z-index: 1;
            bottom: 0;
            /* bottom: -60px; */
            right: 0;
        }

        @keyframes service_hexagon_1 {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        #servicios .item .icon {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #F4F6FD;
        }

        #servicios .item .icon .color1 {
            color: #3b37fe;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-image: -webkit-linear-gradient(0deg, #3b37fe 0%, #9b0fd2 100%);
        }

        #servicios .item .icon .color2 {
            color: #5ad0ff;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-image: -webkit-linear-gradient(0deg, #5ad0ff 0%, #3224e9 100%);
        }

        #servicios .item .icon .color3 {
            color: #8cffed;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-image: -webkit-linear-gradient(0deg, #8cffed 0%, #009cff 100%);
        }

        #servicios .item .titulo {
            font-weight: bold;
            margin-top: 1.5rem;
        }


        #servicios .item .texto {
            font-size: 18px;
            line-height: 2;
        }

        #servicios .item .link {
            font-weight: bold;
            font-size: 16px;
            color: var(--color2);
            font-family: 'Nunito Sans', sans-serif;
        }



        #sistemas {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background: #F4F6FD;
        }

        #sistemas .item {
            text-align: center;
            padding: 3rem;
            transition: .5s all ease;
        }

        #sistemas .item:hover {
            background: #fff;
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 15%);
        }

        #sistemas .item i {
            color: var(--color1);
        }

        #sistemas .item .titulo {
            font-weight: bold;
            color: #252525;
            font-size: 22px;
        }

        #sistemas .item .texto {
            font-size: 16px;
        }

        /* 
         ---- MIGRAR ----
         */
        #migrar {
            padding-top: 5rem;
            padding-bottom: 5rem;
            /* border-bottom: 1px solid #DEE1ED; */
            background: url('./public/img/web/bg-hexagonal.png');
            background-size: 20%;
            background-position: 110% 20%;
            background-repeat: no-repeat;
        }

        #migrar .circulo {
            height: 540px;
            width: 540px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            border: 2px solid #E3E6F0;
            position: relative;
        }

        #migrar .circulo .top {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #fff;
            top: -60px;
            height: 120px;
            background: #fff;
            width: 120px;
            border-radius: 50%;
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 30%);
        }

        #migrar .circulo .top i {
            color: #9b0fd3;
        }

        #migrar .circulo .top:hover {
            background: linear-gradient(90deg, #3244FF 0%, #06A1FF 100%);
        }

        .hoversito {
            background: linear-gradient(90deg, #3244FF 0%, #06A1FF 100%);
        }

        #migrar .circulo .top:hover i {
            color: #fff;
        }

        #migrar .circulo .bottom {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #fff;
            bottom: -60px;
            height: 120px;
            background: #fff;
            width: 120px;
            border-radius: 50%;
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 30%);
        }

        #migrar .circulo .bottom i {
            color: #9b0fd3;
        }

        #migrar .circulo .bottom:hover {
            background: linear-gradient(90deg, #3244FF 0%, #06A1FF 100%);
        }

        #migrar .circulo .bottom:hover i {
            color: #fff;
        }


        #migrar .circulo .left {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #fff;
            left: -60px;
            height: 120px;
            background: #fff;
            width: 120px;
            border-radius: 50%;
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 30%);
        }

        #migrar .circulo .left i {
            color: #9b0fd3;
        }

        #migrar .circulo .left:hover {
            background: linear-gradient(90deg, #3244FF 0%, #06A1FF 100%);
        }

        #migrar .circulo .left:hover i {
            color: #fff;
        }

        #migrar .circulo .right {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #fff;
            right: -60px;
            height: 120px;
            background: #fff;
            width: 120px;
            border-radius: 50%;
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 30%);
        }

        #migrar .circulo .right i {
            color: #9b0fd3;
        }

        #migrar .circulo .right:hover {
            background: linear-gradient(90deg, #3244FF 0%, #06A1FF 100%);
        }

        #migrar .circulo .right:hover i {
            color: #fff;
        }

        #migrar .circulo .uno,
        #migrar .circulo .dos,
        #migrar .circulo .tres,
        #migrar .circulo .cuatro {
            padding: 140px;
        }

        #migrar .circulo .uno .numero,
        #migrar .circulo .dos .numero,
        #migrar .circulo .tres .numero,
        #migrar .circulo .cuatro .numero {
            font-size: 80px;
            font-family: 'Mulish', sans-serif;
            color: var(--color2);
        }

        #migrar .circulo .uno .titulo,
        #migrar .circulo .dos .titulo,
        #migrar .circulo .tres .titulo,
        #migrar .circulo .cuatro .titulo {
            font-size: 24px;
            font-weight: 800;
            color: #252525;
            font-family: 'Nunito Sans', sans-serif;
        }

        #migrar .circulo .uno .texto,
        #migrar .circulo .dos .texto,
        #migrar .circulo .tres .texto,
        #migrar .circulo .cuatro .texto {
            font-size: 16px;
        }

        #migrar .contador .contador_cantidad {
            color: #252525;
            font-size: 50px;
            font-weight: 900;
        }

        #migrar .contador i {
            color: var(--color2);
            font-size: 20px;
        }

        #migrar .contador #contadorparrafo {
            /* color: var(--color2); */
            font-size: 16px;
            font-weight: 800;
        }



        /* 
         ---- MIGRAR ----
        */

        #fondo {
            padding-top: 10px;
            padding-bottom: 10px;
            background: #9B0FD3;
        }

        #fondo img {
            margin-top: -80px;
        }

        #fondo .btn {
            background: var(--color2);
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        #nota {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background: #F4F6FD;
        }


        #nota .item {
            background: #fff;
            padding: 20px 30px;
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 30%);
        }

        #nota .item .descripcion {
            background: var(--color1);
            color: #fff;
            font-size: 12px;
            font-weight: 900;
            padding: 4px 12px;
            border-radius: 4px;
            font-family: 'Nunito Sans', sans-serif;
        }

        #nota .item .titulo {
            font-weight: 800;
            margin-top: 1rem;
            color: #252525;
        }

        #nota .item .detalle {
            margin-top: 1rem;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            color: #555;
            font-size: 15px;
            line-height: 1.6;
        }

        #nota .item .link {
            font-weight: bold;
            font-size: 16px;
            color: var(--color2);
            font-family: 'Nunito Sans', sans-serif;
        }

        #nota .item .bot {
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            padding-top: 16px;
        }

        #nota .item .bot .logo {
            width: 30px;
            height: 30px;
        }

        #nota .item .bot .logo img {
            width: 100%;
            border-radius: 50%;
        }

        #nota .item .bot .texto {
            font-size: 15px;
            margin-bottom: 0;
            color: var(--color2);
            text-decoration: underline;
            margin-left: 5px;
        }

        #nota .item .bot .fecha {
            font-size: 15px;
            margin-bottom: 0;
            color: #9A9A9A;
            margin-left: auto;
        }

        #colegios {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #colegios .itemC {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 0px 60px;
        }

        #colegios .itemC .item {
            width: 120px;
            height: 130px;
        }

        #colegios .itemC .item img {
            width: 100%;
        }

        #partners {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #partners .item img {
            filter: contrast(0%);
            /* filter: grayscale(100%); */
            /* filter: saturate(1%); */
            transition: .3s all ease;
        }

        #partners .item:hover img {
            filter: contrast(100%);
        }

        #prefootServicios {
            background: linear-gradient(rgba(10, 9, 9, 0.8), rgba(37, 42, 66, 0.8)), url('./public/img/web/prefoote1.png');
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 6rem;
            padding-bottom: 5rem;
        }

        #prefootServicios h4 {
            color: #fff;
            font-weight: 900;
            text-align: center;
        }

        #prefootServicios h2 {
            color: transparent;
            font-size: 70px;
            font-weight: 900;
            text-align: center;
            animation: color-change 6s infinite;
        }

        @keyframes color-change {
            0% {
                -webkit-text-stroke: 3px #9B0FD3;
            }

            50% {
                -webkit-text-stroke: 3px #20DAF3;
            }

            100% {
                -webkit-text-stroke: 3px #1bb35a;
            }
        }

        .grow {
            transition: .5s, color .10s;
            -webkit-transition: .5s, color .10s;
            -moz-transition: .5s, color .10s;
        }

        .grow:hover {
            transform: scale3d(1.10, 1.10, 0.3);
            -webkit-transform: scale3d(1.10, 1.10, 0.3);
            -moz-transform: scale3d(1.10, 1.10, 0.3);
        }

        .line {
            width: 10px;
            height: 3px;
            background: var(--color2);
        }

        .line-white {
            width: 10px;
            height: 3px;
            background: #fff;
        }

        .line2 {
            width: 40px;
            height: 3px;
            background: var(--color2);
        }

        @media (min-width: 501px) {
            #migrar .circulo2 {
                display: none;
            }
        }

        @media (max-width: 500px) {
            #slider .titleContainer {
                padding-bottom: 20%;
                background: rgb(162 32 213 / 20%);
            }

            #slider img {
                object-position: right;
            }

            #slider .titleContainer .title {
                font-size: 30px;
            }

            #migrar {
                padding-bottom: 0;
            }

            #migrar .circulo {
                display: none;
            }

            #colegios .cole1,
            #colegios .cole2 {
                display: none;
            }

            #prefootServicios h2 {
                font-size: 40px;
            }

        }

        div[id] {
            scroll-margin-top: 150px;
        }
    </style>

    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/popper.min.js"></script>



    <!-- header -->
    <?php include_once './partials/header.php'; ?>

    <div class="pre-load" style="display: none;">
        <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
            <img src="img/icons/cubo.png" width="77">
        </div>
    </div>

    <div class="aviso-cookies" id="aviso-cookies">
        <p> Al hacer clic en "Aceptar cookies", concedes permiso al almacenamiento de cookies en su dispositivo para mejorar la navegación del sitio web, analizar su uso y mejorar nuestras acciones de marketing. </p>
        <div class="container-modal-cookies-btns">
            <a href="cookies"> <button class="btn-politics-cookies">Política de cookies</button> </a>
            <button id="btn-acept-cookies" class="btn-acept-cookies">Aceptar cookies</button>
        </div>
    </div>

    <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

    <div class="container-fluid px-0" id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="titleContainer container">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title">La plataforma número 1 <br> en Gestión Educativa</h2>
                            <h2 class="title2">
                                ¡Sé parte de una nueva experiencia en <b> gestión educativa </b>! <br>
                                Cubicol interface intuitiva, práctica y de fácil uso, capaz de adaptarse a <br>
                                todas las necesidades y métodos de trabajo de las <b> instituciones educativas. </b>
                            </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="btn" href="https://api.whatsapp.com/send?phone=51902779069&text=Estoy%20visitando%20la%20pagina%20web%20y%20deseo%20m%C3%A1s%20informaci%C3%B3n" target="_blank">Solicita tu demo</a>
                            </div>
                        </div>
                    </div>
                    <img src="./public/img/banner/1.jpg">
                </div>
                <div class="carousel-item">
                    <div class="titleContainer container">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title">Conoce nuestra <br> Agencia Publicitaria</h2>
                            <h2 class="title2">
                                ¿Necesitas actualizar tu web, diseños o algún video? <br>
                                Cubicol Agencia te ofrece diferentes servicios para potenciar tu negocio <br>
                                en el mundo digital, así como manejar tus redes sociales.
                            </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="btn" href="https://api.whatsapp.com/send?phone=51902779069&text=Estoy%20visitando%20la%20pagina%20web%20y%20deseo%20m%C3%A1s%20informaci%C3%B3n" target="_blank">Conoce nuestra área </a>
                                <!-- <a class="btn" href="https://api.whatsapp.com/send?phone=51" target="_blank">Contáctanos</a> -->
                            </div>
                        </div>
                    </div>
                    <img src="./public/img/banner/2.jpg">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-fluid" id="cubicol">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex mb-4">
                        <span class="line"></span>
                        <span class="line-white"></span>
                        <span class="line2"></span>
                        <span class="line-white"></span>
                        <span class="line"></span>
                    </div>
                    <h2>¿Qué es Cubicol?</h2>
                    <p class="mt-4">
                        <b>Cubicol</b> es la plataforma ideal que <br>
                        comunica a <b> padres de familia, estudiantes, docentes y <br>
                            directivos, </b>
                        con la más alta tecnología.
                    </p>
                    <p class="mt-4">
                        Accede a una nueva experiencia en gestión educativa <br> con nuestra <b> Aula Virtual,</b>
                        generando <b> Calificaciones, <br> Tareas, Control de Asistencia, Certificado de estudios, <br>
                            Admisión, Pensiones </b> y mucho más desde la web o a <br> través de nuestra app.
                    </p>

                    <div class="d-flex align-items-center mt-4">
                        <a class="video grow" data-bs-toggle="modal" data-bs-target="#modalVideoCubicol">
                            <i class="fas fa-play"></i>
                        </a>
                        <p class="ms-3 mb-0">VER VIDEO</p>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <img src="./public/img/web/bienvenido.png" width="100%" alt="">
                    <!-- <img class="imgRocket" src="./public/img/web/rocket.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white" id="servicios">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-4">
                    <div class="item">
                        <div class="icon mx-auto position-relative">
                            <div class="seofy_hexagon">
                                <svg class="svg1" style="filter: drop-shadow(4px 5px 4px rgba(234,143,27,0.3)); fill: #ea8f1b;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                    <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                                </svg>
                                <svg class="svg2" style="filter: drop-shadow(4px 5px 4px rgba(255,86,0,0.3)); fill: #ff5600;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                    <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                                </svg>
                            </div>
                            <i style="position: absolute; z-index: 10;" class="fas fa-school fa-3x color1"></i>
                        </div>
                        <h3 class="titulo">Cubicol Colegios</h3>
                        <p class="texto">Logra un ecosistema web y móvil ideal para la gestión digital de los colegios, intuitivo, práctico y adaptativo.</p>
                        <a class="link" href="colegios">VER MÁS</a>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="item">
                        <div class="icon mx-auto position-relative">
                            <div class="seofy_hexagon">
                                <svg class="svg1" style="filter: drop-shadow(4px 5px 4px rgba(82,172,250,0.3)); fill: #52acfa;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                    <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                                </svg>
                                <svg class="svg2" style="filter: drop-shadow(4px 5px 4px rgba(155,15,210,0.3)); fill: #9b0fd2;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                    <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                                </svg>
                            </div>
                            <i style="position: absolute; z-index: 10;" class="fas fa-graduation-cap fa-3x color2"></i>
                        </div>
                        <h3 class="titulo">Cubicol Institutos</h3>
                        <p class="texto">Interfase digital que permite el registro de carreras, itinerarios, docentes y la comunicación en vivo con el alumnado.</p>
                        <a class="link" href="institutos">VER MÁS</a>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="item">
                        <div class="icon mx-auto position-relative">
                            <div class="seofy_hexagon">
                                <svg class="svg2" style="filter: drop-shadow(4px 5px 4px rgba(82,172,250,0.3)); fill: #52acfa;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                    <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                                </svg>
                                <svg class="svg1" style="filter: drop-shadow(4px 5px 4px rgba(105,233,242,0.3)); fill: #69e9f2;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                    <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                                </svg>
                            </div>
                            <i style="position: absolute; z-index: 10;" class="fas fa-rocket fa-3x color3"></i>
                        </div>
                        <h3 class="titulo">Cubicol Servicios</h3>
                        <p class="texto">Soluciones integrales en Ecommerce, Elearning, Facturación Electrónica, Páginas Web, Social Media y Sistemas Logísticos.</p>
                        <a class="link" href="servicios">VER MÁS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="sistemas">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg text-center">
                    <div class="d-flex justify-content-center mb-4">
                        <span class="line"></span>
                        <span class="line-white"></span>
                        <span class="line2"></span>
                        <span class="line-white"></span>
                        <span class="line"></span>
                    </div>
                    <h2>¿Por qué elegir nuestros sistemas?</h2>
                    <p>Con Cubicol lograrás administrar de manera más eficiente tu información.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-users fa-2x"></i>
                        <h4 class="titulo my-3">Equipo A1</h4>
                        <p class="texto">Equipo con más de 14 años de experiencia en desarrollo de software para centros educativos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-graduation-cap fa-2x"></i>
                        <h4 class="titulo my-3">Centro Educativos con Cubicol</h4>
                        <p class="texto">Más de 800 colegios facilitan su trabajo gracias a nuestros sistemas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-coins fa-2x"></i>
                        <h4 class="titulo my-3">Accesible</h4>
                        <p class="texto">Queremos que más centros educativos sean parte de Cubicol por lo que contamos con propuesta económicamente accesibles.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-headset fa-2x"></i>
                        <h4 class="titulo my-3">Atención 24/7</h4>
                        <p class="texto">Brindamos una atención inmediata y un seguimiento personalizado.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-laptop fa-2x"></i>
                        <h4 class="titulo my-3">Experiencia Cubicol</h4>
                        <p class="texto">Interfase intuitiva, práctica, adaptativa y de fácil uso.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-arrow-alt-circle-up fa-2x"></i>
                        <h4 class="titulo my-3">Actualizaciones</h4>
                        <p class="texto">Capacitación, actualización y mejoras constantes sin costo adicional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white" id="migrar">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-lg text-center">
                    <div class="d-flex justify-content-center mb-4">
                        <span class="line"></span>
                        <span class="line-white"></span>
                        <span class="line2"></span>
                        <span class="line-white"></span>
                        <span class="line"></span>
                    </div>
                    <h2>Migra a Cubicol</h2>
                    <p>Cámbiate a nuestra plataforma en 4 simples pasos.</p>
                </div>
            </div>
            <div class="row my-5 justify-content-around align-items-center">
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="circulo">
                        <div class="top item-migrar" id="item-1" style="z-index: 99;">
                            <i class="fab fa-wpforms fa-2x" style="pointer-events: none;"></i>
                        </div>
                        <div class="right item-migrar" id="item-2" style="z-index: 99;">
                            <i class="fas fa-server fa-2x" style="pointer-events: none;"></i>
                        </div>
                        <div class="left item-migrar" id="item-4" style="z-index: 99;">
                            <i class="fas fa-headset fa-2x" style="pointer-events: none;"></i>
                        </div>
                        <div class="bottom item-migrar" id="item-3" style="z-index: 99;">
                            <i class="fas fa-laptop-code fa-2x" style="pointer-events: none;"></i>
                        </div>
                        <div class="uno" id="item-1-div">
                            <span class="numero">1</span>
                            <h3 class="titulo">Organización y planificación</h3>
                            <p class="texto">Se establece contacto con su centro educativo, donde se organiza y se consolida todos los datos necesarios.</p>
                        </div>
                        <div class="dos" id="item-2-div" style="display: none;">
                            <span class="numero">2</span>
                            <h3 class="titulo">Migración de datos</h3>
                            <p class="texto">Se procede a ingresar a nuestros sistemas datos de alumnos, familias y docentes para optimizarla y reutilizarla.</p>
                        </div>
                        <div class="tres" id="item-3-div" style="display: none;">
                            <span class="numero">3</span>
                            <h3 class="titulo">Puesta en marcha</h3>
                            <p class="texto">Nuestro equipo de desarrolladores lo guiará en toda la migración y configuración de los módulos.</p>
                        </div>
                        <div class="cuatro" id="item-4-div" style="display: none;">
                            <span class="numero">4</span>
                            <h3 class="titulo">Seguimiento y evolución</h3>
                            <p class="texto">Finalmente nuestro equipo de asesores le brindarán la orientación y el monitoreo necesario para alcanzar sus expectativas.</p>
                        </div>
                    </div>
                    <img class="circulo2" src="./public/img/web/circulo-migrar2.gif" width="100%">
                </div>
                <div class="col-lg-4 mt-4 mt-md-0">
                    <div class="row justify-content-around gap-4">
                        <div class="col-lg-5 col-8 my-md-0 my-4 d-flex justify-content-center align-items-center d-md-block contador">
                            <div class="d-flex">
                                <div class="contador_cantidad text-center" data-cantidad-total="800">700</div>
                                <div>
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                            <div>
                                <h4 id="contadorparrafo">CENTROS EDUCATIVOS</h4>
                            </div>
                        </div>
                        <div class="col-lg-5 col-8 my-md-0 my-4 d-flex justify-content-center align-items-center d-md-block contador">
                            <div class="d-flex">
                                <div class="contador_cantidad text-center" data-cantidad-total="14">0</div>
                                <div>
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                            <div>
                                <h4 id="contadorparrafo">AÑOS DE EXPERIENCIA</h4>
                            </div>
                        </div>
                        <div class="col-lg-5 col-8 my-md-0 my-4 d-flex justify-content-center align-items-center d-md-block contador">
                            <div class="d-flex">
                                <div class="contador_cantidad text-center" data-cantidad-total="15">0</div>
                                <div>
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                            <div>
                                <h4 id="contadorparrafo">MÓDULOS INTERACTIVOS</h4>
                            </div>
                        </div>
                        <div class="col-lg-5 col-8 my-md-0 my-4 d-flex justify-content-center align-items-center d-md-block contador">
                            <div class="d-flex">
                                <div class="contador_cantidad text-center" data-cantidad-total="365">300</div>
                                <div>
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                            <div>
                                <h4 id="contadorparrafo">ATENCIÓN LAS 24/7</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid" id="fondo">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7">
                    <h2 class="text-white">Suscríbete a nuestro Blog <br> Cubicol</h2>
                    <form id="formContacto" onsubmit="enviarCorreo(event)">
                        <div class="row justify-content-between">
                            <div class="col-lg-5 col-md-5 my-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="nombre" type="text" required="" class="form-control form-control-lg" placeholder="Nombre Completo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 my-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="correo" type="email" required="" class="form-control form-control-lg" placeholder="Escribe tu correo...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 my-3">
                                <button type="submit" class="btn"> Enviar <i class="fas fa-arrow-right ms-3"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <img src="./public/img/web/blog-cubicol.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container-fluid bg-white" id="nota">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="d-flex justify-content-center mb-4">
                        <span class="line"></span>
                        <span class="line-white"></span>
                        <span class="line2"></span>
                        <span class="line-white"></span>
                        <span class="line"></span>
                    </div>
                    <h2>La Nota Cubicol</h2>
                    <p>Conoce lo último en tendencias educativas, pedagogía, bibliografía y recurso prácticos gratuitos para tu aula. No te olvides de visitar nuestro Blog.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 p-md-4 my-3 my-md-0">
                    <div class="item">
                        <a class="descripcion">NOTA CUBICOL</a>
                        <h4 class="titulo">Importancia de los proyectos de tecnología en el aula</h4>
                        <p class="detalle">La inclusión de tecnologías en el aula de clase hoy en día es múltiple y ...</p>
                        <a class="link" href="">VER MÁS</a>
                        <div class="bot">
                            <div class="logo">
                                <img src="./public/img/icons/escudo.png" alt="">
                            </div>
                            <span class="texto">Cubicol</span>
                            <span class="fecha">24 Febrero, 2023</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-md-4 my-3 my-md-0">
                    <div class="item">
                        <a class="descripcion">NOTA CUBICOL</a>
                        <h4 class="titulo">Importancia de los proyectos de tecnología en el aula</h4>
                        <p class="detalle">La inclusión de tecnologías en el aula de clase hoy en día es múltiple y ...</p>
                        <a class="link" href="">VER MÁS</a>
                        <div class="bot">
                            <div class="logo">
                                <img src="./public/img/icons/escudo.png" alt="">
                            </div>
                            <span class="texto">Cubicol</span>
                            <span class="fecha">24 Febrero, 2023</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-md-4 my-3 my-md-0">
                    <div class="item">
                        <a class="descripcion">NOTA CUBICOL</a>
                        <h4 class="titulo">Importancia de los proyectos de tecnología en el aula</h4>
                        <p class="detalle">La inclusión de tecnologías en el aula de clase hoy en día es múltiple y ...</p>
                        <a class="link" href="">VER MÁS</a>
                        <div class="bot">
                            <div class="logo">
                                <img src="./public/img/icons/escudo.png" alt="">
                            </div>
                            <span class="texto">Cubicol</span>
                            <span class="fecha">24 Febrero, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid bg-white" id="colegios">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <img style="border-radius: 10px;" src="./public/img/web/800.png" height="80" alt="">
                    <div class="d-flex justify-content-center my-4">
                        <span class="line"></span>
                        <span class="line-white"></span>
                        <span class="line2"></span>
                        <span class="line-white"></span>
                        <span class="line"></span>
                    </div>
                    <h2 class="mt-4">Instituciones Educativas</h2>
                    <p>Confían en Cubicol</p>
                </div>
            </div>
            <div class="row" data-aos="fade-down">
                <div class="col-lg itemC">
                    <div class="item">
                        <img src="./public/img/web/colegios/cristo_rey.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1335.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1337.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1357.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1362.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1342.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row cole1" data-aos="fade-down">
                <div class="col-lg itemC">
                    <div class="item">
                        <img src="./public/img/web/colegios/Group_1341.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1381.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1374.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1382.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row cole2" data-aos="fade-down">
                <div class="col-lg itemC">
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1380.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1363.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_1375.png" alt="">
                    </div>
                    <div class="item">
                        <img src="./public/img/web/colegios/group_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container" id="partners">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="d-flex justify-content-center mb-4">
                        <span class="line"></span>
                        <span class="line-white"></span>
                        <span class="line2"></span>
                        <span class="line-white"></span>
                        <span class="line"></span>
                    </div>
                    <h2 class="mt-5">Partners Cubicol</h2>
                    <!-- <p>Confían en Cubicol</p> -->
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="./public/img/web/partners/Client_1_maxpaper.png" alt="">
                        </div>
                        <div class="item">
                            <img src="./public/img/web/partners/Client_2_laborator.png" alt="">
                        </div>
                        <div class="item">
                            <img src="./public/img/web/partners/Client_3_honeyhosting.png" alt="">
                        </div>
                        <div class="item">
                            <img src="./public/img/web/partners/Client_4_cryptonite.png" alt="">
                        </div>
                        <div class="item">
                            <img src="./public/img/web/partners/Client_5_dynamic.png" alt="">
                        </div>
                        <div class="item">
                            <img src="./public/img/web/partners/Client_6_deters-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="prefootServicios">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Conoce nuestros</h4>
                    <h2>SERVICIOS</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalPoliticas" tabindex="-1" aria-labelledby="modalPoliticasLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bolder" id="modalPoliticasLabel" style="color: var(--color2);">POLÍTICAS DE PRIVACIDAD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="./public/img/files/EIRL.pdf" width="100%" height="500"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalVideoCubicol" tabindex="-1" aria-labelledby="modalVideoCubicolLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title fw-bolder" id="modalVideoCubicolLabel" style="color: var(--color2);">¿Qué es Cubicol para Colegios?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body p-0">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/aphaMYrGH1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/aphaMYrGH1o" title="YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once './partials/footer.php'; ?>


    <script src="./public/js/aviso-cookies.js"></script>
    <script src="./public/js/jquery.min.js"></script>

    <script>
        $('.item-migrar').mouseover(function(e) {
            let id = $(this).attr('id');

            $('#item-1-div').hide();
            $('#item-2-div').hide();
            $('#item-3-div').hide();
            $('#item-4-div').hide();

            $('#' + id + '-div').fadeIn(300);
        });

        $(window).scroll(function(e) {
            // console.log(e);
            // $("span").css("display", "inline").fadeOut("slow");
        });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('.pre-load').slideUp();
            }, 1500);

        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            // margin: 20,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <script>
        AOS.init();

        const enviarCorreo = (e) => {
            e.preventDefault();
            let form = new FormData(document.getElementById("formContacto"));
            fetch('/lib/correo.php', {
                method: "POST",
                body: form
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
                e.target.reset();
            });
        }

        addEventListener('DOMContentLoaded', () => {
            const contadores = document.querySelectorAll('.contador_cantidad')
            const velocidad = 10000000000

            const animarContadores = () => {
                for (const contador of contadores) {
                    const actualizar_contador = () => {
                        let cantidad_maxima = +contador.dataset.cantidadTotal,
                            valor_actual = +contador.innerText,
                            incremento = cantidad_maxima / velocidad

                        if (valor_actual < cantidad_maxima) {
                            contador.innerText = Math.ceil(valor_actual + incremento)
                            setTimeout(actualizar_contador, 70)
                        } else {
                            contador.innerText = cantidad_maxima
                        }
                    }
                    actualizar_contador()
                }
            }
            //IntersectionObserver
            const mostrarContadores = elementos => {
                elementos.forEach(elemento => {
                    if (elemento.isIntersecting) {
                        elemento.target.classList.add('animar')
                        elemento.target.classList.remove('ocultar')
                        setTimeout(animarContadores, 600)
                    }
                });
            }
            const observer = new IntersectionObserver(mostrarContadores, {
                threshold: 0.75 //0-1
            })

            const elementosHTML = document.querySelectorAll('.contador')
            elementosHTML.forEach(elementoHTML => {
                observer.observe(elementoHTML)
            })
        })
    </script>

</body>

</html>