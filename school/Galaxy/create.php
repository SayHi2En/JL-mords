<?php
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row mt-5 d-flex justify-content-center">
			<div class="col-sm-5">
				<div class="card p-4 bg-info">
					<center><h1>BUYERS INFORMATION</h1></center>
					<form action="" method="POST">
						<div class="form-group">
							<label for="fullname"><div>FullName</div></label>
							<input type="text" required name="fullname" class="form-control" id="fullname">
						</div>
						<div class="form-group">
							<label for="age"><div>Contact #</div></label>
							<input type="number" required name="age" class="form-control" id="age">
						</div>
						<div class="form-group">
							<label for="car">Cars Brands</label>
							<select name="course" required class="form-control">
								<option value=""></option>
								<option value="Lamborginie">Lamborginie</option>
								<option value="Ferrari">Ferrari</option>
							</select>
						</div>
						<div class="form-group">
							<label for="model">Models</label>
							<input type="text" required name="model" class="form-control" id="model">

						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" required name="address" class="form-control" id="address">
						</div>
						<div class="form-group">
							<label for="bday">Date of Purchase</label>
							<input type="date" required name="bday" class="form-control" id="bday">
						</div>
						<div class="form-group">
							<label for="dateofrelease">Date of Release</label>
							<input type="date" required name="dateofrelease"class="form-control" id="dateofrelease">
						</div>
						<button type="submit" class="btn btn-primary mt-4">Save</button>
						<a href="index.php" class= "btn btn-primary mt-4">Return</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$fullname = $_POST['fullname'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		$model = $_POST['model'];
		$address = $_POST['address'];
		$bday = $_POST['bday'];
		$dateofrelease = $_POST['dateofrelease'];


		$sqlquery = "INSERT INTO cardealler VALUES(null,'$fullname',$age,'$course','$model','$address', '$bday','$dateofrelease')";

		if (mysqli_query($conn, $sqlquery)) {
			echo "<center>Successfully Saved!</center>";
		}else{
			echo mysqli_error($conn);
		}
	}
?>

