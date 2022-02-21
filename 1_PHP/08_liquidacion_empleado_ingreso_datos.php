<?php

print("LIQUIDACION DEL EMPLEADO") . "<p>";
$nombre = $_REQUEST["nombre"];
$cargo = $_REQUEST["cargo"];
$salario = $_REQUEST["salario"];

$vrincremento = $salario * 0.25; 
$salario_total = $salario + $vrincremento;
echo "NOMBRE:  ". $nombre. "<p>"; 
echo "CARGO:  ". $cargo. "<p>"; 
echo "SALARIO:  " . $salario. "<p>"; 
print("<p>"); 

echo " SU INCREMENTO ES:  " . $vrincremento. "<p>"; 
print("<p>"); 
print("<p>");

echo " SALARIO TOTAL:  ". $salario_total. "<p>"; 
print("<p>"); 
print("<p>");
echo '<a href= "http://localhost/adsi_2338368/06_formulario_captura_de_datos.php"><input type="submit" name="btn_VOLVER" value="VOLVER"></a';

?>

