<?php

include('funciones/menu.php');

session_start();

//impedimos el acceso a las personas que NO se han logado

if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){


//asignamos el menú en función de si es NIVEL 1 o NIVEL 2
if($_SESSION['nivel']=='1'){
	$menu = getMenuMedico();
	$perfil = 'MEDICO';
}else{
	$menu = getMenuAsistente();
	$perfil = 'ASISTENTE';
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inicio Intranet</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--<link rel="stylesheet" type="text/css" href="styles.css">-->
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script type="text/javascript" src="intranet.js"></script>

</head>

<body>

<div class="container">
<header class="row align-items-center">
		<div class="col-md-10">
			<h1><center> Intranet Clinica Psiquiatrica</center></h1>
			<h2>Bienvenido a la Intranet, <?= $_SESSION['nombre'] ?></h2>
		</div>
		<div class="cerrar_sesion col-md-2">
				<button class="btn btn-light my-2 my-sm-0" type="button"><a href="../login/salir.php">Cerrar sesión</a></button>
		</div><!--end .cerrar_sesion -->
</header>


<div class="row">
	<div class="col-md-12">
		<?= $menu ?>
	</div>
</div>

<br>

<div class="clearfix"></div>
<h2 class="principal"><center>Inicio</center></h2>

<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="row">
<div class="left col-md-8">
Teléfono: <strong><a href="tel:<?= $_SESSION['telefono'] ?>"><?= $_SESSION['telefono'] ?></a></strong>
</div><!--end .left-->

<div class="right col-md-4">
<?= $_SESSION['nombre'] ?>, has entrado con el perfil de <strong><?= $perfil ?></strong>
</div><!--end .right-->
</footer>

</div> <!--end .container-->
</body>

</html>

<?php
} else {

	define('PAGINA_INICIO','../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);

}
?>
