<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="practico7.css">
  <title>Resultado del Formulario</title>
</head>
<body>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verificar si se envió la cantidad de alumnos
  if (isset($_POST["cantidad_alumnos"])) {
    $cantidadAlumnos = intval($_POST["cantidad_alumnos"]);
    
    // Generar campos de entrada para cada alumno
    echo '<form action="practico8.5.php" method="post">';
    echo '<h1>Resultado del Formulario</h1>';
    for ($i = 1; $i <= $cantidadAlumnos; $i++) {
      echo '<p><label for="alumno_' . $i . '">Nombre del Alumno ' . $i . ':</label></p>';
      echo '<input type="text" id="alumno_' . $i . '" name="alumno_' . $i . '" required><br>';
    }
    echo '<input type="submit" name="enviar" value="Enviar">';
    echo '</form>';
  } else {
    echo "La cantidad de alumnos no fue especificada.";
  }
}
?>

</body>
</html>
