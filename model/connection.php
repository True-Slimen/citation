<?php
session_start();

require('../database/dbconnection.php');

// Get fields value, if exist and not empty
if(isset($_POST['connection']) AND (!empty($_POST['name']) && !empty($_POST['password']))){
    $identifiant = htmlspecialchars($_POST['name']);
    $prefixe = 'solide96*';
    $pass = $_POST['password']. $prefixe;
    $hashedpass = hash('sha512', $pass);
    
        $reqIdPass = $debate->prepare("SELECT * FROM redactor WHERE username = ? AND password = ?");
        
        $reqIdPass->execute(array($identifiant, $hashedpass));
        $identifiantExist = $reqIdPass->rowCount();

        while($userId = $reqIdPass->fetch()){
            $result = $userId['id'];
        }

        if($identifiantExist == 1){
            $identifiantHTML = $identifiant;

            $userId = intval($result);
              
            $_SESSION['userId']= $userId;
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] =  $identifiantHTML;
            header("Location: ../index.php?action=userHome");
            exit;
        }else{
            $err = "Erreur dans les identifiants de connexion";
            $_SESSION['err'] = 
            '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="mb-0">' . $err . '</p>
            </div>';
            header("Location: ../index.php?action=sign-in");
            exit;
        }   
}$err = "Tout les champs doivent être remplis";
    $_SESSION['err'] = 
    '<div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p class="mb-0">' . $err . '</p>
    </div>';
    header("Location: ../index.php?action=sign-in");
    exit;
