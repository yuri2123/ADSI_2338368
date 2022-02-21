<?php

require_once("1_clase_cliente.php");
require_once("2_clase_usuario.php");
require_once("3_clase_cuenta_bancaria.php");

echo "<h2>DATOS DE LA CLASE CLIENTE</h2>";
 $objCliente = new Cliente(3071345632, "juan diego lopez",1000000);
 echo $objCliente-> getDatosPersonales();
 echo "<br>"; 


 
$objCliente = new usuario("carlos@gmail.com",435257276);
echo $objCliente->getDatosPersonales(); 

echo "<br>";

echo "<h2>DATOS DE  LA CASE CUENTA BANCARIA</h2>";   
$objCuentabancaria = new Cuentabancaria(34657,"ahorro",2000000.55,"retiro");
echo $objCuentabancaria->codigo . "<br>";
echo $objCuentabancaria->tipo_de_cuenta . "<br>";
print_r("<pre>");
print_r($objCuentabancaria);
print_r("<pre>");
echo "<br>";
echo $objCuentabancaria->retirar_dinero(1000000)."<br>";
echo "tipo de cuenta: ".$objCuentabancaria->getTipocuenta();
$objCuentabancaria->setTipocuenta("cuenta corriente");
//hay que llamar nuevamente el metodo get
echo "<br>";
echo "tipo de cuenta". $objCuentabancaria->getTipocuenta();


?>