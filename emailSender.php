<!-- Para enviar correo -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require "vendor/autoload.php";
require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";


if(isset($_POST["inputNombres"])){
 
      // Obteniendo valores de las cajas
    $nombres = $_POST["inputNombres"];
    $apellidos = $_POST["inputApellidos"];
    // $correo = $_POST["inputCorreo"];
    // $password = $_POST["inputPass"];
    $num1 = $_POST["inputNumero1"];
    $textoG = $_POST["inputTextograndote"];

    $CuerpodelCorreo = "";

    if(isset($_POST["inputNumero2"])){
        $num2 = $_POST["inputNumero2"];
        $CuerpodelCorreo = 'El C. <b>'.$nombres.' '.$apellidos.'</b> ha realizado un pedido mediante la página web de Purificadora Gota de Angel <br>'
    .' y ha brindado el número <b>'.$num1.'</b> para poder contactarse con él y <b>'. $num2 . '</b> como teléfono secundario.' . 'Instrucciones del pedido:<br>'.$textoG;

    }else{
        $CuerpodelCorreo = 'El C. <b>'.$nombres.' '.$apellidos.'</b> ha realizado un pedido mediante la página web de Purificadora Gota de Angel <br>'
    .' y ha brindado el número <b>'.$num1.'</b> para poder contactarse con él.'.'<br>Instrucciones del pedido:<br>'.$textoG;
    }
    
try {
    
        // Crear una instancia de la clase PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;   
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = "tls";    
        $mail->Host = "smtp.gmail.com";
        // $mail->Host = "localhost";
        $mail->Port = 587;
        $mail->Username = "19030263@itesa.edu.mx";
        $mail->Password = "$0$3V3R44Gu1L4R";
        $mail->setFrom('19030263@itesa.edu.mx', 'Gota de angel');
        $mail->addAddress('pgotadeangel@gmail.com', 'Gota de angel');
        

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->isHTML(true);
        
        
        $mail->Subject = 'Pedido de garrafones';

        $mail->Body = $CuerpodelCorreo;
        
        $mail->AltBody = 'No Alt Body';
        $mail->send();
        ?>
        <script type = "text/javascript">
            alertify.alert("EXITO", "Su pedido se ha realizado correctamente. ¡Gracias por su preferencia!");
        </script>
        <?php
        header("Location:sendEmail.php");
       
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
    ?>
    <script type = "text/javascript">
            alertify.alert("Error", "Se ha producido un error al realizar su pedido, verifique que tenga conexión a internet");
    </script>
        <?php
}
}
?>
<!-- Fin para enviar correo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sender</title>
    <script src="alertify/alertify.js"></script>
    <link rel="stylesheet" href="alertify/alertify.css">
</head>
<body>
    
</body>
</html>
