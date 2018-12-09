<?php
  
//solucionar el error de la variable opcion vacía
    if(isset($_GET['opcion'])){
        $opcion = $_GET['opcion'];
        echo $opcion;
    }

$resultado = mysql_query("SELECT * FROM pacientes");

print_r($resultado);
  
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Demo de menú desplegable</title>
  <meta charset=utf-8" />
  <script>
      function buscar(){
          var opcion = document.getElementById('pacientes').value;
          
          window.location.href = 'http://localhost/main/pruebas.php?opcion='+opcion;
      }
  </script>
</head>
<body>

    <form action="nuevo_paciente" name="autoLlenar">
        <legend>Datos del paciente</legend>
        <label for="">seleccione rut paciente</label>
        <select onchange="return buscar();" name="pacientes" id="pacientes">
            <option value=""></option>
            <option value="hola">Rut</option>
        </select>
        <div>
            <label for="">Nombre:</label>
            <input type="text" name="nombre">
        </div>

        <div>
            <label for="">Apellidos:</label>
            <input type="text" name="apellidos">
        </div>
        
        <div>
            <label for="">sexo</label>
            <input type="text" name="sexo">
        </div>

        <div>
            <label for="">antecedentes familiares</label>
            <textarea name="antecedentes_familiares" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="">antecedentes personales</label>
            <textarea name="antecedentes_personales" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="">telefono</label>
            <input type="text" name="telefono">
        </div>

        <div>
            <label for="">previsión</label>
            <input type="text" name="prevision">
        </div>

        <div>
            <label for="">dirección</label>
            <input type="text" name="direccion">
        </div>

        <div>
            <label for="">correo</label>
            <input type="text" name="correo">
        </div>

        <div>
            <label for="">edad</label>
            <input type="text" name="fecha_nacimiento">
        </div>
        

    </form>
  
</body>
 
</html>