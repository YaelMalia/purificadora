<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="js/jquery.js"></script>
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

        .m-actualizar{
          display:none;
        }

        .bt-actualizar{
          display:none;
        }

        .boton{
          transition-duration:0.7s;
        }
        .boton:hover{
          transform:scale(1.03);

          -webkit-box-shadow: 0px 0px 15px -2px #000000; 
          box-shadow: 0px 0px 15px -2px #000000;
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
                    <form action="Actualiza_Info.php" method="post">     

                      <div class="inputBx" id = "buscador">
                        
                      <h4>Marca de garrafón </h4>
                        <input name="garrafones" id="inputGarrafones" list="listgarrafones">
                        <datalist id="listgarrafones">
                          <option>Bonafont</option>
                          <option>Ciel</option>
                          <option>E-Pura</option>
                        </datalist>

                      </div>


                      <div class="m-actualizar" id="m-actualizar">

                      <!-- <div class="inputBx">
                        <h4>Descripción</h4>
                        <input type="text" id = "inputDescripcion">
                      </div> -->

                      <div class="inputBx">
                        <h4>Precio actual / nuevo</span>
                        <input type="text" id = "inputPrecio">
                      </div>

                      </div>
                      

                     
                      <div id="buscarArticulo">
                      <div class="animated boton" id="an"> 
                       <span style="left: 170px; top:25px;"></span>
                       Buscar 
                      </div>
                      </div>

                     <div class="bt-actualizar" id="bt-actualizar">
                     
                     <div class="animated boton" id="an"> 
                        <span style="left: 170px; top:25px;"></span>
                        Actualizar 
                      </div>

                     </div>
                        
    
                    </form>              
                </div>
              </div>
          </div>
        </div>
        <!--FIN COLUMNAS DE LA TARJETA-->
      </div>

        <script type = "text/javascript">
          var artGlobal = "";
          $("#buscarArticulo").click(function(){
            var articulo = $("#inputGarrafones")[0].value;
            if(articulo!=""){
              artGlobal = articulo;
                var parametros = {
                    "accion":"consultararticulo",
                    "Articulo":articulo
                };

                $.post("conexion/consultasNoSQL.php", parametros, function(respuesta){
                  
                  if(respuesta!="Artículo no encontrado"){

                    let jsonParseado = JSON.parse(respuesta);

                    document.getElementById("m-actualizar").style.display = "block";
                    document.getElementById("bt-actualizar").style.display = "block";

                    document.getElementById("buscador").style.display = "none";
                    document.getElementById("buscarArticulo").style.display = "none";

                    for(const valor in jsonParseado){
                      document.getElementById("inputPrecio").value = jsonParseado[valor]["Precio"];
                    }

                    
                  }else{
                    alertify.alert("Error", respuesta);

                    document.getElementById("m-actualizar").style.display = "none";
                    document.getElementById("bt-actualizar").style.display = "none";

                    document.getElementById("buscador").style.display = "block";
                    document.getElementById("buscarArticulo").style.display = "block";
                  }

                });

            }else{
              alertify.alert("Error", "Campos vacios");
            }
          });

          $("#bt-actualizar").click(function(){
            var nuevoPrice = $("#inputPrecio")[0].value;

            if(nuevoPrice!=""){

              var array = {
                "Articulo":artGlobal,
                "Precio":nuevoPrice
            };

            var array3 = {
                "datos": array
            };

              var parametros = {
                "accion": "modificar",
                "datos": array3,
                "Articulo": artGlobal
              };

              $.post("conexion/consultasNoSQL.php", parametros, function(respuesta){
                
                alertify.alert("Excelente", respuesta);
                artGlobal = "";             

                    document.getElementById("m-actualizar").style.display = "none";
                    document.getElementById("bt-actualizar").style.display = "none";

                    document.getElementById("buscador").style.display = "block";
                    document.getElementById("buscarArticulo").style.display = "block";

                    $("#inputGarrafones")[0].value = "";
                    $("#inputPrecio")[0].value = "";
            });

            }else{
              alertify.alert("Error", "Campos vacios");
            }

          });
        </script>

</body>
</html>