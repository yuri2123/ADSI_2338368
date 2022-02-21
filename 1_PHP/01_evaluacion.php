<?php  
$rojo;
$num=rand(1,100);
$par=0;
$impar=0;
for ($c=0;$c<=$num;$c++)
{if (($c%2)==0){$par=$par+$c;}
else{$impar=$impar+$c;}}
echo "La Suma de Pares es : ",$par,"<br>";
echo "La suma de Impares es: ",$impar,"<br>";

$limite=100;
$numero=5;
for($i=0;$i<$limite;$i++){
	if($i%$numero==0){
	echo $i." es múltiplo de ".$numero;
	}
}
?>

    
