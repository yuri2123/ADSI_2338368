<?php

class Cliente{


//Atributos public, private, protected, static
// Abstracción - Encapsulamiento

protected $Nombre;
private $cedula;
public $salario;

//Metodos

function __construct(int $vrcedula, string $vrnombre, float $vrsalario){
    $this->cedula         = $vrcedula;
    $this->Nombre        = $vrnombre;
    $this->Salario         = $vrsalario;
    } 

    public function getCedula()
{
    return $this->cedula;
}
public function getNombre(){
    return $this->Nombre;
}

public function getSalario()
{
    return $this->Salario;
}

public function setNombre($nombre){
    $this->Nombre = $nombre;
}

public function getDatos(){
    //Variable
    $datos = "
    Nombre: {$this->Nombre}<br>
    Cedula: {$this->cedula}<br>}
    salario: {$this->Salario}<br>
    ";
    return $datos;
}
}
?>