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
            <div class="col-10">

                <div class="tytul">Dieta dr Dąbrowskiej</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/dietadabrowskiej.jpg""/></div>
                </figure>
                <p class="wstep">
                <b>Dieta dr Dąbrowskiej</b> to dwuetapowa oczyszczająca kuracja warzywno-owocowa. Pierwszym etapem jest lecznicza głodówka, która trwa kilka, kilkanaście, a jeśli jest taka potrzeba, nawet kilkadziesiąt dni. Drugim etapem jest zdrowa dieta, której bazę stanowią produkty nisko przetworzone. Dieta opiera się na jedzeniu jedynie owoców i warzyw przez cały okres trwania diety. Po zakończeniu diety nasze menu powinno opierać się jedynie na warzywach, owocach, roślinach strączkowych oraz ziarnach i orzechach.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Zalety diety dr Dąbrowskiej</div>
                <ul>
                <li>Szybka utrata wagi</li>
                <li>Poprawa stanu cery</li>
                <li>Oczyszczenie organizmu z toksyn</li>
                <li> Wzmocnienie odporności </li>
                <li> Pozbycie się dolegliwości ze strony układu pokarmowego </li>

                </ul>
                </p>
                <p class="zakonczenie">
                <div class="tytul">Wady diety dr Dąbrowskiej</div>
                <p>
                <ul>
                <li>Zbyt mała kaloryczność. Całodzienny bilans diety wynoszący 400-600 kcal</li>
                <li>Mała liczba posiłków (3 dziennie)</li>
                <li>Rozregulowanie metabolizmu i spowolnienie tempa przemiany materii</li>
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

