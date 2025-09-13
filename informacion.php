<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$salario = $_POST['salario'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];

echo "<h2>Informacion recibida</h2>";
echo "El empleado $nombre tiene $edad años.<br>";
echo "Vive en $direccion y su salario es: $salario.";
?>
