<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styleContacto.css">
  <script src="js/jquery.js"></script>

  <script src="alertify/alertify.js"></script>
  <link rel="stylesheet" href="alertify/alertify.css">

  <title>Contáctanos</title>

  <script type="text/javascript">
    window.onload = function(){
      alertify.alert("AVISO","Antes de pedir, es importante hacerle mención que por su seguridad, 'Purificadora Gota de Angel' no publica ni hace uso de ningún dato privado que proporcione en este lugar.");
    }
  </script>

</head>

<body>
  
  <div class="container-fluid">
    <div class="contacto">
      <div class="titulo">
        <h2><b>Purificadora "Gota de Ángel"</b></h2>
      </div>

      <div class="box">
        <!--FORMULARIO CONTACTAR-->
        <div class="form C">
          <h3><b>Realiza tu pedido</b></h3>
          <form action = "emailSender.php" name = "formulario" method = "POST">
            <div class="usuarioInfo">
              <div class="detalle">
                <div class="cajas">
                  <span>Nombre (s)</span>
                  <input type="text" placeholder="Gota" name = "inputNombres">
                </div>
                <div class="cajas">
                  <span>Apellido (s)</span>
                  <input type="text" placeholder="De Ángel" name = "inputApellidos">
                </div>
              </div>

              
               <div class="detalle">
                <!-- <div class="cajas">
                  <span>Correo electrónico</span>
                  <input type="text" placeholder="purificadoraEZ@gmail.com" id = "inputCorreo" name = "inputCorreo">
                </div>

                <div class="cajas">
                  <span>Contraseña de su correo</span>
                  <input type="password" placeholder = "" name = "inputPass">
                </div> -->
               

                <div class="cajas" style="width: 25%;">
                  <span>Teléfono</span>
                  <input type="text" placeholder="548486844" name = "inputNumero1">
                </div>
                <div style="margin-top:42.5px;">
                  <input type="button" id="btnMas" value="  +  ">
                </div>
              
                <div class="cajas">
                <div id="otroTel"> </div>
                </div>
                
              </div>
              <!--CAJA GRANDE TEXTO-->
              <div class="detalle2">
                <div class="cajas">
                  <span>Mensaje</span>
                  <textarea placeholder="Escribe tu mensaje aquí" name = "inputTextograndote" id = "inpTG" onclick = "Aviso()"></textarea>
                </div>
              </div>


              <div class="detalle2">
                <div class="cajas">
                  <input type="submit" value="Pedir" name = "Pedir" style="font-weight: bold;">
                </div>
              </div>
            </div>
          </form>
        </div>
        <!--FORMULARIO INFORMACIÓN-->
        <div class="form I">
          <h3><b>Información de contacto</b></h3>
          <div class="infoBox">
            <div>
              <span>
                <ion-icon name="location"></ion-icon>
              </span>
              <p>Emiliano Zapata Hgo, México <br>MÉXICO</p>
            </div>
            <div>
              <span>
                <ion-icon name="mail"></ion-icon>
              </span>
              <p>pgotadeangel@gmail.com</p>
            </div>

            <div>
              <span>
                <ion-icon name="call"></ion-icon>
              </span>
              <p>5554751197</p>
            </div>

            <!--REDES SOCIALES-->
            <ul class="sci">
              <li><a href="">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
              <li><a href="">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
              <li><a href="" class="btnModal">
                  <ion-icon name="information-circle-outline"></ion-icon>
                </a></li>
            </ul>

            <div class="dejar-resena" id="dejar-resena">
              <a href="resenas.html" style = "text-decoration:none;" class = "demo rainbow enlace"> Dejar una reseña </a>
            </div>
          </div>

        </div>
        <!--FORMULARIO MAPA-->
        <div class="form M">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5313.700880964115!2d-98.54183312421007!3d19.654900237090146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1cb883b9ad0d9%3A0x87da0edd1c639846!2sFashion%20Rose!5e0!3m2!1ses!2smx!4v1663634234733!5m2!1ses!2smx"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>
  </div>

  <div class="modal-container">
    <div class="modal modal-close">
      <p class="close">X</p>
      <img src="sources/images/team.svg">
      <div class="modal-textos">
        <h2 class="titles">Agradecemos su preferencia</h2>
        <p class="parr">
          Purificadora gota de Ángel, agradece su preferencia. Esperando
          que nuestro servicio sea de su agrado, ya que para nosotros el
          cliente y su salud es nuestra prioridad.
        </p>
      </div>
    </div>
  </div>

  <script src="js/modal.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>-
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script type="text/javascript">
    var count = 0;
    $("#btnMas").click(function () {
      count++;
      if (count <= 1) {
        $("#otroTel").append('<div class="cajas">' +
          '<span>Teléfono secundario</span>' +
          '<input type="text" placeholder="548486844" name = "inputNumero2">' + '</div>');
      } else {
        alertify.alert("AVISO", "Solamente se puede agregar un teléfono extra");
      }
    });

    $("#inpTG").click(function(){
    alertify.alert("AVISO", "En este cuadro de texto, usted deberá proporcionar la cantidad de productos a llevar, dirección de entrega de su pedido y especificaciones sobre el como entregarselo.\n ¡Agradecemos su preferencia!")
    });
  </script>

</body>
<footer>

</footer>

</html>