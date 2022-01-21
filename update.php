<?php
require_once '../php/config/connect.php';
$feedback_id = $_GET['id'];
$user = mysqli_query($connect, "SELECT * FROM `feedback` WHERE `id`='$feedback_id'");
$user = mysqli_fetch_assoc($user);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD приложение на PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body>
    <div tabindex="-1" role="dialog" id="create">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">изменить</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/crud/update.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $feedback_id ?>">
                        </div>
                        <div class="form-group">
                            <small>Email</small>
                            <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" placeholder="email">
                        </div>
                        <div class="form-group">
                            <small>Phone</small>
                            <input type="number" class="form-control" name="phone" value="<?= $user['phone'] ?>" placeholder="phone">
                        </div>
                        <div class="form-group">
                            <small>Name</small>
                            <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>" placeholder="Name">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">изменить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>