<?php  

class empleado{
    
 public $nombre;
 protected $celular;
 public $cargo;
 public $sueldo; 
 public $auxilio_t; 

 function __construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo, $vrauxilio_t){ 
     $this->nombre = $vrnombre;
     $this->celular = $vrcelular;
     $this->cargo = $vrcargo;
     $this->sueldo = $vrsueldo;
     $this->auxilio_t = $vrauxilio_t;
 } 

 public static function auxiliot($vrsueldo){ 
     { 
     $auxilio_t=0.05;
     $vrauxilio_t = $auxilio_t + $vrsueldo;
    echo "su sueldo mas el auxilio de transporte es: " . $vrauxilio_t;
} 
 }
 

 public function getNombre()
{
    return $this->nombre;
}
public function getCelular(){
    return $this->celular;

}

public function setNombre($nombre){
    $this->Nombre = $nombre;
} 
public function setCelular($celular){
    $this->Celular = $celular;
     }

public function getDatosEmpleado(){
    //Variable
    $datos = "
    Cargo: {$this->cargo}<br>
    Sueldo: {$this->sueldo}<br>}
     ";
    return $datos;
}

//segundo metodo
public function rete_fuente($sueldo){
    if ($this->sueldo > 3750000){
    $vrsueldo = $this->sueldo ;
    $vrsueldo = $vrsueldo * 0.09;
    $this -> sueldo = $vrsueldo;
    echo "el empleado debe pagar rete fuente";
    }else{
        echo "el empleado no debe pagar rete fuente";
    }
    echo "el sueldo del empleado es:  $sueldo". " " ."nuevo sueldo";
    } 
     } 
      
      
?>