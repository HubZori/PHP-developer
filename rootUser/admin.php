<?php
session_start();
$userlogin = "root";
$password = "123123";

if ($_SESSION["userlogin"] === $userlogin && $_SESSION["password"] === $password) {
    header('Location: adminContent.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<div class="container">
    <div tabindex="-1" role="dialog" id="createe">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5>Admin</h5>
                </div>
                <div class="modal-body">
                    <form action="/rootUser/login.php" method="post">
                        <div class="mb-3">
                            <label for="var-title" class="form-label">User</label>
                            <input type="text" name="userlogin" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="var-title" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="var-title">
                        </div>
                        <button type="submit" class="btn btn-primary">Войти как Админ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>