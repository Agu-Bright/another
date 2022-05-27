<?php

require 'dbhandler.inc.php';

$sql = mysqli_query($conn, "SELECT * FROM history ORDER BY id DESC LIMIT 1");
$transactions = mysqli_fetch_row($sql);
echo $transactions[0];
echo $transactions[1];
echo $transactions[2];
echo $transactions[3];
