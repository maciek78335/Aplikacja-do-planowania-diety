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
        .przekaska img {
            margin-top: 10px;
            width: 300px;
            height: 250px;
        }

        .przekaska figcaption {
            margin-top: 10px;
            color: white;
            font-size: 20px;

        }
    </style>

</head>

<body style="color:white">
<?php require_once 'nawigacja.php' ?>
    <section class="przekaska">
        <div class="container">
        <?php require_once 'scrollUp.php' ?>
            <div class="row">
            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden1'); showHidden('hidden2');"><img src="img/przepisy/posilki/przekaska/nuggetsy-z-kurczaka-w-serze.webp"  /></a>
                    <figcaption>Nuggetsy z kurczaka w serze</figcaption>
                </div>
        </figure>
                <div id="hidden1" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                filety z kurczaka 4 sztuki </br>
                Fix Nagetsy </br> z sosem meksykańskim Knorr 1 opakowanie </br>
                jajka 3 sztuki </br>
                Majonez Hellmann's Babuni 5 łyżek </br>
                Ketchup Hellmann's Łagodny 4 łyżki </br>
                ser żółty tarty 50 gramów </br>
                woda 2 łyżki  </br>
                natka pietruszki 2 łyżki
                </div>
                <div id="hidden2" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Filety oczyść i umyj, następnie pokrój w średniej grubości plastry. </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Ketchup Hellmann’s Łagodny, Majonez Babuni Hellmann's, </br> wodę i sos z opakowania Knorr połącz na gładką masę. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Ser żółty wymieszaj z panierką Knorr i natką pietruszki. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Pokrojone filety kurczaka obtocz w roztrzepanym jajku, </br> a następnie w przygotowanej panierce. </br>
                    <b style="font-size:16px;">Krok 5:</b>

                    Układaj na blasze wyłożonej pergaminem i piecz w temperaturze 180 °C 15 minut. </br> Podawaj z sosem tysiąca wysp. </br>
                    <b style="font-size:16px;">Krok 6:</b>
                    Polej oliwą z oliwek. </br>
                    <b style="font-size:16px;">Krok 7:</b>
                    Piecz w piekarniku w 180 °C przez 10-15 minut. </br>
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden3'); showHidden('hidden4');"><img src="img/przepisy/posilki/przekaska/paszteciki.webp"  /></a>
                    <figcaption>Paszteciki z ciasta francuskiego z nadzieniem bolognese</figcaption>
                </div>
        </figure>
                <div id="hidden3" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                ząbek czosnku 1 sztuka  </br>
                mięso mielone z indyka 250 gramów </br>
                Naturalnie smaczne Spaghetti Bolognese Knorr 1 opakowanie </br>
                posiekana natka pietruszki 2 łyżki </br>
                gotowe ciasto francuskie 1 opakowanie  </br>
                gęsty jogurt 150 mililitrów </br>
                świeża bazylia 2 łyżki</br>
                oliwa z oliwek 2 łyżki</br>
                </div>
                <div id="hidden4" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Nagrzej piekarnik do 200°C. Drobno pokrój czosnek.</br> Przesmaż mięso na oliwie przez kilka minut do momentu gdy przestanie być różowe.</br> Dodaj 200 ml wody i zawartość opakowania Knorr Naturalnie smaczne.</br> Wymieszaj, doprowadź sos do wrzenia, a następnie gotuj na niewielkim ogniu przez 5 min.</br> Dodaj drobno pokrojoną natkę pietruszki.  </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Zestaw sos z palnika do ostudzenia. Rozwiń rulon ciasta francuskiego.</br> Wytnij kwadraty o boku ok. 8 cm. Na każdym kwadracie ułóż łyżkę sosu.</br> Zawiń tak aby powstały trójkąty.</br> Mocno połącz ze sobą krawędzie ciasta, taka by nie otworzyły się w trakcie pieczenia.  </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Lekko posmaruj paszteciki oliwą z oliwek.</br> Ułóż na blasze i wstaw do piekarnika na 10 minut lub do momentu gdy upieką się na złoto. </br> W międzyczasie wymieszaj jogurt z pokrojoną drobno bazylią i czosnkiem. </br>Podawaj paszteciki z sosem jogurtowym.  </br>
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden5'); showHidden('hidden6');"><img src="img/przepisy/posilki/przekaska/muffinki_z_serem_feta_i_szpinakiem.webp"  /></a>
                    <figcaption>Muffinki ze szpinakiem</figcaption>
                </div>
        </figure>
                <div id="hidden5" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                mrożony szpinak 400 gramów </br>
                wędzony boczek 100 gramów </br>
                cebula 1 sztuka </br>
                Gałka muszkatołowa z Indonezji Knorr 1 szczypta </br>
                Papryka ostra z Hiszpanii Knorr 1 szczypta </br>
                kostka sera feta 150 gramów</br>
                mąka 1 szklanka </br>
                mąka do oprószenia foremek 1 łyżka </br>
                proszek do pieczenia 1 łyżeczka </br>
                Majonez Hellmann's Oryginalny 100 gramów </br>
                Delikat przyprawa uniwersalna Knorr 1 łyżeczka</br>
                roztrzepane jajka 2 sztuki </br>
                mleko 250 mililitrów</br>
                oliwa z oliwek 3 łyżki </br>
                </div>
                <div id="hidden6" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Ser feta pokrój w kosteczkę, szpinak rozmroź i odciśnij z wody.  </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Boczek i cebulę pokrój w drobną kosteczkę. </br>Podsmaż na patelni, gdy wytopi się tłuszcz dodaj cebulę.</br> Wszystko razem smaż aż cebula się zeszkli. </br>Dodaj szpinak, dopraw go delikatem warzywnym, gałką i ostrą papryką. Wystudź.  </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Pomieszaj mąkę z proszkiem do pieczenia. Do farszu dodaj majonez i wymieszaj.  </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Jaja rozdziel. Ubij białka na sztywno. </br> Białko i żółtka połącz z mąką i mlekiem, </br> dodaj farsz ze szpinakiem i ser feta, wszystko razem delikatnie wymieszaj.  </br>
                    <b style="font-size:16px;">Krok 5:</b>

                    Oliwą wysmaruj foremki do mufinek, oprósz je mąką. Do foremek nałóż ciasto. </br> Całość wstaw do nagrzanego do 180*C piekarnika na około 20 minut. </br>
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden7'); showHidden('hidden8');"><img src="img/przepisy/posilki/przekaska/kuleczki-porowe.webp"  /></a>
                    <figcaption>Kuleczki porowe</figcaption>
                </div>
        </figure>
                <div id="hidden7" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                por 500 gramów </br>
                Bulionetka drobiowa Knorr </br>
                mąka 30 gramów </br>
                masło 30 gramów </br>
                mleko 150 mililitrów </br>
                jajko 1 sztuka </br>
                bułka tarta </br>
                pęczek natki pietruszki 0.5 sztuki</br>
                olej
                </div>
                <div id="hidden8" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Dodaj bulionetkę Knorr do wrzątku i wmieszaj do momentu,</br> gdy powstanie klarowny bulion. </br>
                    <b style="font-size:16px;">Krok 2:</b>
                    Pokrój pory na plasterki i duś na patelni przez pięć minut.</br> Dolej rosół i gotuj przez 10- 15 minut.  </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    W garnku roztop masło, dodaj mąkę i przysmaż na złocisty kolor.</br> Dolej mleko, cały czas mieszając.</br> Gotuj jeszcze przez 10 minut.</br> Pory wraz z zawartością patelni włóż do sosu.</br> Gotuj chwilę do czasu, gdy masa zgęstnieje.</br> Następnie odstaw do ostygnięcia. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Rozgrzej tłuszcz do głębokiego smażenia.</br> Z masy porowej uformuj małe kuleczki, obtocz w jajku i bułce tartej. </br>
                    <b style="font-size:16px;">Krok 5:</b>
                    Usmaż na złoto- brązowy kolor. Przed podaniem posyp pietruszką. </br>
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden9'); showHidden('hidden10');"><img src="img/przepisy/posilki/przekaska/papryka-w-ciescie.webp"  /></a>
                    <figcaption>Papryka w cieście</figcaption>
                </div>
        </figure>
                <div id="hidden9" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                papryka zielona 1 sztuka  </br>
                Fix Kurczak słodko-kwaśny Knorr </br>
                czerwona papryka 1 sztuka </br>
                piwo 100 mililitrów </br>
                Majeranek z krajów śródziemnomorskich Knorr 1 łyżeczka</br>
                proszek do pieczenia 1 szczypta</br>
                tłuszcz do smażenia
                </div>
                <div id="hidden10" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Oczyszczone papryki pokrój w paski, posyp majerankiem. </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Mąkę wymieszaj z proszkiem do pieczenia i piwem na gładką masę. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Rozgrzej tłuszcz do smażenia (może to być olej).</br> Paski papryki zanurzaj w cieście i od razu wkładaj do gorącego tłuszczu.</br> Uważaj, aby papryki nie popękały.  </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Gdy papryki zbrązowieją, osącz je z tłuszczu układając na papierowym ręczniku. </br>
                    <b style="font-size:16px;">Krok 5:</b>

                    Oddzielnie przygotuj sos mieszając zawartość opakowania Fix Kurczak słodko –</br> kwaśny Knorr z wodą. Całość zagotuj.</br> Gotową paprykę podawaj z sosem w oddzielnym naczyniu.</br>
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden11'); showHidden('hidden12');"><img src="img/przepisy/posilki/przekaska/bruschetta.webp"  /></a>
                    <figcaption>Bruschetta</figcaption>
                </div>
        </figure>
                <div id="hidden11" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                bagietka 1 sztuka  </br>
                Delikat przyprawa uniwersalna Knorr 1 szczypta </br>
                pomidory 3 sztuki</br>
                oliwa z oliwek 6 łyżek </br>
                ząbek czosnku 2 sztuki </br>
                Pieprz czarny z Wietnamu mielony Knorr 1 szczypta </br>
                sól morska 1 szczypta  </br>
                świeża bazylia 3 listków </br>
                </div>
                <div id="hidden12" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Pokrój bagietkę na 12 kromek.</br> Ułóż na blasze, posyp Przyprawą Uniwersalną Delikat Knorr. </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Każdą kromkę polej odrobiną oliwy.</br> Piecz w piekarniku w temperaturze 200 stopni do momentu, aż będą złociste.  </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Sparz pomidory, zdejmij z nich skórkę, wykrój środek i pokrój w drobną kostkę.</br> Wymieszaj w miseczce z posiekanym czosnkiem, julienne z bazylii, dopraw solą, pieprzem i oliwą z oliwek. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Nakładaj na grzanki po łyżce doprawionych pomidorów. Podawaj zaraz po przygotowaniu. </br>
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden13'); showHidden('hidden14');"><img src="img/przepisy/posilki/przekaska/szybka-zapiekanka-ze-szpinakiem.webp"  /></a>
                    <figcaption>Szybka zapiekanka ze szpinakiem</figcaption>
                </div>
        </figure>
                <div id="hidden13" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                ciasto francuskie 1 opakowanie </br>
                Delikat przyprawa uniwersalna Knorr 1 łyżeczka</br>
                szpinak świeży 2 pęczki </br>
                pieczarki 10 sztuk </br>
                cebula 1 sztuka  </br>
                ząbek czosnku 1 sztuka </br>
                jajka 5 sztuk</br>
                śmietana 36% 200 mililitrów </br>
                ser żółty 4 łyżki  </br>
                oliwa z oliwek 2 łyżki  </br>
                Pieprz czarny z Wietnamu mielony Knorr 1 szczypta
                </div>
                <div id="hidden14" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Płaską, podłużną formę do pieczenia wyłóż ciastem francuskim i ponakłuwaj je widelcem.</br> Zapiecz przez 8 minut w piekarniku nagrzanym do 220 °C.</br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Na rozgrzanej oliwie przesmaż posiekany czosnek, posiekaną cebulę oraz pieczarki. </br>Szpinak sparz krótko we wrzącej wodzie i odciśnij z nadmiaru wody. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    W kielichu blendera zmiksuj jajka ze śmietaną i dopraw Delikatem Knorr oraz czarnym pieprzem. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Na zapieczony spód wyłóż pieczarki, zalej śmietaną i posyp serem. </br>Następnie na wierzch zapiekanki rozłóż szpinak.</br> Całość wstaw do nagrzanego do 160 °C piekarnika i zapiekaj przez 25-30 minut. </br>Podawaj zarówno na ciepło, jak i na zimno. </br>
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden15'); showHidden('hidden16');"><img src="img/przepisy/posilki/przekaska/wloskie-ciastka-z-warzywami.webp"  /></a>
                    <figcaption>Włoskie ciastka z warzywami</figcaption>
                </div>
        </figure>
                <div id="hidden15" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                ciasto francuskie 1 opakowanie </br>
                Mieszanka Włoska Knorr 1 łyżeczka </br>
                szpinak świeży 2 pęczki </br>
                pomidory suszone w oliwie 10 sztuk </br>
                ząbek czosnku 1 sztuka</br>
                cebula 1 sztuka </br>
                oliwa z suszonych pomidorów 4 łyżki  </br>
                parmezan starty 4 łyżki </br>
                jajko 1 sztuka  </br>
                </div>
                <div id="hidden16" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Na rozgrzanej oliwie przesmaż czosnek oraz cebulę. </br>Pomidory pokrój w paski i dodaj wraz ze szpinakiem na patelnię.  </br>
                    <b style="font-size:16px;">Krok 2:</b>
                    Farsz dopraw do smaku przyprawą włoską.  </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Płat ciasta rozłóż. Wyłóż farsz i zwiń jak roladę. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Zwinięte ciasto pokrój w 2 cm grubości plastry. Ułóż je na blasze wyłożonej pergaminem. </br>
                    <b style="font-size:16px;">Krok 5:</b>
                    Rozłożone ciastka posmaruj rozkłóconym jajkiem i posyp serem. </br>Blachę wstaw do nagrzanego do 180 °C piekarnika na 25 minut. Podawaj na ciepło lub zimno. </br>
                </div>
            </div>
        </div>
        </section>
</body>

</html>