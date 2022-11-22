<?php
    session_start();
    $_SESSION["usuario"] = null;
    $_SESSION["token"] = null;
    $_SESSION["correo"] = null;
    $_SESSION["pass"] = null;
    session_destroy();
    // setcookie("cookieCorreo", $_SESSION["correo"], time() - 84600);
    // setcookie("cookieUsuario", $_SESSION["nombreCompleto"], time() - 84600);
?>