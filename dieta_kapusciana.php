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
			<div class="row"">
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

                <div class="tytul">Dieta kapuściana</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/kapusciana.jpg""/></div>
                </figure>
                <p class="wstep">
                <b>Dieta kapuściana</b> to dieta monoskładnikowa, niewątpliwie bardzo monotonna, ale za to mało restrykcyjna. Co prawda nie można w czasie jej trwania spożywać słodyczy, przekąsek, alkoholu, węglowodanów i potraw tłustych. Zupa kapuściana, która jest jej podstawą, obfituje w błonnik i składniki odżywcze. Trwa 7 dni, a jej podstawowym składnikiem jest biała lub włoska kapusta. Podstawą diety jest codzienne spożywanie zupy kapuścianej, przygotowanej z następujących składników:
                <ul><li>główka kapusty włoskiej lub białej</li>
                <li>6 cebul </li>
                <li>2 zielone papryki (ewentualnie jedna czerwona, jedna żółta)</li>
                <li>pęczek selera naciowego</li>
                <li>6 świeżych pomidorów (ewentualnie pomidory z puszki)</li>
                <li>przyprawy: pieprz, czosnek i chilli</li>
                </ul>
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Zalety diety kapuścianej</div>

                <ul><li>
                Krótki czas trwania</li>
                <li>Podstawa, którą stanowi zupa, jest łatwa do przygotowania i niedroga</li>
                <li>Nie wymaga zbyt dużego zaangażowania czasowego ze względu na ograniczoną ilość dozwolonych produktów</li></ul>

                </p>
                <p class="zakonczenie">
                <div class="tytul">Wady diety kapuścianej</div>
                <p>
                <ul><li>Brak jakichkolwiek podstaw naukowych takiego modelu żywienia, dieta kapuściana nie uczy właściwych, zdrowych nawyków żywieniowych </li>
                <li>Ze względu na bardzo duży deficyt kaloryczny następuje znaczne zmniejszenie podstawowej przemiany materii. W związku z tym po zaprzestaniu jej stosowania bardzo prawdopodobny jest szybki efekt jo-jo</li>
                <li>Dieta niezbilansowana pod względem podstawowych składników odżywczych (białka, tłuszczu i węglowodanów)</li>
                <li>Niedostateczna podaż składników odżywczych może być przyczyną bólu głowy, ogólnego osłabienia i rozdrażnienia</li>
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

