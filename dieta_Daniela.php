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
                <div class="tytul">Dieta Daniela</div>
                <div class="col-sm-6 ml-auto mr-auto" ><figure>
                <img class="img-thumbnail" src="img/diety/daniel.jpg"/></div>
                </figure>
                <p class="wstep">
                <b>Dieta Daniela</b>, znana także jako post Daniela, to dieta odchudzająca, oczyszczająca, a także lecznicza, która bazuje na wybranych warzywach i owocach.
                Dieta Daniela jest maksymalnie 40-dniową kontrolowaną półgłodówką, w trakcie której dzienna dawka energetyczna posiłków nie powinna przekraczać 600 kcal.
                Pobudzony organizm w pierwszej kolejności zaczyna usuwać tkankę tłuszczową, co powoduje chudnięcie, a potem chore, zniszczone tkanki, toksyny i metale ciężkie. Dzięki temu powraca do stanu równowagi i zaczyna sprawniej funkcjonować.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Co można jeść, a co jest niewskazane na diecie Kwaśniewskiego?</div>
                <b>Produkty zalecane</b>
                <ul>
                <li> Marchew</li>
                <li> Buraki </li>
                <li> Seler</li>
                <li> Rzodkiew</li>
                <li> Pietruszka</li>
                <li> Jabłka</li>
                <li> Grejpfruty</li>
                </ul>

                <b>Produkty niezalecane</b>
                <ul>
                <li>Mięso</li>
                <li>Chleb</li>
                <li>Mleko</li>
                <li>Tłuszcze</li>
                <li> Zboża</li>
                <li> Słodycze</li>
                <li>Rośliny strączkowe</li>
                <li> Ziemniaki</li>
                </ul>

                </p>
                <p class="zakonczenie">
                <div class="tytul">Zalety i wady diety Kwaśniewskiego</div>

                <b>Zalety: </b>
                <ul>
                <li>Szybka redukcja masy ciała </li>
                <li>Poprawa stanu zdrowia (jeśli dietę prowadzi się max 7 dni)</li>
                </ul>
                <b>Wady:</b>
                <ul>
                <li>Biegunki z powodu nadmiaru błonnika
                </li>
                <li> Niedobór witaminy B i wapnia</li>
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

