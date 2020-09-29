<?php
//     session_start();
    require('./database/dbconnection.php');
    $userId = $_SESSION['userId'];
    $arrayPersonnalQuote = [];
    

    $getUserRole = $debate->query("SELECT role_user_id FROM role_user WHERE redactor_id = '$userId'");

     while($userRole = $getUserRole->fetch()){
               $userRoleId = $userRole['role_user_id'];
               //echo $userRoleId;
     }
     
     if($userRoleId){
        $_SESSION['role'] = 1;

        $arrayAllQuote = [];
        $getAllQuote = $debate->prepare("SELECT quote.id, quote.content, quote.author, quote.create_at, quote.public, redactor.username FROM quote
        JOIN redactor ON quote.redactor_id = redactor.id 
        ");

        $getAllQuote->execute();

        while($allQuote = $getAllQuote->fetch()){
           array_push($arrayPersonnalQuote, $allQuote);
        }
        $status = $arrayPersonnalQuote[0][[4][0]];
    }else{
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
          }
    
    
               
     
            $_SESSION['personnalQuote'] = $arrayPersonnalQuote;