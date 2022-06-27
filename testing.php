<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    
    $startday = new DateTime(date("Y/m/d"));
    $today = new DateTime();
    $days  = $today->diff($startday)->format('%a');
    $enddate = Date('Y/m/d', strtotime('+3 days'));

    

    echo "<br><br>";

    $capital = 20000;
    $percentageincrease = 5;
    $percentage= ($capital / 100) * $percentageincrease;
    // $roi = $capital + $percentage;

    echo $value = $capital + $days*$percentage;



    // $timezone = date_default_timezone_get();
    // echo "The current server timezone is: " . $timezone;


    // echo date("Y/m/d");
?>
</body>
</html>