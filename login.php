<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>A Macska Király - Bejelentkezés</title>
	<!-- Stíluslapra történő hivatkozás -->
	<link rel="stylesheet" type="text/css" href="regisztráció.css">
</head>
<body>
	<div class="header">
		<h2>Bejelentkezés</h2>
	</div>
	<!-- Form létrehozása -->
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<!-- Felhasználónév mező -->
			<label>Felhasználónév</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<!-- Jelszó mező -->
			<label>Jelszó</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<!-- Elküldés -->
			<button type="submit" class="btn" name="login_user">Bejelentkezés</button>
		</div>
		<p>
			Még nincs fiókja? <a href="register.php">Kattitson ide a regisztrációhoz</a>
		</p>
		<!-- Vissza a főöldalra gomb -->
		<p class= fooldalgomb><a href="index.html"> Vissza a főoldalra </a></p>
	</form>


</body>
</html>