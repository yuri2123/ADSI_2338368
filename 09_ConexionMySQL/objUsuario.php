<?php 
require_once("usuario.php");

$objUsuario = new Usuario();
//$insertarUsuario = $objUsuario->insertarUsuario("Juan torres", "Juan@gmail.com",123456);
//echo $insertarUsuario;

//ELIMINAR USUARIO
//$eliminarUsuario = $objUsuario->eliminarUsuario(6); 



//modificar usuario 
//$editarUsuario = $objUsuario->editarUsuario(3,"Juliana suarez", "juliana@gmail.com",123456);


//ver la lsita de usuarioa
//$verUsuarios = $objUsuario->getUsuario();
//print_r('<pre>');
//print_r($verUsuarios);
//print_r('<pre>');


//VER 1 USUARIO 
$idUsuario = $objUsuario->getIdUsuario(5); 
print_r('<pre>');
print_r($idUsuario);
print_r('<pre>');

?>