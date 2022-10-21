<?php 
/*DESCIPCION: FORMULARIO QUE CAPTURA EL NOMBRE.
  *  AUTOR: AURORA ROBELO 
   * FECHA: 12/OCTUBRE/2022
*/

$tabla = $_POST['tabla'];
echo "<h1>Tabla de Multiplicar de $tabla</h1>";
for ($i=1; $i <=10 ; $i++) {
  echo "$i x $tabla = ", $i*$tabla, "<br>";

}

echo "<a href= '../html/tablasmultiplicar.html'>Regresar</a>";

?>
