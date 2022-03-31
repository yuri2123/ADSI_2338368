<?php
require_once("01_jugador.php");
require_once("02_futbol.php");
require_once("03_voleibol.php");

$objdeportes= new Jugador("sebastian cardona",324567892,"sebastianc@gmail.com");
print_r("<pre>");
print_r($objdeportes);
print_r("</pre>"); 


$objdeportes= new Futbol("pedro masias",345271642,"pedrom@gmail.com",170,25); 
$objdeportes-> getEstatura();
print_r("<pre>");
print_r($objdeportes); 
print_r("</pre>"); 


$objdeportes = new Voleibol("juan lopez",34568790,"juanl@gmail.com","zagueros");
print_r("<pre>");
print_r($objdeportes); 
print_r("</pre>");  


?>