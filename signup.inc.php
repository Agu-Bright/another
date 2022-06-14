<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $mobile = $_POST["mobile"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];
    $referral = $_POST["referral"];

    // echo $referral_code;

    require_once 'dbhandler.inc.php';
    require_once 'functions.inc.php';

   

    if(emptyInputSignup($name, $lastname, $email, $username, $country, $mobile, $pwd, $repwd) !==false){
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

    if($referral != ''){
        updateReferral();
    }


    createUser($conn, $name, $lastname, $username, $email, $country, $mobile, $pwd, $referral_code);

    
    if(isset($_GET['refer']) && $_GET['refer'] != ''){
    $query = "SELECT * FROM 'users' WHERE 'referral_code' = '$_GET[refer]'";
    $result= mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        echo "
        <script>
            document.getElementById('refercode').value='$_GET[refer]';
        </script>
        ";
    }
    }

    

}else{
    // require 'mailer.php';
    // header('location:login.php');
    // ../ is used because its in an includes folder
    exit();

    // echo "Welcome to my page";
}