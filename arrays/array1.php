<?php
    for ($i=0; $i<50; $i++){
        $nums[$i] = rand(0,99);
    }
    $media = array_sum($nums)/50;
    echo "La media es: $media <br>";
    sort($nums);
    echo "El menor es: $nums[0] <br>";
    echo "El mayor es $nums[49]";
?>