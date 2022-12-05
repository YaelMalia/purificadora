<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot ConfiguroWeb</title>
    <link rel="stylesheet" href="css/stylebot.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="public/fontawesome-free-6.2.0-web/css/all.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">Gota de Ángel</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fa-solid fa-droplet"></i>
                </div>
                <div class="msg-header">
                    <p>Hola, ¿En qué puedo ayudarte?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                <button id="send-btn">Enviar</button>
            </div>
        </div>
    </div>
    <div>
        Sugerencias:
        <br>
        Prueba escribiendo: "Pedido"
        <br>
        Prueba escribiendo: "Horario"
        <br>
        Prueba escribiendo: "Contacto"
    </div>
    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                // iniciar el código ajax
                $.ajax({
                    url: 'entrenador.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        setTimeout(function() {
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa-solid fa-droplet"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                            $(".form").append($replay);
                            // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        }, 1250)


                    }
                });
            });
        });
    </script>
</body>

</html>