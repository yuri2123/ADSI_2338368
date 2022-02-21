<?php 

require_once("2_clasecliente.php");

$objCliente = new Cliente("Carlos Agredo","carlos@gmail.com",23);

echo $objCliente->getEmail();
echo "<br>";
echo "Edad es: " . $objCliente->intEdad;

?>
