<?php
  $mysqli = new mysqli('localhost', 'root', '', 'consultadb');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Demo de menú desplegable</title>
  <meta charset=utf-8" />
</head>
<body>
  <div align="center">                        
    <p>Seleccione un pais del siguiente menú:</p>
    <p>Paises:
      <select>
        <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM pacientes");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_paciente].'">'.$valores[rut].'</option>';
          }
        ?>
      </select>
      <button>Enviar</button>
    </p>
  </div>
</body>
 
</html>