<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
</head>
<body>
    <h1>TP 4</h1>
    <h3>Ejercicio 1</h3>
    <div class="ejercicios">
        <?php
            for ($i=1; $i<=100 ; $i++) { 
                print "<p>$i</p>";
                echo "||";
                }
        ?>
    </div>
    <h3>Ejercicio 2</h3>
    <div class="ejercicios">
        <?php
            for ($i=100; $i>=1 ; $i--) { 
                print "<p>$i</p>";
                echo "||";
                }
        ?>
    </div>
    <h3>Ejercicio 3</h3>
    <div class="ejercicios">
         <?php
            for ($i=0; $i<=100; $i=$i+2){
                print "<p>$i</p>";
                echo "||";
                }  
        ?>
    </div>
    <h3>Ejercicio 4</h3>
    <div class="ejercicios">
        <?php
            for ($i=1; $i<=100; $i=$i+2){
                print "<p>$i</p>";
                echo "||";
                }  
        ?>
    </div>
    <h3>Ejercicio 5</h3>
    <div class="ejercicios">
        <?php
            $suma=0;
            for ($i=1; $i<=20; $i++) {
                $suma+=$i;
                print "<p>$suma</p>";
                echo "||";
            }
        ?>
    </div>
    <h3>Ejercicio 6</h3>
    <div class="ejercicios">
        <?php
            $suma2=0;
            for ($i=2; $i<=20; $i+=2) {
                $suma2= $suma2+$i;
                print $suma2;
                echo "||";
            }    
        ?>
    </div>
</body>
</html>



