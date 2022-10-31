<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/A_precios.css">
    <script src="js/verifRegistrar.js"></script>
    <script src="alertify/alertify.js"></script>
    <link rel="stylesheet" href="alertify/alertify.css">
    <title>Actualizar información</title>
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
                  <h2>Actualizar información</h2>
                    <form action="Registrate.php" method="post">     

                      <div class="inputBx">
                        <h4>Marca de garrafón </h4>
                        <input type="text" id = "inputNombreC">
                      </div>


                      <div class="inputBx">
                        <h4>Descripción</h4>
                        <input type="text" id = "inputCorreo">
                      </div>

                      <div class="inputBx">
                        <h4>Precio actual / nuevo</span>
                        <input type="number" id = "inputPass">
                      </div>
                      

                     
                      <div class="animated" id="an"> 
                       <span style="left: 170px; top:25px;"></span>
                       Buscar 
                      </div>

                      <div class="animated" id="an"> 
                        <span style="left: 170px; top:25px;"></span>
                        Actualizar 
                    </div>
                        
    
                    </form>              
                </div>
              </div>
          </div>
        </div>
        <!--FIN COLUMNAS DE LA TARJETA-->
      </div>

</body>
</html>