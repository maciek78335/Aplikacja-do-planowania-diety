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
                <div class="tytul">Dieta grejpfrutowa</div>
                <div class="col-sm-6 ml-auto mr-auto" ><figure>
                <img class="img-thumbnail" src="img/diety/grejpfruty.jpg"/></div>
                </figure>
                <p class="wstep">
                <b>Dieta grejpfrutowa </b>opiera się na przyjmowaniu dziennie ok. 1300-1700 kcal. Grejpfruty, które są jej podstawą, mają mało kalorii, dużo wody, beta-karotenu, witaminy C i zero tłuszczów.
                </p>

                <p class="rozwiniecie"><div class="tytul">Czego nie robić podczas diety grejpfrutowej?</div></p>

                <ul>
                <li>Nie smażyć mięsa na tłuszczu</li>
                <li>Nie używanie soli</li>
                <li>Przyjmowanie około 3 litrów płynów</li>
                </ul>

                <p class="zakonczenie">
                <div class="tytul">Zalety oraz wady diety grejpfrutowej</div>

                <b>Zalety: </b>
                <ul>
                <li>Dużo witaminy C</li>
                <li>Obniża poziom cholesterolu</li>
                <li>Dodaje energii</li>
                </ul>
                <b>Wady:</b>
                <ul>
                <li>Efekt jo-jo po diecie
                </li>
                <li> Niedobory witamin A, D, E, K</li>
                <li> Zaburzenia organizmu</li>
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

