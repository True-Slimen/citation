<?php
session_start();

require('../model/dbconnection.php');

if(isset($_POST['connection'])){
    $identifiant = htmlspecialchars($_POST['name']);
    $pass = sha1($_POST['password']);

    if(!empty($_POST['name'] AND !empty($_POST['password']))){
        $reqIdPass = $debate->prepare("SELECT * FROM redactor WHERE username = ? AND password = ?");
        $reqIdPass->execute(array($identifiant, $pass));
        $identifiantExist = $reqIdPass->rowCount();

        if($identifiantExist == 1){
            $identifiantHTML = $identifiant;
            
            $getId = $debate->query("SELECT * FROM redactor WHERE username = '$identifiant'");
    
            while($userId = $getId->fetch()){
                $result = $userId['id'];
            }
            $userId = intval($result);
              
            $_SESSION['userId']= $userId;
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] =  $identifiantHTML;
            header("Location: ../index.php?action=userHome");
            exit;
        }else{
            $err = "Erreur dans les identifiants de connexion";
            $_SESSION['err'] = '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p class="mb-0">' . $err . '</p>
            </div>';
            header("Location: ../index.php?action=sign-in");
            exit;
        }
    }
}
