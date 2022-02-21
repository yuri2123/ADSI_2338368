<?php 
$nombre = "Ana";
$contraseña = 123456;

switch ($nombre){ 
    case 'Ana';
    echo "bievenida" . $nombre . "al programa"; 
    break;
    case 'carlos':
        echo "bienvenido" . $nombre . "al programa";
        break; 
default: 
       echo  "usuario no registrado" . $nombre;
       break;        
}