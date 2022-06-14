<?php

if (isset($_POST["submit"])) {
    $username = $_POST["confirm"];




    $username;

    require_once 'dbhandler.inc.php';
    require_once 'functions.inc.php';


    $sql = mysqli_query($conn, "SELECT * FROM users ORDER BY usersId DESC LIMIT 1");
    $transactions = mysqli_fetch_row($sql);

    $transactions[8];


    if(emptyInputConfirm($username) !==false){
        header("location:confirm.php?error=emptyfield");
        exit();
    }

    if($username === $transactions[8]){
        // echo $username;
        // echo $transactions[5];
        header("location:login.php");
        exit();
    }else {
        header("location:confirm.php?error=invalidcode");
        exit();
    }

    
}
