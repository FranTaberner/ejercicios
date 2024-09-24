<?php
    $nota1 = 7.58;
    $nota2 = 6.33;
    $nota3 = 7;

    if ($nota1 > $nota2 and $nota1 > $nota3) {
        echo "La primera nota: $nota1 es la más alta";
    }
    else if (($nota2 > $nota1 and $nota2 > $nota3)){
        echo "La segunda nota: $nota2 es la más alta";
    }
    else {
        echo "La tercera nota: $nota3 es la más alta";
    }
?>