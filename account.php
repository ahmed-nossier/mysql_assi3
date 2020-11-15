<?php
session_start();
if(!isset($_SESSION['email']))
{
header('Location: login.php');
}else if(isset($_SESSION['email'])){
   header('Location: account_info.php');

}




?>