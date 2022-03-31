<?php

require_once("conexion.php");

class Usuario extends conexion{
public function __construct()
{
  $this->db = parent::__construct();  
} 

public function insertarUsuario($nombre, $email, $password){
    //prepara la consulata SQL enviada -> INSERT INTO 
    $tabla= $this->db->prepare("INSERT INTO Usuario(nombre, email, password) 
    VALUE(:nombre, :email, :password)");
    $tabla->bindParam(':nombre', $nombre);
    $tabla->bindParam(':email', $email); 
    $tabla->bindParam(':password', $password);
    $tabla->execute();
    
    //para identificar el ultimo registro utilizo
    $idUsuario = $this->db->lastInsertId();
    return $idUsuario;
}
//ver todos los usuarios
public function getUsuario(){
    $rows = Null;
    $tabla = $this->db->prepare("SELECT id, nombre, email, password FROM usuario");
    $tabla-> execute();
    while ($result = $tabla->fetch()) {
        $rows[] = $result;
    }
return $rows;
} 

//ver 1 usuario
public function getIdUsuario($id){
    $rows = Null; 
    $tabla = $this->db->prepare("SELECT id, nombre, email FROM usuario WHERE id= :id"); 
    $tabla->bindParam(':id', $id); 
    $tabla->execute(); 
    while ($result = $tabla->fetch()) {
        $rows[] = $result;
    }
return $rows;

}


public function editarUsuario($id, $nombre, $email, $password){
   $tabla = $this->db->prepare("UPDATE usuario 
   SET nombre = :nombre, email = :email, password = :password WHERE id= $id");
   $tabla->bindParam(':nombre', $nombre);
   $tabla->bindParam(':email', $email); 
   $tabla->bindParam(':password', $password);
   $tabla->execute();
   return $tabla;
}

public function eliminarUsuario($id){
    $tabla = $this->db->prepare("DELETE FROM usuario WHERE id = :id");
    $tabla->bindParam('id', $id);
    $tabla->execute(); 
    return $tabla;

} 


}//end class
?>