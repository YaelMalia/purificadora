<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- includes  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styleLogin.css">
    <script src="js/verifLogin.js"></script>
    <script src="alertify/alertify.js"></script>
    <link rel="stylesheet" href="alertify/alertify.css">
    <script src="js/jquery.js"></script>
<!-- Fin includes-->
    <title>Login</title>
</head>
<body id = "cuerpo">

  <div class="container-fluid" id = "mainsin"> 

    <!--COLUMNAS DE LA TARJETA-->
    <div class="row">
      <img src="sources/images/logo-purificadora.png" alt="Purificadora gota de ángel" class="logo-img">
      <div class="col-md-6 login" id = "login">
          <div class="card" id = "card">
            <div class="Contenido">
              <h2>Iniciar sesión</h2>
                <form action="indexDinamico.php" method = "get">               
                  <div class="inputBx">
                    <span>Correo</span>
                    <input type="text" id = "inputCorreo">
                  </div>

                  <div class="inputBx">
                    <span>Contraseña</span>
                    <input type="password"  id = "inputPass">
                  </div>

                  <div class="remember">
                    <label><input type="checkbox">Recuérdame</label>
                  </div>
                 
                  <div class="inputBx">
                    <input class="btnlogueo" type="submit" value="Iniciar sesión" onclick=" return VerifDatosLogin();">
                  </div>

                  <div class="inputBx">
                    <p>¿No tienes una cuenta? <a href="Registrate.php">Regístrate</a></p>
                  </div>

                </form>              
            </div>
          </div>
      </div>
    </div>
    <!--FIN COLUMNAS DE LA TARJETA-->
  </div>

<!--Scripts JS y JQ-->
<script type="text/javascript">
  
</script>
  


</body>
</html>