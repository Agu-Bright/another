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
            <form action="login.inc.php" method="POST">
                <label for="">Log In</label> <br><br>
                <input type="text"  name="uid" placeholder="username/email"><br><br>
                <input type="text"  name="password" placeholder="password"><br><br>
                <button type="submit" name="submit" >Log In</button>
            </form>

            <a href="reset-password.php">Forgotten password?</a>

            <?php

                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput"){
                        echo "<p>Fill all fields</P>";
                    }elseif($_GET["error"] == "wronglogin"){
                        echo "<p>Incorrect login details</P>";
                    }
                }

            ?>
        </section>
    </center>
</body>
</html>