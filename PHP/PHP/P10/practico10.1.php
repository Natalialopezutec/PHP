<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practico.css">
    <title>Funcion mayor</title>
</head>
<body>

<?php
function encontrarMayor($numeros) {
    // Verificar si el arreglo está vacío
    if (empty($numeros)) {
        return null; // Devolver null si el arreglo está vacío
    }

    // Inicializar la variable $mayor con el primer elemento del arreglo
    $mayor = $numeros[0];

    // Iterar sobre el arreglo para encontrar el mayor elemento
    foreach ($numeros as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero;
        }
    }

    // Devolver el mayor número encontrado
    return $mayor;
}
?>
<h3>El Arreglo de numeros</h3>
<?php
// Ejemplo de uso:
$arreglo = array(10, 5, 20, 15, 8);
foreach ($arreglo as $i){
    echo "Valor: ".$i." ";
}
?>
<h3>Muestro el mayor</h3>
<?php
$mayor_numero = encontrarMayor($arreglo);
echo "El mayor número es: " . $mayor_numero;
?>


</body>
</html>
