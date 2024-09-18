<?php
    $coches = array(
        '3487WEB' => array("Renault","Scenic","5"),
        '9825ASD' => array("Peugeot","308 Hybrid","5"),
        '2376LOL' => array("Mercedes","Benz","5"),
        '3589ARA' => array("BMW","Serie3","5")
    );

    echo "<table>";
    foreach($coches as $coche){
        echo "<tr>";
        echo "<td> Marca: <br>" . $coche['0'];
        echo "<td> Modelo: <br>" . $coche['1'];
        echo "<td> Número de Puertas: <br>" . $coche['2'];
        echo "</tr>";
    }
    echo "</table>";
?>