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