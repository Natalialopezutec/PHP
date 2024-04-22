<?php
// Función para realizar la operación seleccionada
function operar($numero1, $numero2, $operacion) {
    switch ($operacion) {
        case 'sumar':
            return $numero1 + $numero2;
        case 'restar':
            return $numero1 - $numero2;
        case 'multiplicar':
            return $numero1 * $numero2;
        case 'dividir':
            // Verificar si el segundo número es cero para evitar la división por cero
            if ($numero2 != 0) {
                return $numero1 / $numero2;
            } else {
                return "Error: división por cero";
            }
        default:
            return "Operación no válida";
    }
}

// Obtener los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han enviado ambos números y la operación
    if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["operacion"])) {
        // Obtener los valores enviados
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];

        // Llamar a la función operar
        $resultado = operar($numero1, $numero2, $operacion);

        // Mostrar el resultado
        echo "<h2>Resultado de la operación:</h2>";
        echo "<p>$numero1 $operacion $numero2 = $resultado</p>";
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}
?>
