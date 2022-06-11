<?php
echo "How to send to clients email using php.";

$mailto = "gashman000@gmail.com";
$subject = "Abeg enter, On God";
$body = "Hi, if you received this, please help me thank God.";
$header = "From: support@wisetechglobals.com";

if (mail($mailto, $subject, $body, $header)){
    echo "SENT";
}else{
    echo "NOT SENT";
};
