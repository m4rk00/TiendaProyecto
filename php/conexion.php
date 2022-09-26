<?php

try{
    $pdo=new PDO('mysql:host=localhost;dbname=facturacion','root','');
    // echo "Conexión Exitosa!!!";
}catch(PDOException $e){
    print "ERROR".$e->getMessage()."<br>";
    die();
}







?>