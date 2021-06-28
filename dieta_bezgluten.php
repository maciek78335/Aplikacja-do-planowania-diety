<?php session_start();
require_once 'nawigacja.php'  ?>
<style>
    .opis {
        color: white;
    }
    .tytul {
        font-size:30px;
        text-align: center;
    }
    .wstep {
        text-align: justify;
        font-size: 18px;

    }
</style>
<main>
	<article>

		<?php
			if (isset($_SESSION['zalogowany'])) {
				echo '
			<div class="row">
			<div class="col-sm-2 bg-light"  style="height:400px;>' .
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

                <div class="tytul">Dieta bezglutenowa</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/nogluten.jpg""/></div>
                </figure>
                <p class="wstep">
                <b>Dieta bezglutenowa</b> polega na eliminacji produktów zawierających gluten. Gluten to mieszanina zapasowych białek roślinnych, które występują w zbożach. Od zawartości glutenu zależy m.in. wartość wypiekowa mąki.
                Dieta bezglutenowa należy do diet eliminacyjnych. Podstawowym założeniem diety bezglutenowej jest wykluczenie wszystkich produktów zawierających w swoim składzie kompleksy białek określanych jako gluten.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Co można jeść?</div>
                <p>produkty zbożowe naturalnie bezglutenowe (ryż, gryka, kukurydza, proso, komosa ryżowa, amarantus, sorgo, teff, tapioka)</p>
                <p>mąki bezglutenowe (wytwarzane ze zbóż bezglutenowych);</p>
                <p>wszystkie owoce i warzywa </p>
                <p>rośliny strączkowe </p>
                <p>nieprzetworzone ryby, mięso, bezglutenowe wędliny i przetwory </p>
                <p>mleko i produkty mleczne (wykluczyć w momencie nasilenia objawów celiakii) </p>
                <p>tłuszcze roślinne i orzechy </p>
                <p>desery – budynie, galaretki, kisiele zagęszczane mąką ziemniaczaną </p>
                <p>zioła i łagodne przyprawy </p>
                <p>napoje, soki, kawa, herbata. </p>
                </p>
                <p class="zakonczenie">
                <div class="tytul">Wpływ diety bezglutenowej na zdrowie</div>
                <p>
                Dieta bezglutenowa jest zalecana osobom z alergią na gluten lub z celiakią. Rezygnacja z glutenu, w przypadku tych osób, prowadzi do ustąpienia objawów choroby. Stosowanie diety bezglutenowej nie jest natomiast wskazane u osób zdrowych. Wykluczenie zbóż i potraw mącznych z jadłospisu wiąże się z dostarczaniem zbyt małej ilości węglowodanów oraz błonnika, którego niedobór może skutkować problemami z wypróżnianiem. Poza tym, dieta bezglutenowa jest uboga w witaminę B oraz żelazo, dlatego zaleca się, by osoby chore na celiakię jadły w miejsce zbóż więcej warzyw i owoców.
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

