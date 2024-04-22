<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cobro = 1.5 * $_POST["horasTrabajadas"] * $_POST["valorHora"];

echo $nombre." ".$apellido." le corresponde cobrar por sus horas trabajadas ".$cobro;
?>