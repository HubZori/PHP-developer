<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$get_id = $_GET['id'];


if (isset($_POST['add'])) {
    $sql = ("INSERT INTO users_1 (name, email) VALUES (?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email]);
    if ($query) {
        header("Location: ". $_SERVER['HTTP_REFERER']);
    }
}