<?php
include ('funciones/menu.php');


$menu = getMenuMedico();
$perfil = 'Médico';



?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Tipo', 'Cantidad'],
          ['Depresión',     11],
          ['Psicosis',      2],
          ['TOC',  2],
          ['Otros', 2],
          ['Trastorno del sueño',    7]
        ]);

        var options = {
          title: 'Tipos de padecimientos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


  </head>
  <body>
    <header>
      <?= $menu
      ?>
    </header>


    <div id="piechart" style="width: 900px; height: 500px;"></div>

  </body>
</html>
