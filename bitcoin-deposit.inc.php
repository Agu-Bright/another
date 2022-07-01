<?php
session_start();
$username = $_SESSION["useruid"];

if(isset($_POST["submit"])){
    
  $amount = $_POST["amount"];
  $gateway = $_POST["gateway"];

  require 'functions.inc.php';
  require 'dbhandler.inc.php';

  // $query = "SELECT * FROM `history` WHERE `username` = '$_SESSION[useruid]' ORDER BY `id` DESC";
  // $result = mysqli_query($conn, $query);
  // $rows = mysqli_fetch_assoc($result);

  // echo $rows['Amount'];

  

 

  if(!is_numeric($amount)){
    header("location:deposit-form.php?invalidnumber");
  }

  if(empty($amount)){
    header("location:deposit-form.php?emptyamount");
    exit();
  }

  

  createbitcoinDeposit($conn, $username, $gateway, $amount);



}