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


        #cubicol h3 {
            color: #29306B;
        }

        #cubicol b {
            color: #29306B;
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
    <?php include_once './partials/header2.php'; ?>



    <div class="container" id="cubicol">
        <div class="row">
            <div class="col">
                <h1 class="my-4">Política de Cookies</h1>
                <p>
                    Nuestra Política de Cookies tiene por finalidad informarte de forma clara y completa sobre el funcionamiento y la finalidad de las
                    cookies que se utilizan en la página web <a href="http://www.cubicol.pe" target="_blank">www.cubicol.pe</a> (en adelante, la Plataforma). En caso desee obtener mayor información sobre las cookies, puedes remitir un correo electrónico a <a href="mailto:ventas@sensoft.com.pe" target="_blank">ventas@sensoft.com.pe</a>
                </p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Cookies</h3>
                <p>
                    Una cookie es un archivo que se descarga en tu equipo terminal/dispositivo (ordenador o equipo móvil) con la finalidad de almacenar datos que podrán ser actualizados y recuperados por la entidad responsable de su instalación. Nuestra Plataforma utiliza “cookies” con la finalidad de poder recabar información acerca de su funcionamiento y uso de los usuarios.
                </p>
                <p>
                    Nosotros no almacenamos información sensible de identificación personal como tu dirección, contraseña, los datos de tu tarjeta de crédito o débito, etc. en las cookies que utilizamos.
                </p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Finalidad </h3>
                <p> Las cookies pueden recabar información sobre tus visitas a nuestra Plataforma, la frecuencia y duración de estas, las páginas visionadas y el tiempo que has estado en nuestra Plataforma. Te informamos de que podemos utilizar cookies con la finalidad de: </p>
                <ul>
                    <li>Identificar problemas para mejorar nuestra Plataforma.</li>
                    <li>Facilitar tu navegación en nuestra Plataforma.</li>
                    <li>Proporcionarte una mejor experiencia en su uso.</li>
                    <li>Distinguirte de otros usuarios.</li>
                </ul>
                <p>Asimismo, solicitamos tu consentimiento para utilizar cookies que nos permitan obtener más información acerca de tus preferencias y personalizar nuestra Plataforma para ajustarla a tus intereses. </p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Clases de cookies </h3>
                <p>Nuestra Plataforma utiliza cookies propias y de terceros con diferentes finalidades, concretamente:</p>
                <ol>
                    <li class="fw-bold">Cookies propias</li>
                    <p>Son enviadas a tu ordenador y gestionadas exclusivamente por nosotros para el mejor funcionamiento de la Plataforma. Estas cookies permanecen en tu navegador y nos permiten identificarte como usuario recurrente de la Plataforma, controlar la sesión de usuario, recordar la configuración de las cookies, reconocerte como usuario en caso de realizar trámites de identificación y personalizar tu contenido para ofrecerte contenidos adecuados a tus preferencias (cookies de personalización). </p>

                    <li class="fw-bold">Cookies de terceros</li>
                    <p>Las cookies de terceros son aquellas establecidas por un dominio diferente de nuestra Plataforma. En nuestra Plataforma utilizamos dos tipos de cookies de terceros:</p>
                    <p> <b> Cookies Técnicas:</b> Te permiten navegar a través de la Plataforma y utilizar los servicios en ella disponibles como, por ejemplo, controlar la comunicación de datos, realizar una compra, almacenar contenidos, personalizar el idioma y la moneda, los tests de comprobación de formato, compartir contenidos a través de redes sociales de acuerdo con los intereses del usuario, acelerar la carga de la página, etc., tales como Custora, Olark, Facebook, CloudFlare, Visual Website Optimizer.</p>
                    <p> <b> Cookies Analíticas:</b> Utilizamos Google Analytics, una herramienta de análisis web de Google que nos permite informarnos sobre cómo interactúan los usuarios de nuestra Plataforma. Asimismo, habilita cookies para saber desde qué página ha accedido el usuario y las utiliza para recopilar información de forma anónima y elaborar informes de tendencias de la Plataforma sin identificar a usuarios individuales. Puedes consultar más información sobre las cookies de Google Analytics y su funcionamiento en el sito web de: developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage</p>
                </ol>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Consentimiento</h3>
                <p>Al navegar y continuar en nuestra Plataforma, estarás consintiendo el uso de las cookies antes enunciadas en las condiciones contenidas en la presente Política de Cookies. </p>
                <p>Te informamos de que dado que las cookies no son necesarias para el uso de nuestra Plataforma, puedes bloquearlas o deshabilitarlas a través de la configuración de tu navegador. Si las bloqueas o deshabilitas podrás seguir usando nuestra Plataforma, aunque el uso de algunos de sus servicios podrá ser limitado y por tanto tu experiencia en nuestra Plataforma será menos satisfactoria.</p>
                <p>Si deseas revocar tu consentimiento informado respecto a nuestra política de cookies, deberás eliminarlas en tu dispositivo a través de la configuración de tus navegadores de internet. Estos son los enlaces de los distintos navegadores que informan sobre las cookies: </p>
                <p>
                    Firefox: <a href="https://www.mozilla.org/es-ES/privacy/websites/" target="_blank">https://www.mozilla.org/es-ES/privacy/websites/</a>
                </p>
                <p>
                    Chrome: <a href="http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647" target="_blank">http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647</a>
                </p>
                <p>
                    Explorer: <a href="http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9" target="_blank">http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9</a>
                </p>
                <p>
                    Safari: <a href="http://support.apple.com/kb/ph5042" target="_blank">http://support.apple.com/kb/ph5042</a>
                </p>
                <p>
                    Opera: <a href="http://help.opera.com/Windows/11.50/es-ES/cookies.html" target="_blank">http://help.opera.com/Windows/11.50/es-ES/cookies.html</a>
                </p>
                <p>Te recomendamos revisar esta política cada vez que accedas a nuestra Plataforma con el objetivo de estar adecuadamente informado sobre posibles cambios.</p>
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