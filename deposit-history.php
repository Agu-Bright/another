<?php

require 'dbhandler.inc.php';

$sql = mysqli_query($conn, "SELECT * FROM history ORDER BY id DESC LIMIT 1");
$transactions = mysqli_fetch_row($sql);
echo $transactions[0];
echo $transactions[1];
echo $transactions[2];
echo $transactions[3];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Transaction Id:</th>
      <th scope="col">Gateway</th>
      <th scope="col">Amount</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $transactions[0]; ?></th>
      <td scope="row"><?php echo $transactions[1]; ?></td>
      <td scope="row"><?php echo $transactions[2]; ?></td>
      <td scope="row"><?php echo $transactions[3]; ?></td>
    </tr>
  </tbody>
</table>

</body>
</html>



