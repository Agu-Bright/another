<?php

if(isset($_POST["submit"])){
    
  $amount = $_POST["amount"];
  $gateway = $_POST["gateway"];

  require 'functions.inc.php';
  require 'dbhandler.inc.php';

  // echo $amount;


  // require_once 'dbhandler.inc.php';
  // require_once 'functions.inc.php';


  // if(is_numeric($amount)){
  //   header("location:anotherthing.php");
  // }

  if(!is_numeric($amount)){
    header("location:deposit-form.php?invalidnumber");
  }

  if(empty($amount)){
    header("location:deposit-form.php?emptyamount");
    exit();
  }

  createethDeposit($conn, $gateway, $amount);

    

}