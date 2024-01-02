<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "Először be kell jelentkeznie!";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>A Macska Király - Bejelentkezés</title>
	<link rel="stylesheet" type="text/css" href="regisztráció.css">
</head>
<body>
	<div class="header">
		<h2>Sikeres bejelentkezés!</h2>
	</div>
	<div class="content">

		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- Üdvözlőlap -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Üdvözöljük <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">Kijelentkezés</a> </p>
		<?php endif ?>
		<!-- Vissza a főöldalra gomb -->
		<p class= fooldalgomb><a href="index.html"> Vissza a főoldalra </a></p>
	</div>
		
</body>
</html>