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



function VerifDatosLogin(){
    usuario = document.getElementById("inputUser").value;
    if(usuario == null || usuario == "" || usuario == "\\n"){
        window.alert("Usuario ingresado está vacío o no es valido");
    }else if(usuario.includes(' ')){
        window.alert("El usuario no puede tener espacios");
    }else{
        pass = document.getElementById("inputPass").value;
        if(pass == null || pass == "" || pass == "\\n"){
            window.alert("La contraseña está vacía o no es válida");
        }else if(pass.includes(' ')){
            window.alert("La contraseña no puede tener espacios");
        }else{
            //Llamar a un método de logueo futuro
        }
    }
}



