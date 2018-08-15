<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if (!isset($_SESSION["formFilled"])) {
    $_SESSION["formFilled"] = FALSE;
}


if (!$_SESSION["formFilled"]) {
    //include "./landingPage.php";
    header("Location: ./landingPage.php", true, 301);
    
} else {
    //include "./main.php";
    header("Location: ./main.php", true, 301);
}
?>

