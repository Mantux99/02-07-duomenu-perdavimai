<?php
include_once './app/php/php.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	
	<title>Hello, world!</title>
</head>
<body>
	
	<form action="" method="POST" class="container mt-5">
	<label for="vardas">Vardas</label>
		<input type="text" name="name" id="vardas">
		<label for="emailas">El.pastas</label>
		<input type="email" name="email" id="emailas">
		<button type="submit" name="login">siusti</button>
	</form>
	
<table class="table borders">
	<?php foreach ($array as $user): ?> 
	<tr>
		<?php foreach ($user as $info) : ?>
			<td><?php print $info; ?></td>
		<?php endforeach; ?>

	</tr>
		<?php endforeach; ?>
</table>

 	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://kit.fontawesome.com/f41043dc75.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
</body>
</html>