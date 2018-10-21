<?php
	//verifico si hay un mensaje por GET y valido que sea el error de logeo
	$error = "";
	if (isset($_GET['mensaje']) && ($_GET['mensaje'] == 'error_de_logeo')){
		//defino el mensaje que se mostrará
		$error = "Su usuario o su contraseña son incorrectos";
	}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<link rel="stylesheet" href="/css/master.css">
		<script src="validarDatos.js" charset="utf-8"></script>
		<meta charset="utf-8">
		<title>Clinica</title>
	</head>
	<body>
		<div id="form_home">

			<form class="" action="login/autenticar.php" method="post" onsubmit="return validacion_index()"
			id="f_inicio" name="f_inicio">

			<label for="email" class="email">usuario</label>
			<input type="text" name="p_username" value="" id="p_username">

			<label for="pass" class="pass">contraseña</label>
			<input type="text" name="p_password" value="" id="p_password">

			<br class="clearfloat">
			<input type="submit" name="" value="Entrar" class="b_inicio">
			</form>

			
			<p><?php echo $error ?></p>
		</div>


	</body>
</html>
