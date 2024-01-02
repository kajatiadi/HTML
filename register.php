<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>A Macska Király - Regisztráció</title>
	<link rel="stylesheet" type="text/css" href="regisztráció.css">
</head>
<body>
	<div class="header">
		<h2>Regisztráció</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Felhasználónév</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Jelszó</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Jelszó ismét</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Regisztráció</button>
		</div>
		<p>
			Már regisztrált? <a href="login.php">Kattintson ide a bejelentkezéshez</a>
		</p>
		<!-- Vissza a főöldalra gomb -->
		<p class= fooldalgomb><a href="index.html"> Vissza a főoldalra </a></p>
	</form>
</body>
</html>