<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="practico.css">
  <title>Figuras 9.2</title>
</head>
<body>

<form action="practico9.1imagenes.php" method="post">
  <label for="figura">Selecciona una figura geométrica:</label>
  <?php $figurasMatriz=array(array ('cuadrado'=>"cuadrado.png"), array( 'circulo'=>"circulo.png"), 
  array( 'triangulo'=>"triangulo.png"), array('hexagono'=>"hexagono.png"), 
  array( 'rectangulo'=> "rectangulo.png"), array( 'rombo'=>  "rombo.png"));?>
    <select name="figura">
        <?php foreach ($figuras as $f) {?>
        <option> <?php echo $f; ?> </option>
        <?php } ?>
    </select>
  <br><br>
  <input type="submit" value="Enviar la consulta"></input>
</form>

</body>
</html>