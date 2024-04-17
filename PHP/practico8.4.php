<?php
$mes = $_POST["mes"];

switch ($mes)
{
case 1:
    echo "Enero tiene 31 días";
break;
case 2:
    echo "Febrero tiene 29 días";
    break;
case 3:
    echo "Marzo tiene 31 días";
    break;
case 4:
    echo "Abril tiene 30 días";
    break;
case 5:
    echo "Mayo tiene 31 días";
    break;
case 6:
    echo "Junio tiene 30 días";
    break;
case 7:
    echo "Julio tiene 31 días";
    break;
case 8:
    echo "Agosto tiene 31 días";
    break;
case 9:
    echo "Setiembre tiene 30 días";  
    break;
case 10:
    echo "Octubre tiene 31 días";  
    break;
case 11:
    echo "Noviembre tiene 30 días";  
    break;
case 12:
    echo "Diciembre tiene 31 días"; 
    break;       
default:
echo "ingrese un mes válido";
}

?>