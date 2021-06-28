<?php

session_start();

if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
	header('Location: index.php');
	exit();
}

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Logowanie</title>


	<style>
		body {
			/* Background pattern from subtlepatterns.com */
			/* background-image: url("bush.png");
			font-size: 20px; */
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('dieta.jpg');
			min-height: 100%;
			background-position: center;
			background-size: cover;
			color: white;
		}

		.formContent {
			background-color: #E0E0E0;
			color: black;
			width: 400px;
			padding: 50px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 100px;
			-webkit-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
			-moz-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
			box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
		}

		input[type=text],
		input[type=password] {
			width: 300px;
			background-color: #efefef;
			color: #666;
			border: 2px solid #ddd;
			border-radius: 5px;
			font-size: 20px;
			padding: 10px;
			box-sizing: border-box;
			outline: none;
			margin-top: 10px;
		}

		input[type=submit] {
			width: 300px;
			background-color: #36b03c;
			font-size: 20px;
			color: white;
			padding: 15px 10px;
			margin-top: 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			letter-spacing: 2px;
			outline: none;
		}

		input[type=submit]:hover {
			background-color: #37b93d;
		}
	</style>
</head>

<body>
<?php require_once 'nawigacja.php' ?>

	<main>
		<section>
			<div class="formContent">
				<form action="zaloguj.php" method="post">
					Login: <br /> <input type="text" placeholder="login" name="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" /> <br />
					Hasło: <br /> <input type="password" placeholder="haslo" name="haslo" onfocus="this.placeholder=''" onblur="this.placeholder='haslo'" /> <br /><br />
					<input type="submit" value="Zaloguj się" />
					<?php
					if (isset($_SESSION['blad'])) {
						echo '<div style="margin-top:3px; text-align:center;" >' . $_SESSION['blad'] . '</div>';
						unset($_SESSION['blad']);
					}

					?>
				</form>
				<div class="brak_konta" ><a style="text-decoration:none; color:black; text-align:center;font-size:20px;" href="rejestracja.php">Nie masz konta? Zarejestruj się!</a></div>

			</div>
		</section>

	</main>


</body>

</html>