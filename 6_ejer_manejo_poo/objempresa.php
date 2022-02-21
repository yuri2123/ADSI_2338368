<?php 

require_once("1_calse_empleado.php"); 

$objEmpleado = new empleado("juan manuel",312467890,"gerente",3750000,0.03); 

echo $objEmpleado-> getNombre();
echo "<br>"; 

?>