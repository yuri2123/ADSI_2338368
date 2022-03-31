<?php 

class Jugador {

private $nombre;
private $celular;
private $email;

function __construct ($vrnombre, $vrcelular, $vremail){

$this->nombre=$vrnombre;
$this->celular=$vrcelular;
$this->email=$vremail;
}

public function getCelular(){
    return $this->celular;
}
public function setCelular($celular){
    return $this->celular=$celular;


}
public function getDatospersona(){
    $arraydatos=array('nombre'=>$this->nombre,
                      'celular'=>$this->celular,
                      'email'=>$this->email,
    );
    return $arraydatos;
}

}
?>