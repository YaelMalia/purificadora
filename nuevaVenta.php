<?php
    if(isset($_POST["n1"])){
        $n = $_POST["n1"];
        $c = $_POST["n2"];
        $p = $_POST["n3"];

        require_once("conexionBD/Consultas.php");
        $usuarios = Usuarios::singleton();
        $data = $usuarios->insertarVenta($n, $c, $p);
        echo "si";
    }
    else
    {
        echo "no";
        header("Location:index.html");
    }
?>