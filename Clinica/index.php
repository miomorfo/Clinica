<?php
	//verifico si hay un mensaje por GET y valido que sea el error de logeo
	$error = "";
	if (isset($_GET['mensaje']) && ($_GET['mensaje'] == 'error_de_logeo')){
		//defino el mensaje que se mostrará
		$error = "Su usuario o su contraseña son incorrectos";
	}

//en caso de no tener persmisos
	if (isset($_GET['mensaje']) && ($_GET['mensaje'] == 'sin_permiso')){
		//defino el mensaje que se mostrará
		$error = "debe ingresar su usuario y contraseña";
	}



?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<script src="validarDatos.js" charset="utf-8"></script>
		<meta charset="utf-8">
		<title>Clinica</title>
	</head>
	<body>
		<div class="form-group">

			<form class="login-form" action="login/autenticar.php" method="post" onsubmit="return validacion_index()"
			id="f_inicio" name="f_inicio">

			<label for="email" class="email">Usuario</label>
			<input type="text" name="p_username" value="" id="p_username" class="form-control">

			<label for="pass" class="pass">Contraseña</label>
			<input type="password" name="p_password" value="" id="p_password" class="form-control">

			<br class="clearfloat">
			<input type="submit" name="" value="Entrar" class="btn btn-primary">
			</form>


			<p><?php echo $error ?></p>
		</div>


	</body>
</html>
