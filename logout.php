<?php
session_start();

unset($_SESSION['email']);
//destroy session
session_destroy();
header('Location: login.php');
?>