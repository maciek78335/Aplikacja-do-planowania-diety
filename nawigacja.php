<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="script.js"></script>


