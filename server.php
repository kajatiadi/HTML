<?php 
	session_start();

	// változó létrehozása
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// csatlakozás az adatbázishoz
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// Felhasználó regisztrálása
	if (isset($_POST['reg_user'])) {
		// Formról beérkező adatok
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// Minden bemeneti adat helyes-e
		if (empty($username)) { array_push($errors, "Felhasználónév megadása szükséges!"); }
		if (empty($email)) { array_push($errors, "Email cím megadása szükséges!"); }
		if (empty($password_1)) { array_push($errors, "Jelsző megadása szükséges!"); }

		if ($password_1 != $password_2) {
			array_push($errors, "A jelszavak nem egyeznek!");
		}

		// Ha nincs semmi hiba akkor a felhasználót regisztrálja
		if (count($errors) == 0) {
			$password = md5($password_1);// Jelszó titkosítása
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Be lett jelentkeztetve";
			header('location: index.php');
			
		}

	}
 
	// Felhasználó bejelentkeztetése
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Bejelentkezett";
				header('location: index.html');
			}else {
				array_push($errors, "Rossz jelszó és felhasználónév kombináció!");
			}
		}
		
	}
	 
	  

?>