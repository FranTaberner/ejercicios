<?php
    function intercambio($a,$b){
        $c = $a;
        $a = &$b;
        $b = &$c;
        
        echo "$a y $b";
    }

    intercambio(1,3);
?>