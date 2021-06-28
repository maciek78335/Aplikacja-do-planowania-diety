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
                <div class="tytul">Dieta Kwaśniewskiego</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/dieta-kwasniewskiego.jpg"/></div>
                </figure>
                <p class="wstep">
                <b>Dieta Kwaśniewskiego</b> ma na celu ograniczenie lub niemal całkowitą eliminację produktów węglowodanowych, zastępowanych produktami bogatymi w tłuszcze. Zaleca się, by spożywać przynajmniej trzy tłuste posiłki dziennie. Ilość spożywanych dziennie węglowodanów nie powinna przekraczać 50-70 g. W ciągu dnia powinno się więc spożywać 60% tłuszczy (bardziej tłuszcze pochodzenia zwierzęcego) oraz 20% białek i 20% węglowodanów.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Co można jeść, a co jest niewskazane na diecie Kwaśniewskiego?</div>
                <b>Produkty zalecane</b>
                <ul>
                <li> Tłuste mięsa, wędliny, podroby</li>
                <li> Tłuste ryby </li>
                <li> Kurze jajka (4 lub więcej) </li>
                <li> Sery</li>
                <li> Masło, słonina, olej kokosowy</li>
                <li> Słonecznik, orzechy, migdały</li>
                <li> Mleko</li>
                <li> Majonez, tłuste dodatki</li>
                </ul>

                <b>Produkty niezalecane</b>
                <ul>
                <li>Napoje słodzone</li>
                <li>Cukier, słodycze</li>
                <li> Ciasta </li>
                <li> Dżemy</li>
                <li> Owoce i kompoty</li>
                <li> Pieczywa i wszelkie produkty na bazie mąki</li>
                <li> Ryż</li>
                <li> Ziemniaki</li>
                <li> Warzywa strączkowe</li>
                </ul>

                </p>
                <p class="zakonczenie">
                <div class="tytul">Zalety i wady diety Kwaśniewskiego</div>

                <b>Zalety: </b>
                <ul>
                <li>Szybka redukcja masy ciała </li>
                <li>Uczucie większej sytości po posiłkach </li>
                <li>Poprawa samopoczucia </li>
                </ul>
                <b>Wady:</b>
                <ul>
                <li>Wzrost ryzyka zachorowania na cukrzycę typu 2
                </li>
                <li> Niedobór witamin: B, C, E</li>
                <li>Niski poziom takich składników mineralnych jak cynk, wapń, magnez, potas, żelazo</li>
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

