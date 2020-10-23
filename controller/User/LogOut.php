<?php
session_start();
unset($_SESSION['user']);
session_unset();
session_destroy();
$_SESSION = array();
header('Location: login.php');
echo '<script>document.location.replace("http://localhost/pointage/login.php");</script>';