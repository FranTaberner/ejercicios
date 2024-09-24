<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bienvenid@ al contador</h1>
<h3>Este contador va del 1 al 100:</h3>
<?php

for ($i=0; $i!=101; $i++){
    if ($i!=100){
        echo "$i,";
    }
    else {
        echo "$i";
    }
}
?>
<h3>Este contador va del 10 al 0:</h3>
<?php
$num = 10;

    while ($num != -1) {
        if ($num!=0)
            echo "$num-";
        else{
            echo "$num";
        }
        $num--;
    }
?>
</body>
</html>