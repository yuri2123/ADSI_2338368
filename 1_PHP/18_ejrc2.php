<?php 
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$num3=$_REQUEST["num3"];
$suma; 

if ($num1 > $num2 and $num1>$num3){
    echo " el numero mayor es: ".$num1;
}
if ($num2 > $num2 and $num2>$num3){
    echo " el numero mayor es: ".$num2;
} 
if ($num3 > $num2 and $num3>$num2){
    echo " el numero mayor es: ".$num3;
}


?>
