<?php
    function mayor($a,$b,$c){
        if ($a > $b and $a > $c){
            echo "El mayor valor es el primero y es: $a";
        }
        else if ($b > $a and $b > $c){
            echo "El mayor valor es el segundo y es: $b";
        }
        else {
            echo "El mayor valor es el tercero y es: $c";
        }
    }

    mayor(5,9,3);
?>