<?php

include('funciones/menu.php');
include('funciones/footer.php');
include('funciones/consultas.php');
include('funciones/ver_farmacos.php');



//impedimos el acceso a las personas que NO estén indentificadas

if($_SESSION['nivel']==1 || $_SESSION['nivel']==2)
{


//asignamos el menú en función de si es NIVEL 1 o NIVEL 2
if($_SESSION['nivel']=='1'){
	$menu = getMenuMedico();
  $perfil = 'MEDICO';
  


}else{
	$menu = getMenuAsistente();
    $perfil = 'ASISTENTE';
    
    
}
}

$footer = getFooter();


$mysqli = new mysqli('localhost', 'root', '', 'consultadb');

$farmacos = getFarmacos();


?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>tuCLinic | Servicio web</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Tu</b>Clinic</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Tu</b>Clinic</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
								<?= $_SESSION['nombre'] ?>
							</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <!--<li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>-->
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!--<a href="#" class="btn btn-default btn-flat">Perfil</a>-->
                </div>

                <div class="pull-right">
                  <a href="../login/salir.php" class="btn btn-default btn-flat">Cerrar Session</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/gato-pizza.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">

					<p><?= $_SESSION['nombre'] ?>, </p>
					<p>Perfil:  <strong><?= $perfil ?></strong></p>


          <!-- Status -->
          
        </div>
      </div>

      <!-- search form (Optional) -->

      <!-- /.search form -->

      <!-- Sidebar Menu -->

			<?= $menu ?>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistema para clinicas TuClinic
        <small>Descripción del proyecto</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-6">
        <!-- contenido de formulario-->


<!-- formulario -->
<div class="formulario form-group">
        <form action="ficha.php?rut=<?= $resultado ?>">
        <div class="row">
        <div class="col-md-4 col-lg-4">
            <label for="rut">Selecione un Rut</label>
            <select class="form-control" name="rut">
            
        <!-- llenado de rut-->
        <?php  
        
        $rut = $_GET['rut'];
          $pacientes = mysql_query("SELECT * FROM pacientes");
        
          while ($fila = mysql_fetch_array($pacientes)){
            $fila['rut'];
            $resultado = $fila['rut'];
            

            ?>
            
            
                  <option> <?php echo $resultado ?></option>
                  
             
            
          <?php  
          }
          
          
        
        
        ?>
          </select>
        </div>
        
        </div>
        <br>
        <input type="submit" value="Buscar" class="btn btn-info"/>
        
        
        </form>
        </div>

        <!-- fin del llenado de rut -->

      
      <h4>
        Ficha Clinica
        <small>Datos del paciente</small>
      </h4>



      
        <!-- datos para rellenar-->

        <div class="formulario form-group">
	      <form action="funciones/editar_paciente_ficha_funcion.php?rut=<?= $rut ?>" method="post" id="form_home">
        <?php 
        
        

        $datos = mysql_query("SELECT * FROM pacientes WHERE rut='$rut'");
        $fila = mysql_fetch_array($datos);
        $nombre = $fila['nombre'];
        $apellidos = $fila['apellidos'];
        $sexo = $fila['sexo'];
        $antecedentes_familiares = $fila['antecedentes_familiares'];
        $antecedentes_personales = $fila['antecedentes_personales'];
//



//
        
        ?>
        <div class="row">
				<div class="col-md-4 col-lg-4">
					<label for="rut">rut</label>
					<input id="rut" name="rut" class="form-control" value="<?php echo $rut?>"/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-lg-6">
                 <label for="nombre">Nombre</label>
                 <input id="nombre" name="nombre" class="form-control" value=" <?php echo $nombre?>"/>
        </div>    
      </div>

      <div class="row">
			    <div class="col-md-6 col-lg-6">
        	        <label for="apellidos">Apellidos</label>
        	        <input id="apellidos" name="apellidos" class="form-control" value=" <?php echo $apellidos?>"/>
				</div>
			</div>

      <div class="row">
			    <div class="col-md-4 col-lg-4">
        	        <label for="sexo">sexo</label>
        	        <input id="sexo" name="sexo" class="form-control" value=" <?php echo $sexo?>"/>
				</div>
      </div>
      

      <div class="row">
			    <div class="col-md-6 col-lg-6">
            <label for="antecedentes_familiares">Antecedentes Familiares</label>
            <textarea class="form-control" rows="5" id="antecedentes_familiares" name="antecedentes_familiares" > <?php echo $antecedentes_familiares?> </textarea>
				</div>
      </div>

      <div class="row">
			    <div class="col-md-6 col-lg-6">
            <label for="antecedentes_personales">Antecedentes Personales</label>
            <textarea class="form-control" rows="5" id="antecedentes_personales" name="antecedentes_personales"> <?php echo $antecedentes_personales?> </textarea>
				</div>
      </div>



        <!-- fin datos para rellenar-->


        <br>
        <input type="submit" value="Guardar" class="btn btn-info"/>
        
        
        
        </form>
        </div> 
        <!-- fin div del formulario-->





        <!-- fin contenido de formulario-->
        </div>
        <div class="col-md-2 col-lg-2">
          <form action="funciones/ver_farmacos?rut=<?= $rut ?>" method="post" id="form_home"></form>
          <input type="submit" value="Revisar" class="btn btn-info"/>
        </div>
        <div class="col-md-4 col-lg-4">
       <?= $farmacos ?>

        </div>
        
        
        </div><!-- fin container -->
        
        
        

        
        <!-- fin div del formulario-->

        <div class="col-md-4">
        </div>
        <div class="col-md-4"> 
        </div>
        <div class="col-md-4">adadaf
        </div>

<?php 









?>

        



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?= $footer ?>


  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
