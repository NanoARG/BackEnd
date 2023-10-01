<?php
    $usuario = $_POST ["usuario"];
    $contraseña = $_POST ["contraseña"];

    $ckusuario = "admin";
    $ckcontraseña = 1234;

    if ($usuario==$ckusuario && $contraseña==$ckcontraseña) {
        header ("location:roma.html");  
    } else {
        header ("location:login.html");
    }
    
?>