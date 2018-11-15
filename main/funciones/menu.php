<?php
//muestro el menu administrador con el nivel de session 1

//menu administrador

function getMenuAdministrador(){
  $resultado = '

<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;>
  <nav class = "menu">
  <div class="collapse navbar-collapse">
   <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Médicos</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Asistentes</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Challa</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php"></a></li>
    </ul>
    </div>
  </nav>
  </nav>

  ';
  return $resultado;
}



//menú médico con nivel de acceso 2

function getMenuMedico(){
  $resultado = '
<nav class="navbar navbar-light navbar-expand-lg">
  <nav class = "menu">
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">General</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Pacientes</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Estadisticas</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Estadisticas</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Control de personal</a></li>
    </ul>
  </div>
  </nav>
</nav>

  ';
  return $resultado;
}

//menú de la asistente nivel 3
function getMenuAsistente(){

  $resultado = '
  <nav class="navbar navbar-light navbar-expand-lg">
  <nav class = "menu">
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">Horas</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Fichas</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Pacintes</a></li>

    </ul>
  </div>
  </nav>

  ';
  return $resultado;

}




?>
