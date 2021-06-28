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

                <div class="tytul">Dieta bezlaktozowa</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/bezlaktozy.jpg""/></div>
                </figure>
                <p class="wstep">
                <b>Dieta przy nietolerancji laktozy</b> to dieta eliminacyjna, która jest formą leczenia objawowego nietolerancji laktozy. W związku z tym jest ona przeznaczona dla noworodków, niemowląt, dzieci i dorosłych, których organizm nie trawi cukru mlecznego. Dieta przy nietolerancji laktozy zakłada całkowitą eliminację z jadłospisu (dieta bezlaktozowa) lub jedynie ograniczenie spożycia produktów zawierających laktozę (nie zawsze trzeba bowiem zupełnie wykluczać z diety cukier mleczny). Uzupełnieniem leczenia dietetycznego mogą być tabletki zawierające laktazę. Konkretne zalecenia zależą od postaci nietolerancji laktozy, nasilenia objawów i wieku chorego.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Dieta bez laktozy - zasady</div>
                Osoby z pierwotnym i wtórnym (nabytym) niedoborem laktazy nie muszą całkowicie eliminować z diety mleka i innych produktów zawierających cukier mleczny. Mogą je spożywać, ale w ograniczonych ilościach - konieczne jest jedynie poznanie swojego dopuszczalnego limitu. Wyjątkiem są sytuacje, kiedy objawy nietolerancji pokarmowej są bardzo nasilone - wówczas należy zastosować dietę bezlaktozową.

                Z kolei osoby z wrodzonym niedoborem laktazy muszą bezwzględnie stosować dietę bezlaktozową przez całe życie, ponieważ nie tolerują nawet niewielkich ilości pożywienia zawierającego cukier mleczny. Nieprzestrzeganie zasad diety może nawet zagrażać ich życiu.
                </p>
                <p class="zakonczenie">
                <div class="tytul">Co można jeść w diecie bezlaktozowej?</div>
                <p>
                Obecnie oferta produktów bez laktozy jest bardzo szeroka. To już nie tylko <b>mleko bez laktozy</b>, ale też <b>jogurty bez laktozy, kefiry, serki wiejskie czy twarożki</b> do smarowania pieczywa. W produktach bezlaktozowych lub o obniżonej zawartości laktozy cukier mleczny nie zostaje usunięty z żywności, ale rozłożony enzymatycznie do glukozy i galaktozy.
                Inne dobre źródła wapnia, zalecane w diecie bez laktozy, to:
                <ul>
                <li>mleko roślinne wzbogacane tym pierwiastkiem </li>
                <li>soja i jej przetwory</li>
                <li>ryby z puszki zjadane z ośćmi</li>
                <li>fasola, natka pietruszki, jarmuż, szpinak</li>
                <li>mak, sezam, słonecznik</li>
                <li>migdały i orzechy</li>
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

