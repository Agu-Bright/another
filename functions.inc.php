<?php

function emptyInputSignup($name, $email, $username, $pwd, $repwd){
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($repwd)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}




function invalidUid($username){
    $result;
    if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidamount($amount){
    $result;
    if (!is_numeric($amount)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}




function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}




function pwdMatch($pwd, $repwd){
    $result;
    if ($pwd !== $repwd) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}




function createUser($conn, $name, $lastname, $username, $email, $country, $mobile, $pwd){
    $sql = "INSERT INTO users (usersName, lastname, usersUsername, usersEmail,  country, mobile, usersPassword, Code, referral_code, refferal_bonus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:signup.php.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $code = rand(100000, 999999);
    $referral_code = strtoupper(bin2hex(random_bytes(4)));
    
    mysqli_stmt_bind_param($stmt, "sssssisis", $name, $lastname, $username, $email, $country, $mobile, $hashedpwd, $code, $referral_code);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:confirm.php');
    require 'mailer.inc.php';
    exit();


}


function emptyInputLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
} 

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location:login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPassword"];
    $checkpwd = password_verify($pwd, $pwdHashed);

    if($checkpwd === false){
        header("location:login.php?error=wronglogin");
        exit();
    }elseif($checkpwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUsername"];
        header("location:dashboard.php");
        exit();
    }
}

// function createDeposit($conn, $gateway, $amount){
//     $sql = "INSERT INTO history (Gateway, Amount, Timess) VALUES (?, ?, ?)";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("Location:deposit-form.php?error=stmtfailed");
//         exit();
//     }

//     // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
//     $date = date("d-m-y h:sa");

//     mysqli_stmt_bind_param($stmt, "sis", $gateway, $amount, $date);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     header ('location:anotherthing.php');
//     // require 'mailer.php';
//     exit();


// }






function createethDeposit($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO eth_history (username, Gateway, Amount, Timess) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y");

    mysqli_stmt_bind_param($stmt, "ssis", $username, $gateway, $amount, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:eth-deposit.review.php');
    // require 'mailer.php';
    exit();


}

function createusdtDeposit($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO usdt_histroy (username, Gateway, Amount, Timess) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y");

    mysqli_stmt_bind_param($stmt, "ssis", $username, $gateway, $amount, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:usdt-deposit.review.php');
    // require 'mailer.php';
    exit();


}

function createbitcoinDeposit($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO history (username, Gateway, Amount, Timess) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y");

    mysqli_stmt_bind_param($stmt, "ssis", $username, $gateway, $amount, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:bitcoin-deposit.review.php');
    //require 'mailer.php';
    exit();


}

function createProfile($conn, $name, $username, $email, $country, $mobile, $state, $city, $address, $zip, $btc, $usdt, $eth){
    $sql = "INSERT INTO profiles (fullname, username, email, country, mobile, states, city, addres, zip, btc, usdt, eth) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:signup.php.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    // $code = rand(100000, 999999);

    mysqli_stmt_bind_param($stmt, "ssssisssisss", $name, $username, $email, $country, $mobile, $state, $city, $address, $zip, $btc, $usdt, $eth);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:dashboard.html');
    require 'mailer.php';
    exit();


}


function emptyInputConfirm($username){
    $result;
    if (empty($username)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
} 


function codematch($username, $transaction){
    $result;
    if ($username !== $transaction) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;

}


function updateReferral(){
    $query = "SELECT * FROM `users` WHERE `referral_code` = '$_POST[referral]'";
    $result = mysqli_query($GLOBALS['conn'], $query);
    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch = mysqli_fetch_assoc($result);
            $bonus = $result_fetch['referral_bonus']+10;
            $update_query = "UPDATE `users` SET `refferal_bonus` = '$bonus' WHERE `usersEmail` = '$result_fetch[usersEmail]'";
            if(!mysqli_query($GLOBALS['conn'], $update_query)){
                echo "
                    <script>
                        alert('Cannot run query');
                        window.location.href='signup.php');
                    </script>
                ";
                exit();
            }
        }else{
            echo "
            <script>
                alert('Invalid Referral Code');
                window.location.href='signup.php');
            </script>
            ";
            exit();
        }
    }else{
        echo "
        <script>
            alert('Cannot Process');
            window.location.href='signup.php');
        </script>
        ";
        exit();
    }
}

function childreninvestment($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO investments (username, Gateway, Amount, Earnings) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    $date = date("d-m-y");
    $percentageincrease = 2;
    $startday = new DateTime(date("Y/m/d"));
    $today = new DateTime();
    $days  = $today->diff($startday)->format('%a');
    $enddate = Date('Y/m/d', strtotime('+3 days'));
    $percentageincrease = 2;
    $percentage= ($amount / 100) * $percentageincrease;
    $value = $amount + $days*$percentage;

    mysqli_stmt_bind_param($stmt, "ssii", $username, $gateway, $amount, $value);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:investment-history.php');
    // require 'mailer.php';
    exit();


}

function shareholdersinvestment($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO investments (username, Gateway, Amount) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y");
    $percentageincrease = 6;
    $startday = new DateTime(date("Y/m/d"));
    $today = new DateTime();
    $days  = $today->diff($startday)->format('%a');
    $enddate = Date('Y/m/d', strtotime('+3 days'));
    $percentageincrease = 2;
    $percentage= ($amount / 100) * $percentageincrease;
    $value = $amount + $days*$percentage;

    mysqli_stmt_bind_param($stmt, "ssi", $username, $gateway, $amount);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:investment-history.php');
    // require 'mailer.php';
    exit();


}

function diamondinvestment($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO investments (username, Gateway, Amount) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y");
    $percentageincrease = 4;
    $startday = new DateTime(date("Y/m/d"));
    $today = new DateTime();
    $days  = $today->diff($startday)->format('%a');
    $enddate = Date('Y/m/d', strtotime('+3 days'));
    $percentageincrease = 2;
    $percentage= ($amount / 100) * $percentageincrease;
    $value = $amount + $days*$percentage;

    mysqli_stmt_bind_param($stmt, "ssi", $username, $gateway, $amount);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:investment-history.php');
    // require 'mailer.php';
    exit();


}

function anniversaryinvestment($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO investments (username, Gateway, Amount) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y");
    $percentageincrease = 10;
    $startday = new DateTime(date("Y/m/d"));
    $today = new DateTime();
    $days  = $today->diff($startday)->format('%a');
    $enddate = Date('Y/m/d', strtotime('+3 days'));
    $percentageincrease = 2;
    $percentage= ($amount / 100) * $percentageincrease;
    $value = $amount + $days*$percentage;

    mysqli_stmt_bind_param($stmt, "ssi", $username, $gateway, $amount);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:investment-history.php');
    // require 'mailer.php';
    exit();


}

function basicinvestment($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO investments (username, Gateway, Amount) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y");
    $percentageincrease = 3;
    $startday = new DateTime(date("Y/m/d"));
    $today = new DateTime();
    $days  = $today->diff($startday)->format('%a');
    $enddate = Date('Y/m/d', strtotime('+3 days'));
    $percentageincrease = 2;
    $percentage= ($amount / 100) * $percentageincrease;
    $value = $amount + $days*$percentage;

    mysqli_stmt_bind_param($stmt, "ssi", $username, $gateway, $amount);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:investment-history.php');
    // require 'mailer.php';
    exit();


}

function vipinvestment($conn, $username, $gateway, $amount){
    $sql = "INSERT INTO investments (username, Gateway, Amount) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y");
    $percentageincrease = 5;
    $startday = new DateTime(date("Y/m/d"));
    $today = new DateTime();
    $days  = $today->diff($startday)->format('%a');
    $enddate = Date('Y/m/d', strtotime('+3 days'));
    $percentageincrease = 2;
    $percentage= ($amount / 100) * $percentageincrease;
    $value = $amount + $days*$percentage;

    mysqli_stmt_bind_param($stmt, "ssi", $username, $gateway, $amount);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:investment-history.php');
    // require 'mailer.php';
    exit();


}



