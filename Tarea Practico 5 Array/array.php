<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios TP5</h1>
    <h3>Ejercicio 1</h3>
        <?php
            $escalera=[2,4,6,8,10,12,14,16,18,20];
            foreach ($escalera as $escalera) {
                print $escalera . "<br>";
            }
            
    ?>
    <h3>Ejercicio 2</h3>
        <?php
            $datos=["Pedro","Ana", 34, 1];
            print_r($datos);
        ?>
    <h3>Ejercicio 3</h3>
        <?php
            $asociativo=["Nombre"=>"Pedro", "Apellido"=>"Torres","Direccion"=>"Av.Mayor 3703","Telefono"=>1122334455];
        ?>
    <h3>Ejercicio 4</h3>
        <?php
            $ciudades=["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];

            foreach ($ciudades as $indice => $valor) {
                print ("La ciudad con el indice $indice tiene el nombre $valor");
                echo "<br>";
                }
        ?>
    <h3>Ejercicio 5</h3>
        <?php
            $localidades=["MD"=>"Madrid","BCl"=>"Barcelona","LD"=>"Londres","NY"=>"New York","LA"=>"Los Angeles","CCG"=>"Chicago"];
            foreach ($localidades as $indice => $valor) {
                print ("El indice de $valor es $indice");
                echo "<br>";
                }
        ?>    
</body>
</html>