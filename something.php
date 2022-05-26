<?php

require 'dbhandler.inc.php';

$sql = 'SELECT id, Gateway, Amount, Time FROM history';
$result = mysqli_query($conn, $sql);
$transactions = mysqli_fetch_array($result);
mysqli_free_result($result);
mysqli_close($conn);
// print_r($transactions);

$id = $transactions[0];
$Gateway = $transactions[1];
$Amount = $transactions[2];
$Time = $transactions[3];


echo "Transaction Id:"; echo "Gateway"; echo "Amount"; echo "Time"; echo "<br>";
echo $id;