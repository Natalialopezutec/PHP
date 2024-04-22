<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practico.css">
    <title>Nombre de los Meses</title>
</head>
<body>
    <h2>Ingrese dos números de mes</h2>
    <form action="mesComprendidos.php" method="post">
        <label for="numero_mes1">Número de mes 1 (1-12):</label>
        <input type="number" id="numero_mes1" name="numero_mes1" min="1" max="12" required><br><br>
        <label for="numero_mes2">Número de mes 2 (1-12):</label>
        <input type="number" id="numero_mes2" name="numero_mes2" min="1" max="12" required><br><br>
        <input type="submit" value="Mostrar Nombres de los Meses">
    </form>
</body>
</html>
