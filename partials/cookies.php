<style>
    .cookie-alert1 {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 10px;
        text-align: center;
        display: none;
        z-index: 9999;
        background-color: rgba(255, 255, 255, 0.6)
    }

    .cookie-alert1>.container {
        margin-top: 150rem;
        background-color: white;
        border-radius: 20px;
        box-shadow: 0 11px 15px -7px rgb(0 0 0 / 20%), 0 24px 38px 3px rgb(0 0 0 / 14%), 0 9px 46px 8px rgb(0 0 0 / 12%);
    }

    .cookie-alert1 p {
        margin: 0;
    }

    .cookie-alert1 button {

        background-color: var(--color1);
        color: white;
        border: solid 2px var(--color1);
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    #button2 {

        background-color: white;
        color: var(--color1);
        border: solid 2px var(--color1);
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    #button2:hover {

        background-color: var(--color1);
        color: white;
        border: solid 2px var(--color1);
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
    }

    #fondo-cookie {
        height: 100%;
        background-color: rgba(255, 255, 255, 0.6);
    }
</style>
<div id="fondo-cookie">
    <div id="cookie-alert1" class="cookie-alert1 ">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col-lg-7 p-3">
                    <p> Al hacer clic en "Aceptar cookies", concedes permiso al almacenamiento de cookies en su dispositivo para
                        mejorar la navegación del sitio web, analizar su uso y mejorar nuestras acciones de marketing. </p>
                </div>
                <div class="col-lg d-flex justify-content-center pb-2">
                    <div class="col-lg my-auto mx-2"> <button id="button2" onclick="politicascookies()">Política de Cookies</button></div>
                    <div class="col-lg my-auto mx-2"> <button onclick="aceptarCookies()">Aceptar Cookies</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Muestra el aviso de cookies solo si no se ha aceptado previamente
        if (!localStorage.getItem('cookiesAccepted')) {
            mostrarAvisoCookies();
        }
    });

    function mostrarAvisoCookies() {
        var cookieAlert = document.getElementById('cookie-alert1');
        cookieAlert.style.display = 'block';
    }

    function politicascookies() {
        window.location.href = './politica-cookies.php';
    }

    function aceptarCookies() {
        var cookieAlert = document.getElementById('cookie-alert1');
        var bodyElement =
            cookieAlert.style.display = 'none';
        localStorage.setItem('cookiesAccepted', 'true');
    }
</script>