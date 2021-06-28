<?php
session_start();
require_once 'connect.php';
?>


<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Jadłospis</title>
</head>
<style>
	body {
		background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('dieta.jpg');
		min-height: 100%;
		background-position: center;
		background-size: cover;
		color: white;
	}

	.tabele .form-content {
		background-color: #E0E0E0;
		color: black;
		width: 380px;
		padding: 40px;

		margin-top: 10px;
		-webkit-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
		-moz-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
		box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
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

	table {
		border: 1px solid;
		margin-top: 10px;
		margin-left: 10px;
		color: white;
		float: left;
	}

	td {
		border: 1px solid;
		color: white;
		padding: 5px;
	}

	th {
		background-color: #04AA6D;
		border: 1px solid;
		padding: 5px;

	}
</style>

<body>
	<?php
	require_once 'nawigacja.php';
	function wyswietlWszystkieDni()
	{

		$host = "localhost";
		$db_user = "root";
		$db_password = "";
		$db_name = "pomiary";
		$polaczenie = mysqli_connect($host, $db_user, $db_password, $db_name);
		$id_user = $_SESSION['id'];
		$query = "SELECT * FROM obliczane_kalorie WHERE id_user = '$id_user' ORDER BY nr_data";
		$wynikZapytania = $polaczenie->query($query);



		echo '<div class="col-12">';
		echo '<table>';
		echo '<tr><th>' . "Data" . '</th>';
		echo '<th>' . "Kcal" . '</th>';
		echo '<th>' . "Tłuszcze" . '</th>';
		echo '<th>' . "Węglowodany" . '</th>';
		echo '<th>' . "Białko" . '</th></tr>';
		if (mysqli_query($polaczenie, $query)) {
			if ($wynikZapytania->num_rows > 0) {
				while ($row = mysqli_fetch_array($wynikZapytania)) {
					echo '<tr><td>' . $row['nr_data'] . '</td>' . '<td>' .
						$row["kcal"] . '</td>' . '<td>' . " " . $row["tluszcze"] . '</td>' . '<td>' .
						$row["weglowodany"] . '</td>' . '<td>'
						. $row["bialko"] . '</td></tr>';
				}
			}
		}
		echo '</table>';
		echo '</div>';
		$polaczenie->close();
	}
	echo '<section class="tabele">';
	echo '<div class="container">';
	echo '<div class="row">';

	if (isset($_SESSION['zalogowany'])) {
		$pytanie = "SELECT * FROM produkty";
		$res = $polaczenie->query($pytanie);

		echo '<div class="col-12"><h3>Produkty dostępne w bazie:</h3>';
		echo '<table>';
		echo '<tr><th>' . "Nazwa" . '</th>';
		echo '<th>' . "Kcal" . '</th>';
		echo '<th>' . "Tluszcze" . '</th>';
		echo '<th>' . "Węglowodany" . '</th>';
		echo '<th>' . "Białko" . '</th></tr>';
		if (mysqli_query($polaczenie, $pytanie)) {
			while ($row = mysqli_fetch_array($res)) {
				$wynik = '<tr><td>' .
					$row['nazwa'] . '</td>' . '<td>' . $row['kcal'] . '</td>' . '<td>' . " " . $row['tluszcze'] . '</td>' . '<td>' . $row['weglowodany'] . '</td>' . '<td>' . $row['bialko'] . '</td></tr>';
				echo $wynik;
			}
			echo '</table>';
			echo '</div>';
		}


		if (isset($_POST['produkt'])) {
			if (!empty($_POST['poraDnia']) && !empty($_POST['produkt']) && !empty($_POST['nr_data'])) {
				$flag = true;
				$id_user = $_SESSION['id'];
				$produkt = $_POST['produkt'];
				$data = $_POST['nr_data'];
				$selected = $_POST['poraDnia'];
				$zapytanie = "SELECT * FROM produkty WHERE nazwa = '$produkt'";

				$result = $polaczenie->query($zapytanie);

				if (mysqli_query($polaczenie, $zapytanie)) {

					if ($result->num_rows > 0) {

						while ($row = mysqli_fetch_array($result)) {

							$nazwa = $row['nazwa'];
							$kcal = $row['kcal'];
							$tluszcze = $row['tluszcze'];
							$weglowodany = $row['weglowodany'];
							$bialko = $row['bialko'];

							$rezultat = $polaczenie->query("SELECT * FROM obliczane_kalorie WHERE id_user = '$id_user' AND nr_data = '$data'");
							$rezultat2 = $polaczenie->query("SELECT * FROM pora_dnia WHERE id_user = '$id_user' AND nr_data = '$data' AND posilek = '$selected'");
							if (!$rezultat) {
								throw new Exception($polaczenie->error);
							}
							if (!$rezultat2) {
								throw new Exception($polaczenie->error);
							}
							$liczbaWierszy = $rezultat->num_rows;
							$liczbaWierszy2 = $rezultat2->num_rows;
							if ($liczbaWierszy > 0) {
								$polaczenie->query("UPDATE obliczane_kalorie SET kcal = kcal+$kcal, tluszcze = tluszcze+$tluszcze, weglowodany=weglowodany+$weglowodany, bialko=bialko+$bialko WHERE nr_data = '$data' AND id_user = '$id_user'");
							} else {
								$polaczenie->query("INSERT INTO obliczane_kalorie (nr_data, kcal, tluszcze, weglowodany, bialko, id_user) VALUES ('$data', '$kcal', '$tluszcze', '$weglowodany', '$bialko', '$id_user')");
							}

							if ($liczbaWierszy2 > 0) {
								$polaczenie->query("UPDATE pora_dnia SET kcal = kcal+$kcal, tluszcze = tluszcze+$tluszcze, weglowodany=weglowodany+$weglowodany, bialko=bialko+$bialko WHERE nr_data = '$data' AND id_user = '$id_user' AND posilek = '$selected'");
							} else {
								$polaczenie->query("INSERT INTO pora_dnia (nr_data, kcal, tluszcze, weglowodany, bialko, id_user, posilek) VALUES ('$data', '$kcal', '$tluszcze', '$weglowodany', '$bialko', '$id_user', '$selected')");
							}

							$pyt = $polaczenie->query("SELECT * FROM obliczane_kalorie WHERE id_user = '$id_user' AND nr_data = '$data'");
							$pyt2 = $polaczenie->query("SELECT * FROM pora_dnia WHERE nr_data = '$data' AND id_user = '$id_user' ");

							echo '<div class="col-12">';
							echo '<table>';
							echo '<tr><th>' . "Data" . '</th>';
							echo '<th>' . "Kcal" . '</th>';
							echo '<th>' . "Tłuszcze" . '</th>';
							echo '<th>' . "Węglowodany" . '</th>';
							echo '<th>' . "Białko" . '</th></tr>';
							while ($row = mysqli_fetch_array($pyt)) {
								echo '<tr><td>' . $row['nr_data'] . '</td>' . '<td>' .
									$row["kcal"] . '</td>' . '<td>' . " " . $row["tluszcze"] . '</td>' . '<td>' .
									$row["weglowodany"] . '</td>' . '<td>'
									. $row["bialko"] . '</td></tr>';
							}
							echo '</table>';
							echo '</div>';

							echo '<div class="col-12">';
							echo '<table>';
							echo '<tr><th>' . "Pora dnia" . '</th>';
							echo '<th>' . "Kcal" . '</th>';
							echo '<th>' . "Tłuszcze" . '</th>';
							echo '<th>' . "Węglowodany" . '</th>';
							echo '<th>' . "Białko" . '</th></tr>';
							while ($row = mysqli_fetch_array($pyt2)) {
								echo '<tr><td>' . $row['posilek'] . '</td>' . '<td>' .
									$row["kcal"] . '</td>' . '<td>' . " " . $row["tluszcze"] . '</td>' . '<td>' .
									$row["weglowodany"] . '</td>' . '<td>'
									. $row["bialko"] . '</td></tr>';
							}
							echo '</table>';

							echo '</div>';
						}
					} else {
						echo '<script>alert("Brak produktu w bazie")</script>';
					}
				} else {
					echo "Error: " . $zapytanie . "" . mysqli_error($polaczenie);
				}
			} else {
				echo '<script>alert("Wpisz dane całkowicie")</script>';
			}
		}
	} else {
		$flag = false;
		$_SESSION['e_user'] = '<a href="rejestracja.php">Zarejestruj się</a> lub <a href="logowanie.php">zaloguj</a>';
	}
	$polaczenie->close();
	?>

	<div class="col-12">
		<form class="form-content" action="" method="post">
			Posiłek: </br> <select name="poraDnia">
				<option value="" disabled selected>Wybierz porę dnia</option>
				<option value="sniadanie">Śniadanie</option>
				<option value="obiad">Obiad</option>
				<option value="przekaska">Przekąska</option>
				<option value="kolacja">Kolacja</option>
			</select> <br /><br />
			Produkt: <br /> <input type="text" name="produkt" /> <br /><br />
			Data: <br /> <input type="date" name="nr_data" /> <br /><br />
			<input type="submit" name="submit" value="Wstaw produkt do jadłospisu" />
		</form>
	</div>



	<?php
	if (isset($_POST['button1'])) {
		echo wyswietlWszystkieDni();
	}

	?>
	<div class="col-12">
		<div style="margin-left: 25px;">
		<form method="post">
			<input type="submit" name="button1" value="Wyświetl wszystkie dni" />
		</form>
		</div>
	</div>
	<?php
	echo '</div>';
	echo '</div>';
	echo '</section>'; ?>

</body>

</html>