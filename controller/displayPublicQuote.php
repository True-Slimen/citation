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

    
    
    

    $arrayPersonnalQuote = [];
    $arrayPersonnalQuoteItem = [];

    // $sth = $dbco->prepare("
    //               SELECT users.prenom, comments.contenu
    //               FROM users
    //               INNER JOIN comments ON users.id = comments.userId
    //             ");

    $getPublicQuote = $debate->prepare("SELECT quote.content, redactor.username
    FROM quote
    INNER JOIN redactor ON redactor.id = quote.redactor_id");

        $getPublicQuote->execute();

            while($publicQuote = $getPublicQuote->fetchAll()){
                echo '<pre>';
                print_r($publicQuote);
                echo '</pre>';
               
               
               
            }
echo 'heello';

           
        }catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }