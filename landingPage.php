<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["formFilled"])) {
    include './index.php';
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Neurochange LandingPage</title>
            <link href="https://necolas.github.io/normalize.css/8.0.0/normalize.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/landingPageStyles.css">
            <link rel="icon" href="./assets/img/logo/favicon.ico" type="image/x-icon" />
            <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="./assets/fonts/font-awesome.min.css">
            <link rel="stylesheet" href="./assets/fonts/ionicons.min.css">
            <link rel="stylesheet" href="./assets/css/Carousel-Hero.css">
            <link rel="stylesheet" href="./assets/css/Footer-Basic.css">
            <link rel="stylesheet" href="./assets/css/header-1.css">
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
            <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        </head>


        <body bgcolor="#F5F5F7">

            <div id="background" class="container-fluid">


                <div class="container-fluid">
                    <div id="contenedor-total" class="row container-flow">
                        <div id="columna-1" class="col col-12 col-md-6 col-sm-12">
                            <!--Una fila -->
                            <div id="tohide-1" class="d-flex flex-row">
                                <div id="text-1" class=" ">
                                    <p><b><i>Demuestra</i></b> la efectividad de tu programa de capacitación o coach dando:</p>
                                    <ul id="lista">
                                        <li>Seguimiento</li>
                                        <li>Reforzamiento</li>
                                        <li>Práctica</li>
                                        <li>Evaluación</li>
                                    </ul>
                                    <p><b>Todo esto de manera automatizada</b></p>
                                </div>
                            </div>

                            <!--Una fila -->
                            <div id="tohide-2" class="d-flex flex-row-reverse">
                                <div id="text-2" class="">
                                    <p><i id="iconPieza" class="fas fa-puzzle-piece"></i><b>NeuroGame Solutions</b></p>
                                </div>
                            </div>
                        </div>

                        <div id="form-columna" class="col col-12 col-md-6 col-sm-12">
                            <div id="hidden-divs">
                                <div id="text-1-hidden" class=" ">
                                    <p><b><i>Demuestra</i></b> la efectividad de tu programa de capacitación o coach dando:</p>
                                    <p>Seguimiento</p>
                                    <p>Reforzamiento</p>
                                    <p>Práctica</p>
                                    <p>Evaluación</p>
                                    <p><b>Todo esto de manera automatizada</b></p>
                                </div>
                                <div id="text-2-hidden" class="">
                                    <p><i id="iconPieza-hidden" class="fas fa-puzzle-piece"></i><b>NeuroGame Solutions</b></p>
                                </div>

                            </div>
                            <img class="logo-adaptivo" src="./assets/img/logo/Logo-fondeado.png">
                            <div id="formulario" class="container">
                                <form action="./sendMail.php" method="post">
                                    <label for="fname"><b>Para más información, por favor compártenos tus datos.</b></label>

                                    <label for="fname"><b>Nombre Completo</b></label>
                                    <input type="text"  name="Nombre-Completo" required>

                                    <label for="lname"><b>Email</b></label>
                                    <input type="email"  name="Email"  required>
                                    
                                    <label for="lname"><b>Cel</b></label>
                                    <input type="tel"  name="Cel" pattern="^[0-9]*$" required>

                                    <label for="fname"><b>Ocupación</b></label>
                                    <input type="text"  name="Ocupacion" required> 


                                    <input type="text"  name="isEnviado" value="enviado" hidden>
                                    <input id="botonEnviar" type="submit" value="Enviar">
                                    <br><br>
                                    <label id="label-aviso"><b>Tus datos están seguros. Consulta nuestras <a href="./aviso-privacidad.php" target="_blank">políticas de privacidad</a>.</b></label>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="./assets/js/jquery.min.js"></script>
            <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
        </body>
    </html>

    <?php
}
?>


