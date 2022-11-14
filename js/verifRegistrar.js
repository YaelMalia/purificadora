

/*function VerifReg(){
    let nombreC = document.getElementById("inputNombreC").value;
    let direccion = document.getElementById("inputDireccion").value;
    let telefono = document.getElementById("inputTelf").value;
    let usuario = document.getElementById("inputUser").value;
    let correo = document.getElementById("inputCorreo").value;
    let password = document.getElementById("inputPass").value;    

    let datos = new Array(nombreC, direccion, telefono, usuario, correo, password);
    for(let i = 0; i< datos.length; i++){
        if(datos[i] == "" || datos[i] == null || datos[0] == "\\n"){
            alertify.alert("Error en los campos", "Alguno de los campos está vacío o no es válido");
            return false;
        }else{
            //Para nombre completo
            if(datos[0].includes('1') || datos[0].includes('2') || datos[0].includes('3') || datos[0].includes('4') || datos[0].includes('5') || datos[0].includes('6') || datos[0].includes('7') || datos[0].includes('8') || datos[0].includes('9') || datos[0].includes('0')){
                alertify.alert("Error", "El campo nombre no puede llevar números");
                return false;
            }
            //Para teléfono
            else if(datos[2].length > 10){
                alertify.alert("Error", "El tamaño del campo teléfono no puede ser mayor a 10");
                return false;
            }
            //Para usuario
            else if(datos[3].includes(' ')){
                alertify.alert("Error", "El campo usuario no puede tener espacios");
                return false;
            }
            //Para correo
            else if(!datos[4].includes('@') || !datos[4].includes(".com")){
                alertify.alert("Error", "El campo correo no contiene el formato correcto");
                return false;
            }
            else{
                //Todo correcto
                return true;
            }
        }
    }
}
*/