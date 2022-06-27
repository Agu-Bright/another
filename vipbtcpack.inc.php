<?php

session_start();
$username = $_SESSION["useruid"];

if(isset($_POST["submit"])){
    
  $amount = $_POST["amount"];
  $gateway = $_POST["gateway"];

  require 'functions.inc.php';
  require 'dbhandler.inc.php';

 

  if(!is_numeric($amount)){
    header("location:deposit-form.php?invalidnumber");
  }

  if(empty($amount)){
    header("location:deposit-form.php?emptyamount");
    exit();
  }

  $query = "SELECT SUM(Amount) AS sum FROM `history` WHERE paymentstatus='Approved' AND username='$username'";
  $query_result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($query_result);
  $row['sum'];

  if($amount < $row['sum']){

    vipinvestment($conn, $username, $gateway, $amount);

  }else{
    header("location:children'spack.php");
  }
  

  


}
