<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francisco Javier Taberner Aliaga">
    <title>Plantilla</title>
    <link src="./plantilla.php"></link>
    <style>
        table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }
    </style>
</head>
<body>
    <?php 
    include 'plantilla.php';

        echo "<table>";
        echo "<tr>";
        echo "<th>Dorsal";
        echo "<th>Nombre";
        echo "<th>Apellidos";
        echo "<th>Posicion";
        echo "<th>Equipo";
        echo "</tr>";
        foreach ($tabla as $key){
            echo "<tr>";
            echo "<td>" . $key['Dorsal'];
            echo "<td>" . $key['Nombre'];
            echo "<td>" . $key['Apellidos'];
            echo "<td>" . $key['Posicion'];
            echo "<td>" . $key['Equipo'];
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>