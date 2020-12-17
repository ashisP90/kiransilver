<?php
/**
 * Checks if user is logged in or not
 */
function checkIfLoggedIn(){
    if(!isset($_SESSION['username'])) {
        redirect('index.php');
    }
}

function redirect($url){
    echo "<script>window.open('$url', '_self')</script>";
}

function logout(){
    unset($_SESSION['username']);
    echo "<script>alert('You have Logout Successfully.');</script>";
    echo "<script>window.open('index.php', '_self')</script>";
}

if(isset($_REQUEST['action']) && ($_REQUEST['action'] == 'logout')){
    logout();
}