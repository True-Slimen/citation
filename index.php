<?php
require('controller/controller.php');


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        home();
    
    }elseif ($_GET['action'] == 'sign-in') {
        
        signIn();

    }elseif ($_GET['action'] == 'sign-up') {
        
        signUp();

    }elseif ($_GET['action'] == 'sign-out') {
        
        signOut();

    }elseif ($_GET['action'] == 'help') {
        
        Help();
    }elseif ($_GET['action'] == 'userHome') {
        
        UserHome();
    }
}
else {
    home();
}

