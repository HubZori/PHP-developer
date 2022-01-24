<?php

$userlogin = "root";
$password = "123123";

if ($userlogin === $_POST['userlogin'] && $password === $_POST['password']) {
    session_start();
    $_SESSION["userlogin"] = $_POST['userlogin'];
    $_SESSION["password"] = $_POST['password'];
    header('Location: adminContent.php');
} else {
    echo "bad";
}
