<?php

include('funciones/menu.php');
include('funciones/consultas.php');

if($_SESSION['nivel']==1){

  $menu = getMenuMedico();
	$perfil = 'MEDICO';
	$usuarios = getUsuarios();
  $pacientes = getPacientes();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inicio Intranet</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<div class="container">
<header>
<h1>Intranet Clinica Psiquiatrica</h1>
<h2>Bienvenido a la Intranet, <?= $_SESSION['nombre'] ?></h2>
<div class="cerrar_sesion">
<a href="../login/salir.php">Cerrar sesión</a>
</div><!--end .cerrar_sesion -->
<!-- google chart-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.2,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
<!-- google chart end -->
</header>
<?= $menu ?>
<div class="clearfix"></div>


  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3>Column 1</h3>
        <p>Lorem ipsum dolor..</p>
        <div id="donutchart" style="width: 400px; height: 300px;"></div>
        <p>Ut enim ad..</p>
      </div>
      <div class="col-sm-4">
        <h3>Column 2</h3>
        <p>Lorem ipsum dolor..</p>
        <p>Ut enim ad..</p>
      </div>
      <div class="col-sm-4">
        <h3>Column 3</h3>
        <p>Lorem ipsum dolor..</p>
        <p>Ut enim ad..</p>
      </div>
    </div>
  </div>





<footer>
<div class="left">
Teléfono: <strong><a href="tel:<?= $_SESSION['telefono'] ?>"><?= $_SESSION['telefono'] ?></a></strong>
</div><!--end .left-->

<div class="right">
<?= $_SESSION['nombre'] ?>, has entrado con el perfil de <strong><?= $perfil ?></strong>
</div><!--end .right-->
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



<?php

} else {

  define('PAGINA_INICIO','../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);

}


?>
