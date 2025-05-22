<style>
    .abajo {
        /* background-color: #f4f4f4; */
        background: #fff;
        /* background: var(--color2); */
        box-shadow: 0 3px 3px rgba(94, 94, 94, 0.20);
    }

    .abajo .navbar-light .navbar-nav .nav-link {
        /* color: var(--color2); */
        color: #000 !important;
    }

    .abajo .barsup {
        display: none;
    }

    .btnBG {
        background: var(--color1);
        padding: .5rem;
    }

    .btnBG:hover {
        background: #992d2f;
    }

    @media (max-width: 500px) {
        .abajo .navbar-light .navbar-nav .nav-link {
            color: #fff !important;
        }
    }

    @media (min-width:501px) {}
</style>

<!-- <div id="head-top"></div> -->
<header class="fixed-top" id="header">

    <div class="barsup">
        <div class="container">
            <div class="row">
                <div class="col-md col-6 d-flex justify-content-md-start align-items-center">
                    <div class="d-flex mininav">
                        <div class="mininav-item my-2"><a href="mailto:ventas@sensoft.com.pe" target="_blank"> <i class="fas fa-envelope"></i> <span class="ms-2"> ventas@sensoft.com.pe </span> </a></div>
                        <div class="mininav-item my-2"><a href="tel:+902779069" target="_blank"> <i class="fas fa-phone"></i> <span class="ms-2"> +(51) 902 779 069 </span> </a></div>
                    </div>
                </div>
                <div class="col-md col-6 d-flex justify-content-end align-items-center">
                    <div class="d-flex mininav">
                        <div class="mininav-item my-2"><a href="https://www.facebook.com/cubicolperu" target="_blank"> <i class="fab fa-facebook"></i> </a></div>
                        <div class="mininav-item my-2"><a href="https://www.instagram.com/cubicolperu/" target="_blank"> <i class="fab fa-instagram"></i> </a></div>
                        <div class="mininav-item my-2"><a href="https://www.youtube.com/channel/UCDJVHgpw8T72oD_DVdYzzWA/videos" target="_blank"> <i class="fab fa-youtube"></i> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="logo1" src="./public/img/icons/cubicol-logo-blanco.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Cubicol</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link nav-link" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="me-2">Productos</span>
                            <i class="fas fa-plus" style="font-size: 10px;"></i>
                        </a>
                        <div class=" dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="/colegios">Colegios</a>
                            <a class="dropdown-item" href="/institutos">Institutos</a>
                          <!--  <a class="dropdown-item">Academias </a> -->
                         <!--   <a class="dropdown-item">Centros de capacitación</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="nota">La Nota Cubicol</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="/servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/agencia">Agencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        var img1 = './public/img/icons/cubicol-logo-blanco.svg';
        var img2 = './public/img/icons/cubicol-logo-negro.svg';

        // var boton1 = 'text-white';
        // var boton2 = 'text-black';

        header.classList.toggle("abajo", window.scrollY > 150);
        document.querySelector(".logo1").setAttribute("src", window.scrollY > 150 ? img2 : img1)
        // document.querySelector(".boton").setAttribute("class", window.scrollY > 150 ? boton1 : boton2)
    })
</script>

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

<!-- <script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('head-top').style.height = height + "px";
</script> -->