<?php
session_start();
require_once 'connect.php';
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Jadłospis</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Planer diety</title>
	<meta name="description" content="Aplikacja webowa wspomagająca kontrolę nad codziennym jadłospisem i wiele innych ciekawych funcjonalności" />
	<meta name="keywords" content="dieta, planer diety, kontrola wagi, jadłospis" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">

	<style>
		.formContent {
			background-color: #E0E0E0;
			color: black;
			width: 370px;
			padding: 40px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 40px;
			-webkit-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
			-moz-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
			box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
		}

		input[type=text],
		input[type=number] {
			width: 300px;
			background-color: #efefef;
			color: #666;
			border: 2px solid #ddd;
			border-radius: 5px;
			font-size: 15px;
			padding: 5px;
			box-sizing: border-box;
			outline: none;
			margin-top: 10px;
		}

		input[type=submit] {
			width: 300px;
			background-color: #36b03c;
			font-size: 15px;
			color: white;
			padding: 10px 5px;
			margin-top: 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #37b93d;
		}
	</style>
</head>

<body>

	<?php require_once 'nawigacja.php'; ?>

	<?php
	if (isset($_SESSION['zalogowany'])) {
		if (isset($_POST['produkt'])) {
			if (!empty($_POST['produkt']) && !empty($_POST['kcal']) && !empty($_POST['tluszcze']) && !empty($_POST['wegle']) && !empty($_POST['bialka'])) {
				$flag = true;
				$id_user = $_SESSION['id'];
				$produkt = $_POST['produkt'];
				$kcal = $_POST['kcal'];
				$tluszcze = $_POST['tluszcze'];
				$wegle = $_POST['wegle'];
				$bialka = $_POST['bialka'];

				if ($_POST['kcal'] > 0) {
					$sumaKalorii = 9 * $_POST['tluszcze'] + 4 * $_POST['wegle'] + 4 * $_POST['bialka'];

					if (round($sumaKalorii) == $_POST['kcal']) {
						$zapytanie = "INSERT INTO produkty (nazwa, kcal, tluszcze, weglowodany, bialko, id_user) VALUES ('$produkt', '$kcal', '$tluszcze', '$wegle', '$bialka', '$id_user')";

						if (mysqli_query($polaczenie, $zapytanie)) {
							echo '<script>alert("Dodano produkt do bazy")</script>';
						} else {
							echo '<script>alert("Wpisz unikalną nazwę")</script>';
							
						}
					} else {
						echo "Blad liczby kalorii lub makroskładników!
						Wzór to: kcal = 9*tluszcze + 4*weglowodany + 4*bialka";
						echo 'Wartość kcal powinna wynosić: ' .round($sumaKalorii);
					}
				}
			} else {
				$flag = false;
				echo '<script>alert("Wpisz dane całkowicie")</script>';
			}
		}
	}
	$polaczenie->close();
	?>

	<div class="formContent">
		<form action="" method="post">
			Produkt: <br /> <input type="text" name="produkt" /> <br /><br />
			Kcal: <br /> <input type="number" min="0" max="" step="0.1" name="kcal"> <br /><br />
			Tłuszcze: <br /> <input type="number" min="0" max="" step="0.1" name="tluszcze" /> <br /><br />
			Węglowodany: <br /> <input type="number" min="0" max="" step="0.1" name="wegle" /> <br /><br />
			Białka: <br /> <input type="number" min="0" max="" step="0.1" name="bialka" /> <br /><br />
			<input type="submit" value="Dodaj produkt do bazy" />
		</form>
	</div>
</body>

</html>