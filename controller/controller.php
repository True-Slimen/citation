<?php
session_start();


function home(){
    require('./model/displayPublicQuote.php');
    require('./view/homeView.php');
}

function signIn(){
    require('./view/sign-inView.php');
}

function signUp(){
    require('./view/sign-upView.php');
}

function help(){
    require('./view/helpView.php');
}

function userHome(){
    require('./model/displayQuote.php');
    require('./view/user/userHomeView.php');
}

function page404(){
    require('./view/404View.php');
}


function signOut(){
    session_unset();
    require('./view/sign-inView.php');
}