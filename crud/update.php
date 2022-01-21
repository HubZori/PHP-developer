<?php
require_once '../config/connect.php';
$email = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$id = $_POST['id'];


mysqli_query($connect, "UPDATE `feedback` SET `email` = '$email', `phone` = '$phone', `name` = '$name' WHERE `feedback`.`id` = '$id'");
header('Location: /');
