<?php
if(session_status() == PHP_SESSION_NONE){
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
                    <div id="rows-id" class="row container-flow">
                        <div class="col col-md-4 rows-id-inner">
                            <div id="neurogame" class="container-fluid">
                                <img class="img-fluid" src="./assets/img/background/NeuroGame.jpg">
                            </div>
                        </div>
                        <div class="col col-md-4 rows-id-inner">
                            <div id="schiller-quote" class="container-fluid">
                                <img class="img-fluid" src="./assets/img/background/TextoSchiller.jpg">
                            </div>
                        </div>
                        <div id="form-columna" class="col-12 col-md-4 col-sm-12 col-12 rows-id-inner">
                            <div id="logo" class="container-fluid">
                                <img class="img-fluid" src="./assets/img/logo/Logo-fondeado.png">
                            </div>
                            <div id="formulario" class="container">
                                <form action="./sendMail.php" method="post">
                                    <label for="fname">Nombre Completo</label>
                                    <input type="text"  name="Nombre-Completo" required>

                                    <label for="lname">Email</label>
                                    <input type="email"  name="Email"  required>

                                    <label for="fname">Teléfono</label>
                                    <input type="tel"  name="Telefono" pattern="^[0-9]*$" required> 

                                    <label for="lname">Ciudad</label>
                                    <input type="text"  name="Ciudad" required>

                                    <input type="text"  name="isEnviado" value="enviado" hidden>
                                    <input id="botonEnviar" type="submit" value="Enviar">
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


