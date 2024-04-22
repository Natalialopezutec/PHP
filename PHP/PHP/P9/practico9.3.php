<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practico.css">
    <title>Formulario de Grupos y Materias</title>
</head>
<body>

<h2>Ingresar la cantidad de grupos que atiende el profesor</h2>
<form action="ingresarGrupos.php" method="post">
    <label for="cantidad_grupos">Cantidad de Grupos:</label>
    <input type="number" name="cantidad_grupos" id="cantidad_grupos" required>
    <input type="submit" value="Enviar"></input>
</form>

</body>
</html>
