<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tarea Clase 2</h1>
    <h2>Ejercicio 1</h2>
        <?php
            echo "Hola Mundo";
        ?>
    <h2>Ejercicio 2</h2>
        <?php
            $saludo = "Hola Mundo";
            echo $saludo;
        ?>
    <h2>Ejercicio 3</h2>
        <?php
            $lata = 30;
            $botella = 70;
            echo $lata+$botella;
            echo "<br/>";
            echo $lata-$botella;
            echo "<br/>";
            echo $lata*$botella;
            echo "<br/>";
            echo $lata/$botella;
            echo "<br/>";
            echo $lata%$botella;
        ?>
    <h2>Ejercicio 4</h2>
        <?php
            $temp = 20;
            $dato = 1.8;
            
            $celsius = $temp*$dato + 32;
            echo $celsius;

        ?>
    <h2>Ejercicio 5</h2>
        <?php
            $base = 18;
            $altura = 12;
            echo "Perímetro del rectángulo es ";
            echo $base+$base+$altura+$altura;
            echo "<br/>";
            echo "Area del rectángulo es ";
            echo $base*$altura;
            
            echo "<br/>";
            
            $radio = 30;
            $pi= 3.14;
            echo "Perímetro del circulo es ";
            echo 2*$radio*$pi;
            echo "<br/>";
            echo "Area del circulo es ";
            $cuadrado = $radio*$radio;
            echo $pi*$cuadrado;
        ?>
</body>
</html>