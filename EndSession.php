<?php
    session_start();
    $_SESSION["usuario"] = null;
    $_SESSION["token"] = null;
    $_SESSION["correo"] = null;
    session_destroy();
?>