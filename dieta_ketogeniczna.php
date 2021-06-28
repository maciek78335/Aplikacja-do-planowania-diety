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

                <div class="tytul">Dieta ketogeniczna</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/keto.jpg"/></div>
                </figure>
                <p class="wstep">
                <b>Dieta ketogeniczna</b> to sposób odżywiania, który zakłada zwiększenie podaży tłuszczów przy jednoczesnym ograniczeniu spożywania węglowodanów. Aby jednak była skuteczna i nie stanowiła zagrożenia dla organizmu, powinna być przeprowadzana wyłącznie pod kontrolą lekarza i dietetyka.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Zasady diety ketogenicznej</div>

                Założenia diety ketogenicznej opierają się w głównej mierze na spożywaniu odpowiedniej ilości tłuszczów, węglowodanów i białek. W standardowej, codziennej diecie większości z nas węglowodany stanowią 50 proc., białka 15 proc., a tłuszcze 35 proc. wszystkich spożytych posiłków.
                W diecie ketogenicznej te proporcje są diametralnie różne. Dieta ketogenna zakłada jedzenie posiłków, w których aż 80-90 proc. stanowią tłuszcze, a pozostałą część, czyli 10-20 proc. węglowodany i białko. U osób niebędących na diecie to węglowodany stanowią główne źródło energii. W organizmach osób na diecie ketogenicznej węglowodanów jest niewiele, więc źródło energii jest niewystarczające. Organizm zaczyna więc szukać alternatywnych źródeł, którym stają się tłuszcze.
                </p>
                <p class="zakonczenie">
                <div class="tytul">Produkty zalecane oraz niewłaściwe w diecie ketogenicznej</div>
                <p>
                Produkty zalecane to:
                <ul>
                <li> Mięso - wołowina, wieprzowina, dziczyzna, drób, jagnięcina</li>
                <li> Ryby </li>
                <li> Jaja </li>
                <li> Naturalne tłuszcze - masło, oliwa z oliwek, olej kokosowy</li>
                <li> Warzywa - szpinak, brokuły, kalafior, jarmuż, szparagi, bakłażan, oliwki, cukinia</li>
                <li> Nabiał - pełnotłuste mleko, śmietana, jogurt</li>
                <li></li>
                </ul>

                Produkty niezalecane to:
                <ul>
                <li>Cukry - słodycze, napoje gazowane, soki słodzone
                </li>
                <li> Ziarna - produkty pszenne, kukurydza, ryż, ciasta, makarony</li>
                <li>skrobia - ziemniaki, banany, płatki owsiane</li>
                <li>Owoce - banany, winogrona, ananas, arbuz, jabłka itd.</li>
                <li>Produkty light</li>
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

