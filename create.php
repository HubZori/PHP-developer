<?php
require_once '../PHP-developer/config/connect.php';
$email = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];

mysqli_query($connect, "INSERT INTO `feedback` (`id`, `email`, `phone`, `name`) VALUES (NULL, '$email', '$phone', '$name')");
header('Location: /index.php');
