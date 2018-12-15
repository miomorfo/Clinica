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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	<title></title>
	<link href="nube.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="intranet.js"></script>
  </head>
  <body>

	  <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
				
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
						<form class="form" method="post" action="login/autenticar.php" onSubmit="return validacion_index()" id="f_inicio" name="f_inicio">
						
                            <div class="form-group" >
                                <label for="email" class="text-white">Usuario:</label><br>
                                <input type="text" name="p_username" id="p_username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pass" class="text-white">Contraseña:</label><br>
                                <input type="password" name="p_password" id="p_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info btn-md" value="Entrar">
							</div>
							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	


<div class="cotainer">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-8">
			<footer>
		
				<div >
				proyecto de titulo INACAP
				</div>
		
				<strong>Copyright &copy; tuClinic 2018 <a href="#">tuClinic</a>.</strong> Todos los derechos reservados
			</footer>
		</div>
		<div class="col-md-2"></div>
	</div>

</div>

	


  </body>
</html>