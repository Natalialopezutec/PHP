
<?php
// Definir función MES para obtener el nombre del mes
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

// Función para obtener los nombres de los meses comprendidos entre dos números de mes
function nombresEntreMeses($numero_mes1, $numero_mes2) {
    $nombres_meses = array();

    // Verificar que los números de mes estén en orden ascendente
    $inicio = min($numero_mes1, $numero_mes2);
    $fin = max($numero_mes1, $numero_mes2);

    // Obtener los nombres de los meses entre el rango dado
    for ($i = $inicio; $i <= $fin; $i++) {
        $nombres_meses[] = MES($i);
    }

    return $nombres_meses;
}

// Obtener los números de mes enviados desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["numero_mes1"]) && isset($_POST["numero_mes2"])) {
        $numero_mes1 = $_POST["numero_mes1"];
        $numero_mes2 = $_POST["numero_mes2"];

        // Obtener los nombres de los meses entre los números dados
        $nombres_meses = nombresEntreMeses($numero_mes1, $numero_mes2);

        // Mostrar los nombres de los meses con estilo
        echo "<h2>Nombres de los meses:</h2>";
        echo "<ul>";
        foreach ($nombres_meses as $nombre_mes) {
            echo "<li style='color: blue;'>$nombre_mes</li>";
        }
        echo "</ul>";
    } else {
        echo "Por favor, complete ambos campos con números de mes válidos.";
    }
}
?>
