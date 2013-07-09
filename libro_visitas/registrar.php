<?php
require_once("clases.php");

session_start();

if (($_REQUEST["txtCaptcha"] == $_SESSION["security_code"]) && (!empty($_REQUEST["txtCaptcha"]) && !empty($_SESSION["security_code"]))){
	if(isset($_POST['nombre_visitante']) && isset($_POST['mensaje_visitante'])){
	$nuevoregistro = new operacionesBD;
	$nuevoregistro->registrarVisitas($_POST['nombre_visitante'], $_POST['mensaje_visitante']);
	}
	else{
		echo "No has ingresado los datos para el registro";
		header('Location: index.php');
	}
}
else {
	echo "¿no eres humano? intenta colocar el código correctamente";
	//sleep(5);
	//header("Location: index.php");
}
?>