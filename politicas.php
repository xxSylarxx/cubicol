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
                <h1 class="my-4">¡Hola! Conoce nuestra Política de Privacidad</h1>

                <p> <b> CUBICOL </b> se interesa en la privacidad de nuestros visitantes y clientes; por ende, estamos totalmente comprometidos con la protección de su información personal y con su correcto uso, en cumplimiento de la ley N° 29733, Ley de Protección de Datos Personales, su reglamento y sus modificaciones, que regulan el tratamiento de datos personales en nuestro país (Perú). Esta política describe cómo podemos recopilar, utilizar información personal, entre otros, así como los derechos y las opciones disponibles para nuestros visitantes, usuarios y clientes con respecto a dicha información.</p>

                <p> <b>Le recomendamos, encarecidamente, que lea esta política y se asegure de que la comprende completamente, antes de acceder a o utilizar cualquiera de nuestros servicios.</b> </p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Leer con atención:</h3>
                <p>
                    Esta política de privacidad de <b> CUBICOL </b> (en adelante, “Política de Privacidad”) describe como
                    nosotros (Sensoft Solutions E.I.R.L.) Tratamos la información relativa a cada <b> VISITANTE O CLIENTE </b>
                    así como de sus <b> ACTIVOS, </b> en relación con su acceso y uso del sitio web de
                    <b> CUBICOL </b> (incluyendo cualquiera de sus dominios), aplicaciones en la web, aplicaciones móviles,
                    servicios relacionados, entre otros.
                </p>
                <p>
                    El propósito de esta Política de Privacidad es dar una explicación clara acerca de cuándo, por qué
                    y cómo recopilamos y usamos su información personal (sensible o no), así como una explicación de sus
                    derechos establecidos. Esta Política de Privacidad no tiene la finalidad de sobrepasar los términos de
                    cualquier contrato que usted tenga con nosotros, ni ningún derecho que usted pueda tener bajo las leyes
                    aplicables respecto a la protección de datos personales en el Perú.
                </p>
                <p>
                    Si usted lee y comprende esta Política de Privacidad y continúa oponiéndose a nuestras buenas prácticas,
                    debe abandonar este sitio web, aplicación o servicio de inmediato y evitar o descontinuar todo uso de cualquiera
                    de nuestros Servicios. Si tiene alguna pregunta o inquietud respecto a esta política, póngase en contacto
                    con nosotros a <a href="mailto:ventas@sensoft.com.pe" target="_blank">ventas@sensoft.com.pe</a>
                </p>
                <p>
                    Recordar que, al acceder a o utilizar cualquiera de nuestros servicios, usted reconoce que ha leído esta
                    Política de Privacidad y brinda su expreso consentimiento para que podamos tratar sus datos personales de
                    acuerdo a la presente Política de Privacidad.
                </p>
                <p>
                    <b>El presente documento describe nuestras prácticas de privacidad (qué información recopilamos acerca de nuestros usuarios,
                        cómo la recopilamos, qué hacemos con ella, cómo la protegemos y sus derechos con respecto a su información).
                        Es menester precisar que con el solo acceso y al aceptar nuestra Política de Privacidad nos brinda su consentimiento
                        para tratar sus datos personales.</b>
                </p>


                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> ¿Qué información recopilamos? </h3>
                <p>Antes, debemos definir bajo qué modalidad se puede acceder y/o usar <b> CUBICOL: </b> </p>
                <ul>
                    <li> <b> VISITANTE </b> es la persona jurídica o persona natural con o sin negocio que visita <b> CUBICOL </b>
                        con el único fin de registrarse para requerir información comercial o técnica de nuestros servicios;
                        por tanto, esta modalidad tiene un fin netamente informativo.</li>
                    <li> <b> CLIENTE </b>, es la persona jurídica o persona natural con negocio que adquiera los Servicios
                        de pago de <b> CUBICOL.</b> En caso el <b> CLIENTE </b> sea persona jurídica podrá hacer uso de <b> CUBICOL </b> en la medida que se encuentre
                        debidamente representada por una persona natural que realice su registro y consigne los datos requeridos para tal fin.
                        El representante de la persona jurídica declara ser mayor de edad, tener los poderes suficientes para representar al <b> CLIENTE </b> y
                        estar en plena capacidad para contratar según las leyes peruanas. El <b> CLIENTE </b> declara haber accedido a <b> CUBICOL </b> por su propia voluntad;
                        asimismo, declara que el uso que lleva a cabo en <b> CUBICOL </b> lo hace por su sola y única cuenta y riesgo.</li>
                    <li> <b> ACTIVO </b> son los profesores, tutores, colaboradores, estudiantes, padres de familia y/o cualquier otra persona que
                        sea autorizada por un <b> CLIENTE </b> para acceder a la escuela que cualquiera de estos haya creado en <b> CUBICOL.</b> El <b> CLIENTE </b> otorgará
                        un código y una contraseña a cada <b> ACTIVO </b> para tener acceso a su plataforma en <b> CUBICOL.</b>
                    </li>
                </ul>


                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Información para VISITANTES Y CLIENTES </h3>
                <p>Recopilamos un tipo de información acerca de los accesos a nuestra plataforma:</p>

                <ol>
                    <li>La información identificable individualmente; es decir, información que identifica a un <b> VISITANTE y/o CLIENTE, </b>
                        inclusive con su información privada o sensible (en adelante, Información Personal). Por ejemplo, cuando recopilamos
                        información en formularios. </li>
                </ol>
                <p>La Información Personal recopilada por nosotros consiste principalmente en los datos de contacto
                    (por ejemplo: correo electrónico, nombre completo, número de teléfono, nombre del colegio, RUC,
                    cantidad de estudiantes, tipo de colegio), los datos de facturación (nombre, detalles de las transacciones,
                    método de pago, entre otros) que solo se recopilan de usuarios con servicios registrados con cuentas de paga
                    <b> (CLIENTE CUBICOL),</b> y cualquier otra Información Personal que nos suministren los <b> ACTIVOS </b> a través de su acceso
                    y/o uso de nuestros servicios.
                </p>
                <p>Para evitar cualquier duda, cualquier Información no personal que se encuentre conectada o vinculada a la Información Personal (por ejemplo, con el fin de mejorar los Servicios que ofrecemos) es considerada y tratada por nosotros como Información Personal, siempre y cuando exista tal conexión o enlace.</p>
                <p class="fw-bold">Recopilamos dos tipos de datos: Información Personal (que podría utilizarse para identificar a un individuo) e
                    Información No Personal (que es no identificable). Recopilamos información sobre nuestros VISITANTES Y/O CLIENTES,
                    así como de cualquier otra persona que pueda acceder de una u otra manera a nuestra plataforma.
                </p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> ¿Cómo recolectamos dicha información?</h3>
                <p>Las principales maneras que utilizamos son: </p>
                <ol>
                    <li>Recopilamos información a través del uso de los servicios.
                        Cuando usted visita o utiliza nuestros servicios, incluso cuando navega en el sitio web, registra una
                        Cuenta de Usuario, edita su Escuela, carga información y contenido y/o descarga y utiliza cualquier
                        Aplicación Web o Móvil de <b> CUBICOL,</b> tenemos conciencia de esto y usualmente recogeremos, recopilaremos y
                        registraremos dichos usos, sesiones e información relacionada, ya sea en forma independiente o con la ayuda
                        de terceros.
                    </li>
                    <li>Recopilamos información que usted nos proporciona voluntariamente. Por ejemplo, recopilamos la Información Personal que nos proporciona cuando se registra a nuestros Servicios; cuando se comunica con nosotros directamente por cualquier canal de comunicación (reclamos, sugerencias, envío de información, etc.).</li>
                    <li>También recopilamos información de fuentes de terceros como son los mismos colegios o centros educativos, así como la información pública que se puede tratar.</li>
                </ol>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> ¿Por qué recolectamos dicha información?</h3>
                <p>Recopilamos dicha Información Personal y No Personal, de corresponder, para los siguientes fines:</p>
                <ol>
                    <li> Para suministrar y operar los Servicios. </li>
                    <li> Para desarrollar, personalizar y mejorar nuestros Servicios, con base en las preferencias, experiencias y dificultades comunes o personales de los <b> VISITANTES y/o CLIENTES,</b> así como de sus <b> ACTIVOS. </b> </li>
                    <li> Para que nuestros <b> CLIENTES </b> disfruten de asistencia permanente y soporte técnico.</li>
                    <li> Para poder contactar a nuestros <b> VISITANTES y/o CLIENTES </b> con notificaciones generales o personalizadas y mensajes promocionales relacionados con el servicio.</li>
                    <li> Para crear datos estadísticos agregados y otra Información No Personal agregada o inferida, que nosotros o nuestros socios comerciales puedan utilizar para proporcionar y mejorar nuestros servicios respectivos.</li>
                    <li> Para mejorar la seguridad de los datos y capacidades de prevención del fraude.</li>
                    <li> Para cumplir con las leyes y normativas aplicables.</li>
                </ol>
                <p>Solamente utilizaremos su Información Personal para los fines enunciados en la Sección 4, donde estemos satisfechos de que:</p>
                <ol>
                    <li> Nuestro uso de su Información Personal es necesario para cumplir con una obligación legal o normativa relevante que tengamos. </li>
                    <li> Nuestro uso de su Información Personal es necesario para apoyar intereses legítimos que tenemos como negocio (por ejemplo, para mantener y mejorar nuestros Servicios mediante la identificación de tendencias de usuario y la eficacia y la identificación de asuntos técnicos), siempre y cuando este se conduzca en todo momento de forma tal que sea proporcionado, y que respete sus derechos de privacidad. </li>
                </ol>
                <p>Recordar que los padres de familia y/o apoderados deben supervisar las actividades de los menores de edad en todo momento, con el fin de salvaguardar la protección de sus datos personales. <b> SENSOFT </b> no será responsable por el mal uso de la información personal por parte de los <b> ACTIVOS y/o CLIENTES.</b> </p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> ¿Dónde almacenamos su información?</h3>
                <p>La Información Personal de los <b> VISITANTES y/o CLIENTES,</b> así como los de sus <b> ACTIVOS,</b> de <b> CUBICOL</b>
                    puede ser mantenida, procesada y almacenada por Sensoft Solutions E.I.R.L. y nuestros afiliados autorizados y proveedores
                    de servicios en los Estados Unidos de América, en Europa y otras jurisdicciones, según sea necesario para la adecuada prestación
                    de nuestros Servicios y/o pueda ser requerido por la ley (como se explica a continuación).</p>
                <p>Cada uno de los afiliados y proveedores de servicios de Sensoft Solutions E.I.R.L. que almacenan o procesan su información en nombre de nuestra empresa están comprometidos a mantenerla protegida y asegurada, conforme a los estándares de la industria y sin conformarse con los requerimientos legales menores aplicables en su jurisdicción.</p>
                <p>Sensoft Solutions E.I.R.L. es responsable del tratamiento de los datos personales que recibe, bajo la Ley de Protección de Datos Personales, y transferencias posteriores a un tercero que actúa como agente en su nombre. En ciertas situaciones, Sensoft Solutions E.I.R.L. puede ser obligado a revelar datos personales en respuesta a solicitudes legítimas de los poderes públicos, incluso para cumplir con los requisitos de seguridad o policiales nacionales, y lo hará donde sea permitido por las leyes locales de protección de datos.</p>
                <p>Los proveedores de almacenamiento de datos de Sensoft Solutions E.I.R.L. se comprometen a proteger y asegurar sus datos.</p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Información de los ACTIVOS</h3>
                <p>
                    Sensoft Solutions E.I.R.L. puede recopilar, almacenar y procesar cierta Información No Personal y Personal de los <b> ACTIVOS </b>,
                    exclusivamente para beneficio de los <b> CLIENTES </b> y bajo su dirección.
                </p>
                <p>
                    Sensoft Solutions E.I.R.L. es responsable por la seguridad, integridad y uso autorizado de la información
                    de los <b> ACTIVOS </b>, así como de la obtención de los consentimientos y de suministrarles las notificaciones de buen procesamiento
                    requeridos para la recopilación y uso de dicha información, siempre y cuando el <b> CLIENTE </b> cuente con el consentimiento de sus
                    <b> ACTIVOS </b> para el tratamiento de sus datos personales.
                </p>

                <p>Si usted es un <b> ACTIVO </b> y quisiera hacer cualquier solicitud o pregunta relacionada con su información,
                    póngase en contacto con el <b> CLIENTE </b> directamente. Por ejemplo, si desea acceder, corregir, enmendar o eliminar
                    información inexacta procesada por Sensoft Solutions E.I.R.L., dirija su consulta al <b> CLIENTE </b> relevante (que es el “Controlador” de estos datos).
                    Si se nos solicita que eliminemos información de algún <b> ACTIVO </b>, responderemos a esa petición dentro de los diez (10)
                    días hábiles o como nuestra regulación lo indique. A menos que el <b> CLIENTE </b> indique lo contrario, retendremos la Información
                    de los <b> ACTIVOS </b>.
                </p>
                <p>
                    Si usted es un <b> ACTIVO </b> menor de edad, Sensoft Solutions E.I.R.L. se responsabiliza de brindar un respaldo adicional teniendo en
                    cuenta la normativa establecida en el Perú para el tratamiento de los datos personales de los niños y adolescentes.
                </p>
                <p>También podemos recopilar, procesar, almacenar y utilizar dicha información en otros lugares, incluyendo en los Estados Unidos.</p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Compartir información personal con terceros</h3>
                <p>Sensoft Solutions E.I.R.L. puede compartir su información con terceros (o permitirles el acceso a ella) solo en las siguientes modalidades e instancias:</p>
                <ol>
                    <li class="fw-bold">Servicios de terceros: </li>
                    <p>Sensoft Solutions E.I.R.L. se ha asociado con una serie de proveedores de servicios seleccionados, cuyos servicios y soluciones complementan, facilitan y mejoran los nuestros. Estos incluyen co-localización de servicios de hospedaje y servidores, redes de entrega de comunicaciones y contenido (CDN), servicios de seguridad de datos y cibernética, servicios de facturación y procesamiento de pagos, registradores de dominios, servicios de detección y prevención de fraudes, análisis web, servicios de distribución y monitorización de correo electrónico, servicios de medición de rendimiento, optimización y marketing de datos, proveedores de contenido, y nuestros asesores legales y financieros (colectivamente, “Servicios de Terceros”).</p>
                    <p>Dichos Servicios de Terceros pueden recibir o de cualquier forma tener acceso a la información de nuestros
                        <b> VISITANTES y/o CLIENTES,</b> así como de Información No Personal y/o la Información Personal de los <b> ACTIVOS,</b> en su totalidad o en parte, en
                        función de cada una de sus funciones y propósitos particulares para facilitar y mejorar nuestros Servicios y negocios, y sólo podrán utilizarla
                        para tales fines.
                    </p>
                    <p>Tenga en cuenta que, aunque nuestros Servicios pueden contener enlaces a otros sitios web o servicios, no somos responsables de las prácticas de privacidad de dichos sitios web o servicios, y le instamos a tener esto en cuenta cuando salga de nuestros Servicios y leer las declaraciones de privacidad de todos y cada uno de los sitios web y servicios que usted visite antes de proporcionarles su Información Personal. Esta Política de Privacidad no se aplica a dichos sitios web vinculados y servicios de terceros.</p>

                    <li class="fw-bold">Aplicación de la ley, solicitudes y deberes legales:</li>
                    <p>Mientras las leyes de protección de datos lo permiten, Sensoft Solutions E.I.R.L. puede divulgar o permitir que otros accedan a su Información Personal en cumplimiento de una solicitud legal, como un procedimiento judicial, orden de allanamiento u orden judicial, o de conformidad con las leyes aplicables, si creemos de buena fe que la ley requiere que lo hagamos, con o sin previo aviso a usted.</p>

                    <li class="fw-bold">Protección de los derechos y la seguridad:</li>
                    <p>Sensoft Solutions E.I.R.L. puede compartir su Información Personal con otros si creemos de buena fe que esto ayudará a proteger los derechos, propiedad o seguridad personal de Sensoft Solutions E.I.R.L., cualquiera de nuestros usuarios, los usuarios de los usuarios, o cualquier miembro del público en general, con previo aviso a usted.</p>

                    <li class="fw-bold">Subsidiarias de Sensoft Solutions E.I.R.L. y empresas afiliadas:</li>
                    <p>Podemos compartir Información Personal internamente dentro de nuestra familia de compañías, para los fines descritos en esta Política de Privacidad. Además, si Sensoft Solutions E.I.R.L. o cualquiera de sus afiliados debe someterse a cualquier cambio en el control, incluso a través de fusión, adquisición o compra de sustancialmente todos sus activos, su Información Personal puede compartirse con los involucrados en dicho evento. Si tenemos buena fe de que tal cambio en el control podría afectar materialmente su Información Personal almacenada con nosotros, le notificaremos vía correo electrónico o aviso prominente en nuestro Sitio Web acerca de este evento y ciertas opciones que pueda tener con respecto a su Información Personal.</p>
                    <p>El intercambio de información personal de las subsidiarias de Sensoft Solutions E.I.R.L. y compañías afiliadas en el mundo se adhieren a los marcos legales en el Perú.</p>
                    <p class="fw-bold">Podemos compartir la información de nuestros VISITANTES y/o CLIENTES con varios terceros, incluyendo ciertos proveedores de servicios, agentes del orden y desarrolladores de aplicaciones.</p>
                    <p class="fw-bold">La información puede ser compartida únicamente de acuerdo con esta política o de acuerdo a ley.</p>
                </ol>


                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Comunicación de Sensoft Solutions E.I.R.L.</h3>
                <ol>
                    <li class="fw-bold"> Mensajes promocionales: </li>
                    <p>
                        Podemos usar su Información Personal para enviarle contenidos promocionales, mensajes o llamadas de Sensoft Solutions E.I.R.L. o nuestros socios (que actúan en nombre de Sensoft Solutions E.I.R.L.) a través de dichos medios.
                    </p>
                    <p>
                        Si no desea recibir estos mensajes o llamadas promocionales, puede notificar a Sensoft Solutions E.I.R.L. en cualquier momento o seguir las instrucciones para desuscribirse, las cuales están contenidas en las comunicaciones promocionales que recibe o recibirá.
                    </p>

                    <li class="fw-bold">Mensajes de servicio y facturación: </li>
                    <p>Sensoft Solutions E.I.R.L. también puede ponerse en contacto con información importante acerca de nuestros Servicios, o del uso de los mismos. </p>
                    <p>Por ejemplo, podemos enviarle un aviso (a través de cualquiera de los medios disponibles para nosotros) si un determinado servicio está suspendido temporalmente por mantenimiento o por falta de pago; responder a su solicitud o correo electrónico de ayuda; enviarle recordatorios o avisos con respecto a los pagos futuros o tardíos de sus suscripciones actuales o futuras; reenviar quejas de abuso respecto a su sitio web o plataforma de usuario, o notificarle de cambios importantes en nuestros servicios. </p>
                    <p>Es importante que usted siempre esté disponible para recibir estos mensajes. Por esta razón, no podrá optar por no recibir este tipo de mensajes de Servicio y Facturación a menos que ya no sea un visitante, usuario o cliente de CUBICOL (lo que puede hacerse desactivando su cuenta). </p>
                </ol>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Sus derechos en relación con su Información Personal</h3>
                <p>Es imperativo que tenga control sobre su información personal. Por eso, Sensoft Solutions E.I.R.L. está tomando medidas para permitirle acceder, recibir una copia, actualizar, modificar, eliminar o limitar el uso de su información personal.</p>
                <p>Antes de divulgar la Información personal solicitada, podemos solicitarle información adicional para confirmar su identidad y para fines de seguridad. Nos reservamos el derecho de cobrar una tarifa cuando lo permita la ley (por ejemplo, si su solicitud es infundada o excesiva).</p>
                <p>Tiene derecho a presentar una queja ante su autoridad de supervisión local para la protección de datos (pero aun así le recomendamos que se comunique con nosotros primero).</p>
                <p>Si usted es un <b> VISITANTE y/o CLIENTE </b> de <b> CUBICOL </b> y desea recibir una copia, acceder y/o solicitar que hagamos correcciones a la Información Personal que ha almacenado con nosotros (ya sea la suya o la de los usuarios de los usuarios), o desea solicitar una lista de qué información personal (si corresponde) que le pertenece y que divulgamos a terceros para fines de marketing directo, contáctese con nosotros. Haremos todos los esfuerzos razonables para cumplir con su solicitud de inmediato (a menos que necesitemos más información de usted para cumplir con su solicitud), sujeto a consideraciones legales y otras consideraciones permitidas.</p>
                <p>También puede corregir, actualizar o eliminar ciertas partes de dicha Información Personal por sí mismo, a través de su Cuenta de Usuario o de la configuración de sus perfiles.</p>
                <p>Tenga en cuenta que, la eliminación permanente de su cuenta <b> CUBICOL </b> borra toda su información de las bases de datos de Sensoft Solutions E.I.R.L. Después de completar este proceso, ya no podrá utilizar ninguno de los servicios de <b> CUBICOL </b>, su cuenta y todos sus datos serán eliminados de forma permanente y Sensoft Solutions E.I.R.L. no podrá restaurar su cuenta ni recuperar sus datos en el futuro. Si se pone en contacto con Sensoft Solutions E.I.R.L. en el futuro, el sistema no reconocerá su cuenta y los agentes de Servicio al Cliente no podrán localizar la cuenta eliminada.</p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Retención de datos</h3>
                <p> Podemos conservar su Información Personal o Datos Personales (así como la Información de los Usuarios de sus Usuarios) durante el tiempo que su cuenta de usuario esté activa, como se indica en esta Política de Privacidad, o cuando sea necesario para ofrecerle nuestros Servicios.</p>
                <p> Podemos seguir conservando dicha Información Personal, incluso después de desactivar su Cuenta de Usuario y/o dejar de utilizar cualquiera de los Servicios, según sea razonablemente necesario para cumplir con nuestras obligaciones legales, resolver disputas acerca de nuestros Usuarios o los Usuarios de sus Usuarios, prevenir el fraude y abuso, hacer cumplir nuestros acuerdos y/o proteger nuestros intereses legítimos.</p>
                <p> Mantenemos una política de retención de datos que aplicamos a la información a nuestro cuidado. Cuando ya no se requiera su Información Personal, nos aseguraremos de eliminarla de forma segura.</p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Seguridad de la información</h3>
                <p>Sensoft Solutions E.I.R.L. ha implementado medidas de seguridad diseñadas para proteger los Datos Personales que usted comparte con nosotros y en mayor proporción los datos sensibles que obtenemos, cumplimos con medidas físicas, electrónicas y de procedimientos. Además, monitoreamos regularmente nuestros sistemas en busca de posibles vulnerabilidades y ataques, y regularmente buscamos nuevas maneras y Servicios de Terceros para mejorar aún más la seguridad de nuestros Servicios y la protección de la privacidad de nuestros visitantes, usuarios y clientes.</p>
                <p>A pesar de las medidas y los esfuerzos realizados por Sensoft Solutions E.I.R.L., no podemos y no garantizamos la protección y seguridad absoluta de su Información Personal, la Información de los Usuarios de sus Usuarios o cualquier otro Contenido de Usuario que suba, publique o comparta con <b> CUBICOL. </b> </p>
                <p>Por lo tanto, lo/la invitamos a establecer contraseñas seguras para su Cuenta de Usuario y Sitio Web de <b> CUBICOL </b> y evitar proporcionar, a nosotros o a cualquier tercero, información confidencial que usted crea que su divulgación podría causar un daño sustancial o irreparable. Si tiene preguntas respecto a la seguridad de nuestros servicios, está invitado a contactarnos en <a href="mailto:ventas@sensoft.com.pe" target="_blank">ventas@sensoft.com.pe</a> </p>


                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Foros públicos y contenido de usuario</h3>
                <p>Nuestros Servicios ofrecen blogs de acceso público, comunidades y foros de soporte. Tenga en cuenta que cualquier información que proporcione en dichas zonas puede ser leída, recopilada y utilizada por otras personas que acceden a ellos. Para solicitar la eliminación de su Información Personal de nuestros blogs, comunidades o foros, no dude en contactar con nosotros en: <a href="mailto:ventas@sensoft.com.pe" target="_blank">ventas@sensoft.com.pe</a> </p>
                <p>Si sube cualquier Contenido de Usuario a su Cuenta de Usuario o lo publica en su Sitio Web de Usuario y lo suministra en cualquier otra forma como parte del uso de cualquier Servicio, lo hace bajo su propio riesgo.</p>
                <p>Hemos puesto medidas de seguridad adecuadas para proteger sus datos personales y con mucho más cuidado sus datos sensibles. Sin embargo, no podemos controlar las acciones de otros Usuarios o miembros del público que puedan acceder a su Contenido de Usuario, y no somos responsables de la elusión de cualquier configuración de privacidad o medidas de seguridad que usted o nosotros podamos haber colocado en su Sitio Web de Usuario (incluyendo, por ejemplo, áreas protegidas por contraseña en su Sitio Web de Usuario). Usted entiende y reconoce que, incluso después de su retirada por usted o nosotros, pueden permanecer copias del Contenido de Usuario visibles en las páginas en caché y archivadas o si cualquier tercero (incluyendo cualquiera de los Usuarios de sus Usuarios) han copiado o almacenado dicho Contenido de Usuario. Para aclarar, recomendamos que no cargue ni publique cualquier información que no quiera que sea pública.</p>

                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Actualizaciones</h3>
                <p>Podemos actualizar esta Política de Privacidad según sea requerido por la ley o reglamento aplicable, y para reflejar cambios en nuestras prácticas de recolección uso y almacenamiento de información. Si hacemos algún cambio que consideremos “importante” (en nuestra sola discreción de buena fe), le notificaremos antes de que el cambio entre en efecto. Le encarecemos revisar periódicamente esta página para conocer la última información sobre nuestras prácticas de privacidad.</p>
                <p>A menos que se afirme otra cosa, nuestra Política de Privacidad aplica a toda la información que tenemos acerca de usted y los Usuarios de sus Usuarios, con respecto a su Sitio Web, Aplicaciones de Sensoft Solutions E.I.R.L. y otros Servicios.</p>


                <h3 class="fw-bold mt-4"> <i class="fas fa-check"></i> Póngase en contacto con nosotros</h3>
                <p>Si tiene alguna pregunta sobre esta Política de Privacidad o desea ejercer cualquiera de sus derechos como titular de sus datos personales, póngase en contacto con nosotros.</p>
                <p>Intentaremos solucionar cualquier queja respecto al uso de su Información Personal de acuerdo con esta Política de Privacidad.</p>
                <p>¿Tiene preguntas o sugerencias? ¡No dudes en escribirnos!</p>
                <p>Correos de contacto: <a href="mailto:ventas@sensoft.com.pe" target="_blank">ventas@sensoft.com.pe</a> </p>

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