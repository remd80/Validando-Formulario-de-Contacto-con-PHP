<?php
	include_once("php/validacion.php");
?>
<!DOCTYPE html>
<html lang="es-HN">
<head>
<title><?php 
$titulo_sitio = "Validación Formulario de Contacto con PHP";
echo $titulo_sitio;
?></title>
<meta name="author" content="Roberto E. Murillo D." />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" conttent="Validando Formulario  de Contacto con PHP" />
<meta name="keywords" content="validando formulario, php, validando formulario de contacto con php" />
<link rel="stylesheet" type="text/css" href="estilo/index.css" media="screen" />
</head>
<body>
<div id="contenedor">
	<?php $titulo_contenido = "Validando Formulario con PHP"; echo "\t<h1>" . $titulo_contenido . "</h1>\n"; ?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<fieldset>
			<legend><?php echo "Ingresar Datos"; ?></legend>
			<label>Nombre:</label>
			<?php echo "<span class='mensaje_error'>" . $msgNombreError . "</span>\n"; ?>
			<input type="text" name="nombre" placeholder="Nombre y Apellido" value="<?php echo $nombre; ?>" />
			<label>Correo:</label>
			<?php echo "<span class='mensaje_error'>" . $msgCorreoError . "</span>\n"; ?>
			<input type="text" name="correo" placeholder="usuario@dominio.com" value="<?php echo $correo; ?>" />
			<label>Sitio Web:</label>
			<?php echo "<span class='mensaje_error'>" . $msgWebError . "</span>\n"; ?>
			<input type="text" name="web" placeholder="http://www.dominio.com" value="<?php echo $web; ?>" />
			<label>Asunto:</label>
			<?php echo "<span class='mensaje_error'>" . $msgAsuntoError . "</span>\n"; ?>
			<input type="text" name="asunto" placeholder="Tema del Asunto" value="<?php echo $asunto; ?>"  />
			<label>Mensaje</label>
			<?php echo "<span class='mensaje_error'>" . $msgMensajeError . "</span>\n"; ?>
			<textarea rows="10" cols="30" name="mensaje" placeholder="Mensaje del Asunto"></textarea>
			<input type="submit" value="Enviar" />	
		</fieldset>
	</form>
	<?php
	$url_contenido = "../";
	$url_titulo_contenido = "Ir hacia atrás";
	$url_mensaje = "Ir Atrás";
	echo "\t<a href='{$url_contenido}' title='{$url_titulo_contenido}'>{$url_mensaje}</a>\n";
?>
</div>
</body>
</html>