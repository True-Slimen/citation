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

    //  $sql = "CREATE DATABASE IF NOT EXISTS citationdb";
    //  $debate->exec($sql);
    
    // $sql = "CREATE TABLE redacteur(
    //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     identifiant VARCHAR(30) NOT NULL,
    //     mail VARCHAR(50) NOT NULL,
    //     motdepasse VARCHAR(255) NOT NULL,
    //     dateInscription TIMESTAMP,
    //     UNIQUE(Mail))";
        
        //echo 'connexion success';
    


}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}