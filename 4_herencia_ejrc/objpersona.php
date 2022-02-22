<?php
require_once("1_clasepersona.php");
$objpersona = new persona (3245678,"luis carlos",25);
echo $objpersona->getDatosPersonales();