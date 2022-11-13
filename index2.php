<?php
//Include EL CONECTOR A GMAIL https://console.developers.google.com
include_once 'gpConfig.php';
//VERIFICANDO SI YA SE LOGUEO
$errorNI="";
if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

$output="";
if ( $gClient->getAccessToken() ) { //SE HA LOGUEADO
	//Get user profile data from google
	
	$gpUserProfile = $google_oauthV2->userinfo->get();
	//RESCATANDO CORREO ELECTR�NICO
	$email = $gpUserProfile[ 'email' ];
	//SEPARANDO POR EL @
	$cade=explode("@",$email);
	$p1=$cade[0];
	$p2=$cade[1];
	$errorNI="";
	//PRIMERO SE VALIDA POR DOMINIO DE CORREO ELECTR�NICO
	if($p2!="gmail.com")
	{
		$errorNI="No es correo de ITESA";	
		$authUrl = $gClient->createAuthUrl();
		$output = '<a href="' . filter_var( $authUrl, FILTER_SANITIZE_URL ) . '"><img src="gmail.png" alt=""/></a>';
	}
	else
	{
		//SI SE PUEDE LOGUEAR YA SOLO QUEDA HACER OTRAS VALIDACIONES PARA PODER INGRESAR
		//SE PUEDE HACER CONSULTA A BASE DE DATOS Y VERIFICAR USUARIO
		if($p1="pgotadeangel")
		{
			header('Location:indexDinamico.php');	
		}
		else
		{
			$errorNI="NO TE ENCUENTRAS EN LA BASE DE DATOS DE ...";
			$authUrl = $gClient->createAuthUrl();
			$output = '<a href="' . filter_var( $authUrl, FILTER_SANITIZE_URL ) . '"><img src="sources/images/gmail.png" alt=""/></a>';
		}
		
	}
	//echo( $email );

} 
else 
{ 
	//SI NO SE LOGUEO PIDE QUE SE LOGUEE
	$authUrl = $gClient->createAuthUrl();
	$output = '<a href="' . filter_var( $authUrl, FILTER_SANITIZE_URL ) . '"><img src="sources/images/gmail.png" alt=""/></a>';
}
?>



<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>LOGIN ...</title>
	<style type="text/css">
		h3 {
			font-family: Arial, Helvetica, sans-serif;
		}
		#externo{
			border: 2px solid #0e3959;
						
			color: white;
			text-align: center;
			padding: 20px;
			border-radius: 30px;
			margin: 50 auto;
			height: auto;
			width: 400px;
			
			background-color: #03a9f5;
		}
		
		#interno{
			color: white;
			margin: 0 auto;
			height: auto;
			padding: 10px;
			width: 300px;
		}
		
		img{
			height: 70px;
			width: 70px;
			
		}
	</style>
</head>

<body>

	<div id="externo">
		<h2>BIENVENIDO AL SISTEMA</h2>
		<h3>INGRESA CON TU CUENTA DE GOOGLE</h3>
		<div id="interno">
			<h4>Ingresa con Google</h4><?php echo $output; ?>
		</div>
		<h4><?php echo $errorNI; ?></h4>
	</div>
</body>

</html>