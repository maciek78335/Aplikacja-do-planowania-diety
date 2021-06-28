<?php
require_once 'connect.php';
session_start();

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Planer diety</title>
	<meta name="description" content="Aplikacja webowa wspomagająca kontrolę nad codziennym jadłospisem i wiele innych ciekawych funcjonalności" />
	<meta name="keywords" content="dieta, planer diety, kontrola wagi, jadłospis" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<style>
		.tytul {
			color: white;
			font-size:36px;
			text-align: center;
			margin-top: 10px;
			font-family:cursive;
			margin-right: 80px;
		}
		.podtytul {
			margin-top: 10px;
			color: white;
			font-size: 32px;
			text-align: center;
			font-family: Arial, Helvetica, sans-serif;
			margin-bottom: 20px;
			margin-right: 20px;
		}

		.naglowki img:hover {
			transition: transform 1.5s;
			transform: scale(1.1);
		}

		.naglowki figcaption {
			margin-top: 10px;
			color: white;
			font-size: 20px;
			font-weight:lighter;

		}
		.naglowki img{
			width: 300px;
			height: 250px;
			border: 3px black solid;
		}
	</style>
</head>
</head>

<body>

	<header>
	<nav class="navbar navbar-dark bg-info navbar-expand-md">
		<a class="navbar-brand" href="index.php" style="font-size:24px; letter-spacing: 1px;">DietPlanner</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ">
				<li class="nav-item"><a class="nav-link" style="margin-right:5px;" href="diety.php">Diety</a></li>
				<li class="nav-item"><a class="nav-link" style="margin-right:5px;" href="bmi.php">BMI</a></li>
				<li class="nav-item"><a class="nav-link" style="margin-right:5px;" href="treningi.php">Treningi</a></li>
				<li class="nav-item"><a class="nav-link" style="margin-right:5px;" href="motywacja.php">Motywator</a></li>
				<li class="nav-item"><a class="nav-link" style="margin-right:5px;" href="przepisy.php">Przykładowe przepisy</a></li>
			</ul>
			<?php
			if (isset($_SESSION['zalogowany'])) {
				echo '<div class="userlogout" >' . '<a href="logout.php">' . '<i style="font-size:24px" class="fas">&#xf2f5;</i>' . '</a>' . '</div>';
			} else {
				echo '<a class="log" href="logowanie.php"><input type="button"  value="Zaloguj"/></a>';
			}
			?>



		</div>


	</nav>
	</header>
	<main>
		<section class="naglowki">

			<?php
			if (isset($_SESSION['zalogowany'])) {
				echo '
			<div class="row">
			<div class="col-sm-2 bg-light" style="height:400px;">' .
					'<nav class ="navbar-fixed-top"  style="padding-top:5px;">' . '<i style="font-size:24px; margin-right:3px; color:black;" class="fas">&#xf007;</i>' . '<div style="display:inline-block; color:black">' .$_SESSION['user'] . '</div>' .
			'<ul class ="nav navbar-nav">
			<li class ="nav-item">
			<a class ="nav-link" href="pomiary.php"> Pomiary</a>
			</li>
			<li class ="nav-item">
			<a class ="nav-link" href="jadlospis.php"> Dodaj produkt</a>
			</li>
			<li class ="nav-item">
			<a class ="nav-link" href="spis.php">Codzienny jadłospis</a>
			</li>
			<li class ="nav-item">
			<a class ="nav-link" href="cel.php">Cele</a>
			</li>
			<li class ="nav-item">
			<a class ="nav-link" href="treningi.php">Treningi</a>
			</li>
			<li class ="nav-item">
			<a class ="nav-link" href="uploadimages.php"> Sylwetka</a>
			</li>
			</ul>
			</nav>
			</div>


			<div class="container">


				<div class="tytul">Witaj w aplikacji do planowania diety!</div>
				<div class="podtytul">Co możesz tutaj zrobić?</div>
				<div class="row">
				<div class="col-sm-6">
				<figure><a><img src="img/diety/obrazek_dieta.webp" /></a>
                            <figcaption>Poznaj ciekawe diety oraz przepisy</figcaption>
                    </div>
                    </figure>
					<div class="col-sm-6">
					<figure><a><img src="img/diety/jadlospis.webp" /></a>
                            <figcaption>Zarządzaj swoim jadłospisem</figcaption>
                    </div>
                    </figure>
					<div class="col-sm-6">
					<figure><a><img src="img/diety/not_cele.jpg" /></a>
                            <figcaption>Postaw sobie ambitne cele</figcaption>
                    </div>
                    </figure>
					<div class="col-sm-6">
					<figure><a><img src="img/diety/waga.jpg" /></a>
                            <figcaption>Nadzoruj swoją wagę</figcaption>
                    </div>
                    </figure>
			</div>
			</div>
			</div>
			</div>
			';
			} else {
				echo '<div class="container">


				<div class="tytul">Witaj w aplikacji do planowania diety!</div>
				<div class="podtytul">Co możesz tutaj zrobić?</div>
				<div class="row">
				<div class="col-sm-6">
				<figure><a><img src="img/diety/obrazek_dieta.webp" /></a>
                            <figcaption>Poznaj ciekawe diety oraz przepisy</figcaption>
                    </div>
                    </figure>
					<div class="col-sm-6">
					<figure><a><img src="img/diety/jadlospis.webp" /></a>
                            <figcaption>Zarządzaj swoim jadłospisem</figcaption>
                    </div>
                    </figure>
					<div class="col-sm-6">
					<figure><a><img src="img/diety/not_cele.jpg" /></a>
                            <figcaption>Postaw sobie ambitne cele</figcaption>
                    </div>
                    </figure>
					<div class="col-sm-6">
					<figure><a><img src="img/diety/waga.jpg" /></a>
                            <figcaption>Nadzoruj swoją wagę</figcaption>
                    </div>
                    </figure>
			</div>';

			}
			?>
		</section>
	</main>
	<?php require_once 'footer.php'; ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="script.js"></script>

</body>

</html>