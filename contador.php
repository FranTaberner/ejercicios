<?php
    $num = 10;

    for ($i=0; $i!=101; $i++){
        if ($i!=100){
            echo "$i,";
        }
        else {
            echo "$i";
        }
    }

    echo "<br>";
    
    while ($num != -1) {
        if ($num!=0)
            echo "$num-";
        else{
            echo "$num";
        }
        $num--;
    }
?>