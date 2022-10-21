<?php
/*
* DESCIPCION: FORMULARIO QUE CAPTURA EL NOMBRE.
* AUTOR: AURORA ROBELO 
* FECHA: 12/OCTUBRE/2022
*/

//obtiene nombre de formulario 
$name = $_POST['nombre'];
$age = $_POST['edad'];
$phone = $_POST['telefono'];

echo "HELLO $name<br>";
echo "YOUR AGE IS $age<br>";
echo "YOUR PHONE IS $phone<br>";

echo "<a href= '../html/greetingform.html'>Regresar</a>";

?>