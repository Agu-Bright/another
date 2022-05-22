<?php
   require"header.php";
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Reset your password</h1>
            <p>An email will be sent to you with instructions on how to resert your password.</p>
            <form action="reset-password.inc.php" method="POST">
                <input type="text" name="email" placeholder="Enter your email address">
                <button typr="submit" name="reset-request-submit">Recieve new password by email</button>


            </form>

            <?php

                if (isset($_GET["reset"])) {
                    if ($_GET["reset"] == "success"){
                        echo "<p>Check your e-mail</P>";
                    }elseif($_GET["error"] == "wronglogin"){
                        echo "<p>Incorrect login details</P>";
                    }
                }

            ?>
        </section>
    </div>
</main>