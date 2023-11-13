<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>TIENDA DE ROPA</h1>
    </header>
    <div class="nav">
        <a href="listar.php">INICIO</a>
        <a href="nike.php">NIKE</a>
        <a href="buzos.php">BUZOS</a>
    </div>

    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    
    <div class="tabla"> 
        <table border="1">
            <tr>
                <th>ID</th>
                <th>TIPO DE PRENDA</th>
                <th>MARCA</th>
                <th>TALLE</th>
                <th>PRECIO</th>
                <th>IMAGEN</th>
            </tr> 
    </div>
    <?php
    // Conexion 
        $conexion=mysqli_connect("127.0.0.1","root","");
        mysqli_select_db($conexion,"tienda");
    
    // Consulta
        $consulta="SELECT*FROM ropa WHERE precio>500";
    
    // Ejecuto la orden y obtengo los datos
        $datos=mysqli_query ($conexion, $consulta);
    
    // Imprimo por pantalla
        

        while ($reg=mysqli_fetch_array($datos)) { ?>
            <tr>
                <td><?php echo $reg["id"]; ?></td>
                <td><?php echo $reg["prenda"]; ?></td>
                <td><?php echo $reg["marca"]; ?></td>
                <td><?php echo $reg["talle"]; ?></td>
                <td><?php echo $reg["precio"]; ?></td>
                <td><img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" widht="10px" heigth="10px"></td>
                
            </tr>
        <?php } ?>
    </table>
</body>
</html>