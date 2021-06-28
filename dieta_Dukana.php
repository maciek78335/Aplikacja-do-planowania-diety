<?php session_start();
require_once 'nawigacja.php' ?>
<style>
    .opis {
        color: white;
        font-size:18px;
    }
    .tytul {
        font-size:30px;

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
            <div class="container" >

            <div class="col-sm-10">

                <div class="tytul">Dieta Dukana</div>
                <div style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/dietaDukan.jpg"/></div>
                </figure>
                <p class="wstep">
                <b>Dieta Dukana</b> zakłada obok utraty zbędnych kilogramów zmianę nawyków żywieniowych. Należy zachować odpowiednie proporcje pomiędzy ilością dostarczanych organizmowi substancji odżywczych –  białek, tłuszczów i węglowodanów. Zdaniem autora diety stosunek pomiędzy nimi powinien wynosić 5:3:2.
                Dieta Dukana oparta jest na czystych proteinach. Plan odchudzania składa się z czterech następujących po sobie faz:
                <ul><li>I etap diety Dukana: kuracja uderzeniowa: intensywna i stymulująca utrata kilogramów w bardzo krótkim czasie </li>
                <li>II etap diety Dukana: kuracja o równomiernym rytmie: regularna utrata masy ciała pozwalająca osiągnąć upragnioną wagę </li>
                <li>III etap diety Dukana: kuracja utrwalająca wagę: utrwalenie osiągniętej, lecz wciąż niestabilnej wagi dzięki odpowiedniej diecie stosowanej dziesięć dni na każdy utracony kilogram </li>
                <li>IV etap diety Dukana: kuracja ostatecznej stabilizacji: stabilizacja osiągniętej wagi pod warunkiem zachowania ścisłej diety.</li></ul>

                </p>
                <p class="rozwiniecie">
                <div class="tytul">Co należy jeść w diecie Dukana?</div>

                <b>Produkty zalecane</b>
                <ul>
                <li> Jaja</li>
                <li> Mięso mające dużo białka, np. pierś z kurczaka </li>
                <li> Sery</li>
                <li> Ryby</li>
                <li> Serki odtłuszczone ziarniste</li>
                <li> Chude mleko</li>
                </ul>

                </p>
                <p class="zakonczenie">
                <div class="tytul">Zalety i wady diety Dukana</div>

                <b>Zalety: </b>
                <ul>
                <li>Szybka redukcja masy ciała </li>
                <li>Możliwość rezygnacji z ciągłego liczenia kalorii i głodówek </li>
                <li>Poprawa jakości mięśni</li>
                <li>Brak efektu jo-jo</li>
                </ul>
                <b>Wady:</b>
                <ul>
                <li>Uczucie zmęczenia
                </li>
                <li> Zaparcia</li>
                <li>Wzrost poziomu choresterolu we krwi</li>
                <liObciąża wątrobę i nerki</li>
                <li>Zakwaszenie organizmu</li>
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

