<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tarea N°3</h1>

    <h2>Ejercicio 1</h2>

        <?php
            echo 10;
            echo "</br>";
            $plata = 10;

            if ( $plata > 0 ) {
                echo "El número es positivo.";
            }
        ?>
    <h2>Ejercicio 2</h2>

        <?php
            echo 5;
            echo "</br>";
            $num = 5;

            if (($num > 1) & ($num < 10)){
                echo "Es un numero entre 1 y 10";
            }
            
            
        ?>
    <h2>Ejercicio 3</h2>
        
        <?php
            echo -1;
            echo "</br>";
            $valor = -1;

            if (($valor < 2) || ($valor > 10)){
            echo "Es un numero mayor a 10 o menor a 2";
            }
                
        ?>

<h2>Ejercicio 3</h2>
        
        <?php
            echo "A es igual a 2";
            echo "</br>";
            echo "B es igual a 8";
            echo "</br>";
            $numero1 = 2;
            $numero2 = 8;


            if ($numero1 > $numero2) {
                echo "La suma es de " .$numero1+$numero2;
                echo "</br>";
                echo "La resta es de " .$numero1-$numero2;
            } elseif ($numero1 < $numero2) {
                echo "La multiplicacion es de " .$numero1*$numero2;
                echo "</br>";
                echo "La division es de " .$numero1/$numero2;
                echo "</br>";
                echo "El resto de la division es de " .$numero1%$numero2;
            } else {
                echo "Los numeros ingresados son iguales.";
            }
             
        ?>

</body>
</html>