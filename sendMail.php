<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['isEnviado'])) {
    require_once './PHPMailer-master/src/Exception.php';
    require_once './PHPMailer-master/src/PHPMailer.php';
    require_once './PHPMailer-master/src/SMTP.php';
    date_default_timezone_set('America/Mexico_City');


    $nombreCompleto = htmlspecialchars($_POST['Nombre-Completo']);
    $email = htmlspecialchars($_POST['Email']);
    $cel = htmlspecialchars($_POST['Cel']);
    $ocupacion = htmlspecialchars($_POST['Ocupacion']);

    // Fetching data that is entered by the user
    /*
      $email = $_POST['email'];
      $password = $_POST['password'];
      $to_id = $_POST['toid'];
      $message = $_POST['message'];
      $subject = $_POST['subject'];
     */

// Configuring SMTP server settings
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'neurochange.consulting.php';
    $mail->Password = 'E=TXj;F+gZ[%jUUMyQy{';

// Email Sending Details
    $mail->addAddress('angelmaxil@hotmail.com');
    $mail->setFrom('neurochange.consulting.php@gmail.com');
    $mail->Subject = 'Cuestionario: ' . date("Y/m/d") . ' ' . date("h:i:sa");

    $msg = 'Cuestionario: <br>';
    $msg .= 'Nombre Completo: ' . $nombreCompleto . '<br>';
    $msg .= 'Email: ' . $email . '<br>';
    $msg .= 'Teléfono: ' . $cel . '<br>';
    $msg .= 'Ocupación: ' . $ocupacion . '<br>';
    $msg .= 'Fecha: ' . date("Y/m/d") . ' ' . date("h:i:sa") . ' ' . '<br>';

    $mail->msgHTML($msg);


    $_SESSION["formFilled"] = TRUE;



    if (!$mail->send()) {
        $error = "Mailer Error: " . $mail->ErrorInfo;
        echo '<p id="para">' . $error . '</p>';

        header("Location: ./index.php", true, 301);
    } else {
        header("Location: ./index.php", true, 301);
    }
} else {
    header("Location: ./index.php", true, 301);
}
?>
