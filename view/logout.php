<?php
session_start();
ob_start();
if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
    unset($_SESSION['user']);
}
if(isset($_SESSION['pass'])&&($_SESSION['pass']!="")){
    unset($_SESSION['pass']);
}
if(isset($_SESSION['giohangsach'])&&($_SESSION['giohangsach']!="")){
    unset($_SESSION['giohangsach']);
}

header('location: index.php');
?>