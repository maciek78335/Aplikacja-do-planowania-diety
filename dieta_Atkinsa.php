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
			<div class="col-sm-2 bg-light" style="height:400px;">' .
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

                <div class="tytul">Dieta Atkinsa</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/atkins.jpg""/></div>
                </figure>
                <p class="wstep">
                <b>Dieta odchudzająca Atkinsa</b> to kontrowersyjny sposób żywienia, stworzony na początku lat 70. przez nowojorskiego kardiologa Roberta Atkinsa. Zasady diety Atkinsa przypominają dietę optymalną polskiego dietetyka Jana Kwaśniewskiego. Według nich przyczyną nadwagi są cukry proste i złożone czyli węglowodany, a podstawą codziennego jadłospisu powinny być tłuszcze i białka.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Etapy diety Atkinsa</div>
                <b>Pierwszy etap:</b> <p>Węglowodany należy zmniejszyć do 20 g na dobę. Nie wolno jeść wtedy pieczywa, produktów zbożowych, owoców, warzyw zawierających skrobię oraz mleka i jogurtów. Dozwolone są m.in. sałata, szpinak, pietruszka, szparagi, por, kapusta, seler, kalarepa, cebula, dynia, pomidory, fasola szparagowa itp.</p>
                <b>Drugi etap (dieta właściwa)</b>: <p>Można zwiększyć już liczbę węglowodanów do 30-50 g dziennie. Jadłospis staje się wtedy bardziej urozmaicony. Można jeść owoce (te z niskim indeksem glikemicznym i posiadające niewiele węglowodanów czyli maliny, jagody, truskawki) oraz więcej warzyw.</p>
                <b>Trzeci etap:</b> <p>Dieta bez ograniczeń czasowych. Nadal jej podstawą są tłuszcze i białka, ale możesz już zwiększyć ilość cukrów, pamiętając , że nie wolno ich łączyć z tłuszczami zwierzęcymi oraz jajami. Codzienny jadłospis składa się z 3 większych posiłków oraz 2 przekąsek.</p>
                </p>
                <p class="zakonczenie">
                <div class="tytul">Zalety i wady diety Atkinsa</div>
                <p> <b>Zalety:</b>
                <ul>
                <li>Szybki spadek masy ciała</li>
                <li>Nie wymaga liczenia kalorii</li>
                <li>Pozwala na spożywanie produktów wysokotłuszczowych</li>
                </ul></p>
                <p> <b>Wady:</b>
                <ul>
                <li>Uboga w witaminy.</li>
                <li>Niedobór magnezu i sodu jako skutki diety</li>
                <li>Zbytnie zakwaszenie organizmu</li>
                <li>Skaza moczanowa</li>
                <li>Próchnica</li>
                <li>Miażdżyca</li>
                </ul>
                </p>
			</div>
			</div>
            </section>
			</div>
			';
			}
            else {
                echo '<script>alert("Zaloguj się, aby móc skorzystać")</script>';
            }

			?>
			</div>
		</article>
	</main>

