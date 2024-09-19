<?php
function validar($a) {
    list($h, $m, $s) = explode(':', $a);

    if ($h >= 0 and $h < 24 and $m >= 0 and $m < 60 and $s >= 0 and $s < 60) {
        echo "$h:$m:$s";
    } else {
        echo "El tiempo no es válido.";
    }
}

validar("19:33:30");

?>