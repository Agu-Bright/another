<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $mobile = $_POST["mobile"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $zip = $_POST["zip"];
    $btc = $_POST["btc"];
    $usdt = $_POST["usdt"];
    $eth = $_POST["eth"];
    



    require_once 'dbhandler.inc.php';
    require_once 'functions.inc.php';


    // if(invalidUid($username, $country, $mobile, $state, $city, $address, $zip, $btc, $usdt, $eth) !==false){
    //     header("Location:profile.php?error=invaliduid");
    //     exit();
    // }

    if(invalidEmail($email) !==false){
        header("Location:profile.php?error=invalidemail");
        exit();
    }


    createProfile($conn, $name, $username, $email, $country, $mobile, $state, $city, $address, $zip, $btc, $usdt, $eth);
    

}