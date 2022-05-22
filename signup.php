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
            <form action="signup.inc.php" method="post">
                <label for="">Sign Up</label><br><br>
                <input type="text" name="name" placeholder="Full name..."><br><br>
                <input type="text" name="email" placeholder="Email..."><br><br>
                <input type="text" name="username" placeholder="Username..."><br><br>
                <input type="password" name="pwd" placeholder="Password..."><br><br>
                <input type="password" name="repwd" placeholder="Confirm password..."><br><br>
                <select name="country" id="">
                    <option value="country"></option>
                    <option value="country">Ghana</option>
                    <option value="country">Cameroun</option>
                    <option value="country">Algeria</option>
                </select>
                <button type="submit" name="submit">Sign Up</button>
            </form>
            <?php

                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput"){
                        echo "<p>Fill all fields</P>";
                    }elseif($_GET["error"] == "invaliduid"){
                        echo "<p>Choose a proper username</P>";
                    }elseif($_GET["error"] == "invalidemail"){
                        echo "<p>Enter a proper email</P>";
                    }elseif($_GET["error"] == "passwordsdontmatch"){
                        echo "<p>Passwords doesn't match</P>";
                    }elseif($_GET["error"] == "usernametaken"){
                        echo "<p>Username already taken</P>";
                    }elseif($_GET["error"] == "stmtfailed"){
                        echo "<p>Something went wrong, pls try again.</P>";
                    }elseif($_GET["error"] == "none"){
                        echo "<p>You have signed up!</P>";
                    }
                }

            ?>

        </section>

    </center>

  

</body>
</html>