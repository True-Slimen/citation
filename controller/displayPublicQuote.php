<?php
require('./model/dbconnection.php');
    $arrayPublicQuote = [];
    $arrayPersonnalQuoteItem = [];


    $getPublicQuote = $debate->prepare("SELECT quote.content, quote.author, redactor.username
    FROM public_quote
    JOIN quote ON public_quote.quote_id = quote.id
    JOIN redactor ON quote.redactor_id = redactor.id
    ");
    
        $getPublicQuote->execute();

            while($publicQuote = $getPublicQuote->fetch()){

                array_push($arrayPublicQuote, [$publicQuote]);
            }
            $_SESSION['publicQuote'] = $arrayPublicQuote;

        