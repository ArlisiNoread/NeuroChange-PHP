<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["formFilled"]) && false) {
    include './index.php';
} else if (!$_SESSION["formFilled"] && false) {
    include './index.php';
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Neurochange</title>
            <link href="https://necolas.github.io/normalize.css/8.0.0/normalize.css" rel="stylesheet">
            <link rel="icon" href="./assets/img/logo/favicon.ico" type="image/x-icon" />
            <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="./assets/fonts/font-awesome.min.css">
            <link rel="stylesheet" href="./assets/fonts/ionicons.min.css">
            <link rel="stylesheet" href="./assets/css/Carousel-Hero.css">
            <link rel="stylesheet" href="./assets/css/Footer-Basic.css">
            <link rel="stylesheet" href="./assets/css/header-1.css">
            <link rel="stylesheet" href="./assets/css/header-2.css">
            <link rel="stylesheet" href="./assets/css/header-2.css">
            <link rel="stylesheet" href="./assets/css/header.css">
            <link rel="stylesheet" href="./assets/css/Highlight-Clean.css">
            <link rel="stylesheet" href="./assets/css/styles.css">
            <link rel="stylesheet" href="./assets/css/styles2.css">
            <link rel="stylesheet" href="./assets/css/styles3.css">
            <link rel="stylesheet" href="./assets/css/banner-box.css">
            <link rel="stylesheet" href="./assets/css/responsividad.css">
            <link rel="stylesheet" href="./assets/css/mouse.css">
            <link rel="stylesheet" href="./assets/css/close-button.css">
            <link rel="stylesheet" href="./assets/css/estilosNavBar.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400i,700i" rel="stylesheet"> 


        </head>

        <body>




            <nav id="barraNavegacion" class="navbar sticky-top navbar-light navbar-expand-md" style="background-color: white">
                <div class="container-fluid">

                    <a class="navbar-brand" href="#"><img class="logo" src="assets/img/logo/Logo.png" /></a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end fill" id="navcol-1">
                        <ul id="coloresSelectoresNav" class="nav navbar-nav">
                            <li class="nav-item hover-color" role="presentation">
                                <a class="nav-link active" href="#">Inicio</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#neurogame-id">Neurogame</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#porque">¿Porqué Neurogame?</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#sobre">Sobre Margoth Ramírez</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#main-imagen-2">¿Quiénes Somos?</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#contacto">Contacto</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>



            <!-- 
            **************************************************
            Background fijo 1
            **************************************************
            -->
            <div id="main-imagen" class="section-banner-box" style="background-image: url(assets/img/background/cerebrales.jpg); padding-top: 0px; padding-bottom: 0px; background-size: cover; -webkit-background-size:cover;">
                <div class="upper-floating-container">
                    <!-- COMPONENTES INTERNOS -->
                    <div id="floating-container">
                        <h1 class="textouno"><b><i>Demuestra</i></b> la efectividad de tú programa de capacitación o coach dando:</h1>
                        <p class="hipertexto">Seguimiento<br>Reforzamiento<br>Práctica<br>Y<br>Evaluación</p>
                        <div>
                            <p class="subtexto"><b>Todo esto de manera automatizada</b></p>
                            <p class="last-neuro-text"><b>Neurochange Consulting</b></p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="mouse-icon">
                <div class="wheel"></div>
            </div>

            <div id="neurogame-id" class="primera-seccion container-fluid ajuste-responsivo" id="neurogame-id">
                <div id="" class="container">
                    <div class="row">
                        <div id="div-primera-seccion-col-left" class="col col-xs-12 col-12 col-sm-12  col-md-6">
                            <h3><b>NeuroGame</b><i id="puzzle-piece" class="fas fa-puzzle-piece"></i></h3>
                            <p>¿Te imaginas entregar a tus clientes resultados <b>
                            </b> de tu proceso de capacitación o coach, dar un servicio mucho más integral que el de sólo capacitar y lograr mayores ventas?</p>
                        </div>
                        <div class="col col-xs-12 col-12 col-sm-12  col-md-6 ">
                            <div id="div-iframe ajuste-responsivo">
                                <div align="center" class="embed-responsive embed-responsive-16by9 video-escaleras ">

                                    <video playsinline autoplay muted loop preload="true" class="embed-responsive-item" height="auto" width="auto">
                                        <source src="./assets/video/Video.MOV" type="video/mp4">
                                    </video>

                                    <!--
                                    <video playsinline autoplay muted loop preload="true" class="embed-responsive-item" height="auto" width="auto">
                                        <source src="./assets/video/cerebro.mp4" type="video/mp4">
                                    </video>
                                    -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="line-zero" style="font-size: 0px;">
                <img class="imagenCompleta img-fluid" src="assets/img/background/CurvaAzulOscuro.png" style="background-color: rgb(13,15,25)">
            </div>



            <div class="container-fluid segunda-seccion ajuste-responsivo " style="text-align: center">
                <div class="container">
                    <div id="div-contenedor-columnas-seccion2" class="row">
                        <div id="segunda-seccion-col1" class="col col-xs-12 col-12 col-sm-12  col-md-6">

                            <div class="container segunda-seccion-col" style="text-align: center;">
                                <h3 style="color: white; font-size: 35px;"><b>NeuroGame Solution</b></h3>
                                <h3 style="margin-bottom: 20px; font-size: 25px">Nuestro Producto Estrella</h3>
                                <i id="check" class="fas fa-check"></i>
                                <p class="seguimiento" style="font-size: 25px;">¡Dar seguimiento, reforzamiento, práctica y evaluación automatizada, después de tu programa de capacitación o coach, <b>ya es posible</b>!</p>
                                <button type="button" id="boton-abierto-masInformacion-flotante" class="btn btn-secondary btn-lg btn-block"><b>Más Información</b></button>

                            </div>



                        </div>
                        <div id="segunda-seccion-col2" class="col col-xs-12 col-12 col-sm-12  col-md-6">
                            <div class="container segunda-seccion-col segunda-seccion-blanco" style="text-align: center !important;">

                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Ehv23nWu7Lo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="masInformacion-flotante" class="container">
                <a id="boton-cerrado-masInformacion-flotante" class="close"></a>
                <p>Más Información</p>
                <div class="container" style="overflow-y: scroll">
                    <p><b>NeuroChange Consulting</b><br>Ha conjuntado la <b>neurociencia y las tecnologías de la información y la comunicación</b> para conformar una herramienta que facilite el desarrollo de habilidades de tus educandos.</p>

                    <p>Después de la capacitación que otorgues en temas como: <b>Liderazgo, Trabajo e Equipo, Motivación, Creatividad, Innovación, Negociación, Seguimiento, Generación de Resultados, Cumplimiento de Compromisos</b>; entre otros. Tus capacitados participan en un juego para ganar puntos a través de nuestra herramienta.</p>

                    <p><b>NeuroGame</b> está diseñado para que los participantes hagan suyo el conocimiento y pasen de la memoria de corto a largo plazo, así como desarrollen habilidades a través de la repetición y la práctica.</p>

                </div>
            </div>
            <div id="porque" class="imagenCompleta line-zero">
                <img class="imagenCompleta img-fluid" src="assets/img/background/CurvaBlanca.png" style="background-color: rgb(0, 49, 82);">
            </div>
            <div class="container-fluid tercera-seccion">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12 col-12 col-sm-12 col-md-6">
                            <div class="container">
                                <p style="font-size: 30px;"><b class="porque">¿Porqué elegir Neurochange Consulting?</b></p>

                                <p style="color: rgb(0, 49, 82);">Sabemos que el juego es un mecanismo natural arraigado genéticamente en nuestro cerebro que despierta la curiosidad, la alegría y facilita el aprendizaje para desenvolvernos mejor en el mundo que nos rodea.</p>

                                <blockquote class="blockquote">
                                    <p class="mb-0"><b class="humanojuega">El humano es solo plenamente humano cuando juega.</b></p>
                                    <footer class="blockquote-footer">F.V. Schiller</footer>
                                </blockquote>

                            </div>
                        </div>
                        <div id="deslizable-responsive" class="col col-xs-12 col-12 col-sm-12 col-md-6">
                            <div class="container texto-deslizable" style="background-color: white">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active item-texto-deslizable">
                                            <div class="row">
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-3 number-in-text">
                                                    <p class="" style="color: rgb(179, 35, 23)">01.</p>
                                                </div>
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-9 text-slider-config">
                                                    <p style="text-align: left">Genera placer y satisfacción, ya que el participante pone a prueba el conocimiento adquirido en el aula, lo que lo mantiene enfocado, divertido y aprendiendo.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item-texto-deslizable">
                                            <div class="row">
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-3 number-in-text">
                                                    <p class="" style="color: rgb(239, 65, 53)">02.</p>
                                                </div>
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-9 text-slider-config">
                                                    <p style="text-align: left">Ayuda a que se asuma con normalidad el error ya que le permite al usuario mejorar a través de la práctica esto contribuye a su tranquilidad y por tanto al aprendizaje.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item-texto-deslizable">
                                            <div class="row">
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-3 number-in-text">
                                                    <p class="" style="color: rgb(247, 143, 30)">03.</p>
                                                </div>
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-9 text-slider-config">
                                                    <p style="text-align: left">Estimula la curiosidad, el juego permite al participante descubrir nuevas posibilidades ayudándolo a ser más creativo y consciente, ya que al ir avanzando se irá preguntando sobre qué decisiones tomar.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item-texto-deslizable">
                                            <div class="row">
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-3 number-in-text">
                                                    <p class="" style="color: rgb(255, 196, 37)">04.</p>
                                                </div>
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-9 text-slider-config">
                                                    <p style="text-align: left">Favorece la interiorización de conceptos adquiridos (en la capacitación previa), así como valores y normas de comportamiento.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item-texto-deslizable">
                                            <div class="row">
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-3 number-in-text">
                                                    <p class="" style="color: rgb(120, 29, 126)">05.</p>
                                                </div>
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-9 text-slider-config">
                                                    <p style="text-align: left">Estimula el desarrollo de la inteligencia social, y favorece la aplicación del comportamiento deseado al mimetizarse con el comportamiento colectivo.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item-texto-deslizable">
                                            <div class="row">
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-3 number-in-text">
                                                    <p class="" style="color: rgb(147, 111, 177)">06.</p>
                                                </div>
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-9 text-slider-config">
                                                    <p style="text-align: left">Favorece la cooperación a través del juego en grupo.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item-texto-deslizable">
                                            <div class="row">
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-3 number-in-text">
                                                    <p class="" style="color: rgb(74, 170, 66)">07.</p>
                                                </div>
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-9 text-slider-config">
                                                    <p style="text-align: left">Estimula el afán de superación del reto. Las perdidas y las ganancas, hacen que el alumno persevere y siga esforzándose, lo que mejora no solo la habilidad a desarrollar, sino la autoestima.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item item-texto-deslizable">
                                            <div class="row">
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-3 number-in-text">
                                                    <p class="" style="color: rgb(160, 206, 103)">08.</p>
                                                </div>
                                                <div class="col col-xs-12 col-12 col-sm-12 col-md-9 text-slider-config">
                                                    <p style="text-align: left">Supone una oportunidad de automotivarse y motivar a otros a través del juego en sí y del reconocimiento que se da o se recibe entre los jugadores.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="text-align: left">
                                        <span class="carousel-control-prev-icon carousel-control-prev-icon-izquierda" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon carousel-control-prev-icon-derecha" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sobre" class="imagenCompleta line-zero">
                <img class="imagenCompleta img-fluid" src="assets/img/background/CurvaAzul.png" style="background-color: white">
            </div>





            <div class="container-fluid cuarta-seccion">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12 col-12 col-sm-12 col-md-6">
                            <div class="container" style="text-align: center">
                                <img src="assets/img/miscelaneas/fotoCEO.JPG" alt="Margoth Ramírez Hernández" class="img-thumbnail fotoCEO">
                                <blockquote class="blockquote">
                                    <p class="mb-0"><b>Margoth Ramírez Hernández</b></p>
                                    <footer class="blockquote-footer" style="color:white">C.O. Neurochange Consulting</footer>
                                </blockquote>

                                <button type="button" id="masSobreMargoth" class="btn btn-light"><b>Más sobre Margoth Ramírez</b></button>

                            </div>
                        </div>
                        <div class="col col-xs-12 col-12 col-sm-12 col-md-6">
                            <div class="container" style="font-size: 30px; text-align: center; padding-top: 50px;">
                                <p>"Soy facilitadora y consultora de capacitación, <b>ayudo a colegas coachs y responsables de capacitación a dar resultados tangibles</b> y de manera automática a través de <b style="color: rgb(255, 196, 37)">tu nueva herramienta NeuroGame."</b></p>

                                <audio id="audio-mp3" controls>
                                    <source src="./assets/sound/SpotNeurochange.mp3" type="audio/mpeg">
                                </audio>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div id="masInformacion-flotante-2" class="container">
                <a id="boton-cerrado-masInformacion-flotante-2" class="close"></a>
                <p style="color: rgb(0, 49, 82);">Es <b>CO y Fundadora de Neurochange Consulting</b> y diseñadora del sistema <b>NeuroGame.</b></p>
                <div class="container" style="overflow-y: scroll">
                    <p style="color: rgb(0, 49, 82);">Facilitadora y consultora con experiencía de más de <b>20 años en el área de capacitación</b>, entrenamiento y desarrollo de empleados, enfocada en el crecimiento del talento humano y procesos de cambio organizacional.</p>

                    <p style="color: rgb(0, 49, 82);"><b>Ha implementado estrategias, planes y programas de capacitacióin para e desarrollo de competencias técnicas y habilidades directivas.</b></p>

                    <p style="color: rgb(0, 49, 82);"><b>Precursora y fundadora del centro de capacitación CECAT.</b> Se especializó en estrategias de capacitación a distancia y comunidades colaborativas de aprendizaje, creando la universidad virtual corporativa <b>Comex</b> y llevando la capacitación a <b>EU y Canadá.</b> Ha capacitado a diferentes niveles organizacionales desde personal operativo hasta directivos.</p>

                    <p style="color: rgb(0, 49, 82);">Es CO y fundadora de <b>Neurochange Consulting</b> y diseñadora del sistema <b>NeuroGame Solutións.</b></p>

                    <p style="color: rgb(0, 49, 82);">Graduada en <b>Comunicación y Relaciones Públicas por la Universidad Latinoamericana</b>: cuenta con un <b>Diplomado en Desarrollo humano por la universidad Iberoamericana</b> y actualmente estudia la especialización en <b>Inteligencias Múltiples</b> para el desarrollo de habilidades cognitivas y ejecutivas en Asociación Educar en Neurociencias, <b>Buenos Aires, Argentina.</b></p>

                </div>


            </div>

            <!-- 
            **************************************************
            Background fijo 2
            **************************************************
            -->
            <div id="main-imagen-2" class="section-banner-box" style="background-image: url(./assets/img/background/3.jpg); background-size: cover; -webkit-background-size:cover;">
                <!-- COMPONENTES INTERNOS -->
                <section class="services_section" id="services-section" >
                    <div class="auto-container">
                        <div class="services">
                            <div id="contenedor_de_columnas" class="row clearfix">
                                <!--Service Column-->
                                <div class="service-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"><i class="fas fa-question"></i></div>
                                        <h3>¿Quiénes Somos?</h3>
                                        <div class="text">Neurochange es una filosofía de trabajo y neuroaprendizaje que se genera a travéz del juego, una experiencia única, que potencía el cerebro de los participantes, para desarrollar sus habilidades.<br>&nbsp;</div>
                                    </div>
                                </div>
                                <!--Service Column-->
                                <div class="service-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"><i class="fas fa-users"></i>
                                        </div>
                                        <h3>Misión</h3>
                                        <div class="text">Revolucionar la capacitación y el coach a través de nuestra tecnología para aregurar la efectividad de los programas y el desarrollode las personas; además compartir nuestra herramienta con capacitadores, instructores, coachs y responsables de capacitación, para que la mayor parte de personas puedan beneficiarse de ella.<br>&nbsp;</div>
                                    </div>
                                </div>
                                <!--Service Column-->
                                <div class="service-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"><i class="fas fa-eye"></i></div>
                                        <h3>Visión</h3>
                                        <div class="text">Ser la empresa más reconocida por desarrollar y ofrecer la herramienta más usada para el desarrollo y evaluación del personal, admirada por su efectividad y considerada como la mejor opción para dar seguimiento, reforzamiento, aplicación, práctica y evaluación de la capacitación o coach.<br>&nbsp;<br>&nbsp;<br>&nbsp;</div>
                                    </div>
                                </div>
                                <!--Service Column-->
                                <div class="service-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"><i class="far fa-thumbs-up"></i>
                                        </div>
                                        <h3>Valores</h3>
                                        <div class="text">
                                            <p><b><i class="valores">Innovación:</i></b> Ofrecemos tecnología vanguardista diseñada y desarrollada con base en la neurociencia y el aprendizaje.</p>
                                            <p><b><i class="valores">Orientación a Resultados:</i></b> Nos enfocamos al logro de los resultados, mismos que son 100% medibles  y comprobables.</p>
                                            <p><b><i class="valores">Servicio:</i></b>  Ponemos nuestra experiencia, conocimientos, tecnología y pasión en lo que hacemos, para satisfacer las necesidades de nuestros clientes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>




            <div class="container-fluid fondo-preparate ">
                <blockquote class="blockquote">
                    <p class="mb-0 texto-preparate" style="color: rgb(0, 49, 82);">¡Preparate para ser de los vanguardistas que ya están utilizando <b style="color: rgb(13, 183, 242)"><br>NeuroGame Solutions!</b><br>Deja atrás las viejas prácticas y ve más allá de solo capacitar.</p>
                    <footer class="blockquote-footer texto-footer"><b style="color: rgb(255, 196, 37)">¡Llena el formulario y solicita más información ahora!</b></footer>
                </blockquote>
            </div>

            <div id="contacto" class="imagenCompleta line-zero">
                <img class="imagenCompleta img-fluid" src="assets/img/background/CurvaAzulOscuro.png" style="background-color: rgba(0,0,0,0)">
            </div>

            <div class="footer-basic " style="padding: 0px;">
                <section>
                    <div id="contact-form" class="et_pb_section et_pb_section_8 et_pb_with_background et_section_regular">
                        <div class="row ">
                            <!-- .et_pb_column -->
                            <div class="col-md-12 et_pb_column et_pb_column_1_2 et_pb_column_28    et_pb_css_mix_blend_mode_passthrough et-last-child">
                                <div class="et_pb_module et_pb_text et_pb_text_17 et_pb_bg_layout_dark  et_pb_text_align_left">
                                    <div class="et_pb_text_inner">
                                        <p> <span style="color: rgb(0, 135, 209);"><strong>CONTÁCTANOS.</strong></span></p>
                                    </div>
                                </div>
                                <!-- .et_pb_text -->
                                <div class="et_pb_module et_pb_contact_form_0 et_pb_contact_form_container clearfix" data-form_unique_num="0">
                                    <div class="et-pb-contact-message"></div>
                                    <div class="et_pb_contact">
                                        <form class="et_pb_contact_form clearfix" method="post" action="./sendMailComent.php">
                                            <p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_last" data-id="firstname" data-type="input">
                                                <label for="et_pb_contact_firstname_1" class="et_pb_contact_form_label">Nombre Completo</label>
                                                <input required type="text" id="et_pb_contact_firstname_1" class="input" value="" name="et_pb_contact_firstname_1" data-required_mark="required" data-field_type="input" data-original_id="firstname" placeholder="Nombre Completo" >
                                            </p>
                                            <p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_last" data-id="location" data-type="input">
                                                <label for="et_pb_contact_location_1" class="et_pb_contact_form_label">Email</label>
                                                <input required type="email" id="et_pb_contact_location_1" class="input" value="" name="et_pb_contact_location_1" data-required_mark="required" data-field_type="input" data-original_id="location" placeholder="Email">
                                            </p>
                                            <p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_half" data-id="email" data-type="input">
                                                <label for="et_pb_contact_email_1" class="et_pb_contact_form_label">Ocupación</label>
                                                <input required type="text" id="et_pb_contact_email_1" class="input" value="" name="et_pb_contact_email_1" data-required_mark="required" data-field_type="input" data-original_id="email" placeholder="Ocupación">
                                            </p>
                                            <p class="et_pb_contact_field et_pb_contact_field_3 et_pb_contact_field_half et_pb_contact_field_last" data-id="phone" data-type="input">
                                                <label for="et_pb_contact_phone_1" class="et_pb_contact_form_label">Teléfono o Celular (Opcional)</label>
                                                <input type="tel" id="et_pb_contact_phone_1" class="input" value="" name="et_pb_contact_phone_1" data-required_mark="not_required" data-field_type="input" data-original_id="phone" placeholder="Teléfono o Celular (Optativo)" pattern="^[0-9]*$">
                                            </p>
                                            <p class="et_pb_contact_field et_pb_contact_field_4 et_pb_contact_field_last" data-id="message" data-type="text">
                                                <label for="et_pb_contact_message_1" class="et_pb_contact_form_label">Mensaje</label>
                                                <textarea required name="et_pb_contact_message_1" id="et_pb_contact_message_1" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Mensaje"></textarea>
                                            </p>
                                            <input type="text" name="isEnviado" value="enviado" hidden>
                                            <div class="et_contact_bottom_container">
                                                <button type="submit" class="et_pb_contact_submit et_pb_button" value="isEnviado">Enviar</button>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- .et_pb_contact -->
                                </div>
                                <!-- .et_pb_contact_form_container -->
                            </div>
                            <!-- .et_pb_column -->
                        </div>
                        <!-- .et_pb_row -->
                    </div>
                    <!-- .et_pb_section -->
                </section>
            </div>


            <footer id="footer-final" class="footer-basic">
                <!-- COMPONENTES INTERNOS -->
                <div class="logo_emailInput">

                    <img class="ending-logo" src="assets/img/logo/Logo.png" />
                </div>

                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Inicio</a></li>
                    <li class="list-inline-item"><a href="#neurogame-id">Neurogame</a></li>
                    <li class="list-inline-item"><a href="#porque">¿Porqué Neurogame?</a></li>
                    <li class="list-inline-item"><a href="#sobre">Sobre Margoth Ramírez</a></li>
                    <li class="list-inline-item"><a href="#main-imagen-2">¿Quiénes Somos?</a></li>
                    <li class="list-inline-item"><a href="#contacto">Contacto</a></li>
                </ul>
                <p class="copyright">Copyright © 2018 Neurochange | Todos los derechos reservados | <a href="aviso-privacidad.php" target="_blank">Aviso de Privacidad</a></p>
            </footer>

            <script src="./assets/js/jquery.min.js"></script>
            <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="./assets/js/redimension.js"></script>
            <script src="./assets/js/efectos.js"></script>
            <script src="./assets/js/masInformacionFlotante.js"></script>



        </body>

    </html>

    <?php
}
?>