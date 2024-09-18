<?php
    $personas = array(
        array(
            'Nombre' => 'Eustaquio',
            'Altura' => '185',
            'email' => 'eustaquio@gmail.com'
        ),
        array(
            'Nombre' => 'Mario',
            'Altura' => '165',
            'email' => 'mario@gmail.com'
        ),
        array(
            'Nombre' => 'Astolfo',
            'Altura' => '173',
            'email' => 'astolfo@gmail.com'
        ),
        array(
            'Nombre' => 'Rodolfo',
            'Altura' => '152',
            'email' => 'rodolfo@gmail.com'
        ),
        array(
            'Nombre' => 'Pancracio',
            'Altura' => '185',
            'email' => 'pancracio@gmail.com'
        )
    );
    echo "<table>";
    foreach($personas as $gente){
        
        echo "<tr>";
        echo "<td>Nombre: <br>" . $gente['Nombre'];
        echo "<td>Altura: <br>" . $gente['Altura'];
        echo "<td>Email: <br>" . $gente['email'];
        echo "</tr>";
        
    }
    echo "</table>";
    
?>
