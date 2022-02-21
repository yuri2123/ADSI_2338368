<?php 
if (isset($_POST["enviado"])) {
    $nombre = $_REQUEST["nombre_usuario"];
    $contra = $_REQUEST["pasword"]; 

    switch (true) {
        case strtoupper($nombre) == "juan" && $contra == "0000";
        echo "bienvenido al sistema, $nombre";
        break;
        case $nombre == "adriana " &&  $contra == "1111";
        echo "Bienvenido al sistema, $nombre"; 
        break;
        default:
           echo " ususario no registrado, $nombre"; 
           break;    
    }
}
?>