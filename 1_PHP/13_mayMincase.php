<?php 









if (isset($_POST["btn_enviar"])) {
    $nombres = $_POST["nombres"];
    $numero = $_POST["numero"];

    switch ($numero){
        case 1: 
            echo strtoupper($nombres);
            break;
            
            default:

            break;

    }
}

?>




