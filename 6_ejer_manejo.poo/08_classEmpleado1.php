<?php
require_once("08_classPersona.php");

class Empleado1 extends Persona{
    public $sueldo;
    public $estado="activo";

    function __construct($vrnombre,$vredad,$vrsueldo,$vrestado)
    {
        parent::__construct($vrnombre,$vredad);
        $this->sueldo=$vrsueldo;
        $this->estado=$vrestado;
    }
    public function getestado(){
        return $this->estado;
    }public function setestado($estado){
        return $this->estado=$estado;
    }
}


?>