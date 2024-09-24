<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    include 'casas_rurales.php';

    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre";
    echo "<th>ID";
    echo "<th>Localidad";
    echo "<th>Telefono";
    echo "</tr>";
    foreach ($tabla as $key){
        if (!empty($key['telefono'])){
            echo "<tr>";
            echo "<td>" . $key['nombre'];
            echo "<td>" . $key['id'];
            echo "<td>" . $key['localidad'];
            echo "<td>" . $key['telefono'];
            echo "</tr>";
        }
    }
    echo "</table>";
?>
</body>
</html>