<?php
    require('./model/dbconnection.php');
    $userId = $_SESSION['userId'];
    //print_r($_SESSION);

    $arrayPersonnalQuote = [];
    $arrayPersonnalQuoteItem = [];

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
















// if(isset($_POST['newCitation'])){
//     $content = htmlspecialchars($_POST['content']);
//     $author = htmlspecialchars($_POST['author']);

//     if(!empty($_POST['content'] AND !empty($_POST['author']))){
//         if(isset($_SESSION['username'])){
//             $getId = $debate->query("SELECT * FROM redactor WHERE username = '$redactorName'");

//             while($userId = $getId->fetch()){
//                 $result = $userId['id'];
//             }
//             $userId = intval($result);
//             echo '<br>L\'id : ' . gettype($userId);

//             $postQuote = $debate->prepare("INSERT INTO quote(content, author, redactor_id) VALUES(?, ?, ?)");
//             $postQuote->execute(array($content, $author, $userId));

//             $success = 'Citation ajouté';
//             $_SESSION['loggedin']= true;
//             $_SESSION['success'] = 
//             '<div class="alert alert-dismissible alert-success">
//                 <button type="button" class="close" data-dismiss="alert">&times;</button>
//                 <p class="mb-0">' . $success . '</p>
//             </div>';
//             header("Location: ../index.php?action=userHome");
//             exit;

//         }$err = "Pas de nom utilisateur";
//         $_SESSION['err'] = 
//         '<div class="alert alert-dismissible alert-danger">
//             <button type="button" class="close" data-dismiss="alert">&times;</button>
//             <p class="mb-0">' . $err . '</p>
//         </div>';
//         header("Location: ../index.php?action=userHome");
//         exit;

//     }$err = "Tout les champs doivent être remplis";
//     $_SESSION['err'] = 
//     '<div class="alert alert-dismissible alert-danger">
//         <button type="button" class="close" data-dismiss="alert">&times;</button>
//         <p class="mb-0">' . $err . '</p>
//     </div>';
//     header("Location: ../index.php?action=userHome");
//     exit;
//}    
