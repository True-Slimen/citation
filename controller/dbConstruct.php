<?php
// require('./model/dbconnection.php');

//     $sql = "CREATE DATABASE IF NOT EXISTS citationdb";
//      $debate->exec($sql);

// }catch(PDOException $e){
//         echo "Erreur : " . $e->getMessage();
// }  

// try{
//     $reqQuoteTable = $debate->exec("SELECT *
//     FROM INFORMATION_SCHEMA.TABLES
//     WHERE TABLE_SCHEMA = 'dbcitation'
//     AND TABLE_NAME = 'redactor'");
    
//     $err = 'Base créée !<br>';

//     if($reqQuoteTable == 0){

//         $newTable = "CREATE TABLE redactor(
//             Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//             pseudo VARCHAR(32) NOT NULL,
//             mail VARCHAR(50) NOT NULL,
//             password VARCHAR(255) NOT NULL,
//             DateInscription TIMESTAMP,
//             UNIQUE(Mail))";
    
//         $debate->exec($newTable);
//         $err .= 'Table redactor créée !<br>';
//     }

// }catch(PDOException $e){
//     echo "Erreur : " . $e->getMessage();
// } 

// try{
//     $reqQuoteTable = $debate->exec("SELECT *
//             FROM INFORMATION_SCHEMA.TABLES
//             WHERE TABLE_SCHEMA = 'dbcitation'
//             AND TABLE_NAME = 'quote'");
            
//             if($reqQuoteTable == 0){
//                 $err = 'La table n\'existe pas ' . $reqQuoteTable;

//                 $newTable = "CREATE TABLE quote(
//                     Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                     content TEXT NOT NULL,
//                     author VARCHAR(55) NOT NULL,
//                     DateInscription TIMESTAMP)";
            
//             $dbco->exec($newTable);
//             echo 'Table bien créée !';
//             }
    
// }catch(PDOException $e){
//     echo "Erreur : " . $e->getMessage();
// }    
//     $_SESSION['err'] = '<div class="alert alert-dismissible alert-danger">
//     <button type="button" class="close" data-dismiss="alert">&times;</button><p class="mb-0">' . $err . '</p></div>';
