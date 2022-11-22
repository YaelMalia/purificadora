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
                $_SESSION["nombreCompleto"] = $fila["nombreCompleto"];
                $_SESSION["correo"] = $fila["correo"];
                $_SESSION["pass"] = $fila["contra"];
            }
            echo "correcto";
            // Se hace el seteo de las cookies 😈😈😈
            setcookie("cookieCorreo", $_SESSION["correo"], time() + 84600);
            setcookie("cookieUsuario", $_SESSION["nombreCompleto"], time() + 84600);
            setcookie("psd", $_SESSION["pass"], time() + 84600);
        }else{
            echo "incorrecto";
        }
    }else{
        header("Location:Registrate.php");
    }

?>