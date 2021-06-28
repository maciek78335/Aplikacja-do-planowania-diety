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
                <div class="tytul">Dieta wegetariańska</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/wegetarianska.jpg""/></div>
                </figure>
                <p class="wstep">
                <b>Wegetarianizm</b> to sposób odżywiania. Opiera się na wykluczeniu z diety produktów mięsnych, często również ryb i owoców morza. Można za to spożywać produkty odzwierzęce: mleko, masło oraz jajka. Podstawę jadłospisu powinny stanowić produkty zbożowe pełnoziarniste, warzywa, owoce, nasiona roślin strączkowych (soja, soczewica, ciecierzyca, groch, bób, fasola), tłuszcze roślinne i nasiona oleiste (orzechy, pestki dyni i słonecznika).
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Zalety diety wegetariańskiej</div>
                <p> <b>Zalety:</b>
                <ul>
                <li>Zmniejsza ryzyko wystąpienia otyłości</li>
                <li>Zmniejsza ryzyko choroby niedokrwiennej serca</li>
                <li>Zmniejsza ryzyko cukrzycy typu II</li>
                <li>Zmniejsza ryzyko kamicy żółciowej i nerkowej</li>
                </ul></p>
                </p>
                <p class="zakonczenie">
                <div class="tytul">Wady diety wegetariańskiej</div>
                <p> <b>Wady:</b>
                <ul>
                <li>Zbyt niska podaż energii</li>
                <li>Niedobór B12 i D</li>
                <li>Niska wartość biologiczna spożywanego białka</li>
                <li>Mała dostępność naturalnych składników mineralnych, np. żelaza lub wapnia</li>
                <li>Zwiększa ryzyko pojawienia się osteoporozy</li>

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

