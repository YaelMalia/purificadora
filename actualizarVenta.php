<?php
    if(isset($_POST["n1"])){
        $id = $_POST["n1"];
        $name = $_POST["n2"];
        $dom = $_POST["n3"];
        $tot = $_POST["n4"];

        require_once("conexionBD/Consultas.php");
        $usuarios = Usuarios::singleton();
        $data = $usuarios->Actualizarv($name,$dom,$tot,$id);
        echo "si";
    }
    else
    {
        echo "no";
        header("Location:index.php");
    }
?>