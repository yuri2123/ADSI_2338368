<?php 

//algoritmo para calcular la altura en pulgadas y pies 

if (isset($_REQUEST["btn_enviar"])) {

    $altura = $_POST["altura"];
    $unidad = $_POST["unidad"]; 

    if ($unidad == 1) { 
        echo "la medida en cm es: " . number_format($respuesta_cm = $altura*100) . "<br>";
        }elseif ($unidad ==2) {
            echo $rspuesta_m = $altura/1000;
        }elseif ($unidad ==3) {
            echo $respuesta_pulgada = $altura * 39.37 . "<br>";
            echo $respuesta_pulgada = $altura/0.0254;
        }else {
            echo $respuesta_pies = $altura*3.281;

        }       
     }