<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/fontawesome-free-6.2.0-web/css/all.css">
    <script src="../js/jquery.js"></script>
    <title>Eliminar</title>
</head>

<body>
    <div class="container-fluid">
        <div class="formularioEliminar" id="formularioEliminar" style="margin-top: 50px">
            <h2>Eliminar venta</h2>
        </div>
    </div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de cliente</th>
                <th scope="col">Domicilio de cliente</th>
                <th scope="col">Garrafones vendidos</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("../conexionBD/Consultas.php");
            $ventas = Usuarios::singleton();
            $data = $ventas->get_ventas();
            if (count($data) > 0) {
                foreach ($data as $fila) {
            ?>
                    <tr>
                        <td><?php echo $fila['id_venta']; ?></td>
                        <td> <?php echo $fila['nameCliente']; ?> </td>
                        <td> <?php echo $fila['domicilio']; ?> </td>
                        <td> <?php echo $fila['totGarrafones']; ?> </td>

                        <td class="text-center">
                            <button class="btn btn-danger" id="btnEliminar" onclick="return eliminarV(this);">
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
            <?php }
            } else {
                echo 'No hay datos aún';
            }
            ?>
        </tbody>
    </table>
    <script src="public/bootstrap5/bootstrap.bundle.min.js"></script>

    <script>
        function eliminarV(btn) {
            var id = btn.parentNode.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML;
            btn.parentNode.parentNode.remove();
            let parametros = {
                "id": id,
            };

            $.ajax({
                type: 'POST',
                url: "eliminarVenta.php",
                data: parametros,
                async: false,
                success: function(r) {
                    if (r == "si") {
                        alertify.alert("ÉXITO", "venta eliminada!");
                    }
                    if (r == "no") {
                        alertify.alert("ERROR", "Algo ha salido mal!");
                    }
                }
            });
        }
    </script>
</body>

</html>