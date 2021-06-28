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

                <div class="tytul">Dieta bezmleczna</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/bezmleka.jpg""/></div>
                </figure>
                <p class="wstep">
                Dieta bezmleczna jest dietą eliminacyjną, będąca jednocześnie sposobem na leczenie alergii na mleko i jego przetwory. Taki sposób żywienia przeznaczony jest przede wszystkim dla osób, które nie tolerują zawartej w mleku laktozy, bądź też są uczulone na białka mleka. Choć dieta bezmleczna najczęściej bywa wprowadzana u dzieci, gdyż to u nich najczęściej występuje alergia, z mleka powinny zrezygnować także matki karmiące małych alergików oraz wszystkie inne osoby, u których mleko i jego przetwory wywołują nieprzyjemne dolegliwości.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Wady diety bezmlecznej</div>
                Wyeliminowanie z diety mleka i jego przetworów może prowadzić do niedoboru ważnego dla organizmu wapnia. Pierwiastek ten buduje kości, uczestniczy w procesie krzepnięcia krwi, skurczu mięsni. W mleku i jego przetworach wapń występuje w korzystnym stosunku do fosforu (1-1,2:1). Ponadto zawarte w nich takie związki jak witamina D i laktoza zwiększają przyswajalność wapnia oraz zmieszają wydalanie go z organizmu. W związku z tym osoby stosujące dietę bezmleczną powinny suplementować dietę w wapń, którego dziennie zapotrzebowanie wynosi około 1000 mg lub pić wysokozmineralizowane wody.
                </p>
                <p class="zakonczenie">
                <div class="tytul">Gdzie można znależć wapń?</div>
                <p>
                Duże ilości wapnia znajdziemy w zielonych warzywach. Jest on obecny między innymi w szpinaku, brokułach, jarmużu, fasolce szparagowej.
                Optymalnych jego ilości dostarczymy sobie spożywając jaja i ryby.
                Wapń jest obecny w roślinach strączkowych: soi, fasoli, groszku, ciecierzycy, soczewicy. Znajdziemy go także w pestkach i orzechach. Jednak ze względu na fakt, że są one wysokokaloryczne, nie spożywamy ich w dużych ilościach, przez co nie mogą stać się jedynym źródłem wapnia.

                Pewne ilości tego pierwiastka dostępne są także w produktach zbożowych: pełnoziarnistym pieczywie, kaszach, czy brązowym ryżu.
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

