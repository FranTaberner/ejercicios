<?php
    $fp = fopen('casas_rurales.csv', "r");

    while (!$fp==feof($fp)){
        $linea = fgets($fp);
        if (!empty(trim($linea))){
            $lista[] = explode(";",$linea);
        }
    }

    $header=array_shift($lista);
    $tabla=[];

    foreach($lista as $ls){
        $tabla[] = array_combine($header,$ls);
    }
    fclose($fp);
?>