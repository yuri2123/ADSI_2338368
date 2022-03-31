<?php

class Voleibol{

 public $puesto_campo;

function __construct($vrnombre,$vrcelular,$vremail,$vrpuesto_campo){


$this->puesto_campo=$vrpuesto_campo;
$this->nombre=$vrnombre;
$this->celular=$vrcelular;
$this->email=$vremail;

}
public function getpuestoCampo(){
    return $this->puesto_campo;
}
    
}


?>