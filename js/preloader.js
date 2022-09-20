window.onload = function(){
    ocultarBody();
    setTimeout(ocultarPre, 4000);
    setTimeout(mostrarBody, 4001);
};


function ocultarPre(){
    $("#preloader").fadeOut(250);
}

function ocultarBody(){
    document.getElementById("contenido").style.display = "none";
    document.getElementById("header").style.display = "none";
    document.getElementById("footer").style.display = "none";
    document.getElementById("btn-wsp").style.display = "none";
    document.getElementById("Pedidos").style.display = "none";
    
   
}

function mostrarBody(){
    $("#contenido").fadeIn(1000);
    $("#header").fadeIn(1500);
    $("#footer").fadeIn(2000);
    $("#btn-wsp").fadeIn(2000);
    $("#Pedidos").fadeIn(2000);
}