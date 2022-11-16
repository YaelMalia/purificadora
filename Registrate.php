<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styleregistrar.css">
  <script src="js/verifRegistrar.js"></script>
  <script src="js/jquery.js"></script>
  <script src="alertify/alertify.js"></script>
  <link rel="stylesheet" href="alertify/alertify.css">
  <title>Registrarse</title>
</head>
<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type=number] {
    -moz-appearance: textfield;
  }
</style>

<body>

  <div class="container-fluid">

    <!--COLUMNAS DE LA TARJETA-->
    <div class="row">
      <img src="sources/images/logo-purificadora.png" alt="Purificadora gota de ángel" class="logo-img">
      <div class="col-md-8 login">
        <div class="card">
          <div class="Contenido">
            <h2>Regístrate</h2>
            <form action="Registrate.php" method="post">

              <div class="inputBx">
                <h4>Nombre completo </h4>
                <input type="text" id="inputNombreC">
              </div>


              <div class="inputBx">
                <h4>Correo electrónico </h4>
                <input type="email" id="inputCorreo">
              </div>

              <div class="inputBx">
                <h4>Contraseña</h4>
                <input type="password" id="inputPass">
              </div>



              <div class="animated" id="an" onclick="return validar();">
                <span style="left: 170px; top:25px;"></span>
                Registrarme
              </div>


              <div class="inputBx">
                <p>¿Ya tienes una cuenta? <a href="Login.php">Iniciar sesión</a></p>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!--FIN COLUMNAS DE LA TARJETA-->
  </div>
  <!------SECCIÓN JAVASCRIPT------>
  <script>
    function validar() {
      let name = $("#inputNombreC")[0].value;
      let correo = $("#inputCorreo")[0].value;
      let pass = $("#inputPass")[0].value;

      if (name == "" || correo == "" || pass == "") {
        alertify.alert("AVISO", "Algunos campos no están llenos")
      } else {

        let parametros = {
          "name": name,
          "correo": correo,
          "pass": pass
        };

        $.ajax({
          type: 'POST',
          url: "ValidaReg.php",
          data: parametros,
          async: false,
          success: function(r) {
            if (r == "si") {
              alertify.alert("ÉXITO", "El usuario se ha registrado con éxito!")
              header("Location:Login.php");
            }
            if (r == "no") {
              alertify.alert("ERROR", "Algo ha salido mal!")
            }
          }
        });
      }
    }
  </script>
</body>

</html>