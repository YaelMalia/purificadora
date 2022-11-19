<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón de mensajes</title>
    <link rel="stylesheet" href="public/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/buzonMsg.css">
</head>
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4" class="logoP" style="border-right-width: 1px; border-right-style:solid; border-color:rgba(146, 146, 146, 0.699)">
                <img src="sources/images/logo-purificadora.png" height="80" alt="Purificadora gota de ángel">
            </div>
            <div class="col-lg-8 col-md-8">
                <p>
                <h2>Buzón de mensajes</h2>
                </p>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="contenidoInv" style="margin-top: 180px; height: auto;">
        <p>
        <h2 class="tdm">Tablón de mensajes</h2>
        </p>

        <div class="container-fluid" style="height:auto;  background-color:rgba(197, 194, 194, 0.753); z-index: -1; margin-top: 0px;">
            <div class="row">
                <!--Tabla de inventario-->
                <div class="col-lg-12">
                    <div class="tablaInv" style="text-align: center;">

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">no. de Reseña</th>
                                    <th scope="col">Remitente</th>
                                    <th scope="col">Comentario</th>
                                </tr>
                            </thead>
                            <tbody id="cuerpoTabla">
                                <?php
                                require_once("conexionBD/Consultas.php");
                                $usuarios = Usuarios::singleton();
                                $data = $usuarios->getResenas();
                                if (count($data) > 0) {
                                    foreach ($data as $fila) {
                                ?>

                                        <tr>
                                            <th scope="row"><?php echo $fila['noResena']; ?></th>
                                            <td> <?php echo $fila['remitente']; ?> </td>
                                            <td> <?php echo $fila['comentario'];  ?> </td>
                                        </tr>
                                    <?php }
                                } else {
                                    ?>
                                    <h2><?php echo 'Sin reseñas aún'; ?></h2>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="crearPDF.php" method="post">
        <button class="btn btn-primary" id="btnEliminar">
            <i class="fa-sharp fa-solid fa-file-pdf"></i>
        </button>

    </form>
</body>

</html>