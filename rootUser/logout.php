<?
session_start();

unset($_SESSION['userlogin']);
unset($_SESSION['password']);

header('Location: /rootUser/admin.php');
