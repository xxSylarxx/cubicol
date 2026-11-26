<style>
    .abajo {
        /* background-color: #f4f4f4; */
        background: #fff;
        /* background: var(--color2); */
        box-shadow: 0 3px 3px rgba(94, 94, 94, 0.20);
		text-shadow: none!important;
    }

    .abajo .navbar-light .navbar-nav .nav-link {
        /* color: var(--color2); */
        color: #000 !important;
		text-shadow: none!important;
    }
	#header .navbar-light .navbar-nav .nav-link {
		text-shadow: none!important;
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

    /* boton hamburguesa sin sombras */
    #header .navbar-toggler,
    #header .navbar-toggler:focus {
        box-shadow: none !important;
        outline: none;
    }

    /* menu lateral derecho con X (tablet/movil). Se controla con el JS de abajo, no con collapse de Bootstrap */
    #header .menu-close,
    #header .menu-backdrop {
        display: none;
    }

    @media (max-width: 991px) {
        #header #navbarNav {
            display: block !important;
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh;
            width: min(320px, 85vw);
            margin: 0;
            padding: 4.5rem 1.5rem 2rem;
            background: #010000;
            overflow-y: auto;
            transform: translateX(100%);
            transition: transform .3s ease;
            z-index: 1050;
        }

        #header #navbarNav.open {
            transform: translateX(0);
        }

        #header .menu-close {
            display: block;
            position: absolute;
            top: 1rem;
            right: 1.25rem;
            background: none;
            border: 0;
            color: #fff;
            font-size: 28px;
            line-height: 1;
            padding: .25rem .5rem;
            box-shadow: none;
            cursor: pointer;
        }

        #header .menu-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .5);
            z-index: 1040;
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s ease;
        }

        #header .menu-backdrop.open {
            display: block;
            opacity: 1;
            pointer-events: auto;
        }

        #header #navbarNav .navbar-nav .nav-link,
        #header.abajo #navbarNav .navbar-nav .nav-link,
        #header #navbarNav .dropdown-item {
            color: #fff !important;
            text-shadow: none !important;
        }

        #header #navbarNav .navbar-nav .nav-item {
            margin: 0;
            display: block;
            border-bottom: 1px solid rgba(255, 255, 255, .15);
        }

        #header #navbarNav .navbar-nav .nav-item:last-child {
            border-bottom: 0;
        }

        #header #navbarNav .navbar-nav .nav-link {
            padding: .85rem 0;
            width: 100%;
        }

        /* submenu Productos: dentro del panel, sin popper */
        #header #navbarNav .dropdown-menu {
            position: static !important;
            transform: none !important;
            background: rgba(255, 255, 255, .1);
            border: 0;
            margin: 0 0 .75rem;
        }

        #header #navbarNav .dropdown-item:hover,
        #header #navbarNav .dropdown-item:focus {
            background: rgba(255, 255, 255, .15);
        }
    }

    @media (max-width: 500px) {
        #slider .titleContainer {
            padding-bottom: 78%;
        }
    }

    @media (min-width:501px) {}
</style>

<!-- <div id="head-top"></div> -->
<header class="fixed-top" id="header">

    <!-- <div class="barsup">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex justify-content-start">
                    <div class="d-flex mininav">
                        <div class="mininav-item my-2"><a href="mailto:ventas@sensoft.com.pe" target="_blank"> <i class="fas fa-envelope"></i> <span class="ms-2"> ventas@sensoft.com.pe </span> </a></div>
                        <div class="mininav-item my-2"><a href="tel:+902779069" target="_blank"> <i class="fas fa-phone"></i> <span class="ms-2"> +(51) 902 779 069 </span> </a></div>
                        <div class="d-flex flex-wrap justify-content-center align-items-center">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-end align-items-center">
                    <div class="d-flex mininav">
                        <div class="mininav-item my-2"><a href="https://www.facebook.com/cubicolperu" target="_blank"> <i class="fab fa-facebook"></i> </a></div>
                        <div class="mininav-item my-2"><a href="https://www.instagram.com/cubicolperu/" target="_blank"> <i class="fab fa-instagram"></i> </a></div>
                        <div class="mininav-item my-2"><a href="https://www.youtube.com/channel/UCDJVHgpw8T72oD_DVdYzzWA/videos" target="_blank"> <i class="fab fa-youtube"></i> </a></div>
                        <div class="d-flex flex-wrap justify-content-center align-items-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="logo1" src="./public/img/icons/cubicol-logo-negro.svg" alt="">
            </a>
            <button class="navbar-toggler" id="menuToggle" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="menu-backdrop" id="menuBackdrop"></div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <button class="menu-close" id="menuClose" type="button" aria-label="Cerrar menú">&times;</button>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="/">Cubicol</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link nav-link text-black" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="me-2">Productos</span>
                            <i class="fas fa-plus" style="font-size: 10px;"></i>
                        </a>
                        <div class=" dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item text-black" href="colegios">Colegios</a>
                            <a class="dropdown-item text-black" href="institutos">Institutos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="nosotros">Nosotros</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-black" href="nota">La Nota Cubicol</a>
                    </li> -->
                    <!--li class="nav-item">
                        <a class="nav-link text-black" href="servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="agencia">Agencia</a>
                    </li-->
                    <li class="nav-item">
                        <a class="nav-link text-black" href="contacto">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<script>
    // menu lateral (tablet/movil)
    (function() {
        var panel = document.getElementById('navbarNav');
        var backdrop = document.getElementById('menuBackdrop');
        var toggle = document.getElementById('menuToggle');

        function setMenu(open) {
            panel.classList.toggle('open', open);
            backdrop.classList.toggle('open', open);
            toggle.setAttribute('aria-expanded', open);
            document.body.style.overflow = open ? 'hidden' : '';
        }
        toggle.addEventListener('click', function() {
            setMenu(!panel.classList.contains('open'));
        });
        document.getElementById('menuClose').addEventListener('click', function() {
            setMenu(false);
        });
        backdrop.addEventListener('click', function() {
            setMenu(false);
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') setMenu(false);
        });
        // cierra al elegir un enlace (el desplegable "Productos" no cuenta)
        panel.querySelectorAll('a[href]:not([data-bs-toggle])').forEach(function(a) {
            a.addEventListener('click', function() {
                setMenu(false);
            });
        });
        window.addEventListener('resize', function() {
            if (window.innerWidth > 991) setMenu(false);
        });
    })();
</script>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        // var img1 = './public/img/icons/cubicol-logo-blanco.svg';
        // var img2 = './public/img/icons/cubicol-logo-negro.svg';

        // var boton1 = 'text-white';
        // var boton2 = 'text-black';

        header.classList.toggle("abajo", window.scrollY > 20);
        // document.querySelector(".logo1").setAttribute("src", window.scrollY > 150 ? img2 : img1)
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