<?php 

require_once("1_clase_cliente.php");

class Cuentabancaria {

public $codigo;
public $tipo_de_cuenta;
public $saldo;


function __construct($vr_codigo, string $vr_tipo_cuenta, float $vr_saldo){

$this->codigo = $vr_codigo;
$this->tipo_de_cuenta = $vr_tipo_cuenta;
$this->saldo = $vr_saldo;
}

public function getCuentabancaria(){
$arrayCuentabancaria = array(

"codigo.cuenta:" => $this->codigo,
"tipo de cuenta:"=> $this->tipo_de_cuenta,
"saldo:"=> $this->saldo,
);

return $arrayCuentabancaria;
}

public function retirar_dinero(float $retiro){
if ($this->saldo>$retiro){
$vr_saldo = $this->saldo ;
$vr_saldo = $vr_saldo - $retiro;
$this -> saldo = $vr_saldo;
}else{
    echo "el monto excede el saldo de la cuenta";
}
echo "valor del retiro:  $retiro". " " ."nuevo saldo";
}

public function getTipocuenta(){
    return $this->tipo_de_cuenta;
}
public function setTipocuenta($cuenta){
$this->tipo_de_cuenta = $cuenta;
}

} ///end class
?>