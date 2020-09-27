<?php
$serverName = "localhost";
$dbName = "citationdb";
$username = "root";
$dbPassword = "";

//tentative de connexion
try{
    $debate = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $username, $dbPassword);

    //Définition du mode d'erreur de PDO sur Exception
    $debate->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}