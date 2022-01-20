<?php

require_once '../php/config/connect.php';
$feedback = mysqli_query($connect, "SELECT * FROM `feedback`");
$feedback = mysqli_fetch_all($feedback);
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
	<div class="container">
		<div class="row">
			<div class="col-12 mt-1">
				<button class="btn btn-success mb-1" data-toggle="modal" data-target="#create"><i>оставить заявку</i></button>
				<table class="table shadow ">
					<thead class="thead-dark">
						<th>ID</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Name</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
						foreach ($feedback as $item) {
						?>
							<tr>
								<td><?= $item[0] ?></td>
								<td><?= $item[1] ?></td>
								<td><?= $item[2] ?></td>
								<td><?= $item[3] ?></td>
								<td>
									<a href="?edit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></a>
									<a href="?delete" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="create">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content shadow">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">добавить</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="crud/create.php" method="post">
						<div class="form-group">
							<small>Email</small>
							<input type="email" class="form-control" name="email" value="" placeholder="email">
						</div>
						<div class="form-group">
							<small>Phone</small>
							<input type="number" class="form-control" name="phone" value="" placeholder="phone">
						</div>
						<div class="form-group">
							<small>Name</small>
							<input type="text" class="form-control" name="name" value="" placeholder="Name">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="submit" class="btn btn-primary" name="add">добавить</button>
					</form>
				</div>

			</div>
		</div>
	</div>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>