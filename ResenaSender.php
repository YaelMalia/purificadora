<?php
    if(isset($_POST["name"])){
        $n = $_POST["name"];
        $c = $_POST["resena"];        

        require_once("conexionBD/Consultas.php");
        $usuarios = Usuarios::singleton();
        $data = $usuarios->insertarResena($n, $c);
        echo "si";
    }
    else
    {
        echo "no";
    }
?>