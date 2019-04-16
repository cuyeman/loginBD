<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
$dbname="leyes";
$dbuser="root";
$dbpass="avaras08";
$dbhost="localhost";

$dblink= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);

    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}