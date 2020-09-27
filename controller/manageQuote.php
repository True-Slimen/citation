<?php
session_start();
require('../model/dbconnection.php');

if(isset($_POST['publish'])){
    $quoteId = htmlspecialchars($_POST['publish']);
    echo 'publier';

    $publishQuote = $debate->exec("UPDATE quote SET public = true WHERE id = $quoteId");

    $postPublicQuote = $debate->prepare("INSERT INTO public_quote(quote_id) VALUES(?)");
    $postPublicQuote->execute(array($quoteId));

    header("Location: ../index.php?action=userHome");
           exit;
}else if(isset($_POST['dispublish'])){
    $quoteId = htmlspecialchars($_POST['dispublish']);
    echo 'dépublier';

    $dispublishQuote = $debate->exec("UPDATE quote SET public = false WHERE id = $quoteId");

    $deletePublicQuote = $debate->exec("DELETE FROM public_quote WHERE quote_id = $quoteId");
    
    header("Location: ../index.php?action=userHome");
           exit;
}else if(isset($_POST['removeQuote'])){
    $quoteId = htmlspecialchars($_POST['removeQuote']);
    echo 'delete';

    $deleteQuote = $debate->exec("DELETE FROM quote WHERE id = $quoteId");
    header("Location: ../index.php?action=userHome");
           exit;
}

// $getPublicQuote = $debate->query("SELECT id FROM quote WHERE public = true AND public_listed = false");

//         while($publicQuote = $getPublicQuote->fetch()){
//            echo 'public quote id :<br>';     
//            echo $publicQuote['id'] . '<br>';
//            $quoteId = intval($publicQuote['id']);

//            $postPublicQuote = $debate->prepare("INSERT INTO public_quote(quote_id) VALUES(?)");
//             $postPublicQuote->execute(array($quoteId));

//             $updateQuote = $debate->exec("UPDATE quote SET public_listed = true WHERE id = $quoteId");
//         }

        // $postQuote = $debate->prepare("INSERT INTO quote(content, author, public, redactor_id) VALUES(?, ?, ?, ?)");
        //     $postQuote->execute(array($content, $author, $public,$userId));