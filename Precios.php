<?php //include "scraping.php"; ?>
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

    <style>
        p{
            text-align:justify;
        }
    </style>
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
            <br>
            
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
    
    <div class="comparandoP" style = "margin-top:50px;">
                
                <center>
                <button id = "BtnComparar" style = "background-color:#FF9983; width:200px; height:40px; border-radius:20px; color:white; border:none;">
                    <b>Comparar precios</b>
                </button>
                </center>

                <div class = "scraping container" id = "scraping">
                    
                
                    <div class = "card" style="width: 300px; height: 500px;  overflow-y:scroll; text-align:center;">
                                <h3>Bonafont</h3>
                        <div class="scrapBonafont" id="scrapBonafont" >
                            
                        </div> 
                    </div>           
                    
                    
                    
                    <div class = "card" style="width: 300px; height: 500px;  overflow-y:scroll; text-align:center;">
                                    <h3>Ciel</h3>
                        <div class="scrapCiel" id="scrapCiel">

                        </div>
                    </div>    
                    
                    
                    <div class = "card" style="width: 300px; height: 500px;  overflow-y:scroll; text-align:center;">
                                    <h3>E-Pura</h3>
                        <div class="scrapEpura" id="scrapEpura">

                        </div>
                    </div>
                    
                </div>

    </div>
       <script type = "text/javascript">
        $("#BtnComparar").click(function(){
            document.getElementById("scraping").style.display = "flex";
            
            $(function(){
                $("#scrapBonafont").load("scrapingBonafont.php");
            });

            $(function(){
                $("#scrapCiel").load("scrapingCiel.php");
            });
            
            $(function(){
                $("#scrapEpura").load("scrapingEpura.php");
            });

        });
       </script>
</body>
</html>