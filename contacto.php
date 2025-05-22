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
        #tituloTop {
            margin-top: 8rem;
            margin-bottom: 5rem;
            /* background: #F4F6FD; */
        }

        #tituloTop h4 {
            color: var(--color2);
            font-size: 16px;
        }

        #tituloTop h2 {
            /* padding-top: 4rem; */
            margin-bottom: 2rem;
            /* text-align: center; */
            /* font-size: 40px; */
        }

        #tituloTop .icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            box-shadow: 4px 4px 8px 4px rgb(0 0 0 / 10%);
        }

        #tituloTop .icon .color1 {
            color: #3b37fe;
            font-size: 25px;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-image: -webkit-linear-gradient(0deg, #3b37fe 0%, #9b0fd2 100%);
        }

        #tituloTop .icon .color2 {
            color: #5ad0ff;
            font-size: 25px;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-image: -webkit-linear-gradient(0deg, #5ad0ff 0%, #3224e9 100%);
        }

        #tituloTop .icon .color3 {
            color: #8cffed;
            font-size: 25px;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-image: -webkit-linear-gradient(0deg, #8cffed 0%, #009cff 100%);
        }

        #tituloTop .titulo {
            color: #29306B;
            font-weight: 800;
            font-size: 20px;
        }

        #tituloTop .texto {
            /* color: #29306B; */
            /* font-weight: 800; */
            font-size: 16px;
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

        form {
            padding: 30px;
            box-shadow: 4px 4px 8px 4px rgb(0 0 0 / 10%);
        }

        form .input-group>.form-control,
        .input-group>.form-select {
            background-color: #F3F5FE;
        }

        form .form-control {
            border: 1px solid #ffffff;
            background-color: #f3f5fe;
        }

        form .form-select {
            border: 1px solid #ffffff;
            color: #6c7591;
            background-color: #F3F5FE;
        }


        form .boton {
            /* width: 60px; */
            /* height: 60px; */
            border-radius: 10px;
            padding: 15px 30px;
            color: #fff;
            font-weight: bold;
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

        form .boton:hover {
            color: #fff;
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
    <?php include_once './partials/header2.php'; ?>

    <div class="container-fluid" id="tituloTop">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h4>SIGAMOS EN CONTACTO</h4>
                    <div class="d-flex mb-4">
                        <span class="line"></span>
                        <span class="line-white"></span>
                        <span class="line2"></span>
                        <span class="line-white"></span>
                        <span class="line"></span>
                    </div>
                    <h2>Mejora tus procesos utilizando la Tecnología Cubicol</h2>
                    <p>
                        <b> Cubicol, la plataforma intuitiva, práctica, adaptativa.</b>
                        Déjanos tus datos y cambia la forma en cómo gestionas tu <b> institución educativa.</b>
                    </p>


                    <!-- <div class="d-flex mt-5">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt color1"></i>
                        </div>
                        <div class="ms-4">
                            <h3 class="titulo">Visítanos:</h3>
                            <p class="texto">Avenida José Galvez Barrenechea 592, San Isidro.</p>
                        </div>
                    </div> -->
                    <div class="d-flex my-4">
                        <div class="icon">
                            <i class="fas fa-envelope color2"></i>
                        </div>
                        <div class="ms-4">
                            <h3 class="titulo">Envíanos un correo:</h3>
                            <p class="texto">ventas@sensoft.com.pe</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="icon">
                            <i class="fas fa-phone-volume color3"></i>
                        </div>
                        <div class="ms-4">
                            <h3 class="titulo">Llámanos:</h3>
                            <p class="texto">+51 902 779 069</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <form id="form-contacto" onsubmit="enviarCorreo(event)">
                        <h3 class="mb-4" style="color: #29306B; font-weight: bold;">Realiza tu solicitud</h3>

                        <div class="form-group my-3">
                            <div class="input-group">
                                <input name="nombres" type="text" class="form-control form-control-lg" required="" placeholder="Nombre y Apellido *">
                            </div>
                        </div>
                        <div class="form-group my-3">
                            <div class="input-group">
                                <input name="institucion" type="text" class="form-control form-control-lg" required="" placeholder="Institución / Empresa *">
                            </div>
                        </div>
                        <select class="form-select form-select-lg my-3" aria-label=".form-select-lg example" name="op1">
                            <option selected>Escoge una opción</option>
                            <option value="Cubicol Colegios">Cubicol Colegios</option>
                            <option value="Cubicol Institutos">Cubicol Institutos</option>
                            <option value="Cubicol Servicios Adicionales">Cubicol Servicios Adicionales</option>
                            <option value="Cubicol Beneficios">Cubicol Beneficios</option>
                        </select>
                        <div class="form-group my-3">
                            <div class="input-group">
                                <input name="celular" type="text" class="form-control form-control-lg" required="" placeholder="Teléfono / Celular *">
                            </div>
                        </div>
                        <div class="form-group my-3">
                            <div class="input-group">
                                <input name="correo" type="email" class="form-control form-control-lg" required="" placeholder="Correo *">
                            </div>
                        </div>

                        <h4 class="my-4" style="color: #29306B; font-weight: bold;">¿Cómo nos encontraste?</h4>
                        <select class="form-select form-select-lg my-3" aria-label=".form-select-lg example" name="op2">
                            <option selected>Escoge una opción</option>
                            <option value="Por Recomendación">Por Recomendación</option>
                            <option value="Por Facebook">Por Facebook</option>
                            <option value="Por Instagram">Por Instagram</option>
                            <option value="Por la Web">Por la Web</option>
                        </select>
                        <div class="my-3">
                            <textarea name="consulta" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" placeholder="Escriba aquí su consulta..."></textarea>
                        </div>
                        <div class="mt-4 mt-md-5">
                            <button type="submit" class="btn boton">ENVIAR</button>
                        </div>
                    </form>
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
            fetch('/lib/contacto.php', {
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