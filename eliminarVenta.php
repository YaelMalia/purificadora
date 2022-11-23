<?php
    if(isset($_POST["id"])){
        $n = $_POST["id"];

        require_once("conexionBD/Consultas.php");
        $usuarios = Usuarios::singleton();
        $data = $usuarios->BorrarVenta($n);
        echo "si";
    }
    else
    {
        echo "no";
        header("Location:index.php");
    }
?>