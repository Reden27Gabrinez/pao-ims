<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login-system</title>
	<link rel="stylesheet" href="assets/bootstrap/js/bootstrap.js">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<style>
	body {
		background-image: url('assets/bg.png');
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>

<body>
	<div class="shadow container d-flex justify-content-center align-items-center" style="min-height: 100vh">
		<form class="border shadow p-3 rounded" action="class.php" method="post" style="width: 450px;">
			<h1 class="text-center p-3 text-white">LOGIN</h1>

			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?=$_GET['error']?>
				</div>
				<?php } ?>

			<div class="mb-3">
				<div class="form-floating">
					<input type="text" class="form-control" name="username" id="username" placeholder="username">
					<label for="username">User name</label>
				</div>
			</div>
			<div class="mb-3">
				<div class="form-floating">
					<input type="password" name="password" class="form-control" id="password" placeholder="password">
					<label for="password" class="form-label">Password</label>
				</div>
			</div>
			<div class="mb-1">
				<label class="form-label">User Type:</label>
			</div>
			<select class="form-select mb-3" name="role" aria-label="Default select example">
				<option selected value="Admin">Admin</option>
				<option value="Municipality">Municipality</option>
			</select>

			<button type="submit" name="login" class="btn btn-primary float-end">LOGIN</button>
		</form>
	</div>

	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php }else{
	header("Location: index.php");
} ?>