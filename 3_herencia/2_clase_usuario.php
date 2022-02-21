<?php
require_once("1_clase_cliente.php");

class usuario extends cliente{


        //Atributos public, private, protected, static
        // Abstracción - Encapsulamiento

        
        private $strEmail;
        private $intclave;
        
        //Metodos
     function __construct( $email){
            $this->strEmail         = $email;
            $this->intclave         = rand();
            
        }

        public function getEmail()
        {
            return $this->strEmail;
         } 
         
        public function getDatosPersonales(){
            //Variable
            $datos = "
            <h2> DATOS DE USUARIO </H2>
            Email: {$this->strEmail}<br>
            Contraseña: {$this->intclave}<br>
            ";
            return $datos;
        }
    }