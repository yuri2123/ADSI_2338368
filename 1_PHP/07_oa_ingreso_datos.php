<?php

print("OERACIONES ARITMETICAS") . "<p>";

$vrnumero1 = $_REQUEST["numero1"];
$vrnumero2 = $_REQUEST["numero2"];

$vrrespuesta = $vrnumero1 + $vrnumero2; 
echo "la suma de los numereos: " . $vrnumero1 + $vrnumero2;"es:   " . $vrrespuesta . "<p>"; 
print("<p>"); 
$vrrespuesta = $vrnumero1 - $vrnumero2; 
echo "la resta de los numeros: " . $vrnumero1 - $vrnumero2;"es:   " . $vrrespueta . "<p>"; 
print("<p>"); 
$vrrespuesta = $vrnumero1 * $vrnumero2; 
echo "la multiplicacion de los numeros: " . $vrnumero1 * $vrnumero2;"es:  " . $vrrespuesta  . "<p>";
print("<p>");
$vrrespuesta = $vrnumero1 / $vrnumero2; 
echo "la division de los numeros: " . $vrnumero1 / $vrnumero2;"es:  " . $vrrespuesta . "<p>"; 
print("<p>");
echo '<a href= "http://localhost/adsi_2338368/06_formulario_captura_de_datos.php"><input type= "submit" name= "btn_VOLVER" value="VOLVER"></a>';

?>