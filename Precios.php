<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/prices.css">

    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/A_precios.css"> -->
    <script src="js/verifRegistrar.js"></script>
    <script src="alertify/alertify.js"></script>
    <link rel="stylesheet" href="alertify/alertify.css">


    <!-- SCRIPTS PARA PRECIOS RECUPERADOS DE MONGO -->

    <script type = "text/javascript">

        
        const arrayPrecios = [];
        var parametros = {
                "accion":"consultartodo"
            };  

            $.post("conexion/consultasNoSQL.php",
                parametros, function(respuesta){
                    
                    if(respuesta!="No articulos disponibles"){

                        let jsonParseado = JSON.parse(respuesta);                   
                        for(let valor in jsonParseado){
                           arrayPrecios.push(jsonParseado[valor]["datos"]["Precio"]);
                        }
                        document.getElementById("precioBonafont").innerHTML = arrayPrecios[0];
                        document.getElementById("precioCiel").innerHTML = arrayPrecios[1];
                        document.getElementById("precioEpura").innerHTML = arrayPrecios[2];

                    }else{
                        alertify.alert("¡Ups..!", respuesta);
                    }
                    
                
                });
        
    </script>

    <!-- FIN DE SCRIPTS PARA MONGO -->
    <!-- Para documentación:

        Las etiquetas <b> en los que se le asigna valor son únicamente para los cambios con mongo, falta con mysql -->

    <title>Precios</title>
</head>
<body>

   

    <div class="container">
        <div class="card">
            <div class="circulo">
                <h2>BONAFONT<h2>
            </div>
            <div class="content">
                <p>
                    Este garrafón tiene una capacidad de 20L, si usted ya cuenta
                    con uno y además viene hasta la planta a llenarlo recibirá
                    un descuento en el precio.
                </p>
                <a>PRECIO: $<b id = "precioBonafont"></b> MXN</a>
            </div>
        </div>




        <div class="card">
            <div class="circulo">
                <h2>CIEL<h2>
            </div>
            <div class="content">
                <p>
                    Este garrafón tiene una capacidad de 20L, si usted ya cuenta
                    con uno y además viene hasta la planta a llenarlo recibirá
                    un descuento en el precio.
                </p>
                <a>PRECIO: $<b id = "precioCiel"></b> MXN</a>
            </div>
        </div>





        <div class="card">
            <div class="circulo">
                <h2>E-PURA<h2>
            </div>
            <div class="content">
                <p>
                    Este garrafón tiene una capacidad de 20L, si usted ya cuenta
                    con uno y además viene hasta la planta a llenarlo recibirá
                    un descuento en el precio.
                </p>
                <a>PRECIO: $<b id = "precioEpura"></b> MXN</a>
            </div>
        </div>

    </div>
</body>
</html>