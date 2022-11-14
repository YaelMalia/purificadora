<?php
    if(isset($_POST["name"])){
        $n = $_POST["name"];
        $c = $_POST["correo"];
        $p = $_POST["pass"];

        require_once("conexionBD/Consultas.php");
        $usuarios = Usuarios::singleton();
        $data = $usuarios->insertar($n, $c, $p);
        echo "si";
    }
    else
    {
        echo "no";
        header("Location:index.html");
    }
?>