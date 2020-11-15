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
$password=cleanData($_POST['password']);

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email is not valid </br>";
    $is_right_data=false;
}
if(strlen($password)<=8){
echo "password  must be longer than 8 characters </br>";
    $is_right_data=false;
}

if ($is_right_data) {
    //save to session
   
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;

    header('Location: home.php');
}









?>