<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Crear el mensaje de respuesta HTML
    $respuesta = "<!DOCTYPE html>";
    $respuesta .= "<html lang=\"es\">";
    $respuesta .= "<head>";
    $respuesta .= "<meta charset=\"UTF-8\">";
    $respuesta .= "<title>Respuesta</title>";
    $respuesta .= "<link rel=\"stylesheet\" href=\"practico7.css\">";
    $respuesta .= "</head>";
    $respuesta .= "<body>";
    $respuesta .= "<form>";
    $respuesta .= "<h1>Respuesta al Formulario</h1>";
    $respuesta .= "<label><strong>Nombre:</strong></label>";
    $respuesta .= "<p>$nombre</p>";
    $respuesta .= "<label><strong>Correo Electrónico:</strong></label>";
    $respuesta .= "<p>$correo</p>";
    $respuesta .= "<label><strong>Asunto:</strong></label>";
    $respuesta .= "<p>$asunto</p>";
    $respuesta .= "<label><strong>Mensaje:</strong></label>";
    $respuesta .= "<p>$mensaje</p>";
    $respuesta .= "</form>";
    $respuesta .= "</body>";
    $respuesta .= "</html>";

    // Imprimir la respuesta
    echo $respuesta;
}
?>
