<?php
include ('lib/constantes.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br>
        <form method="post" action="<?=URLBASE;?>controladores/AccUsuario.php" >
            USUARIO<input  type="text" name="usuario">
            <br>
            CLAVE<input type="text" name="clave">
            <br>    
            <input type="submit" value="ENVIAR">
        </form>
    </body>
</html>
