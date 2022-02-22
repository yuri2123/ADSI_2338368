 <?php
 //Definir la clase persona que permite heredar de las otras clases

 class Persona{
     //propiedades
     public $intCedula;
     public $strNombre;
     public $intEdad;
    public $cuenta;

     //crear el metodo constructor 
     function __construct(int $cedula, string $nombre, int $edad){
         $this->intCedula = $cedula;
         $this->strNombre = $nombre;
         $this->intEdad = $edad;
        
     }

    // metodo secundario para mostrar los datos de la clase persona
     function getDatosPersonales(){
         $datos = "
             <h2> DATOS PERSONALES </h2>
Cédula: {$this->intCedula}<br>
             Nombre: {$this->strNombre}<br>
             Edad: {$this->intEdad}<br>
             Cuenta: {$this->cuenta}<br>
         ";
         return $datos;

     }

 }
?>