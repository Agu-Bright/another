<?php

require 'dbhandler.inc.php';

// $query = "SELECT * FROM history";
// $result = mysqli_query($conn, $query);
// $rows = mysqli_fetch_assoc($result);




//echo $rows['id'];


//echo "Hello";

if(isset($_POST["submit"])){


    $query = "SELECT * FROM eth_history";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);




    //echo $rows['id'];
    

   
    
    $approve = $_POST["approve"];
    $id = $_POST['id'];

    // echo $id;
    
  
    require 'functions.inc.php';
    require 'dbhandler.inc.php';
  

    
    // $sql = "UPDATE `history` SET `paymentstatus` = 'Approved' WHERE `id` = ";
    // $anything = mysqli_query($conn, $sql);
    
    
    $sql = "UPDATE `eth_history` SET `paymentstatus` = 'Approved' WHERE `id` = $id";
    $anything = mysqli_query($conn, $sql);

    header("location:admin-index.php");
  
  
  
}