<?php 
print "DIAS DE LA SEMANA <p>"; 
$opc = $_REQUEST ["num"];

switch (true) { 
        case $opc==1; 
        echo "la opcion ".$opc. "corresponde a lunes";
        break;
        case $opc==2; 
        echo "la opcion ".$opc. "corresponde a martes";
        break;
        case $opc==3; 
        echo "la opcion ".$opc. "corresponde a miercoles";
        break;
        case $opc==4; 
        echo "la opcion ".$opc. "corresponde a jueves";
        break;
        case $opc==5; 
        echo "la opcion ".$opc. "corresponde a vienes";
        break;
        case $opc==6; 
        echo "la opcion ".$opc. "corresponde a sabado";
        break;
        case $opc==7; 
        echo "la opcion ".$opc. "corresponde a domingo";
        break; 
     default: 

} 
?>
