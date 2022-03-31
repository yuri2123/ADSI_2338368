<?php
class Futbol {
    public $estatura;
    public $edad;

public function __construct($vrnombre, $vrcelular, $vremail,$vrestatura,$vredad)
{
    

$this-> edad=$vredad;
$this->estatura=$vrestatura;
$this->nombre=$vrnombre;
$this->celular=$vrcelular;
$this->email=$vremail;

}
public function getEstatura(){
    return $this->estatura;
}

}

?>