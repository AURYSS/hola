<?php
/*
* DESCIPCION: FORMULARIO QUE CAPTURA EL NOMBRE.
* AUTOR: AURORA ROBELO 
* FECHA: 14/OCTUBRE/2022
*/

//obtiene nombre de formulario 
$name = $_POST['nombre'];
$surname = $_POST['apellido'];
$mail = $_POST['correo'];
$password = $_POST['contraseña'];
$date = $_POST['fecha'];
$sex= $_POST['sexo'];

echo "HOLA!!! $name<br>";
echo "APELLIDO: $surname<br>";
echo "CORREO: $mail<br>";
echo "CONTRASEÑA: $password<br>";
echo "FECHA DE NACIMIENTO: $date<br>";
echo "SEXO: $sex<br>";

echo "<a href= '../html/registrofor.html'>Regresar</a>";

?>