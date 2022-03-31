<?php 

class conexion{

    private $db;
    private $driver = "mysql";
    protected $host = "localhost";
    private $based = "adsi_2338368";
    private $usuario = "root";
    private $contrasena = ""; 

    public function __construct(){
        try {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->
            based}", $this->usuario, $this->contrasena);
            //echo "La conexion a la Bd es exitosa"."<br>";
            $db->setAttribute(PDO::ATTR_ERRMODE,   PDO::ERRMODE_EXCEPTION);
            return $db;
           
        } catch(PDOException $e){ 
            //echo "Ha ocurrido un error al conectarse a la Bd".$e->getMessage(
            //);
            
        }
    }


    }//end class
//$objConexion = new conexion();
//print_r($objConexion);
?>