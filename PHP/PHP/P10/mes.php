<?php
// Definir función MES que devuelve el nombre del mes
function MES($numero_mes) {
    // Array con los nombres de los meses
    $meses = array(
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    );

    // Verificar si el número de mes está en el rango válido
    if ($numero_mes >= 1 && $numero_mes <= 12) {
        return $meses[$numero_mes];
    } else {
        return "Número de mes inválido";
    }
}

// Obtener el número de mes enviado desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["numero_mes"])) {
        $numero_mes = $_POST["numero_mes"];

        // Llamar a la función MES para obtener el nombre del mes
        $nombre_mes = MES($numero_mes);

        // Mostrar el nombre del mes
        echo "<h2>Nombre del mes:</h2>";
        echo "<p>El mes correspondiente al número $numero_mes es: $nombre_mes</p>";
    } else {
        echo "Por favor, ingrese un número de mes válido.";
    }
}
?>
