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




function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUsername, usersPassword, Code) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:signup.php.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $code = rand(100000, 999999);

    mysqli_stmt_bind_param($stmt, "ssssi", $name, $email, $username, $hashedpwd, $code);
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
        header("location:dashboard.html");
        exit();
    }
}

function createDeposit($conn, $gateway, $amount){
    $sql = "INSERT INTO history (Gateway, Amount, Timess) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:deposit-form.php?error=stmtfailed");
        exit();
    }

    // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $date = date("d-m-y h:sa");

    mysqli_stmt_bind_param($stmt, "sis", $gateway, $amount, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ('location:anotherthing.php');
    // require 'mailer.php';
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

