<?php
require_once '../../config/connect.php';
$id = $_POST['id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];

mysqli_query($connect, "UPDATE `feedback` SET `email` = '$email', `phone` = '$phone', `name` = '$name' WHERE `feedback`.`id`='$id'");
header('Location: ../adminContent.php');
