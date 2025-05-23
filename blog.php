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
            /* height: 720px; */
            object-fit: cover;
            /* height: 100%; */
            height: 100vh;
        }


        #cubicol {
            padding-top: 10rem;
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
            background: #F4F6FD;
        }

        #servicios .item {
            padding: 45px;
            background: #fff;
            text-align: center;
            /* box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 75%); */
            box-shadow: 10px 10px 35px 0px rgb(0 0 0 / 15%);
            /* max-height: 500px; */
            /* height: 480px; */
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
            /* padding: 60px; */
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
            padding-top: 10rem;
            padding-bottom: 5rem;
            /* background: #F4F6FD; */
        }

        #nota .item {
            background: #fff;
            padding: 20px;
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
            text-align: start;
            color: #555;
            font-size: 15px;
            line-height: 1.6;
        }

        #nota .item .link {
            font-weight: bold;
            font-size: 15px;
            color: var(--color2);
            font-family: 'Nunito Sans', sans-serif;
            text-align: center;
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
            text-decoration: none;
            margin-left: 5px;
        }

        #nota .item .bot .fecha {
            font-size: 15px;
            margin-bottom: 0;
            color: #9A9A9A;
            margin-left: auto;
        }

        #importantes {
            margin-top: 5rem;
            padding-bottom: 5rem;
            border-bottom: 1px solid #DEE1ED;
        }

        #importantes .contador .contador_cantidad {
            color: var(--color2);
            font-size: 50px;
            font-weight: 900;
        }

        #importantes .contador i {
            color: var(--color2);
            font-size: 20px;
        }

        #importantes .contador #contadorparrafo {
            /* color: var(--color2); */
            font-size: 16px;
            font-weight: 800;
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
        .div-img-blog img {
            width: 100%;
            height: clamp(200px, 20vh, 700px);
            object-fit: cover;
           
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

       

        div[id] {
            scroll-margin-top: 150px;
        }
    </style>

    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/popper.min.js"></script>

    <!-- header -->
    <?php include_once './partials/header2.php'; ?>



    <div class="container-fluid" id="nota">
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
                    <h2>Nuestro Blog</h2>
                    <p>Conoce lo último en tendencias educativas, pedagogía, bibliografía y recurso prácticos gratuitos para tu aula. No te olvides de visitar nuestro Blog.</p>
                </div>
            </div>
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-md-4 p-md-4 my-3 my-md-0">
                    <div class="item">
                        <a class="descripcion mb-4">NOTICIAS Y NOVEDADES</a>
                        <div class="div-img-blog mt-3">
                            <img src="./public/img/galeria/p-blog-1.jpg" alt="">
                        </div>
                        <h4 class="titulo">Premio Empresa Peruana del Año 2024</h4>
                        <p class="detalle">En un país donde hacer empresa es un reto diario, recibir un reconocimiento como el Premio Empresa Peruana del Año 2024 no solo es un motivo de orgullo, sino una confirmación de que estamos por el camino correcto.</p>
                        <div class="d-flex justify-content-center">
                            <a class="link" href="view.php?id=1">VER MÁS &nbsp;&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></a></a>
                        </div>
                        <div class="bot">
                            <div class="logo">
                                <img src="./public/img/icons/escudo.png" alt="">
                            </div>
                            <span class="texto">Cubicol</span>
                            <span class="fecha"><i class="fas fa-calendar-alt" aria-hidden="true"></i>&nbsp;22 Mayo, 2025</span>
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
        };
    </script>

    <script>
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