<?php
require_once 'connect.php';
session_start();

require_once 'nawigacja.php'
?>

<style>blockquote.cytat1{
	margin:1em;
	font-size: 18px;
	font-family: serif;
	border: 1px solid white;
	border-left: 10px solid white;
	padding: 0.5em;
	padding-left: 3em;
	width: 1000px;
	position: relative;
	color: white;
	line-height: 1.4em;
    text-align: justify;

}

blockquote.cytat1:before{
	position: absolute;
  font-family: 'Arial';
	content: "\201C";
	font-size: 80px;
	left: 10px;
	top: -5px;
	line-height: 1.4em;
}


blockquote.cytat1 cite{
	font-size: 0.8em;
  letter-spacing: 1px;
	display: block;
}

blockquote.cytat1 cite:before{
		content: "\2013 \0020";
        text-align: center;
}

.cytaty {
    color:white;
}

</style>

<main>
    <section class="cytaty">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Podjęcie decyzji to połowa sukcesu.
                <cite>Anisa Glen</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Jeśli nie masz jeszcze upragnionych rezultatów, to znaczy, że nie posiadasz wciąż odpowiedniej wiedzy, a nie motywacji!
                <cite>Anisa Glen</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Jeśli natrafisz na przeszkody na drodze do osiągnięcia swojego celu, to oznacza, że masz zmienić kierunek drogi, a nie zrezygnować z celu.

                <cite>Zig Ziglar</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Nikt nie jest gotów na przyjęcie żadnej rzeczy, dopóki nie uwierzy, że może ją osiągnąć.

                <cite>Napoleon Hill</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Nikogo nie sposób pokonać, jeśli sam nie uzna się za pokonanego.

                <cite>Napoleon Hill</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Dziewięćdziesiąt procent problemów, jakimi się stresujesz, nigdy się nie pojawi

                <cite>Witold Wójtowicz</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Zrób to, czego się boisz, a strach minie.

                <cite> Ralph Waldo Emerson</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Jeśli podczas treningu czujesz spokój w umyśle, to znaczy, że robisz to dobrze.


                <cite>Anisa Glen</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Dobrze zaczęte jest w połowie zrobione.
                <cite>Przysłowie greckie</cite>
                </blockquote>
                </div>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Nigdy nie rezygnuj z celu tylko dlatego, że osiągnięcie go wymaga długiego czasu. Czas i tak upłynie.


                <cite> H. Jackson Brown</cite>
                </blockquote>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Zdrowe żywienie bywa trudne. Otyłość to codzienny ciężar. Wybierz swój poziom trudności.


                <cite>  Autor nieznany</cite>
                </blockquote>
                <div class="col-xs-12">
                <blockquote class="cytat1">
                Zawsze wydaje się, że coś jest niemożliwe, dopóki nie zostanie zrobione.


                <cite> Nelson Mandela</cite>
                </blockquote>
                </div>
            </div>
        </div>
    </section>
</main>
