<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados por el formulario
    $correo = $_POST["correo"];
    $contrasenia = $_POST["contrasenia"];

    // Verificar si el correo y la contraseña son correctos
    if ($correo === "tecnologo@" && $contrasenia === "1234") {
        echo "Usuario correcto";
    } else {
        echo "Usuario incorrecto";
    }
}
?>

