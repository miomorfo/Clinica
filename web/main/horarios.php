<?php

include('funciones/menu.php');
include('funciones/footer.php');
include('funciones/consultas.php');




//impedimos el acceso a las personas que NO se han logado

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

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>tuCLinic | Servicio web</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
    <!-- Contenido web -->


    <section class="content-header">
      <h1>
        Calendario

      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

              <!-- THE CALENDAR -->
              <?php 
              /*$datos = mysql_query("SELECT * FROM horas");
              $fila = mysql_fetch_array($datos);
              $title = $fila['title'];
              $descripcion = $fila['descripcion'];
              $start = $fila['start'];
              $end = $fila['end'];
              $rut = $fila['rut'];
              $nombre = $fila['nombre'];
              $apellidos = $fila['apellidos'];
              $telefono = $fila['telefono'];
              $correo = $fila['correo'];

              
              echo json_encode($fila);
              
              */
              ?>

              <div class="container">
                  <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8"><div id="calendar"></div></div>
                      <div class="col-md-2"></div>


                  </div>
              </div>

              <!--zona pruebas -->
              

              <!-- fin zona pruebas -->

</div>
  <!--footer -->
  <?= $footer ?>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- fullCalendar -->
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/fullcalendar/es.js"></script>
<!-- bootstrap -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>



<script>
  $(function () {


    $('#calendar').fullCalendar({
        header:{
          left:'today,prev,next,MiBoton',
          center:'title',
          right:'month,basicWeek,basicDay,agendaWeek,agendaDay'
        },
        customButtons:{
          MiBoton:{
            text:"Botón 1",
            click:function(){
              alert("Acción del botón ");
            }
          }
        },
        dayClick:function( date, sjEvent, view){
          //alert("Valor Seleccionado:"+date.format());
          //alert("Vista actual:"+view.name);
          //$(this).css('background-color','red');
          $('#txtFecha').val(date.format());
          $('#ModalEventos').modal();

        },
        events: 'http://localhost/main/horas_calendario.php',
        eventClick : function(calEvent, jsEvent, view){
          //h2 con el titulo
          $('#tituloEvento').html(calEvent.title);
          //mostrar la info en los inputs
          $('#txtDescripcion').val(calEvent.descripcion);
          $('#txtID').val(calEvent.id);
          $('#txtTitulo').val(calEvent.title);
          $('#txtRut').val(calEvent.rut);
          $('#txtNombre').val(calEvent.nombre);
          $('#txtApellidos').val(calEvent.apellidos);
          $('#txtTelefono').val(calEvent.telefono);
          $('#txtCorreo').val(calEvent.correo);
          
          //slip la fecha y hora en un arreglo, separa por el espacio
          FechaHora = calEvent.start._i.split(" ");
          $('#txtFecha').val(FechaHora[0]);
          $('#txtHora').val(FechaHora[1]);


          $('#ModalEventos').modal();

        }


    });

});
</script>

<!-- Modal de mensaje calendario-->
<!-- Modal DE pruebas-->


<!-- fin modal pruebas-->


<!-- modal agregar, modificar, eliminar-->

<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="tituloEvento"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        ID:<input type ="text" id="txtID" name="txtID" /><br/>
        Fecha:<input type ="text" id="txtFecha" name="txtFecha" /><br/>
        Titulo:<input type = "text" id="txtTitulo"> <br/>
        Hora: <input type ="text" id="txtHora" value="10:30"/><br/>
        Descripcion : <textarea id="txtDescripcion" rows="3"></textarea><br/>
        Rut: <input type ="text" id="txtRut"> <br/>
        Nombre: <input type ="text" id="txtNombre"> <br/>
        Apellidos: <input type ="text" id="txtApellidos"> <br/>
        Telefono: <input type ="text" id="txtTelefono"> <br/>
        Correo: <input type ="text" id="txtCorreo"> <br/>

 


      </div>
      <div class="modal-footer">

        <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-success">Modificar</button>
        <button type="button" class="btn btn-danger">Borrar</button>

        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>


<!-- fin modal crud -->


<script>

//variable para manipular
var NuevoEvento

$('#btnAgregar').click(function(){
    RecolectarDatosGUI();
    $('#calendar').fullCalendar('renderEvent',NuevoEvento );
    $('#ModalEventos').modal('toggle');

});

function RecolectarDatosGUI(){
        NuevoEvento= {
            id:$('#txtID').val(),
            title:$('#txtTitulo').val(),
            descripcion:$('#txtDescripcion').val(),
            rut:$('#txtRut').val(),
            start:$('#txtFecha').val()+" "+$('#txtHora').val(),
            nombre:$('#txtNombre').val(),
            apellidos:$('#txtApellidos').val(),
            telefono:$('#txtTelefono').val(),
            correo:$('#txtCorreo').val()
            end:$('#txtFecha').val()+" "+$('#txtHora').val()


          };
}

</script>

</body>
</html>
