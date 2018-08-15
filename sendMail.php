<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if (isset($_POST['isEnviado'])) {
    require_once './PHPMailer-master/src/Exception.php';
    require_once './PHPMailer-master/src/PHPMailer.php';
    require_once './PHPMailer-master/src/SMTP.php';
    date_default_timezone_set('America/Mexico_City');
    

    $nombreCompleto = htmlspecialchars($_POST['Nombre-Completo']);
    $email = htmlspecialchars($_POST['Email']);
    $telefono = htmlspecialchars($_POST['Telefono']);
    $ciudad = htmlspecialchars($_POST['Ciudad']);
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
    $mail->Username = 'php.servicio.arlisi';
    $mail->Password = '4z;_^4T{#TtTtDR3';

// Email Sending Details
    $mail->addAddress('angelmaxil@hotmail.com');
    $mail->setFrom('php.servicio.arlisi@gmail.com');
    $mail->Subject = 'Cuestionario: ' . date("Y/m/d") . ' ' . date("h:i:sa");

    $msg = 'Cuestionario: <br>';
    $msg .= 'Nombre Completo: ' . $nombreCompleto . '<br>';
    $msg .= 'Email: ' . $email . '<br>';
    $msg .= 'Teléfono: ' . $telefono . '<br>';
    $msg .= 'Ciudad: ' . $ciudad . '<br>';
    $msg .= 'Fecha: ' . date("Y/m/d") . ' ' . date("h:i:sa") . ' ' . '<br>';

    $mail->msgHTML($msg);
    

    $_SESSION["formFilled"] = TRUE;


    if (!$mail->send()) {
        ob_start();
        $error = "Mailer Error: " . $mail->ErrorInfo;
        echo '<p id="para">' . $error . '</p>';
        echo '<p>Redirigiendo en/p>';
        $x = 0;
        for ($x; $x < 4; $x++) {
            sleep(1);
            echo '<p>' . (4 - $x) . '</p>';
        }
        ob_clean();
        header("Location: ./index.php", true, 301);
    } else {
        header("Location: ./index.php", true, 301);
    }
} else {
        header("Location: ./index.php", true, 301);

}
?>
