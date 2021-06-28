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
            <div class="col-10">

                <div class="tytul">Dieta wegańska</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/weganska.jpg""/></div>
                </figure>
                <p class="wstep">
                Weganizm, czyli <b>dieta wegańska</b>, to ścisły wegetarianizm. Dieta wegańska pomaga zwalczać wiele chorób, zwłaszcza tzw. cywilizacyjnych, i przyczynia się do spadku wagi. Jednak nie jest pobawiona wad, w związku z tym nie jest przeznaczona dla każdego.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Co można jeść w diecie wegańskiej?</div>
                <p>Weganizm zakłada spożywanie produktów wyłącznie pochodzenia roślinnego. Najważniejsze produkty dla wegan opierają się na bazie zbóż, takich jak: pszenica, ryż, żyto, proso, owies, oraz owoce i warzywa.
                <p>Mniej ważne produkty stanowią rośliny strączkowe, orzechy, grzyby, rośliny oleiste (siemię lniane, słonecznik, sezam i pestki dyni) i glony morskie. W tej grupie można znaleźć również zamienniki mleka krowiego czy koziego, tj. mleko roślinne - najczęściej sojowe albo ryżowe, a także sera, który można zastąpić tofu (serem twarogowym otrzymywanym z mleka sojowego).</p>
                </p>
                <p class="zakonczenie">
                <div class="tytul">Zalety i wady diety wegańskiej</div>
                <p> <b>Zalety:</b>
                <ul>
                <li>Zmniejsza ryzyko wystąpienia otyłości</li>
                <li>Zmniejsza ryzyko nadciśnienia</li>
                <li>Zmniejsza ryzyko cukrzycy typu II</li>
                <li>Zmniejsza ryzyko chorób nowotworowych(m.in. jelita grubego czy płuc)</li>
                </ul></p>
                <p> <b>Wady:</b>
                <ul>
                <li>Niedobory energetyczne</li>
                <li>Niedobór wielu składników odżywczych, m.in. białka, witaminy B12 czy witaminy D</li>
                <li>Zwiększa ryzyko pojawienia się anemii</li>
                <li>Zwiększa ryzyko pojawienia krzywicy</li>
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

