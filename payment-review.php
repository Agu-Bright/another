<?php
    if(isset($_POST["submit"])){
    
        $amount = $_POST["amount"];
    
        require_once 'dbhandler.inc.php';
        require_once 'functions.inc.php';
    
    
        if(invalidamount($amount) !==false){
            header("Location:deposit-form.php?error=invalidamount");
            exit();
        }else {
            // header("location:payment-review.php");
            // exit();
        }
    
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <center>
    
    <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Amount: <?php echo $_POST["amount"]?> USD</li>
        <li class="list-group-item">Charge: 0 USD</li>
        <li class="list-group-item">Payable: <?php echo $_POST["amount"]?> USD</li>
        <li class="list-group-item">In Dollars: <?php echo $_POST["amount"]?> </li>
    </ul>
    <div class="card-body">
        <a href="deposit-confirm.php" class="card-link">Confirm</a>
        <!-- <a href="#" class="card-link">Another link</a> -->
    </div>
    </div>
    

    </center>
</body>
</html>