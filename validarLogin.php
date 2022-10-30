<?php  
    if(isset($_POST["correo"])){
        $correo = $_POST["correo"];
        $pass = $_POST["pass"];

        require_once("conexionBD/Consultas.php");
        $usuarios = Usuarios::singleton();
        $data = $usuarios->get_user($correo, $pass);
        if(count($data)>0){
            session_start();
            foreach($data as $fila){
                $_SESSION["usuario"] = $fila["usuario"];
                $_SESSION["tipo"] = $fila["tipoUser"];
                $_SESSION["correo"] = $fila["correo"];
            }
            echo "correcto";
        }else{
            echo "incorrecto";
        }
    }else{
        header("Location:Registrate.php");
    }

?>