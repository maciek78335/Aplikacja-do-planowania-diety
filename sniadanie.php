<?php
require_once 'connect.php';
session_start();

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Planer diety</title>
    <meta name="description" content="Aplikacja webowa wspomagająca kontrolę nad codziennym jadłospisem i wiele innych ciekawych funcjonalności" />
    <meta name="keywords" content="dieta, planer diety, kontrola wagi, jadłospis" />
    <style>
        .sniadanie img {
            margin-top: 10px;
            width: 300px;
            height: 250px;
        }

        .sniadanie figcaption {
            margin-top: 10px;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body style="color:white">
   <?php require_once 'nawigacja.php' ?>
    <section class="sniadanie">

        <div class="container">
        <?php require_once 'scrollUp.php' ?>
            <div class="row">

                <div class="col-12">
                    <figure>
                        <a href="javascript: showHidden('hidden1'); showHidden('hidden2');"><img  src="img/przepisy/posilki/sniadanie/szakszuka.webp" /></a>
                        <figcaption>
                            Szakszuka
                        </figcaption>
                </div>
                </figure>
                <div id="hidden1" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    jajka 4 sztuki </br>
                    papryka czerwona 1 sztuka </br>
                    ząbek czosnku 2 sztuki </br>
                    pomidor 3 sztuki </br>
                    świeże czerwone chili 1 sztuka </br>
                    oliwa z oliwek 3 łyżki </br>
                    Kmin rzymski z Indii mielony Knorr 1 łyżka </br>
                    Papryka słodka z Hiszpanii Knorr 1 łyżeczka </br>
                    natka kolendry 1 pęczek </br>
                    cebula dymka ze szczypiorem 1 pęczek </br>
                </div>
                <div id="hidden2" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Sparz pomidory, w tym celu wytnij z nich szypułkę a spód pomidora delikatnie nadetnij na krzyż. </br> Pomidory umieść na około 10 sekund we wrzątku a następnie w zimnej wodzie. </br> Z pomidorów usuń skórkę przekrój je na pół usuń środek. Pozostały miąższ pomidorowy pokrój w kosteczkę. </br> W taką samą kosteczkę pokrój cebulę dymkę i paprykę. Posiekaj szczypior, czosnek chili i kolendrę. </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Na teflonowej patelni na rozgrzanej oliwie podsmaż czosnek chili i cebulę. </br> Dodaj paprykę smaż wszystko razem dłuższą chwilę. </br> Dodaj pomidory , kolendrę, słodką paprykę,szczypior i kmin rzymski . </br> Wszystko razem dokładnie wymieszaj, dopraw szczyptą soli. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Podsmażone warzywa, rozłóż do małych naczynek. </br> Do każdego naczynia wbij jajko. </br> Całość wstaw do nagrzanego do 160*C piekarnika na około 10 minut. </br> Danie można przygotować również na patelni. Zrób w jarzynach łyżką wgłębienia. Wbij w nie jajka. </br> Przykryj i gotuj do ścięcia się białek. Podawaj.
                </div>

                <div class="col-12">
                    <figure><a href="javascript: showHidden('hidden3'); showHidden('hidden4');"><img  src="img/przepisy/posilki/sniadanie/omlet-z-kurczakiem-i-brokulami.webp" /></a>
                        <figcaption>Omlet z kurczakiem i brokułami</figcaption>
                </div>
                </figure>
                <div id="hidden3" style="display:none; margin-left:20px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    filet z kurczaka: 1 sztuka </br>
                    Przyprawa do kurczaka Knorr: 1 opakowanie </br>
                    mały brokuł 1 sztuka: </br>
                    jajka 10 sztuk: </br>
                    oliwa z oliwek: </br>
                    masło
                </div>
                <div id="hidden4" style="display:none; margin-left:20px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Rozbij jaja i rozmieszaj je na jednolitą masę.
                    </br>
                    <b style="font-size:16px;">Krok 2:</b>
                    Umyj kurczaka, pokrój go w paski. Następnie przesmaż na oliwie z oliwek. </br>
                    <b style="font-size:16px;">Krok 3:</b>
                    Podziel brokuł na małe różyczki i ugotuj w osolonej wodzie. </br>
                    <b style="font-size:16px;">Krok 4:</b>
                    Rozpuść masło na rozgrzanej patelni, po czym wlej jaja, dodaj kurczaka oraz brokuły. </br> Należy uważać, aby masło nie przypaliło się, inaczej potrawa będzie niezdrowa i niesmaczna. </br> Smaż całość do momentu, kiedy jaja zaczną się ścinać. </br>
                    <b style="font-size:16px;">Krok 5:</b>
                    Posyp omlet z wierzchu Przyprawą do kurczaka Knorr i podawaj.
                </div>


                <div class="col-12">
                    <figure><a href="javascript: showHidden('hidden5'); showHidden('hidden6');"><img  src="img/przepisy/posilki/sniadanie/kanapki_pasta_rybna.webp" /></a>
                        <figcaption>Kanapki z pastą rybną z jajkiem i ogórkiem konserwowym</figcaption>
                </div>
                </figure>
                <div id="hidden5" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    Majonez Hellmann's Oryginalny 3 łyżki </br>
                    makrela wędzona 200 gramów </br>
                    jajka 2 sztuki </br>
                    ogórek konserwowy 2 sztuki </br>
                    pestki słonecznika 2 łyżki </br>
                    szczypior 0.5 pęczka </br>
                    Papryka ostra z Hiszpanii Knorr 0.5 łyżeczki </br>
                    cytryna 0.5 sztuki </br>
                </div>
                <div id="hidden6" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Jaja ugotuj na twardo obierz zetrzyj na drobnej tarce, </br> ogórki pokrój w kosteczkę lub też zetrzyj na tarce na grubych oczkach, drobno pokrój szczypior. </br> Pestki słonecznika upraż na patelni.
                    </br>
                    <b style="font-size:16px;">Krok 2:</b>
                    Makrelę oczyść ze skóry i ości , przełóż do miski dodaj majonez, wyciśnij trochę soku z połówki cytryny. </br> Makrelę ugnieć na pastę dodaj jajka ogórka szczypior, pestki słonecznika, dokładnie wymieszaj. </br> Pastę dopraw do smaku papryką i o ile zachodzi taka potrzeba szczyptą soli. </br>
                    <b style="font-size:16px;">Krok 3:</b>
                    Pastę z makreli podawaj z chlebem razowym. </br>
                </div>

                <div class="col-12">
                    <figure><a href="javascript: showHidden('hidden7'); showHidden('hidden8');"><img  src="img/przepisy/posilki/sniadanie/pancakes.webp" /></a>
                        <figcaption>
                            Amerykańskie naleśniki (pancakes)
                        </figcaption>
                </div>
                </figure>
                <div id="hidden7" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    mleko 1 szklanka </br>
                    mąka pszenna 2 szklanki </br>
                    jaja 2 sztuki </br>
                    roztopione masło 100 gramów </br>
                    proszek do pieczenia 3 łyżeczki </br>
                    cukier 3 łyżki </br>
                    syrop klonowy 150 mililitrów </br>
                    cynamon z Wietnamu Knorr 0.5 łyżeczki </br>
                    olej 80 mililitrów </br>
                    masło do smażenia 100 gramów </br>

                </div>
                <div id="hidden8" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Jaja, mąkę, roztopione masło, proszek do pieczenia, cukier i mleko wymieszaj dokładnie, <br /> odstaw na kilkanaście minut.
                    </br>
                    <b style="font-size:16px;">Krok 2:</b>
                    Następnie na patelni rozgrzej odpowiednią porcję oleju z masłem i smaż małe, </br> okrągłe placuszki o średnicy 10 centymetrów. </br>
                    <b style="font-size:16px;">Krok 3:</b>
                    Przewracaj placki na drugą stronę tak, aby były złoto- brązowe. <br /> Możesz przykryć patelnię i smażyć powoli przez 10 minut. </br>
                    <b style="font-size:16px;">Krok 4:</b>
                    Gotowe placki podawaj posypane cynamonem i polane syropem klonowym. <br /> Możesz również użyć ulubionych dodatków.
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden9'); showHidden('hidden10');"><img  src="img/przepisy/posilki/sniadanie/warzywne-placuszki.webp" /></a>
                    <figcaption>Warzywne placuszki</figcaption>
            </div>
            </figure>
            <div id="hidden9" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                ziemniaki 8 sztuk </br>
                cukinia 2 sztuki </br>
                czerwona cebula 1 sztuka </br>
                marchew 1 sztuka </br>
                natka pietruszki0.5 pęczka </br>
                mąka pszenna 2 łyżki </br>
                bułka tarta 2 łyżki </br>
                jajka 2 sztuki </br>
                Przyprawa Za'atar Knorr 2 łyżki </br>
                Pieprz czarny z Wietnamu mielony Knorr 1 szczypta </br>
                oliwa 2 łyżki </br>
            </div>
            <div id="hidden10" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                <b style="font-size:16px;">Krok 1:</b> Ziemniaki, cukinię oraz marchewkę zetrzyj osobno na grubej tarce. </br> Ziemniaki przepłucz pod bieżącą, zimną wodą i odciśnij.
                </br>
                <b style="font-size:16px;">Krok 2:</b>
                Cebulę pokrój w drobną kostkę, wszystkie warzywa przełóż do miski i wymieszaj razem. </br>
                <b style="font-size:16px;">Krok 3:</b>
                Do warzyw dodaj posiekaną natkę, jajka oraz mąkę i bułkę tartą. </br> Całość dopraw do smaku przyprawą za'tar oraz pieprzem i wymieszaj. </br>
                <b style="font-size:16px;">Krok 4:</b>
                Na rozgrzanej oliwie smaż niewielkie placuszki po 3-4 minuty z każdej strony na złoty kolor. </br>
            </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden11'); showHidden('hidden12');"><img  src="img/przepisy/posilki/sniadanie/placuszki-z-cukinii.webp" /></a>
                <figcaption>Placuszki z cukinii</figcaption>
        </div>
        </figure>
        <div id="hidden11" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            cukinia 1 sztuka </br>
            Przyprawa Czosnek Knorr 1 łyżeczka </br>
            cebula 1 sztuka </br>
            mąka pszenna 2 łyżki </br>
            jajka 2 sztuki </br>
            Pieprz czarny z Wietnamu mielony Knorr 2 szczypty </br>
            sól 1 szczypta </br>
            masło klarowane 2 łyżki </br>
        </div>
        <div id="hidden12" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Zetrzyj cukinię na grubej tarce. Odciśnij wodę z cukinii.
            </br>
            <b style="font-size:16px;">Krok 2:</b>
            Pokrój cebulę, połącz z jajkiem, przyprawami i dodaj do cukinii. </br> Wsyp mąkę pszenną i całość dokładnie wymieszaj. </br>
            <b style="font-size:16px;">Krok 3:</b>
            Smaż na rozgrzanym maśle klarowanym cienkie placuszki. Podawaj np. z jogurtowym sosem. </br>
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden13'); showHidden('hidden14');"><img  src="img/przepisy/posilki/sniadanie/grillowane-tosty-z-kurczakiem.webp" /></a>
                <figcaption>Grillowane tosty z kurczakiem</figcaption>
        </div>
        </figure>
        <div id="hidden13" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            ciemne pieczywo tostowe 4 sztuki </br>
            Sos sałatkowy włoski Knorr 1 opakowanie </br>
            pierś z kurczaka z rosołu 1 sztuka </br>
            szpinak świeży 1 pęczek </br>
            cebula 1 sztuka </br>
            szczypiorek 1 łyżka </br>
            oliwa z oliwek 6 łyżek </br>

        </div>
        <div id="hidden14" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Cebulę pokrój w kostkę, a następnie przesmaż na rozgrzanej oliwie. </br> Dodaj szpinak, wymieszaj i dopraw do smaku. Zdejmij z ognia.
            </br>
            <b style="font-size:16px;">Krok 2:</b>
            Kromki pieczywa grilluj w domowym opiekaczu i skrop oliwą. </br> Sos przygotuj według wskazówek na opakowaniu. </br>
            <b style="font-size:16px;">Krok 3:</b>
            Kurczaka porwij na kawałki i wymieszaj ze szpinakiem, szczypiorem oraz sosem Knorr. </br>
            <b style="font-size:16px;">Krok 4:</b>
            Przygotowany farsz nałóż na dwie kromki pieczywa i przykryj pozostałymi dwoma. </br> Kanapki przekrój w poprzek i podawaj.
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden15'); showHidden('hidden16');"><img  src="img/przepisy/posilki/sniadanie/jajecznica-z-lososiem.webp" /></a>
                <figcaption>Jajecznica z łososiem</figcaption>
        </div>
        </figure>
        <div id="hidden15" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            łosoś wędzony 50 gramów </br>
            Przyprawa w Mini kostkach Pietruszka Knorr 1 sztuka </br>
            jajka 6 sztuk </br>
            masło 1 łyżka </br>

        </div>
        <div id="hidden16" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Pokrój łososia w kostkę.
            </br>
            <b style="font-size:16px;">Krok 2:</b>
            Rozmąć jajka, dodaj do nich łososia i wkrusz przyprawę w mini kostkach Knorr. </br>
            <b style="font-size:16px;">Krok 3:</b>
            Smaż jajecznicę przez kilka minut na patelni, na łyżce masła, po czym podawaj. </br>
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden17'); showHidden('hidden18');"><img  src="img/przepisy/posilki/sniadanie/omlet-z-otrebami-warzywami-i-wedzonym-lososiem.webp" /></a>
                <figcaption>Omlet z warzywami i otrębami</figcaption>
        </div>
        </figure>
        <div id="hidden17" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            jajka 2 sztuki </br>
            otręby żytnie lub owsiane 4 łyżeczki </br>

            posiekana natka pietruszki 1 łyżeczka </br>
            oliwa z oliwek 1 łyżka </br>
            ogórek zielony 180 gramów </br>
            marchewka 45 gramów</br>
            Delikat przyprawa uniwersalna Knorr 0.25 łyżeczki </br>
            garść kiełków słonecznika 35 gramów </br>
            serek homogenizowany naturalny 2 łyżki </br>
            łosoś wędzony plastry 50 gramów </br>
            kromka pumpernikla 2 sztuki </br>
            czarny pieprz 0.5 łyżeczki </br>
        </div>
        <div id="hidden18" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Jajka roztrzep, dodaj posiekaną natkę pietruszki i otręby. </br> Dopraw do smaku przyprawą uniwersalną Knorr i pieprzem. Następnie wymieszaj.
            </br>
            <b style="font-size:16px;">Krok 2:</b>
            Oliwę rozgrzej na patelni. Wylej masę jajeczną i usmaż omlet. </br>
            <b style="font-size:16px;">Krok 3:</b>
            Ogórka obierz i pokrój wzdłuż na cienkie i długie plastry </br> (jeśli możesz, użyj obieraczki do warzyw). </br> Marchewkę obierz i pokrój w cienkie, krótkie paseczki. </br>
            <b style="font-size:16px;">Krok 4:</b>
            Omlet posmaruj serkiem homogenizowanym. Na wierzchu połóż łososia. </br> Udekoruj zwiniętymi w różyczki plastrami ogórka, marchewką i kiełkami. </br> Podawaj z podpieczonym w tosterze pieczywem.
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden19'); showHidden('hidden20');"><img  src="img/przepisy/posilki/sniadanie/serek_ziarnisty_z_warzywami_i_platkami_owsianymi.webp" /></a>
                <figcaption>Serek wiejski z warzywami i płatkami owsianymi</figcaption>
        </div>
        </figure>
        <div id="hidden19" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            serek ziarnisty 600 gramów </br>
            papryka żółta 2 sztuki </br>
            ogórek zielony 2 sztuki </br>
            kiełki fasoli mung 4 łyżki </br>
            płatki owsiane 4 łyżki </br>
            Sos sałatkowy Zioła ogrodowe z trybulą Knorr 1 opakowanie </br>
        </div>
        <div id="hidden20" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Warzywa umyj i pokrój na drobne kawałki.
            </br>
            <b style="font-size:16px;">Krok 2:</b>
            Dodaj do warzyw serek, płatki i całość posyp przyprawą. </br> Dokładnie wymieszaj i na wierzch połóż kiełki fasoli mung. Na deser zjedz winogrona. </br>
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden21'); showHidden('hidden22');"><img  src="img/przepisy/posilki/sniadanie/platki-owsiane-na-mleku-z-jablkiem.webp" /></a>
                <figcaption>Płatki owsiane na mleku z jabłkiem</figcaption>
        </div>
        </figure>
        <div id="hidden21" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            płatki owsiane zwykłe 40 gramów </br>
            mleko 1,5% tłuszczu 125 mililitrów </br>
            małe jabłko 1 sztuka </br>
            cynamon 1 łyżeczka </br>
        </div>
        <div id="hidden22" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Płatki zalać wrzącą wodą do poziomu powierzchni płatków i odczekać kilka minut, aż zmiękną.
            </br>
            <b style="font-size:16px;">Krok 2:</b>
            Dodać mleko, pokrojone w kostkę kawałki jabłka, wymieszać i posypać cynamonem. </br>
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden23'); showHidden('hidden24');"><img  src="img/przepisy/posilki/sniadanie/kanapka_z_awokado_i_szarpanym_lososiem.webp" /></a>
                <figcaption>Kanapka z awokado i szarpanym łososiem</figcaption>
        </div>
        </figure>
        <div id="hidden23" style="display:none; margin-left:20px; margin-top:20px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            filet z łososia 200 gramów </br>
            oliwa 2 łyżki </br>
            Przyprawa do ryb Knorr 1 łyżka </br>
            dojrzałe awokado 1 sztuka </br>
            Przyprawa Adobo Knorr 1 łyżka </br>
            mała cebulka 1 sztuka</br>
            świeża kolendra 1 pęczek </br>
            kromka chleba na zakwasie 2 sztuki </br>
        </div>
        <div id="hidden24" style="display:none; margin-left:20px; margin-top:20px; margin-bottom: 10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Filet z łososia ułóż w naczyniu do gotowania na parze. </br> Skrop oliwą oraz przyprawą do ryb Knorr. Gotuj na parze przez ok 20 minut.
            </br>
            <b style="font-size:16px;">Krok 2:</b>
            Cebulkę pokrój w drobną kostkę. </br> Dojrzałe awokado przekrój na pół, pozbądź się pestki, łyżką wyjmij miąższ i rozgnieć go w misce. </br> Dodaj przyprawę Adobo Knorr i cebulkę. Wymieszaj. </br>
            <b style="font-size:16px;">Krok 3:</b>
            W tosterze lub na patelni przygotuj dwie grzanki. </br>
            <b style="font-size:16px;">Krok 4:</b>
            Na grzance połóż pastę z awokado. </br> Gotowego łososia nakładaj na kanapkę widelcem szarpiąc na mniejsze kawałki. </br>
            <b style="font-size:16px;">Krok 5:</b>
            Na wierzchu kanapki połóż listki kolendry, skrop oliwą i posyp szczyptą przyprawy Adobo Knorr. </br> Podawaj jako lekki obiad lub przekąska w ciągu dnia.

            </div>
        </div>
        </div>
    </section>

</body>

</html>