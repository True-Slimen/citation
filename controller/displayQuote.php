<?php
    require('./model/dbconnection.php');
    $userId = $_SESSION['userId'];
    $arrayPersonnalQuote = [];

    $getPersonnalQuote = $debate->query("SELECT id, content, author, create_at, public FROM quote WHERE redactor_id = '$userId'");

            while($personnalQuote = $getPersonnalQuote->fetch()){
               $quoteId = $personnalQuote['id'];
               $content = $personnalQuote['content'];               
               $author = $personnalQuote['author'];               
               $create_at = $personnalQuote['create_at'];
               $status = $personnalQuote['public'];
               
               if($status == false){
                    $updateBtn = '<button type="submit" name="publish" value="'.$quoteId .'" class="btn btn-outline-success col-9">Publier</button>';
               }else{
                    $updateBtn = '<button type="submit" name="dispublish" value="'.$quoteId .'" class="btn btn-outline-success col-9">Ne plus publier</button>';
               }
               array_push($arrayPersonnalQuote, [$quoteId, $status, $updateBtn, $content, $author, $create_at]);
            }

            $_SESSION['personnalQuote'] = $arrayPersonnalQuote;