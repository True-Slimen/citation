<?php
// a retravailler, colonne public_listed obsolète
$arrayPersonnalQuote = [];

$getPublicQuote = $debate->query("SELECT id FROM quote WHERE public = true AND public_listed = false");

        while($publicQuote = $getPublicQuote->fetch()){
           echo 'public quote id :<br>';     
           echo $publicQuote['id'] . '<br>';
           $quoteId = intval($publicQuote['id']);

           $postPublicQuote = $debate->prepare("INSERT INTO public_quote(quote_id) VALUES(?)");
            $postPublicQuote->execute(array($quoteId));

            $updateQuote = $debate->exec("UPDATE quote SET public_listed = true WHERE id = $quoteId");
        }

        // $postQuote = $debate->prepare("INSERT INTO quote(content, author, public, redactor_id) VALUES(?, ?, ?, ?)");
        //     $postQuote->execute(array($content, $author, $public,$userId));