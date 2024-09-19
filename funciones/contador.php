<?php
    function cuenta($a,$b){
        if ($a<$b){
            for ($i=$a; $i<$b+1; $i++){
                echo $i;
            }
        }
        else {
            for ($i=$b; $i<$a+1; $i++){
                echo $i;
            }
        }
    }
    
    cuenta(1,9);
?>