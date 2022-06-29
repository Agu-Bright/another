<?php
session_start();
$username = $_SESSION["useruid"];

if(isset($_POST["submit"])){
    
  $amount = $_POST["amount"];
  $gateway = $_POST["gateway"];
  $wallet = $_POST["wallet"];

  require 'functions.inc.php';
  require 'dbhandler.inc.php';

  
  if(!is_numeric($amount)){
    header("location:usdt-withdraw.php?error=invalidnumber");
  }

  if(empty($amount and $wallet)){
    header("location:usdt-withdraw.php?error=emptyamount");
    exit();
  }

  if(!preg_match('/^[a-zA-Z0-9]+$/', $wallet)){
    header("location:usdt-withdraw.php?error=wrongaddress");
  }



  $query = mysqli_query($conn, "SELECT * FROM `usdt_histroy` WHERE `username` = '$username' AND `paymentstatus` = 'Approved' ORDER BY id DESC LIMIT 1");
  $result = mysqli_fetch_row($query);
  
  $id = $result[0];

  

  $query = "SELECT * FROM `usdt_histroy` WHERE `username` = '$_SESSION[useruid]' AND `id` = '$id'";
  $result = mysqli_query($conn, $query);
  $rows = mysqli_fetch_assoc($result);
  $answer = $rows['Amount'];
  

  if($answer > $amount){

    $sql = "UPDATE `usdt_histroy` SET `Amount` = '$answer' WHERE `id` = $id";
    $anything = mysqli_query($conn, $sql);


    
    $sql = "INSERT INTO withdrawal (username, Gateway, Amount, Timess, wallet_address) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:usdt-withdraw.php?error=stmtfailed");
        exit();
    }
    
    
    $date = date("d-m-y");
    
    mysqli_stmt_bind_param($stmt, "ssiss", $username, $gateway, $amount, $date, $wallet);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location:withdraw-history.php');
    exit();
    
    
    



    
    

  }else {
    header('location:usdt-withdraw.php?error=Insufficientfunds');
  }

  echo "<br>";
  

  

  

  




}