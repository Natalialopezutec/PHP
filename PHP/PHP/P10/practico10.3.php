<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practico.css">
    <title>Nombre del Mes</title>
</head>
<body>
    <h2>Ingrese el número de mes</h2>
    <form action="mes.php" method="post">
        <label for="numero_mes">Número de mes (1-12):</label>
        <input type="number" id="numero_mes" name="numero_mes" min="1" max="12" required><br><br>
        <input type="submit" value="Mostrar Nombre del Mes">
    </form>
</body>
</html>
