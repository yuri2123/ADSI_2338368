  <?php 
 
 //atributos
class Vehiculo {
    
    protected $placa;
    private $marca;
    public $modelo;
    public $kilometraje;
    public $velocidad;
    public $tiempo;
    
    //contructor
    public function __construct($vrplaca,$vrmarca,$vrmodelo,$vrkilometraje,$vrvelocidad,$vrtiempo){
        $this->placa=$vrplaca;
        $this->marca=$vrmarca;
        $this->modelo=$vrmodelo;
        $this->kilometraje=$vrkilometraje;
        $this->fecha_r=date('d,m,y');
        $this->velocidad=$vrvelocidad;
        $this->tiempo=$vrtiempo;
    }
    
    public function getVehiculo()
    {
    
        $arrayVehiculo = array(
            'placa: '=> $this -> placa,
            'Marca: '=> $this -> marca,
            'Fecha registro: '=> $this ->fecha_r,
        );
        return $arrayVehiculo;
    
    }
        public function calculo_distancia(){
            $vr_distancia = $this ->velocidad * $this->tiempo;
            return $vr_distancia;
        }
    //atributo public
    //metodo getter muestra informacion del atributo marca
        public function getMarca(){
            return $this->marca;
        }
    
    //setter asigna informacion del atributo marca
        public function setMarca($marca){
            $this->marca=$marca;
        }
    // atributo protected
        public function getPlaca(){
            return $this->placa;
        }
        public function setPlaca($placa){
             $this->placa=$placa;
        }
    }
    
    
    
 