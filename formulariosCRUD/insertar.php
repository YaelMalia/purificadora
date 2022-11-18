<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <script src="../alertify/alertify.js"></script>
    <link rel="stylesheet" href="../alertify/alertify.css">
    <title>Insertar</title>
</head>

<body>

    <br>
    <div id="info">
        <h2>Ingresar nueva venta</h2>
        Nombre del cliente<input type="text" name="var1" id="inpt1">
        <br>
        <br>
        Domicilio del cliente<input type="text" name="var2" id="inpt2">
        <br>
        <br>
        Garrafones comprados<input type="number" name="var3" id="inpt3">
        <br>
        <br>
        <input type="button" id="btnSend" value="Agregar Venta" onclick="return insertarV();">
    </div>

    <script>
        function insertarV() {
            //Obtener valores de los input
            let valor = $("#inpt1")[0].value;
            let valor2 = $("#inpt2")[0].value;
            let valor3 = $("#inpt3")[0].value;

            let parametros = {
                "n1": valor,
                "n2": valor2,
                "n3": valor3
            }
            $.ajax({
                type: 'POST',
                url: 'nuevaVenta.php',
                data: parametros,
                success: function(r) {
                    if (r == "si") {

                        alertify.alert("AVISO", "¡La venta se ha insertado con éxito!");

                    }
                    if (r == "no") {
                        alertify.alert("ERROR", "Algo ha salido mal!")
                    }
                }
            });
        };
    </script>
</body>

</html>