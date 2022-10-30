/*
window.onload() = function(){
    ocultarBody();
    setTimeout(mostrarBody, 4001);
  }
  function ocultarBody(){
    document.getElementById("cuerpo").style.display = "none";
  }
  function mostrarBody(){
    document.getElementById("cuerpo").style.display = "block";
    $("#cuerpo").fadeIn(1000);
  }

*/


function VerifDatosLogin(){
    correo = document.getElementById("inputCorreo").value;
    if(correo == null || correo == "" || correo == "\\n"){
        alertify.alert("Error", "Correo ingresado está vacío");
        return false;
    }else if(!correo.includes('@') || !correo.includes(".com")){
        alertify.alert("Error", "El correo no tiene el formato adecuado");
        return false;
    }else{
        pass = document.getElementById("inputPass").value;
        if(pass == null || pass == "" || pass == "\\n"){
            alertify.alert("Error", "La contraseña está vacía o no es válida");
            return false;
        }else if(pass.includes(' ')){
            alertify.alert("Error", "La contraseña no puede tener espacios");
            return false;
        }else{
            //Función de logueo
            
            parametros = {
                "correo":correo,
                "pass":pass
            };
            let SegundoR = "";
            $.ajax({
                type: 'POST',
                url: "validarLogin.php",
                data: parametros,
                async: false,
                success: function(resultado){
                    if(resultado == "correcto"){
                        SegundoR = "si";
                    }
                    if(resultado == "incorrecto"){
                        SegundoR = "no";
                        alertify.alert("Error", "Correo o contraseña inválidos");
                    }
                }
        
            });
            if(SegundoR == "si"){
                return true;
            }
            else{
                return false;
            }
        }
    }
}



