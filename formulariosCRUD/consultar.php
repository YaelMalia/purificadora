<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/fontawesome-free-6.2.0-web/css/all.css">
    <script src="../js/jquery.js"></script>
    <title>Consultar</title>
</head>

<body>
    <div class="container-fluid">
        <div class="formularioEliminar" id="formularioEliminar" style="margin-top: 50px">
            <h2>Estas son tus ventas</h2>
        </div>
        <form action="formulariosCRUD/crearExcel.php" method="post">
            <button class="btn btn-primary" id="btnEliminar">
                <i class="fa-regular fa-plus"></i>
            </button>

        </form>

    </div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de cliente</th>
                <th scope="col">Domicilio de cliente</th>
                <th scope="col">Garrafones vendidos</th>
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

    </script>
</body>

</html>