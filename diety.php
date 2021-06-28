<?php
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

				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" >Eliminacyjne</a>
				<div class="dropdown-menu">
                        	<a class="dropdown-item" href="dieta_bezgluten.php">dieta bezglutenowa</a>

                        	<a class="dropdown-item" href="dieta_bezmleczna.php">dieta bezmleczna</a>
							<a class="dropdown-item" href="dieta_bezlaktozowa.php">dieta bezlaktozowa</a>
							<a class="dropdown-item" href="dieta_bezjajeczna.php">dieta bezjajeczna</a>
				</div>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" >Monoskładnikowe</a>
				<div class="dropdown-menu">
                        	<a class="dropdown-item" href="dieta_kapusciana.php">dieta kapuściana</a>

                        	<a class="dropdown-item" href="dieta_jablkowa.php">dieta jabłkowa</a>
							<a class="dropdown-item" href="dieta_grejpfrutowa.php">dieta grejpfrutowa</a>
				</div>
				</li>
				<li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Białkowe</a>
				<div class="dropdown-menu">
                        	<a class="dropdown-item" href="dieta_Dukana.php">dieta Dukana</a>
				</div>
				</li>
				<li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" >Wysokotłuszczowe</a>
				<div class="dropdown-menu">
                        	<a class="dropdown-item" href="dieta_Atkinsa.php">dieta Atkinsa</a>

                        	<a class="dropdown-item" href="dieta_ketogeniczna.php">dieta ketogeniczna</a>
							<a class="dropdown-item" href="dieta_Kwasniewskiego.php">Dieta Kwaśniewskiego</a>
				</div>
				</li>
				<li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" >Warzywno-owocowe</a>
				<div class="dropdown-menu">
                        	<a class="dropdown-item" href="dieta_dabrowskiej.php">dieta dr Dąbrowskiej</a>

                        	<a class="dropdown-item" href="dieta_Daniela.php">dieta Daniela</a>
				</div>
				</li>
				<li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" >Rozdzielne</a>
				<div class="dropdown-menu">
                        	<a class="dropdown-item" href="dieta_Haya.php">dieta Haya</a>

				</div>
				</li>
				<li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" >Wykluczające produkty pochodzenia zwierzęcego </a>
				<div class="dropdown-menu">
                        	<a class="dropdown-item" href="dieta_weganska.php">dieta wegańska</a>

                        	<a class="dropdown-item" href="dieta_wegetarianska.php">dieta wegetariańska</a>
				</div>
				</li>
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
		<section>

			<?php
			if (isset($_SESSION['zalogowany'])) {
				echo '
			<div class="row">
			<div class="col-sm-2 bg-light" style="height:400px;">' .
					'<nav class ="navbar-fixed-top"  style="padding-top:5px;">' . '<i style="font-size:24px; margin-right:3px; color:black;" class="fas">&#xf007;</i>' . $_SESSION['user'] .
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

			<div class="col-10">
			<div class="container">

			</div>
			</div>
			</div>
			';
			}

			?>

			</div>
		</section>
	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="script.js"></script>

</body>

</html>