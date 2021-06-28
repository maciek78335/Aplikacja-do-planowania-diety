<?php session_start();
require_once 'nawigacja.php'  ?>
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

                <div class="tytul">Dieta bezjajeczna</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/bezjajek.jpg""/></div>
                </figure>
                <p class="wstep">
                <b>Dieta bezjajeczna</b> natomiast polega na wykluczeniu z jadłospisu zarówno jaj kurzych, jak i kaczych, indyczych czy przepiórczych. Dieta bez jajek to jedna z najbardziej restrykcyjnych diet alergika, ponieważ jajka są wykorzystywane do produkcji ogromnej ilości artykułów spożywczych. Początkowo może się wydawać, że ta alergia pokarmowa wyeliminuje z diety ulubione potrawy i uniemożliwi jedzenie ciasta, pierogów, kotletów mielonych czy panierowanych. Na szczęście istnieje wiele substytutów, które nie wykluczą z diety alergika potraw, do przyrządzenia których jajka były niezbędne.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Produkty zakazane w diecie bezjajecznej</div>
                <ul>
                <li>Jajka, jajecznica </li>
                <li>Ciastka, ciasta</li>
                <li>Batony</li>
                <li>Makarony jajeczne</li>
                <li>Ciastka, ciasta</li>
                <li>Naleśniki</li>
                <li>Kupione kotlety mielone, rybne panierowane kotlety i paluszki</li>
                <li>Gotowe placki ziemniaczane, pyzy i kopytka</li>
                <li>Pieczywo tostowe</li>
                </ul>
                </p>
                <p class="zakonczenie">
                <div class="tytul">Produkty dozwolone w diecie bezjajecznej</div>
                <p>
                <ul>
                <li>Wszystkie świeże owoce i warzywa</li>
                <li>Kiszonki i przetwory warzywno-owocowe</li>
                <li>Drób</li>
                <li>Wieprzowina</li>
                <li>Królik</li>
                <li>Ryby</li>
                <li>Makaron bezjajeczny</li>
                <li>Chleb ryżowy</li>
                <li>Ziarna i orzechy</li>
                </ul>
                </p>
			</div>
			</div>
            </section>
			</div>
			';
			}
            else {
                echo '<script>alert("Zaloguj się, aby móc skorzystać")</script>';
            }

			?>
			</div>
		</article>
	</main>

