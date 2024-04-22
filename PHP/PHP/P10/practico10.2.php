<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practico.css">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="operar.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar (+)</option>
            <option value="restar">Restar (-)</option>
            <option value="multiplicar">Multiplicar (*)</option>
            <option value="dividir">Dividir (/)</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
