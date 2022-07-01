<?php
session_start();
require 'dbhandler.inc.php';
$username = $_SESSION["useruid"];

if(isset($_POST['submit']) && isset($_FILES['image'])){

    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";


    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];


    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: bitcoin_deposit-confirm.php?error=$em");
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);


                //Insert into Database
                $sql = "INSERT INTO payment_proof(username, image_url) VALUES('$username', '$new_img_name')";
                mysqli_query($conn, $sql);
                header("Location:deposit-history.php");
                require 'btc-deposit-mailer.php';

            }else {
                $em = "You can't upload files of this type";
                header("Location: bitcoin_deposit-confirm.php?error=$em");
            }
        }
    }else {
        $em = "Unknown error occurred!";
        header("Location: bitcoin-deposit-confirm.php?error=$em");
    }
}else{
    echo "no file was chosen o";
}



?>