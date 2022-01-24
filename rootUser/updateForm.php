<?php
require_once '../config/connect.php';
$feedback_id = $_GET['id'];
$userid = mysqli_query($connect, "SELECT * FROM `feedback` WHERE `id` = '$feedback_id'");
$userid = mysqli_fetch_assoc($userid);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body>
    <div tabindex="-1" role="dialog" id="edit">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">изменить</h5>
                </div>
                <div class="modal-body">
                    <form action="../rootUser/crud/update.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $userid['id'] ?>">
                        </div>
                        <div class="form-group">
                            <small>Email</small>
                            <input type="email" class="form-control" name="email" value="<?= $userid['email'] ?>" placeholder="email">
                        </div>
                        <div class="form-group">
                            <small>Phone</small>
                            <input type="number" class="form-control" name="phone" value="<?= $userid['phone'] ?>" placeholder="phone">
                        </div>
                        <div class="form-group">
                            <small>Name</small>
                            <input type="text" class="form-control" name="name" value="<?= $userid['name'] ?>" placeholder="Name">
                        </div>
                </div>
                <div class="modal-footer">
                    <button href="adminContent.php" class="btn btn-secondary">Закрыть</button>
                    <button type="submit" class="btn btn-primary">изменить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>