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



		<meta charset="UTF-8">
		<title>Clinica</title>
		<script src="instranet.js" charset="utf-8"></script>
	</head>


	<body>
		<div id="form-home">

			<form  action="login/autenticar.php" method="post" onSubmit="return validacion_index()"
			id="f_inicio" name="f_inicio">

			<label for="email" class="email">Usuario</label>
			<input type="text" name="p_username"  id="p_username" >

			<label for="pass" class="pass">Contraseña</label>
			<input type="password" name="p_password" id="p_password" class="form-control">

			<br class="clearfloat">
			<input type="submit" value="Entrar" class="b_inicio">
			</form>


			<p><?php echo $error ?></p>
		</div>


	</body>
</html>
