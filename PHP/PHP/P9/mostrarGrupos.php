<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practico.css">
    <title>Mostrar Grupos</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Detalles de los Grupos y Materias</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Grupo</th><th>Materia</th><th>Cantidad</th></tr>";
    for ($i = 1; $i <= $_POST["cantidad_grupos"]; $i++) {
        $grupo = $_POST["grupo_$i"];
        $materia = $_POST["materia_$i"];
        $cantidad_alumnos = $_POST["cantidad_alumnos_$i"];
        echo "<tr><td>$grupo</td><td>$materia</td><td>$cantidad_alumnos</td></tr>";
    }
    echo "</table>";
}
?>
</body>