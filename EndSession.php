<?php
    session_start();
    $_SESSION["usuario"] = null;
    $_SESSION["tipo"] = null;
    $_SESSION["correo"] = null;
    session_destroy();
?>