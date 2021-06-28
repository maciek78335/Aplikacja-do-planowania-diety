<?php session_start();
require_once 'connect.php';
?>

<?php require_once 'nawigacja.php' ?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Cele</title>


	<style>
		.formContent {
			background-color: #E0E0E0;
			color: black;
			width: 370px;
			margin-left: auto;
			margin-right: auto;
			padding: 40px;
			margin-top: 20px;
			-webkit-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
			-moz-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
			box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
		}

		.tabele table {
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
		}

		.tabele h3 {
			text-align: center;
		}

		input[type=text],
		input[type=date] {
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

		td {
			border: 1px solid;
			color: white;
			padding:5px;
		}

		th {
			background-color: #04AA6D;
			border: 1px solid;
			padding:10px;

		}
	</style>
</head>

<body>
	<?php
	echo '<section class="tabele">';
	echo '<div class="container">';
	echo '<div class="row">';
	if (isset($_SESSION['zalogowany'])) {
		$zapytanie = "SELECT * FROM cele";
		$wynikzapytania = $polaczenie->query($zapytanie);

		echo '<div class="col-sm-6">';
		echo '<h3>Cele:</h3>';
		echo '<table>';
		echo '<tr><th>' . "Cel" . '</th>';
		echo '<th>' . "Data osiągnięcia" . '</th>';

		if (mysqli_query($polaczenie, $zapytanie)) {
			while ($row = mysqli_fetch_array($wynikzapytania)) {
				$wynik = '<tr><td>' .
					$row['tresc'] . '</td>' . '<td>' . $row['data_nr'] . '</td></tr>';
				echo $wynik;
			}
		}

		if (isset($_POST['cel'])) {
			if (!empty($_POST['cel']) && !empty($_POST['koniec'])) {
				$flaga = true;
				$idUsera = $_SESSION['id'];
				$cel =  mysqli_real_escape_string($polaczenie, $_REQUEST['cel']);
				$data =  mysqli_real_escape_string($polaczenie, $_REQUEST['koniec']);
				$ktoryUzytkownik = "SELECT 'tresc', 'data_nr' FROM cele WHERE id_user = $idUsera";


				$dodawaneCele = "INSERT INTO cele(`tresc`, `data_nr`, `id_user`) VALUES ('$cel', '$data', $idUsera)";

				if (mysqli_query($polaczenie, $dodawaneCele)) {
					$zapytanie = "SELECT * FROM cele ORDER BY id DESC LIMIT 1";
					$wynikzapytania = $polaczenie->query($zapytanie);

					while ($row = mysqli_fetch_array($wynikzapytania)) {
						echo '<tr><td>' .
							$row['tresc'] . '</td>' . '<td>' . $row['data_nr'] . '</td></tr>';
					}
					echo '</table>';
					echo '</div>';
				} else {
					echo "Error: " . mysqli_error($polaczenie);
				}

				$polaczenie->close();
			}
		}
	}

	?>

	<div class="col-sm-6">
		<div class="formContent">
		<form action="" method="post">
			Cel do osiągnięcia: <br /> <input type="text" name="cel" /> <br /><br />
			Data zakończenia: <br /> <input type="date" name="koniec"> <br /><br />
			<input type="submit" value="Dodaj cel" />
		</form>
	</div>
	</div>
	<?php echo '</div>';
	echo '</div>';
	echo '</section>'; ?>
</body>

</html>