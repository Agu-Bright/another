<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisetech Global -Sign Up</title>
    <meta name="description" content="Wisetech Global Company is at your service with its user-friendly features, secure infrastructure, and applications that make a difference. A firm for profitable investment solution, your financial stability, and freedom is our priority, join us to make your financial dreams come true">
    <meta name="keywords" content="Wisetech Global Company,Most Trusted Cryptocurrency Platform,Wisetech Global">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Wisetech Global - Home">
    
    <meta itemprop="name" content="Mutual Assets - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/616fc12563d871634713893.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Wisetech Global">
    <meta property="og:description" content="Wisetech Global Company">
    <meta property="og:image" content="assets/images/seo/616fc12563d871634713893.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="index.html">
    
    <meta name="twitter:card" content="summary_large_image">


      <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/dots.css">
      <!-- dashdoard main css -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/main.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/custom.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/color7483.css?color=cc5454&amp;secondColor=000000">
  
    <!--Personal STyle-->
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/font-awesome-all.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/owl.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/animate.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/color.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/rtl.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/style.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/assets/css/responsive.css">
    <link rel="stylesheet" href="assets/templates/bit_gold/css/main.css">
    
    
    
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&amp;display=swap" rel="stylesheet">

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