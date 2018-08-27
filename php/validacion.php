<?php

$msgNombreError = $msgCorreoError = $msgWebError = $msgAsuntoError = $msgMensajeError = "";
$nombre = $correo = $web = $asunto = $mensaje = "";

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST['nombre'])) {
		$msgNombreError = "Por favor escriba su Nombre Completo!";
	} else {
		$nombre = test_input($_POST['nombre']);
		if (!preg_match("/^[A-Z]{1}[a-z]{2,9}\s[A-Z]{1}[a-z]{2,9}$/", $nombre)) {
			$msgNombreError = "Su Nombre Completo es Invalido!";
		}
	}
	
	if (empty($_POST['correo'])) {
		$msgCorreoError = "Por favor escriba su Correo Electrónico!";
	} else {
		$correo = test_input($_POST['correo']);
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$msgCorreoError = "Su Correo Electrónico es Invalido!";
		}
	}
	
	if (empty($_POST['web'])) {
		$msgWebError = "";
	} else {
		$web = test_input($_POST['web']);
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $web)) {
			$msgWebError = "La URL del Sitio Web es Invalido!";
		}
	}
	
	if (empty($_POST['asunto'])) {
		$msgAsuntoError = "Por favor escriba el Tema del Asunto!";
	} else {
		$asunto = test_input($_POST['asunto']);
	}
	
	if (empty($_POST['mensaje'])) {
		$msgMensajeError = "Su Mensaje del Asunto es muy Importante!";
	} else {
		$mensaje = test_input($_POST['mensaje']);
		if (strlen($mensaje) > 255) {
			$msgMensajeError = "Su Mensaje es demasiado Largo!";
		}
	}
}

?>