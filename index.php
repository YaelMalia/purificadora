<?php 
    if(isset($_COOKIE["cookieUsuario"]) && isset($_COOKIE["PHPSESSID"])){
        session_start();
        $_SESSION["nombreCompleto"] = $_COOKIE["cookieUsuario"];
        $_SESSION["correo"] = $_COOKIE["cookieCorreo"];
        $_SESSION["pass"] = $_COOKIE["psd"];
        header("Location:indexDinamico.php");
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link href="https://www.flaticon.es/iconos-gratis/whatsapp">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/preloader.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Purificadora "Gota de ángel</title>


    <script type="text/javascript">
        // function ocultarCalaverita() {
        //     $("#calaverita").slideUp(800);
        // }
    </script>
</head>
<header id="header" class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left:50px; padding-right:50px;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <div
                    style="width: 125px; border-right-width: 1px; border-right-style:solid; border-color:rgba(209, 208, 208, 0.699);">
                    <img src="sources/images/logo-purificadora.png" height="80" alt="Purificadora gota de ángel"
                        class="logo-img">

                </div>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">

                </div>
                <div class="navbar-nav ms-auto">
                    <a href="Login.php" class="nav-item nav-link active">Iniciar sesión</a>
                    <a href="#Instalaciones" class="nav-item nav-link">Instalaciones</a>
                    <a href="Precios.php" class="nav-item nav-link">Precios</a>
                    <a href="Mensajes.html" class="nav-item nav-link" style="display:none;">Buzón de mensajes</a>
                    <a href="inventario.html" class="nav-item nav-link" style="display:none;">Inventario</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<body>
    <div id="preloader" class="preloader">
        <span class="loader"></span>
    </div>
    <!-- <div class="calaverita" id="calaverita">
        <a href="javascript:void(0)" onclick="ocultarCalaverita()">
            <div style="position:absolute; color: #fff; left:95%"><b>X</b></div>
        </a>
        <div style="margin-top: 10px; color: #fff;">
            <center><img src="sources/images/calaveras.png" height="150" alt="calaveritas">
                <div style="margin-top: 10px;">
                    <h3 class="textoInt"><b>Felíz mes de los santos les desea</b>
                        <br>
                        <img src="sources/images/LogoEmpresa.png" height="25" alt="LUX Enterprise">LUX Enterprise
                        S.A. de C.V.
                    </h3>
            </center>
        </div>
    </div> -->
    </div>
    <div id="contenido" class="contenido">
        <section id="inicio"></section>
        <center>
            <h1 class="texto-inicio">Purificadora "Gota de angel"</h1>
            <!--Inicio carrusel-->
            <div class="slide">
                <div class="slide-inner">
                    <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden=""
                        checked="checked">
                    <div class="slide-item">
                        <img src="sources/images/img1.jpg">
                    </div>
                    <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
                    <div class="slide-item">
                        <img src="sources/images/img2.jpg">
                    </div>
                    <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
                    <div class="slide-item">
                        <img src="sources/images/img1.jpg">
                    </div>
                    <label for="slide-3" class="slide-control prev control-1">‹</label>
                    <label for="slide-2" class="slide-control next control-1">›</label>
                    <label for="slide-1" class="slide-control prev control-2">‹</label>
                    <label for="slide-3" class="slide-control next control-2">›</label>
                    <label for="slide-2" class="slide-control prev control-3">‹</label>
                    <label for="slide-1" class="slide-control next control-3">›</label>
                    <!--
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>-->
                </div>
            </div>
            <!--Fin carrusel-->
            <div class="segundo-apartado">
                <div class="f-part">
                    <p>
                    <h3>Interior de las instalaciones</h3>
                    </p>
                    <section id="Instalaciones">
                        <iframe class="Interiorinstalaciones" src="https://viewer.divein.studio/story/3Xw-otG"
                            width="630" height="350" allowfullscreen></iframe>
                    </section>
                </div>

                <div class="s-part">
                    <p>
                    <h3>Ubicación del lugar</h3>
                    </p>
                    <iframe class="GMaps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15029.674839576774!2d-98.54051700429989!3d19.65213413401917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1cb8817d4dce3%3A0x501417e8b1b4deaf!2sAbasolo%2028B%2C%20Centro%2C%2043960%20Centro%2C%20Hgo.!5e0!3m2!1ses!2smx!4v1663625227309!5m2!1ses!2smx"
                        width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </center>
    </div>
    <!--Botón WhatsApp-->
    <a href="https://api.whatsapp.com/send?phone=55554751197" class="btn-wsp" id="btn-wsp" target="_blank">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48"
                style=" fill:#000000;">
                <path fill="#fff"
                    d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                </path>
                <path fill="#fff"
                    d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                </path>
                <path fill="#cfd8dc"
                    d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                </path>
                <path fill="#40c351"
                    d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                </path>
                <path fill="#fff" fill-rule="evenodd"
                    d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                    clip-rule="evenodd"></path>
            </svg>
        </i>
    </a>
    <!--Fin botón WhatsApp-->

    <!--Botón Pedidos-->
    <a href="sendEmail.php" id="Pedidos" class="Pedidos">
        <img src="sources/images/Pedidos.png" alt="Contactanos" width="50" height="50" style="border-radius: 10px;">
    </a>
    <!--Fin botón Pedidos-->
</body>
<footer>
    <div id="footer" class="footer">
        <div class="izq">
            <img class="logo_lux" src="sources/images/LogoEmpresa.png" width="120px" height="70px" alt="LUX Enterprise"
                style="margin-right: 20px; ">
            <br>
            <br>
            Desarrollado por: <b>LUX Enterprise S.A. de C.V.</b>
        </div>
        <div class="der">
            <b>Contáctanos</b>
            <br>
            <br>
            <img class="logo_gmail" src="sources/images/gmail.png" width="50px" height="50px" alt="gmail"
                style="margin-right: 20px; ">
            <br>
            Correo de contacto: <a href="mailto:lux.enterprise01@gmail.com"
                target="_blank">lux.enterprise01@gmail.com</a>
        </div>
    </div>
</footer>

</html>