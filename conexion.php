<?php
try {
    $usuario = "root";
    $password = "";
    if($mbd = new PDO('mysql:host=localhost;dbname=test2', $usuario, $password))
    {
        echo 'Conexion exitosa';
        $val = $mbd->prepare('select * from persona');
        $val->execute();
        $result=$val->fetchAll();
        echo '<pre>';
        var_dump($result);
        echo '</pre>';
        
    }
    
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
?>