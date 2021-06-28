<?php session_start();
require_once 'nawigacja.php' ?>
<style>
    .opis {
        color: white;
        font-size:18px;
    }
    .tytul {
        font-size:30px;
        text-align: center;
    }
    .wstep {
        text-align: justify;
    }
</style>
<main>
	<article>

		<?php
			if (isset($_SESSION['zalogowany'])) {
				echo '
			<div class="row">
			<div class="col-sm-2 bg-light"  style="height:400px;">' .
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

            <section class="opis">

			<div class="container">
            <div class="col-sm-10">
                <div class="tytul">Dieta jabłkowa</div>
                <div class="col-sm-6 ml-auto mr-auto" ><figure>
                <img class="img-thumbnail" src="img/diety/jablka.jpg"/></div>
                </figure>
                <p class="wstep">
                <b>Dieta jabłkowa</b> to nie tylko dieta odchudzająca, lecz także dieta oczyszczająca. Jej głównym składnikiem są jabłka, które zawierają najsilniejsze przeciwutleniacze.
                Dieta jabłkowa występuje w dwóch wariantach. Ten mniej rygorystyczny zakłada, że jabłka są tylko dodatkiem do zbilansowanych posiłków (max 1000 kcal dziennie). W tym bardziej rygorystycznym jabłka stanowią jedyny składnik posiłku(ten wariant należy stosować nie dłużej niż 7 dni).
                </p>

                <p class="zakonczenie">
                <div class="tytul">Zalety oraz przeciwwskazania do diety jabłkowej</div>

                <b>Zalety: </b>
                <ul>
                <li>Oczyszczenie organizmu z toksyn</li>
                <li>usprawnienie perystaltyki jelit</li>
                <li>zmniejszenie masy ciała</li>
                </ul>
                <b>Przeciwwskazania dla osób mających:</b>
                <ul>
                <li>Zgagę
                </li>
                <li> Chorobę wrzodową</li>
                <li> Zespół jelita drażliwego</li>
                <li> Dolegliwości dyspeptyczne</li>
                </ul>
                </p>
			</div>
			</div>
            </section>
			</div>
			';
			} else {
                echo '<script>alert("Zaloguj się, aby móc skorzystać")</script>';
            }

			?>
			</div>
		</article>
	</main>

