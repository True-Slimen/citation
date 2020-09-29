<?php
session_start();

require('../database/dbconnection.php');

if(isset($_POST['registration'])){
    $prefixe = 'solide96*';
    $identifiant = htmlspecialchars($_POST['name']);
    $mail = htmlspecialchars($_POST['email']);
    $pass = $_POST['password'] . $prefixe;
    $pass2 = $_POST['password2']. $prefixe;
    $hashedpass = hash('sha512', $pass);
    $hashedpass2 = hash('sha512', $pass2);
    

    
    if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['password2'])){
        
        $identifiantLength = strlen($identifiant);
        if($identifiantLength <=30){

            $reqIdentifiant = $debate->prepare("SELECT * FROM redactor WHERE username = ?");
            $reqIdentifiant->execute(array($identifiant));
            $identifiantExist = $reqIdentifiant->rowCount();
            if($identifiantExist == 0){

                
                    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){

                        $reqMail = $debate->prepare("SELECT * FROM redactor WHERE mail = ?");
                        $reqMail->execute(array($mail));
                        $mailExist = $reqMail->rowCount();
                        if($mailExist == 0){
                            if($hashedpass == $hashedpass2){

                                $sql = $debate->prepare("INSERT INTO redactor(username, mail, password) VALUES(?, ?, ?)");
                                $sql->execute(array($identifiant,$mail,$hashedpass));

                                $userId = $debate->lastInsertId();

                                $role = 0;
                                $setUserRole = $debate->prepare("INSERT INTO role_user(role_user_id, redactor_id) VALUES(?, ?)");
                                $setUserRole->execute(array($role,$userId));


                                $success = "Votre compte à bien été créé.";
                                $_SESSION['success'] = 
                                '<div class="alert alert-dismissible alert-success">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <p class="mb-0">' . $success . '</p>
                                </div>';
                                header("Location: ../index.php?action=sign-in");
                               exit;
                            }else{
                                $err = "Vos mots de passes ne correspondent pas.";
                                
                            }
                        }else{
                            $err = "Cette adresse mail est déjà prise.";
                            
                        }
               
                    }else{
                        $err = "Votre adresse mail n'est pas valide.";
                        
                    }

                }else{
                    $err = "Ce identifiant est déjà pris.";
                    
                }

                }else{
                    $err ="Votre pseudo ne doit pas dépasser 30 caractères.";
                    
                }

            }else{
                $err = "Tous les champs doivent être remplis";
            }
            $_SESSION['err'] = 
            '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="mb-0">' . $err . '</p>
            </div>';
            header("Location: ../index.php?action=sign-up");
}