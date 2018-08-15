<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['isEnviado'])) {
    require_once './PHPMailer-master/src/Exception.php';
    require_once './PHPMailer-master/src/PHPMailer.php';
    require_once './PHPMailer-master/src/SMTP.php';
    date_default_timezone_set('America/Mexico_City');

    $et_pb_contact_firstname_1 = htmlspecialchars($_POST['et_pb_contact_firstname_1']);
    $et_pb_contact_location_1 = htmlspecialchars($_POST['et_pb_contact_location_1']);
    $et_pb_contact_email_1 = htmlspecialchars($_POST['et_pb_contact_email_1']);
    $et_pb_contact_phone_1 = htmlspecialchars($_POST['et_pb_contact_phone_1']);
    $et_pb_contact_message_1 = htmlspecialchars($_POST['et_pb_contact_message_1']);

    //echo var_dump($_POST);
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
    $mail->Subject = 'Contacto: ' . date("Y/m/d") . ' ' . date("h:i:sa");

    $msg = 'Contacto: <br>';
    $msg .= 'Nombre Completo: ' . $et_pb_contact_firstname_1 . '<br>';
    $msg .= 'Email: ' . $et_pb_contact_location_1 . '<br>';
    $msg .= 'Teléfono: ' . $et_pb_contact_email_1 . '<br>';
    $msg .= 'Ciudad: ' . $et_pb_contact_phone_1 . '<br>';
    $msg .= 'Mensaje: ' . '<br>';
    $msg .= '---------------------------------' . '<br>';
    $msg .= $et_pb_contact_message_1 . '<br>';
    $msg .= '---------------------------------' . '<br>';
    $msg .= 'Fecha: ' . date("Y/m/d") . ' ' . date("h:i:sa") . ' ' . '<br>';
    $mail->msgHTML($msg);
    $mail->Body = $msg;
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
        include './main.php';
        $message = "Gracias por tu comentario";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
} else {
    header("Location: ./index.php", true, 301);
}
?>
