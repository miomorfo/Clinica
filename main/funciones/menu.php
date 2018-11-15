<?php
//muestro el menu administrador con el nivel de session 1

//menu administrador

function getMenuAdministrador(){
  $resultado = '

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <nav class = "menu">
  <div class="collapse navbar-collapse">
   <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">Médicos</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Aistentes</a></li>
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

  <nav class = "menu">
    <ul>
      <li><a href="index.php">General</a></li>
      <li><a href="index.php">Pacientes</a></li>
      <li><a href="index.php">Estadisticas</a></li>
      <li><a href="index.php">Control de personal</a></li>
    </ul>
  </nav>

  ';
  return $resultado;
}

//menú de la asistente nivel 3
function getMenuAsistente(){

  $resultado = '

  <nav class = "menu">
    <ul>
      <li><a href="index.php">Horas</a></li>
      <li><a href="index.php">Fichas</a></li>
      <li><a href="index.php">Pacintes</a></li>

    </ul>
  </nav>

  ';
  return $resultado;

}




?>
