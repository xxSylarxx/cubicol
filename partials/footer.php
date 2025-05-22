<style>
    .topcontrol {
        position: fixed;
        bottom: 30px;
        right: 20px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        /* background: #00D553; */
        /* width: 50px; */
        /* height: 50px; */
        /* padding-top: 6px; */
        /* padding-left: 9px; */
        /* border: 2px solid white; */
        /* border-radius: 50%; */
        transition: all 2 ease-in-out;
    }

    .topcontrol:hover {
        transform: scale(1.06);
    }

    .topcontrol i {
        color: var(--color1);
        font-size: 46px;
    }

    .topcontrol2 {
        position: fixed;
        bottom: 80px;
        right: 80px;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        width: 180px;
        height: 30px;
        background: #F8F9FA;
        border-radius: 0.25rem;
        border: 1px solid #dee2e6;
        /* padding-top: 6px; */
        /* padding-left: 9px; */
        /* border-radius: 50%; */
        transition: all 2 ease-in-out;
    }

    .topcontrol2 span {
        text-align: center;
        font-weight: bold;
        color: var(--color1);
        padding: 1rem 2rem;
    }

    .topcontrol4 {
        position: fixed;
        bottom: 50px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        background-color: #000;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol4 img {
        height: 32px;
        width: 30px;
        margin-top: 5px;
        margin-left: 2px;
    }

    .topcontrol4:hover {
        transform: scale(1.08);
    }

    .topcontrol5 {
        position: fixed;
        bottom: 112px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        /* background: rgb(123, 56, 174); */
        background: linear-gradient(74deg, rgba(123, 56, 174, 1) 0%, rgba(237, 27, 32, 1) 37%, rgba(237, 32, 31, 1) 55%, rgba(236, 12, 35, 1) 67%, rgba(249, 202, 0, 1) 100%);
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol5 i {
        /* height: 28px; */
        /* width: 32px; */
        color: white;
        font-size: 36px;
        margin-top: 4px;
        margin-left: 2px;
    }

    .topcontrol5:hover {
        transform: scale(1.08);
    }

    .topcontrol6 {
        position: fixed;
        bottom: 4%;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        /* background-color: #00A884; */
        background-color: #28C44C;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol6 i {
        /* height: 50px; */
        /* width: 50px; */
        font-size: 36px;
        margin-top: 4px;
        margin-left: 1px;
        color: white;
    }

    .topcontrol6:hover {
        transform: scale(1.08);
    }

    .topcontrol7 {
        position: fixed;
        bottom: 4%;
        /* right: 95%; */
        right: 5%;
        /* opacity: 0.8; */
        /* cursor: pointer; */
        z-index: 100;
        color: #28C44C;
        background-color: #efefef;
        /* width: 50px; */
        /* height: 50px; */
        padding: 10px 20px;
        /* border: 2px solid white; */
        border-radius: 10px;
        transition: all 3 ease-in-out;
    }

    .topcontrol7 img {
        height: 33px;
        width: 23px;
        margin-top: 5px;
        margin-left: 5px;
    }

    .topcontrol7:hover {
        transform: scale(1.02);
    }

    .politicas {
        margin-left: 1rem;
        font-size: 14px;
        color: var(--color1);
        cursor: pointer;
    }

    @media (max-width: 500px) {

        .topcontrol {
            display: none;
        }

        .topcontrol2 {
            display: none;
        }

        .topcontrol7 {
            display: none;
        }

        .topcontrol4,
        .topcontrol5,
        .topcontrol6 {
            right: 3%;
        }

        #misionVision .item {
            padding: 1rem;
            height: 520px;
        }

        #galeria .texto {
            padding: 2rem 1.6rem;
        }

        #galeria .texto .image img {
            display: none;
        }

        /* .politicas {
            display: none;
        } */

    }
</style>

<footer id="footer">

    <a href="#" style="position: absolute; right: 20px; top: 10px; font-size: 36px;">
        <span style="color: var(--color1);"><i class="fas fa-chevron-circle-up"></i></span>
    </a>

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-3">
                <div>
                    <img src="./public/img/icons/cubicol-logo-blanco.svg" height="60" alt="">
                    <!-- <h5 class="title text-white mb-3">Nosotros</h5> -->
                    <p class="mt-4" style="text-align: justify; color: #CECECE; font-size: 14px; line-height: 2;">
                        La plataforma digital intuitiva, práctica, capaz de adaptarse a todas las necesidades y métodos de trabajo de las instituciones educativas.
                    </p>
                    <a class="text-decoration-underline" href="politicas">Politicas de Privacidad</a>
                    <a class="text-decoration-underline" href="cookies">Politicas de Cookies</a>
                </div>
            </div>

            <div class="col-lg-3 mt-md-0 mt-3">
                <h5 class="title text-white mb-3">Nuestro Módulos</h5>
                <a href="colegios" style="color: #CECECE; font-size: 14px;">Módulo Tesorería</a> <br>
                <a href="colegios" style="color: #CECECE; font-size: 14px;">Módulo Académico</a> <br>
                <a href="colegios" style="color: #CECECE; font-size: 14px;">Módulo Intranet</a> <br>
                <a href="colegios" style="color: #CECECE; font-size: 14px;">Módulo Admisión</a> <br>
                <a href="colegios" style="color: #CECECE; font-size: 14px;">Módulo Biblioteca</a> <br>
                <a href="colegios" style="color: #CECECE; font-size: 14px;">Módulo Talleres</a>
            </div>

            <div class="col-lg-3 mt-md-0 mt-3">
                <h5 class="title text-white mb-3">Contáctanos</h5>
                <!--<p style="color: #CECECE; font-size: 14px;"> <b> Dirección: </b> Avenida José Galvez Barrenechea 592, San Isidro.</p>-->
                <p style="color: #CECECE; font-size: 14px;"> <b> Email: </b> <a style="color: #CECECE; font-size: 14px;" href="mailto:ventas@sensoft.com.pe">ventas@sensoft.com.pe</a> </p>
                <p style="color: #CECECE; font-size: 14px;"> <b> Celular: </b> <a style="color: #CECECE; font-size: 14px;" href="tel:902779069">902 779 069</a> </p>
                <p style="color: #CECECE; font-size: 14px;"> <b> Atención: </b> Lun a Vie: 8 am - 6 pm / Sábados: 9 am - 2 pm</p>
            </div>

            <!-- <div class="col-lg-3 mt-md-0 mt-3">
                <h5 class="title text-white mb-3">Horario</h5>
                <p style="color: #CECECE; font-size: 14px;">
                    Visítanos en nuestras oficinas:
                </p>
                <p style="color: #CECECE; font-size: 14px;">
                    <span style="color: var(--color1); margin-right: 3px; font-size: 18px;"><i class="fas fa-calendar-alt"></i></span>
                    lunes a viernes de 9 am a 5 pm
                </p>
                <p style="color: #CECECE; font-size: 14px;">
                    <span style="color: var(--color1); margin-right: 3px; font-size: 18px;"><i class="fas fa-calendar-alt"></i></span>
                    Sábados de 9 am a 12 pm
                </p>
            </div> -->

            <div class="col-lg-2 mt-md-0 mt-3">
                <h5 class="title text-white mb-3">Nuestras Apps</h5>
                <img src="./public/img/icons/apple.png" height="50" alt="">

                <img class="mt-md-4" src="./public/img/icons/google_play.png" height="50" alt="">
            </div>

        </div>
    </div>

    <br>

    <section class="container-fluid pt-2 pb-3" style="border-top: 1px solid var(--color1)">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <p class="my-1 text-center" style="font-size: 14px; color: #fff">Cubicol 2023 © todos los derechos reservados. Desarrollado por SENSOFT SOLUTIONS.</p>
                    <!-- <p class="my-1 text-center politicas" data-bs-toggle="modal" data-bs-target="#politicasFooter"> Conoce nuestras políticas de privacidad </p> -->
                </div>
                <!-- <div class="col d-flex justify-content-end align-items-center">
                    <p class="my-1 text-center" style="font-size: 14px; color: #fff">Desarrollado por <a href="https://www.cubicol.pe/agencia/" target="_blank" style="color: var(--color1); font-weight: bold;">Sensoft Solutiones</a></p>
                </div> -->
            </div>
        </div>
    </section>

    <!-- <div class="topcontrol">
        <a href="#">
            <span>
                <i class="fas fa-arrow-alt-circle-up"></i>
            </span>
        </a>
    </div> -->
    <!-- <div class="topcontrol">
        <a href="" target="_blank">
            <span>
                <i class="fab fa-whatsapp fa-2x"></i>
            </span>
        </a>
    </div> -->
    <!-- <div class="topcontrol2">
        <span>¿Conversamos?</span>
    </div> -->
    <!-- <div class="topcontrol4">
        <a href="https://www.youtube.com/channel/UCDJVHgpw8T72oD_DVdYzzWA/videos" target="_blank">
            <img src="./public/img/icons/tiktok.png" alt="">
        </a>
    </div> -->
    <!-- <div class="topcontrol5">
        <a href="https://www.instagram.com/cubicolperu/" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
    </div> 
	
   <!-- <div class="topcontrol6">
        <a href="https://api.whatsapp.com/send?phone=51902779069&text=Estoy%20visitando%20la%20pagina%20web%20y%20deseo%20m%C3%A1s%20informaci%C3%B3n" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div> -->
    <!-- <div class="topcontrol7">
        <div>
            <span>Solicita una demostración</span>
        </div>
    </div> -->

</footer>