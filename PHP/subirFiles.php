<?php
$nombrearchivo = $_FILES['archivo']['name'];
echo $nombrearchivo;

$directoriotemp = $_FILES['archivo']['tmp_name'];

$ubicacion = "./imagen/".$nombrearchivo;

if (move_uploaded_file($directoriotemp)){
	echo "Archivo subido correctamente.";
}else{
	echo "Archivo NO se subio correctamente.";
}

echo "<img src= '$ubicacion'>";
echo "<br>";

//compruebo que el archivo subio al directorio
if (is_uploaded_file($directoriotemp){
	echo "archivo subido <br>";
}

//conexion BD
$conexion = mysqli_connect("localhost", "tecnologo", "tecnologo", "album");
mysqli_query($conexion, );

?>
