<?php
	$error = "";
	if(isset($_GET['mensaje'])&&($_GET['mensaje']=='mensaje_error')){
		$error = "Su usuario o contraseña son incorrectos";
	}
	if(isset($_GET['mensaje'])&&($_GET['mensaje']=='gracias')){
		$error = "Gracias por utilizar tuClinic";
	}
	if(isset($_GET['mensaje'])&&($_GET['mensaje']=='sin_permiso')){
		$error = "No tienes permiso para acceder a esta URL";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Acceso Privado</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<!--<link href="styles.css" rel="stylesheet" type="text/css"/>-->
<script type="text/javascript" src="intranet.js"></script>
</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-lg-4"></div>
		<div class="col-md-4 col-lg-4">

			<div id="form_home" class="form-group">
	<form action="login/autenticar.php" method="post" onSubmit="return validacion_index()" id="f_inicio" name="f_inicio">

    <label for="email" class="email">Usuario</label>
    <input type="text" name="p_username" id="p_username" class="form-control"/>

    <label for="pass" class="pass">Contraseña</label>
    <input type="password" name="p_password" id="p_password" class="form-control"/>

    <br class="clearfloat"/>

    <input type="submit" value="Entrar" class="btn btn-primary"/>

    </form>
    <p class="rojo"><? echo $error ?></p>
</div>


		</div>
		<div class="col-md-4 col-lg-4"></div>
	</div>
</div>


</body>
</html>
