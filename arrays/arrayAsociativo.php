<?php
    for($i=0; $i<100; $i++){
        $binario = rand(0,1);
        if($binario==0){
            $sexo[$i] = "F";
        }
        else{
            $sexo[$i] = "M";
        }
    }

    for ($i=0; $i<101; $i++){
        if ($sexo[$i]=="F"){
            $fem+=1;
        }
        if ($sexo[$i]=="M"){
            $mas+=1;
        }
    }

    echo "Se han contado $fem Mujeres y $mas Hombres."
?>