<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <center>
        <section>
            <form action="confirm.inc.php" method="POST">
                <label for="">Confirm your account with the code sent to your mail.</label> <br><br>
                <input type="text"  name="confirm" placeholder="Confirmation code"><br><br>
                <button type="submit" name="submit" >Confirm</button>
            </form>

            <?php
               if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfield"){
                    echo "<p>Enter a confirmation code</P>";
                }elseif($_GET["error"] == "invalidcode"){
                    echo "<p>Invalid confirmation code</P>";
                }
            }
              
            ?>
        </section>
    </center>

</body>
</html>
