<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practico.css">
    <title>Ingreso de Grupos</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad_grupos = $_POST["cantidad_grupos"];
?>
    <h2>Ingresar los detalles de las materias por grupo</h2>
    <form action="mostrarGrupos.php" method="post">
        <?php
        echo "<input type='hidden' name='cantidad_grupos' value='$cantidad_grupos'>";
        for ($i = 1; $i <= $cantidad_grupos; $i++) {
            echo "<h3>Grupo $i</h3>";
            echo "<label for='grupo_$i'>Nombre del Grupo:</label>";
            echo "<input type='text' name='grupo_$i' required><br>";

            echo "<label for='materia_$i'>Nombre de la Materia:</label>";
            echo "<input type='text' name='materia_$i' required><br>";

            echo "<label for='cantidad_alumnos_$i'>Cantidad de Alumnos:</label>";
            echo "<input type='number' name='cantidad_alumnos_$i' required><br><br>";
        }
        ?>
        <input type="submit" value="Mostrar"></input>
    </form>
<?php } ?>

</body>
</html>
