<?php

if (isset($_POST["submit"])) {
    $username = $_POST["confirm"];

    require_once 'dbhandler.inc.php';
    require_once 'functions.inc.php';




    if(emptyInputConfirm($username) !==false){
        header("location:confirm.php?error=emptyfield");
        exit();
    }

    confirmLogin($conn, $username);
}else{
    header("location:login.php");
    exit();
}