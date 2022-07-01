<?php
session_start();
$username = $_SESSION["useruid"];

if(isset($_POST["submit"])){
    
  $amount = $_POST["amount"];
  $gateway = $_POST["gateway"];
  $wallet = $_POST['wallet'];

  require 'functions.inc.php';
  require 'dbhandler.inc.php';

  

  if(!is_numeric($amount)){
    header("location:bitcoin-withdraw.php?error=invalidnumber");
  }

  if(empty($amount and $wallet)){
    header("location:bitcoin-withdraw.php?error=emptyamount");
    exit();
  }

  if(!preg_match('/^[a-zA-Z0-9]+$/', $wallet)){
    header("location:bitcoin-withdraw.php?error=wrongaddress");
  }



  $query = "SELECT SUM(Amount) AS sum FROM `history` WHERE `paymentstatus`='Approved' AND `username`='$username'";
  $query_result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($query_result);
  $answer = $row['sum'];
  $debit = -$amount;

  

  
  

  if($answer > $amount){


    
    $sql = "INSERT INTO withdrawal (username, Gateway, Amount, Timess, wallet_address) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location:bitcoin-withdraw.php?error=stmtfailed");
      exit();
    }
    
    
    $date = date("d-m-y");
    
    mysqli_stmt_bind_param($stmt, "ssiss", $username, $gateway, $amount, $date, $wallet);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    //DEBITTING HIS DEPOSITS 

    $sql = "INSERT INTO history (username, Gateway, Amount, Timess, paymentstatus) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location:bitcoin-withdraw.php?error=stmtfailed");
      exit();
    }
    $approved = "Approved";
    $date = date("d-m-y");
    
    mysqli_stmt_bind_param($stmt, "ssiss", $username, $gateway, $debit, $date, $approved);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header('location:withdraw-history.php');
    require 'withdrawal-mailer.php';
    
    exit();
  }else {
    header('location:bitcoin-withdraw.php?error=Insufficientfunds');
  }
    


} 

