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

                <div class="tytul">Dieta Haya</div>
                <div class="col-sm-6" style="margin-left:auto; margin-right:auto;"><figure>
                <img class="img-thumbnail" src="img/diety/dietaHaya.jpg""/></div>
                </figure>
                <p class="wstep">
                Zasada <b>diety dr Haya</b> to niełączenie białek i węglowodanów w jednym posiłku. Połączenie ich w trakcie jednego posiłku, niepotrzebnie obciąża układ trawienny i sprzyja m.in. nadwadze. Ponadto w diecie dr Haya wyróżnia się jeszcze grupę produktów neutralnych, które można łączyć zarówno z białkami, jak i węglowodanami.
                </p>
                <p class="rozwiniecie">
                <div class="tytul">Co można jeść, a czego należy unikać w diecie Haya?</div>
                <p> <b>Trzy grupy produktów:</b> </p>
                <p> <b>Białka</b>
                <ul>
                <li>Mięso - niesurowe</li>
                <li>Ryby i owoce morza</li>
                <li>Jajka - niesmażone oraz niegotowane</li>
                <li>Soja</li>
                <li>Mleko niepasteryzowane</li>
                </ul>
                <p><b>Węglowodany</b></p>
                <ul>
                <li>Makaron</li>
                <li>Kasze</li>
                <li>Ziemniaki</li>
                <li>Owoce</li>
                <li>Pieczywo</li>
                </ul>
                <p><b>Produkty neutralne</b></p>
                <ul>
                <li>Tłuszcze</li>
                <li>Warzywa</li>
                <li>Zioła</li>
                <li>Maślanka</li>
                <li>Czosnek</li>
                <li>Grzyby</li>
                </ul>
                <p><b>Produkty, któych nie można spożywać w diecie Haya:</b></p>
                <ul>
                <li>Cukry</li>
                <li>Fast foody</li>
                <li>Białe pieczywo</li>
                <li>Wędliny</li>
                <li>Czerwone mięso</li>
                <li>Alkohol</li>
                </ul>
                </p>
                </p>
                <p class="zakonczenie">
                <div class="tytul">Zalety oraz wady diety Haya</div>
                <p> <b>Zalety:</b></p>
                <ul>
                <li>Pomaga z chorobami nerek</li>
                <li>Wspomaga pracę układu krążenia</li>
                <li>Wspomaga pracę układu pokarmowego</li>
                <li>Oczyszcza organizm z toksyn</li>
                </ul>
                <p> <b>Wady:</b></p>
                <ul>
                <li>Przestrzeganie zasad łączenia produktów, trzeba być uważnym</li>
                <li>Zabronione jest podjadanie między posiłkami</li>
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

