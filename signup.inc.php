<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];
    $referredby = $_POST["referredby"];

    require_once 'dbhandler.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $pwd, $repwd) !==false){
        header("Location:signup.php?error=emptyinput");
        exit();
    }

    if(invalidUid($username) !==false){
        header("Location:signup.php?error=invaliduid");
        exit();
    }

    if(invalidEmail($email) !==false){
        header("Location:signup.php?error=invalidemail");
        exit();
    }

    if(pwdMatch($pwd, $repwd) !==false){
        header("Location:signup.php?error=passwordsdontmatch");
        exit();
    }

    if(uidExists($conn, $username, $email) !==false){
        header("Location:signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd, $referredby);
    

}else{
    // require 'mailer.php';
    // header('location:login.php');
    // ../ is used because its in an includes folder
    exit();

    // echo "Welcome to my page";
}