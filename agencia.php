<!DOCTYPE html>
<html lang="es">

<head>
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
            text-align: center;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* padding-bottom: 2%; */
        }

        #slider .titleContainer .title {
            font-size: 40px;
            color: #fff;
        }

        #slider .titleContainer .title2 {
            font-size: 18px;
            color: #fff;
            /* border-left: 6px solid #20DAF3; */
            /* padding-left: 16px; */
            font-weight: lighter;
            margin-top: 1rem;
        }

        #slider .btn {
            background-color: #ea8f1b;
            color: #fff;
            padding: 20px 36px;
            font-size: 16px;
            font-weight: bold;
            font-family: 'Nunito Sans', sans-serif;
        }

        #slider .btn:hover {
            background-color: #FED700;
            color: #fff;
            animation: shake 2s infinite;
        }

        #slider img {
            width: 100%;
            height: 660px;
            object-fit: cover;
            /* object-position: top; */
            /* height: 100%; */
            /* height: 100vh; */
        }


        #cubicol {
            padding-top: 5rem;
            padding-bottom: 5rem;
            /* background: url('./public/img/web/bg-hexagonal.png'); */
            background-size: 30%;
            background-position: -10% 50%;
            background-repeat: no-repeat;
        }

        #cubicol .boton {
            /* width: 60px; */
            /* height: 60px; */
            border-radius: 10px;
            padding: 15px 30px;
            color: #fff;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            /* background-color: #0093E9; */
            background: linear-gradient(90deg, #512FF5 0%, #9312D5 100%);
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 75%); */
            box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 70%);
        }

        #cubicol .video i {
            color: #fff;
        }

        #servicios {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #servicios .item {
            /* padding: 45px; */
            padding: 30px;
            text-align: center;
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 75%); */
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 10%);
            /* max-height: 500px; */
            /* height: 450px; */
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

        #servicios .item .titulo {
            font-size: 24px;
            color: #252525;
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
        }

        #servicios .icon1:hover .color1 {
            color: #ea8f1b;
        }

        #servicios .item .icon .color2 {
            color: #ea8f1b;
        }

        #servicios .icon2:hover .color2 {
            color: #fed700;
        }

        #servicios .item .icon .color3 {
            color: #3b37fe;
        }

        #servicios .icon3:hover .color3 {
            color: #ea8f1b;
        }

        #servicios .item .icon .color4 {
            color: #fed700;
        }

        #servicios .icon4:hover .color4 {
            color: #3b37fe;
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
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 15%);
            background: #fff;
        }

        #sistemas .item i {
            color: #3b37fe;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-image: -webkit-linear-gradient(0deg, #3b37fe 0%, #9b0fd2 100%);
        }

        #sistemas .item .titulo {
            font-weight: bold;
            color: #252525;
            font-size: 22px;
        }

        #sistemas .item .texto {
            font-size: 16px;
        }

        #separador {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        #separador .right {
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--color3);
            padding: 30px;
        }

        #separador .left {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000;
            padding: 100px 60px;
        }

        #separador .left .titulo {
            color: #fff;
            font-weight: 900;
        }

        #separador .left .texto {
            color: #fff;
            margin-top: 2rem;
        }

        #comunidad {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background: #162435;
        }

        #comunidad .titulo {
            color: #FDD600;
        }

        #comunidad .texto {
            color: #fff;
        }

        #comunidad .video {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background-color: #3A36FE;
            /* background-image: linear-gradient(90deg, #512FF5 0%, #9312D5 100%); */
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 75%); */
            box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 70%);
        }

        #comunidad .video i {
            color: #fff;
        }

        .box-container {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            /* padding: 35px 15px; */
            width: 100%;
        }

        @media screen and (min-width:1380px) {
            .box-container {
                flex-direction: row
            }
        }

        .box-item {
            position: relative;
            -webkit-backface-visibility: hidden;
            width: 415px;
            /* margin-bottom: 35px; */
            max-width: 100%;
            border-radius: 10px;
        }

        .flip-box {
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform-style: preserve-3d;
            perspective: 1000px;
            -webkit-perspective: 1000px;
        }

        .flip-box-front,
        .flip-box-back {
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            min-height: 250px;
            background-size: 100%;
            background-repeat: no-repeat;
            -ms-transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            -webkit-transition: transform 0.7s cubic-bezier(.4, .2, .2, 1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-box-front {
            -ms-transform: rotateY(0deg);
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-front {
            -ms-transform: rotateY(-180deg);
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box-back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: #3B37FE;
            color: #fff;
            -ms-transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-back {
            -ms-transform: rotateY(0deg);
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .flip-box .inner {
            position: absolute;
            left: 0;
            width: 100%;
            padding: 30px;
            outline: 1px solid transparent;
            -webkit-perspective: inherit;
            perspective: inherit;
            z-index: 2;

            transform: translateY(-50%) translateZ(60px) scale(.94);
            -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
            -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
            top: 50%;
        }

        .flip-box-header {
            font-size: 34px;
            color: #fff;
            font-weight: 800;
        }

        .flip-box p {
            font-size: 16px;
            line-height: 1.5em;
        }

        .flip-box-img {
            margin-top: 25px;
        }

        .flip-box-button {
            background-color: transparent;
            border: 2px solid #fff;
            border-radius: 2px;
            color: #fff;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            margin-top: 25px;
            padding: 15px 20px;
            text-transform: uppercase;
        }

        /* #servicios2 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        } */

        #servicios2 .item {
            background: #fff;
            /* padding: 45px; */
            padding: 50px 30px;
            text-align: center;
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 75%); */
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 10%); */
            box-shadow: 7px 5px 30px 0 rgba(72, 73, 121, 0.15);
            /* max-height: 500px; */
            /* height: 450px; */
            border-radius: 6px;
            transition: .3s all ease;
        }

        #servicios2 .item .icon {
            color: #fed700;
        }

        #servicios2 .item .titulo {
            font-size: 18px;
            margin-top: 30px;
            color: #EB992F;
            font-weight: bold;
            text-align: center;
        }

        #servicios2 .item .texto {
            color: #6e6e6e;
            font-size: 16px;
            text-align: center;
            margin-top: 14px;
        }

        #servicios2 .item .link {
            font-size: 14px;
            font-weight: bold;
            color: #4844FE;
        }

        /* ---- particles.js container ---- */
        #particles-js {
            background-color: #ffffff;
            position: absolute;
            width: 100%;
            height: 100%;
            /* top: 0; */
            z-index: -1;
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


        @media (max-width: 500px) {
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

    <div class="container-fluid px-0" id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInDown">
                            <h2 class="title">Agencia Publicitaria</h2>
                            <h2 class="title2">
                                ¿Necesitas <b> actualizar tu web, diseños o algún video? <br>
                                    Cubicol Agencia </b> te ofrece diferentes servicios para potenciar tu negocio <br>
                                en el mundo digital, así como manejar tus redes sociales.
                            </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="btn" href="" target="_blank">Consulta Aquí</a>
                            </div>
                        </div>
                    </div>
                    <img src="./public/img/web/agencia_bg.jpg">
                </div>
                <!-- <div class="carousel-item">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title">Conoce nuestra <br> Agencia Publicitaria</h2>
                            <h2 class="title2">
                                ¿Necesitas actualizar tu web, diseños o algún video? <br>
                                Cubicol Agencia te ofrece diferentes servicios para potenciar tu negocio <br>
                                en el mundo digital, así como manejar tus redes sociales.
                            </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="btn" href="" target="_blank">Conoce nuestra área </a>
                            </div>
                        </div>
                    </div>
                    <img src="./public/img/banner/2.jpg">
                </div> -->
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button> -->
            <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>

    <div class="container" id="servicios">
        <div class="row justify-content-center align-items-center">
            <div class="col text-center">
                <h2 class="titulo" style="color: var(--color2);">POTENCIA TU NEGOCIO EN EL MUNDO DIGITAL</h2>
                <img src="./public/img/icons/cubicol-agencia2.png" height="101" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg my-4">
                <div class="item icon1">
                    <div class="icon mx-auto position-relative">
                        <div class="seofy_hexagon">
                            <svg class="svg2" style="filter: drop-shadow(4px 5px 4px rgba(234,143,27,0.3)); fill: #ea8f1b;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                            </svg>
                            <svg class="svg1" style="filter: drop-shadow(4px 5px 4px rgba(59,55,254,0.3)); fill: #3b37fe;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                            </svg>
                        </div>
                        <i style="position: absolute; z-index: 10;" class="fas fa-analytics fa-2x color1"></i>
                    </div>
                    <h3 class="titulo">Marketing</h3>
                    <p class="texto">Enfoca tus campañas en redes sociales de manera efectiva.</p>
                    <!-- <a class="link" href="">VER MÁS</a> -->
                </div>
            </div>
            <div class="col-lg my-4">
                <div class="item icon2">
                    <div class="icon mx-auto position-relative">
                        <div class="seofy_hexagon">
                            <svg class="svg2" style="filter: drop-shadow(4px 5px 4px rgba(234,143,27,0.3)); fill: #ea8f1b;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                            </svg>
                            <svg class="svg1" style="filter: drop-shadow(4px 5px 4px rgba(254,215,0,0.3)); fill: #fed700;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                            </svg>
                        </div>
                        <i style="position: absolute; z-index: 10;" class="far fa-lightbulb-on fa-2x color2"></i>
                    </div>
                    <h3 class="titulo">Diseño</h3>
                    <p class="texto">Crea o renueva la imagen de tu empresa.</p>
                    <!-- <a class="link" href="">VER MÁS</a> -->
                </div>
            </div>
            <div class="col-lg my-4">
                <div class="item icon3">
                    <div class="icon mx-auto position-relative">
                        <div class="seofy_hexagon">
                            <svg class="svg2" style="filter: drop-shadow(4px 5px 4px rgba(234,143,27,0.3)); fill: #ea8f1b;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                            </svg>
                            <svg class="svg1" style="filter: drop-shadow(4px 5px 4px rgba(59,55,254,0.3)); fill: #3b37fe;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                            </svg>
                        </div>
                        <i style="position: absolute; z-index: 10;" class="far fa-camera-movie fa-2x color3"></i>
                    </div>
                    <h3 class="titulo">Multimedia</h3>
                    <p class="texto">Crea contenido audiovisual, con fotos, videos y/o animaciones.</p>
                    <!-- <a class="link" href="">VER MÁS</a> -->
                </div>
            </div>
            <div class="col-lg my-4">
                <div class="item icon4">
                    <div class="icon mx-auto position-relative">
                        <div class="seofy_hexagon">
                            <svg class="svg2" style="filter: drop-shadow(4px 5px 4px rgba(254,215,0,0.3)); fill: #fed700;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                            </svg>
                            <svg class="svg1" style="filter: drop-shadow(4px 5px 4px rgba(59,55,254,0.3)); fill: #3b37fe;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 197.4">
                                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
                            </svg>
                        </div>
                        <i style="position: absolute; z-index: 10;" class="fas fa-desktop fa-2x color4"></i>
                    </div>
                    <h3 class="titulo">Diseño Web</h3>
                    <p class="texto">Crea o renueva tu web de manera responsive y atractiva.</p>
                    <!-- <a class="link" href="">VER MÁS</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="comunidad">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <img src="./public/img/icons/cubicol-agencia.png" height="67" alt="">
                    <div class="d-flex my-4">
                        <span class="line"></span>
                        <span class="line-white" style="background: #fff0;"></span>
                        <span class="line2"></span>
                        <span class="line-white" style="background: #fff0;"></span>
                        <span class="line"></span>
                    </div>
                    <h2 class="titulo">Conoce lo que hacemos</h2>
                    <p class="texto mt-4">
                        Tenemos expertos profesionales en cada una de nuestras áreas para mejorar tu imagen en el mundo digital.
                    </p>
                    <img src="./public/img/icons/social-media-agencia.png" width="100%" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 my-3">
                            <div class="box-container">
                                <div class="box-item">
                                    <div class="flip-box">
                                        <div class="flip-box-front text-center" style="background-image: url('./public/img/web/agencia-diseno.jpg');">
                                            <div class="inner color-white">
                                                <h3 class="flip-box-header text-black">Diseño</h3>
                                                <!-- <p>A short sentence describing this callout is.</p> -->
                                                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                                            </div>
                                        </div>
                                        <div class="flip-box-back text-center" style="background-color: #FED700">
                                            <div class="inner color-white">
                                                <!-- <h3 class="flip-box-header">Custom Domains</h3> -->
                                                <p class="text-black">Vectorización de logos, Diseño de Logos, Papelería, Brochures, Banners Publicitarios, Merchandising y más.</p>
                                                <!-- <button class="flip-box-button">Learn More</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 my-3">
                            <div class="box-container">
                                <div class="box-item">
                                    <div class="flip-box">
                                        <div class="flip-box-front text-center" style="background-image: url('./public/img/web/agencia-multimedia.jpg');">
                                            <div class="inner color-white">
                                                <h3 class="flip-box-header">Multimedia</h3>
                                                <!-- <p>A short sentence describing this callout is.</p> -->
                                                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                                            </div>
                                        </div>
                                        <div class="flip-box-back text-center" style="background-color: #EA8F1B">
                                            <div class="inner color-white">
                                                <!-- <h3 class="flip-box-header">Custom Domains</h3> -->
                                                <p>Videos Institucionales, Videos de bioseguridad, Animaciones y GIF's.</p>
                                                <!-- <button class="flip-box-button">Learn More</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 my-3">
                            <div class="box-container">
                                <div class="box-item">
                                    <div class="flip-box">
                                        <div class="flip-box-front text-center" style="background-image: url('./public/img/web/agencia-web.jpg');">
                                            <div class="inner color-white">
                                                <h3 class="flip-box-header">Páginas Web</h3>
                                                <!-- <p>A short sentence describing this callout is.</p> -->
                                                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                                            </div>
                                        </div>
                                        <div class="flip-box-back text-center" style="background-color: #EA8F1B">
                                            <div class="inner color-white">
                                                <!-- <h3 class="flip-box-header">Custom Domains</h3> -->
                                                <p>Experiencia visual entendible, páginas autoadministrables, adaptable a todos los dispositivos.</p>
                                                <!-- <button class="flip-box-button">Learn More</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 my-3">
                            <div class="box-container">
                                <div class="box-item">
                                    <div class="flip-box">
                                        <div class="flip-box-front text-center" style="background-image: url('./public/img/web/agencia-social.jpg');">
                                            <div class="inner color-white">
                                                <h3 class="flip-box-header text-black">Social Media</h3>
                                                <!-- <p>A short sentence describing this callout is.</p> -->
                                                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                                            </div>
                                        </div>
                                        <div class="flip-box-back text-center" style="background-color: #FED700">
                                            <div class="inner color-white">
                                                <!-- <h3 class="flip-box-header">Custom Domains</h3> -->
                                                <p class="text-black">Campañas digitales y manejo de tus redes sociales: Facebook, Instagram, Youtube, Tik Tok.</p>
                                                <!-- <button class="flip-box-button">Learn More</button> -->
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
    </div>

    <div class="container-fluid position-relative px-0" id="servicios2">
        <div id="particles-js"></div>
        <div class="container py-4">
            <div class="row justify-content-between align-items-center" style="z-index: 10;">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg my-3">
                            <div class="item">
                                <div class="icon mx-auto">
                                    <i class="fas fa-camera-movie fa-lg"></i>
                                </div>
                                <h3 class="titulo">PLANES <br> SERVICIO <br> MULTIMEDIA</h3>
                                <p class="texto">¡Creamos el video que necesitas!
                                    Tenemos descuentos por apertura en nuestros planes: básicos, stándar y premium.</p>
                                <a class="link" href="">CONSULTA AQUÍ</a>
                            </div>
                        </div>
                        <div class="col-lg my-3">
                            <div class="item">
                                <div class="icon mx-auto">
                                    <i class="fas fa-tags fa-lg"></i>
                                </div>
                                <h3 class="titulo">PROMOCIONES <br> DE VERANO</h3>
                                <p class="texto">¡Este 2023 viene con fuerza!
                                    Ofrecemos paquetes y descuentos esta temporada.</p>
                                <a class="link" href="">CONSULTA AQUÍ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="./public/img/web/agencia-chica-laptop.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid position-relative">
        <div id="particles-js"></div>
    </div> -->

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

    <script src="./public/js/particles.min.js"></script>
    <script>
        particlesJS({
            "particles": {
                "number": {
                    "value": 20,
                    "density": {
                        "enable": true,
                        "value_area": 1000
                    }
                },
                "color": {
                    "value": ["#473EFF", "#EA901E", "#FED90A"],
                },
                "shape": {
                    "type": "polygon",
                    "stroke": {
                        // "width": 5,
                        "width": 0,
                        "color": "#FED701"
                    },
                    "polygon": {
                        "nb_sides": 7
                    },
                    "image": {
                        "src": "",
                        "width": 400,
                        "height": 400
                    }
                },
                "opacity": {
                    "value": 1,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 4,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 60,
                    "random": false,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "size_min": 0,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 750,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        })
    </script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
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
            let form = new FormData(document.getElementById("form-contacto"));
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
    </script>
</body>

</html>