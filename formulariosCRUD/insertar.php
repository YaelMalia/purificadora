<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <title>Insertar</title>
</head>

<body>

    <br>
    <div id="info">
        <h2>Ingresar nueva venta</h2>
        Nombre cliente<input type="text" name="var1" id="inpt1">
        <br>
        <br>
        Domicilio cliente<input type="text" name="var2" id="inpt2">
        <br>
        <br>
        Garrafones comprados<input type="number" name="var3" id="inpt3">
        <br>
        <br>
        <input type="button" id="btnSend" value="Agregar Venta" onclick="">
    </div>

    <script>
        $('#btnSend').click(function() {
            //Obtener valores de los input
            var _valor = document.getElementById('inpt1').value;
            var _valor2 = document.getElementById('inpt2').value;
            var _valor3 = document.getElementById('inpt3').value;
            //Mostrar Nombre                              
            //Método para URL con valores
            history.pushState('', {
                valor: _valor,
                valor2: _valor2,
                valor3: _valor3
            }, 'http://localhost/xampp/purificadora/inventario.html?' + 'n1=' + _valor + '&' + 'n2=' + _valor2 + '&' + 'n3=' + _valor3);
            //Recuperando información de la pagina 2

            let parametros = {
                "n1": _valor,
                "n2": _valor2,
                "n3": _valor3
            }
            $.ajax({
                type: 'POST',
                url: 'nuevaVenta.html',
                data: parametros,
                success: function(data) {
                    $('#info').append(data);
                }
            });
        });
    </script>
</body>

</html>