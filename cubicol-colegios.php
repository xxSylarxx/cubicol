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
            /* padding-bottom: 20%; */
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
            /* height: 660px; */
            object-fit: cover;
            object-position: top;
            /* height: 100%; */
            height: 100vh;
        }

        #partners .item {
            display: flex;
            justify-content: center;
        }

        #partners .item img {
            width: 50%;
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
            padding: 45px;
            text-align: center;
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 75%); */
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 15%);
            max-height: 500px;
            height: 480px;
            border-radius: 6px;
            transition: .3s all ease;
        }

        #servicios .item:hover {
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 30%);

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
            background: #101973;
        }

        #comunidad .titulo {
            color: #fff;
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
            padding: 20px;
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
            font-size: 15px;z
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
            #separador {
                margin-top: 0;
                margin-bottom: 0;
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

    <div class="container-fluid px-0" id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInDown">
                            <h2 class="title">Cubicol Colegios</h2>
                            <h2 class="title2">
                                Ecosistema Web y Móvil ideal para la gestión de colegios.
                            </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="btn" href="contacto.php">Solicita tu demo</a>
                            </div>
                        </div>
                    </div>
                    <img src="./public/img/web/portada-colegios.jpg">
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

    <div class="container" id="partners" data-aos="fade-down">
        <div class="row justify-content-center mt-5">
            <div class="col-lg">
                <div class="owl-carousel owl-theme">
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
                    <div class="item">
                        <img src="./public/img/web/colegios/Group_1341.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="cubicol">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="d-flex mb-4">
                        <span class="line"></span>
                        <span class="line-white"></span>
                        <span class="line2"></span>
                        <span class="line-white"></span>
                        <span class="line"></span>
                    </div>
                    <h2>Accede a tu información de manera rápida y segura</h2>
                    <p class="mt-4">
                        <b> Cubicol </b> integra a toda tu comunidad educativa permitiendo una comunicación
                        instantánea entre docente, padres de familia, alumnos y directivos de la institución.
                    </p>

                    <div class="d-flex">
                        <div>
                            <i class="fas fa-plus" style="font-size: 13px; color: var(--color2);"></i>
                        </div>
                        <p class="ms-3">Reduce tiempos al publicar y gestionar información relevante.</p>
                    </div>
                    <div class="d-flex">
                        <div>
                            <i class="fas fa-plus" style="font-size: 13px; color: var(--color2);"></i>
                        </div>
                        <p class="ms-3">Gestiona la publicación fácil y rápida de tareas, agendas, noticias, notas, mensajes y mucho más.</p>
                    </div>


                    <div class="d-flex align-items-center mt-4">
                        <a href="contacto.php" class="boton grow">
                            SOLICITA TU DEMO
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 mt-5">
                    <img src="./public/img/web/colegios_informacion.png" width="100%" alt="">
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
                    <h2>Módulos Integrados</h2>
                    <p>La tecnología Cubicol en tu Institución Educativa</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-laptop fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Clases Online</h4>
                        <p class="texto">Desarrolla clases en vivo con Zoom, Meets o Teams. Ten el total control de asistencia y tardanzas sin necesidad de utilizar el whatsapp. Desarrolla exámenes rápidos y encuestas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-graduation-cap fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Académico</h4>
                        <p class="texto">Registra exámenes ordinarios y simulacros pre. Lleva un registro de incidencias conductuales y seguimiento psicopedagógico. Monitoreo, supervisión y acompañamiento de docentes. Exporta notas al SIAGIE.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-coins fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Tesorería</h4>
                        <p class="texto">Permite registrar todo tipo de comprobantes (boletas, facturas, recibos, notas de crédito, etc.), además le podrá llevar el control de egresos y estados financieros.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-headset fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Intranet</h4>
                        <p class="texto">Permite al padre de familia estar informado en tiempo real sobre el avance de sus hijos, sus clases online, tareas, exámenes virtuales, notas, horario de clase, comunicados y todos los eventos del colegio.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-tasks fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Admisión</h4>
                        <p class="texto">Permite al colegio tener el control de interesados y postulantes del colegio, así como el registro de todo el proceso de admisión. Desde la inscripción del postulante, recepción de documentos hasta la programación de entrevistas y evaluaciones.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fab fa-cc-visa fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Pasarela de Pago</h4>
                        <p class="texto">Permite a los padres de familia realizar sus pagos de matrícula y pensiones sin salir de casa, contando con la seguridad de VisaNet, Pago Efectivo y Culqui.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-swimmer fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Talleres</h4>
                        <p class="texto">Permite crear tallares para las vacaciones útiles y cursos libres, controlar pagos y matrículas, así como registrar la asistencia y notas de los alumnos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-book fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Biblioteca</h4>
                        <p class="texto">Permite tener control del inventario de libros y utilitarios, tales como: materiales didácticos, mapas, videos, revistas y folletos. El sistema también permite buscar y reservar libros por alumnos y profesores desde la intranet, llevar control de préstamos y devoluciones.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-user-md fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Médico</h4>
                        <p class="texto">En este caso se reúne toda la información e historial de atenciones médicas realizadas, así como las indicaciones y observaciones de los mismos. Generando así un control detallado para luego ser informada en tiempo real al padre de familia.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-puzzle-piece fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Psicología</h4>
                        <p class="texto">Permite al psicólogo tener toda la información centralizada de cada alumno (datos de padre y apoderados, notas, incidencias, citas, observaciones, etc.) Permite llenar el registro de cada alumno, registrar los test y adjuntar archivos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-shield-alt fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Seguridad</h4>
                        <p class="texto">Permite crear y configurar perfiles, dar o quitar accesos a los usuarios, permite revisar el log de acceso y actividades realizadas, permite revisar el log de auditoria de modificación o eliminación de registros como calificaciones y pagos realizados.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-box-open fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Logística</h4>
                        <p class="texto">Permite gestionar y clasificar el inventario de productos que se utilizan, llevar el control del stock por cada almacén, tener alertar de fechas de vencimiento y/o agotamiento del stock, realizar pedido, órdenes de compra y control de los despachos de productos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="fas fa-utensils fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Comedor</h4>
                        <p class="texto">Permite crear y publicar un calendario de menús para que los padres puedan escoger y reservar lo que sus hijos consumirán. Permite a los encargados del comedor tener el control de las ventas y consumos que se realizan día a día.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <i class="far fa-address-card fa-2x"></i>
                        <h4 class="titulo my-3">Módulo Planilla</h4>
                        <p class="texto">Permite registrar la asistencia del personal, calcular automáticamente descuento por faltas e inasistencias, realizar el cálculo e impresión de boletas de pago, gratificaciones, CTS, y liquidaciones, revisar la proyección de Renta de Quinta e imprimir reportes de asistencia.</p>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="separador">
        <div class="row justify-content-center">
            <div class="col-lg-6 right">
                <img src="./public/img/web/blog-colegio.png" width="70%" alt="">
            </div>
            <div class="col-lg-6 left">
                <div>
                    <h3 class="titulo">Contamos con una versión mobile de nuestro sistema</h3>
                    <p class="texto"> Gracias a la aplicación <b> Cubicol </b> todos los usuarios estarán más
                        informados por medio de noticias y mensajes con los que podrán interactuar.
                        Además los padres de familia visualizarán el calendario y la libreta
                        de notas de sus hijos.</p>
                    <div class="mt-4">
                        <img src="./public/img/icons/apple.png" height="50" alt="">
                        <img class="my-md-0 my-3" src="./public/img/icons/google_play.png" height="50" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="comunidad">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4">
                    <div class="d-flex mb-4">
                        <span class="line"></span>
                        <span class="line-white" style="background: #fff0;"></span>
                        <span class="line2"></span>
                        <span class="line-white" style="background: #fff0;"></span>
                        <span class="line"></span>
                    </div>
                    <h2 class="titulo">Sé bienvenido a nuestra
                        comunidad Cubicol</h2>
                    <p class="texto mt-4">
                        Cubicol conecta a toda la comunidad de Alumnos, Padres de Familia, Docentes y Directivos. Contamos también con usuarios que sólo acceden a la información que les corresponde, con la seguridad que nos caracteriza.
                    </p>

                    <div class="d-flex align-items-center mt-4">
                        <a class="video grow" data-bs-toggle="modal" data-bs-target="#modalVideoCubicol">
                            <i class="fas fa-play"></i>
                        </a>
                        <p class="ms-3 mb-0 text-white">VER VIDEO</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 my-3">
                            <div class="box-container">
                                <div class="box-item">
                                    <div class="flip-box">
                                        <div class="flip-box-front text-center" style="background-image: url('./public/img/web/colegios_alumna.png');">
                                            <div class="inner color-white">
                                                <h3 class="flip-box-header">Alumnos</h3>
                                                <!-- <p>A short sentence describing this callout is.</p> -->
                                                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                                            </div>
                                        </div>
                                        <div class="flip-box-back text-center">
                                            <div class="inner color-white">
                                                <!-- <h3 class="flip-box-header">Custom Domains</h3> -->
                                                <p>Tendrán acceso a toda la información sobre cursos, tareas y actividades. Manteniendo comunicación permanente con sus docentes.</p>
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
                                        <div class="flip-box-front text-center" style="background-image: url('./public/img/web/colegios_docente.png');">
                                            <div class="inner color-white">
                                                <h3 class="flip-box-header">Docentes</h3>
                                                <!-- <p>A short sentence describing this callout is.</p> -->
                                                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                                            </div>
                                        </div>
                                        <div class="flip-box-back text-center">
                                            <div class="inner color-white">
                                                <!-- <h3 class="flip-box-header">Custom Domains</h3> -->
                                                <p>Pueden publicar tareas, agendas, materiales de lectura. Registro de notas, asistencia, conducta y desempeño. Acceso a información estadística y comparativa de sus alumnos.</p>
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
                                        <div class="flip-box-front text-center" style="background-image: url('./public/img/web/colegios_familia.png');">
                                            <div class="inner color-white">
                                                <h3 class="flip-box-header">Familias</h3>
                                                <!-- <p>A short sentence describing this callout is.</p> -->
                                                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                                            </div>
                                        </div>
                                        <div class="flip-box-back text-center">
                                            <div class="inner color-white">
                                                <!-- <h3 class="flip-box-header">Custom Domains</h3> -->
                                                <p>Acceso al desempeño académico, tareas, actividades, asistencias, comportamiento y desarrollo progresivo de sus hijos.</p>
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
                                        <div class="flip-box-front text-center" style="background-image: url('./public/img/web/colegios_directora.png');">
                                            <div class="inner color-white">
                                                <h3 class="flip-box-header">Directivos</h3>
                                                <!-- <p>A short sentence describing this callout is.</p> -->
                                                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                                            </div>
                                        </div>
                                        <div class="flip-box-back text-center">
                                            <div class="inner color-white">
                                                <!-- <h3 class="flip-box-header">Custom Domains</h3> -->
                                                <p>Acceso a indicadores globales e individuales de docentes, alumnos, familia. Podrán monitorear el desempeño de cada área de su institución.</p>
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

    <!-- <div class="container-fluid" id="nota">
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
                    <p>Conoce lo último en tendencias educativas, pedagogía, bibliografía y recurso prácticos gratuitos para tu aula.</p>
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