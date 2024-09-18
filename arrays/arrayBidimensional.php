<?php
    $numeros = array(
        array(),
        array(),
        array(),
        array(),
        array(),
        array()
    );

    $numeros = array_fill(0, 6, array());
    foreach($numeros as &$num){
        while (count($num) < 9){
            $noigual = rand(100, 999);
            if (!in_array($noigual, $num)){
                $num[] = $noigual;
            }
        }
        sort($num);
    }
    echo "<table>";
    foreach($numeros as $num){
        $min = $num[0];
        $max = $num[8];
        echo "<tr>";
        foreach($num as $valor){
            if ($valor == $min){
                echo "<td style='color: green'>" . $valor . "</td>";
            } else if ($valor == $max){
                echo "<td style='color: blue'>" . $valor . "</td>";
            }
            else{
                echo "<td>" . $valor . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>