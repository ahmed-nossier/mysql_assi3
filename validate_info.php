<?php
session_start();

function cleanData($input)
{
    $input=htmlspecialchars($input);
        $input=trim($input);

    return $input;
}
$is_right_data=true;
$email=cleanData($_POST['email']);
$pwd=cleanData($_POST['pwd']);
$userName=cleanData($_POST['userName']);
$phone=cleanData($_POST['phone']);
$fcurl=cleanData($_POST['fcurl']);
$insurl=cleanData($_POST['insurl']);
$twurl=cleanData($_POST['twurl']);
if(strlen($userName)<=8){
echo "user name  must be longer than 8 characters </br>";
    $is_right_data=false;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email is not valid </br>";
    $is_right_data=false;
}
if(strlen($pwd)<=8){
echo "password  must be longer than 8 characters </br>";
    $is_right_data=false;
}
if(strlen($phone)<14){
echo "phone number  must be longer than 14 characters </br>";
    $is_right_data=false;
}
if(!filter_var($insurl,FILTER_VALIDATE_URL)){
echo "instagram account is not valid </br>";
    $is_right_data=false;
}

if(!filter_var($twurl,FILTER_VALIDATE_URL)){
echo "twitter account is not valid </br>";
    $is_right_data=false;
}

if(!filter_var($fcurl,FILTER_VALIDATE_URL)){
echo "facebook account is not valid </br>";
    $is_right_data=false;
}
if ($is_right_data) {
    //save to session
   
    $_SESSION['email']=$email;
    $_SESSION['password']=$pwd;
  $_SESSION['userName']=$userName;
  $_SESSION['phone']=$phone;
  $_SESSION['fcurl']=$fcurl;
  $_SESSION['insurl']=$insurl;
  $_SESSION['twurl']=$twurl;

    header('Location: home.php');
}

?>