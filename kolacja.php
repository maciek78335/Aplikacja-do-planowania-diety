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
        .kolacja img {
            margin-top: 10px;
            width: 300px;
            height: 250px;
        }

        .kolacja figcaption {
            margin-top: 10px;
            color: white;
            font-size: 20px;
        }
    </style>

</head>

<body style="color:white">
<?php require_once 'nawigacja.php' ?>
    <section class="kolacja">
        <div class="container">
        <?php require_once 'scrollUp.php' ?>
            <div class="row">
                <div class="col-12">
                    <figure>
                        <a href="javascript: showHidden('hidden1'); showHidden('hidden2');"><img src="img/przepisy/posilki/kolacja/nalesniki-bolognese.webp" /></a>
                        <figcaption>Naleśniki z kurczakiem w sosie bolognese</figcaption>
                </div>
                </figure>
                <div id="hidden1" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    gotowe naleśniki 5 sztuk </br>
                    Naturalnie smaczne Spaghetti Bolognese Knorr 1 opakowanie </br>
                    filet z piersi kurczaka 200 gramów </br>
                    marchewka 1 sztuka </br>
                    ser żółty ementaler 100 gramów </br>
                    kwaśna śmietana 18% 100 mililitrów</br>
                </div>
                <div id="hidden2" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Rozgrzej piekarnik do 200°C. Pokrój w kostkę mięso i marchewkę.</br> Zetrzyj ser na grubej tarce. Przesmaż mięso na złoto w 1 łyżce oleju.</br> Dodaj 200 ml wody i zawartość opakowania Knorr Naturalnie smaczne - Spaghetti Bolognese. </br>
                    <b style="font-size:16px;">Krok 2:</b>
                    Wymieszaj, doprowadź do wrzenia i gotuj przez ok. 5 minut.</br> Ochłodź. Wypełnij naleśniki farszem mięsnym i zroluj. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Ułóż naleśniki w dobrze natłuszczonym naczyniu do zapiekania.</br> Rozprowadź na nich śmietanę i posyp serem.</br> Piecz przez ok. 10 minut, do momentu gdy ser roztopi się i lekko zrumieni na złoto. </br>
                </div>

                <div class="col-12">
                    <figure>
                        <a href="javascript: showHidden('hidden3'); showHidden('hidden4');"><img src="img/przepisy/posilki/kolacja/parowki-w-ciescie-z-warzywami.webp" /></a>
                        <figcaption>Parówki w cieście francuskim z warzywami</figcaption>
                </div>
                </figure>
                <div id="hidden3" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    ciasto francuskie 1 opakowanie </br>
                    Przyprawa w Mini kostkach Smażona cebula Knorr 2 sztuki </br>
                    parówki 8 sztuk </br>
                    cukinia 1 sztuka </br>
                    papryka czerwona 1 sztuka </br>
                    pieczarki 4 sztuki </br>
                    żółty ser 8 plastrów </br>
                    jajko 1 sztuka
                </div>
                <div id="hidden4" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Ciasto francuskie pokrój na 8 jednakowych pasków. </br>
                    <b style="font-size:16px;">Krok 2:</b>
                    Cukinię oraz pieczarki umyj i pokrój w cienkie paski, a paprykę w cienkie piórka. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Na każdy kawałek ciasta wyłóż plasterki pieczarek oraz cukinii.</br> Posyp je pokruszoną mini kostką Knorr, a następnie połóż paprykę i plasterek sera. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Parówki połóż na wierzchu tak, aby wystawały za ciasto i zawiń. </br>
                    <b style="font-size:16px;">Krok 5:</b>

                    Na blachę do pieczenia wyłóż papier pergaminowy i przełóż roladki.</br> Posmaruj je roztrzepanym jajkiem i piecz w piekarniku w 180 °C przez 20 minut.</br> Takie danie doskonale smakuje jako letnia przekąska na świeżym powietrzu.
                </div>

                <div class="col-12">
                    <figure>
                        <a href="javascript: showHidden('hidden5'); showHidden('hidden6');"><img src="img/przepisy/posilki/kolacja/makaron-z-kurczakiem-i-pieczarkami.webp" /></a>
                        <figcaption>Makaron z kurczakiem i pieczarkami</figcaption>
                </div>
                </figure>
                <div id="hidden5" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    filet z kurczaka 200 gramów </br>
                    Delikat przyprawa uniwersalna Knorr </br>
                    makaron rurki 300 gramów </br>
                    pieczarki 300 gramów </br>
                    cebula 1 sztuka </br>
                    tarty ser (gouda lub parmezan) 100 gramów</br>
                    śmietana 250 mililitrów </br>
                    olej 2 łyżki
                </div>
                <div id="hidden6" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Ugotuj makaron na sposób al dente w dużej ilości wody. </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Pokrój mięso i cebulę w kostkę, pieczarki w ćwiartki. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Rozgrzej olej w średniej wielkości garnku i zeszklij na nim cebulę. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Następnie dodaj mięso oraz pieczarki i wszystko razem podsmaż dokładnie,</br> doprawiając odrobiną przyprawy Knorr. </br>
                    <b style="font-size:16px;">Krok 5:</b>

                    Zalej całość śmietaną i połącz z makaronem, po czym wymieszaj. </br>
                    <b style="font-size:16px;">Krok 6:</b>
                    Dopraw na koniec kilkoma kroplami soku z cytryny. Serwuj makaron posypany serem.
                </div>

                <div class="col-12">
                    <figure>
                        <a href="javascript: showHidden('hidden7'); showHidden('hidden8');"><img src="img/przepisy/posilki/kolacja/kanapki-kolacja.webp" /></a>
                        <figcaption>Kanapka wrap z warzywami</figcaption>
                </div>
                </figure>
                <div id="hidden7" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    placki tortilla 2 sztuki </br>
                    papryka czerwona 1 sztuka </br>
                    ogórek świeży 0.25 sztuki</br>
                    pomidor (sam miąższ, bez nasion) 1 sztuka </br>
                    Majonez Hellmann's Oryginalny 1 łyżka </br>
                    Ketchup Hellmann's Pikantny 1 łyżka</br>
                    sałata masłowa liście 4 sztuki </br>
                    ser żółty topiony 4 plastry
                </div>
                <div id="hidden8" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Placki tortilla opiecz krótko na rozgrzanej patelni i wystudź.</br> Na każdym z nich połóż sałatę oraz ser. </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Paprykę, ogórka oraz pomidora pokrój w kostkę, przełóż do miseczki.</br> Majonez wymieszaj z ketchupem i połącz z warzywami, wymieszaj. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Przygotowane warzywa nałóż na placki. Tortille zwiń ścisło pamiętając,</br> aby starannie zawinąć brzegi do środka - zawartość kanapki nie będzie wydostawać się na zewnątrz.</br> Gotowe kanapki zawiń w papier śniadaniowy.
                </div>

                <div class="col-12">
                    <figure>
                        <a href="javascript: showHidden('hidden9'); showHidden('hidden10');"><img src="img/przepisy/posilki/kolacja/nalesniki-a-la-golabki.webp" /></a>
                        <figcaption>Naleśniki a la gołąbki</figcaption>
                </div>
                </figure>
                <div id="hidden9" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    mleko 1 szklanka </br>
                    jajka 2 sztuki </br>
                    mąka 1.5 szklanki </br>
                    woda mineralna 0.2 szklanki </br>
                    olej 30 mililitrów </br>
                    sól 1 szczypta </br>
                    natka pietruszki </br>
                    tłuszcz do smażenia 1 łyżka </br>
                    <b style="font-size:20px;">Nadzienie: </b> </br>
                    mięso mielone drobiowe 300 gramów </br>
                    Fix Gołąbki bez zawijania Knorr 1 opakowanie </br>
                    ugotowany ryż 100 gramów </br>
                    koncentrat pomidorowy 1 opakowanie </br>
                    sól do smaku 1 szczypta </br>
                    Pieprz czarny z Wietnamu mielony Knorr 1 szczypta </br>
                    cukier do smaku </br>
                    bazylia </br>
                    woda 250 ml </br>
                </div>
                <div id="hidden10" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Przygotuj ciasto mieszając ze sobą:</br> mleko, jajka, mąkę, wodę, olej, a także szczyptę soli oraz łyżkę posiekanej natki.</br> Gdy ciasto uzyska jednolitą, gładką konsystencję, smaż naleśniki.</br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Mięso mielone przełóż do miski,</br> dodaj ugotowany ryż oraz Fix Knorr i wymieszaj. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Na usmażone naleśniki nakładaj po dużej łyżce mięsnego farszu,</br> a następnie składaj w kopertę. </br>Gdy wszystkie będą już gotowe, ułóż je w żaroodpornym naczyniu - jeden obok drugiego. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    W miseczce rozmieszaj dobrze koncentrat pomidorowy z 250 mililitrami letniej wody,</br> dodaj pokrojoną bazylię i dopraw solą, pieprzem i cukrem.</br> Przygotowanym sosem zalej naleśniki,</br> przykryj naczynie i wstaw do nagrzanego piekarnika do 170 stopni na około 35 minut.</br> Podawaj z sosem, skropione śmietaną i udekorowane listkami świeżej bazylii.
                </div>

            <div class="col-12">
                <figure>
                    <a href="javascript: showHidden('hidden11'); showHidden('hidden12');"><img src="img/przepisy/posilki/kolacja/ryz-z-warzywami-i-miesem.webp" /></a>
                    <figcaption>Ryż z warzywami i mięsem</figcaption>
            </div>
            </figure>
            <div id="hidden11" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                karkówka 250 gramów </br>
                ryż 500 gramów </br>
                Rosół z kury Knorr 1 sztuka </br>
                woda 1 litr </br>
                papryka czerwona 1 sztuka </br>
                papryka zielona 1 sztuka </br>
                cebula 1 sztuka </br>
                ząbek czosnku 1 sztuka </br>
                olej 4 łyżki
            </div>
            <div id="hidden12" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                <b style="font-size:16px;">Krok 1:</b> Mięso i paprykę pokrój w niedużą kostkę i smaż w rondlu aż będą złociste.</br> Dodaj cebulę pokrojoną w piórka i posiekany czosnek. </br>
                <b style="font-size:16px;">Krok 2:</b>

                Wsyp ryż i smaż kilka minut, a następnie dodaj 1 litr wody. </br>

                <b style="font-size:16px;">Krok 3:</b>

                Podkreśl bogaty smak dania doprawiając je kostką Knorr.</br> Wymieszaj i gotuj, aż ryż wchłonie płyn.
            </div>

        <div class="col-12">
            <figure>
                <a href="javascript: showHidden('hidden13'); showHidden('hidden14');"><img src="img/przepisy/posilki/kolacja/spaghetti-bolognese.webp" /></a>
                <figcaption>Spaghetti bolognese z warzywami i grzybami</figcaption>
        </div>
        </figure>
        <div id="hidden13" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            makaron spaghetti 200 gramów </br>
            krojone pomidory z puszki 2 opakowania </br>
            Naturalnie smaczne Spaghetti Bolognese Knorr 1 opakowanie </br>
            cukinia 1 sztuka </br>
            papryka 1 sztuka </br>
            pieczarki 150 gramów </br>
            cebula 1 sztuka </br>
            garść świeżej bazylii 1 szczypta
            olej 1 łyżka
        </div>
        <div id="hidden14" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Pokrój drobno cebulę. Pokrój cukinię i paprykę w drobną kostkę.</br> Dokładnie umyj pieczarki, osusz i pokrój na plasterki.</br> Ugotuj makaron wg. instrukcji na opakowaniu. Odcedź. </br>
            <b style="font-size:16px;">Krok 2:</b>

            W czasie gdy makaron się gotuje </br> przesmaż cebulę w 1 łyżce oleju do momentu gdy zacznie zmieniać kolor.</br> Dodaj pieczarki, cukinię i paprykę. Smaż na dość mocnym ogniu przez 5-7 minut. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Wymieszaj pomidory z puszki z zawartością opakowania Knorr Naturalnie</br> smaczne Spaghetti Bolognese.</br> Doprowadź do wrzenia, zmniejsz ogień i gotuj przez 10 min.</br> Dodaj warzywa i gotuj jeszcze 2-3 minuty.</br> Wymieszaj makaron z sosem i podawaj z listkami świeżej bazylii.
        </div>

        <div class="col-12">
            <figure>
                <a href="javascript: showHidden('hidden15'); showHidden('hidden16');"><img src="img/przepisy/posilki/kolacja/kasza-gryczana-z-warzywami.webp" /></a>
                <figcaption>Kasza gryczana z warzywami </figcaption>
        </div>
        </figure>
        <div id="hidden15" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            kasza gryczana 2 opakowania </br>
            cebula 1 sztuka </br>
            cukinia 1 sztuka </br>
            pomidory pelatti z puszki 1 opakowanie </br>
            bakłażan 1 sztuka </br>
            ząbki czosnku 3 sztuki </br>
            żółta papryka 1 sztuka </br>
            czerwona papryka 1 sztuka </br>
            zielona papryka 1 sztuka </br>
            kapary 2 łyżki </br>
            ostra papryka chilli 1 sztuka </br>
            oliwa z oliwek 100 mililitrów </br>
            Bulion na włoszczyźnie Knorr 1 sztuka </br>
            Oregano z Turcji Knorr 1 łyżka </br>
            Tymianek z Polski Knorr 1 łyżeczka </br>
            gałązka rozmarynu 1 sztuka </br>
            jogurt naturalny 100 gramów </br>
            Pieprz czarny z Wietnamu mielony Knorr 1 szczypta </br>
            sól 1 szczypta</br>
            cukier 1 szczypta
        </div>
        <div id="hidden16" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Cukinię bakłażana paprykę i cebulę pokrój w kostkę grubości od 1 do 1,5 cm.</br> Warzywa przełóż do miski obtocz w oliwie, przełóż na blachę wyłożoną pergaminem </br>wstaw do nagrzanego do 200*C piekarnika na około 20 do 30 minut.</br> Warzywa w miedzy czasie przemieszaj co najmniej dwa razy. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Posiekaj czosnek, chili i rozmaryn. </br>

            <b style="font-size:16px;">Krok 3:</b>

            W 400 ml gotującej się wody rozpuść kostkę rosołową.</br> Powstałym bulionem zalej kaszę gotuj,</br> najlepiej w kąpieli wodnej aż całkowicie wchłonie wodę i zrobi się miękka. </br>
            <b style="font-size:16px;">Krok 4:</b>

            W garnku rozgrzej oliwę podsmaż na niej czosnek z chili,</br> dodaj puszkę pomidorów pelatti, kapary, jogurt upieczone warzywa </br> oraz tymianek rozmaryn i oregano.</br> Sos możesz doprawić odrobiną soli i cukru,</br> o ile zachodzi taka potrzeba. Do gorącego sosu przełóż kasze i wymieszaj.
        </div>

        <div class="col-12">
            <figure>
                <a href="javascript: showHidden('hidden17'); showHidden('hidden18');"><img src="img/przepisy/posilki/kolacja/nalesniki-a-la-kebab.webp" /></a>
                <figcaption>Naleśniki à la kebab </figcaption>
        </div>
        </figure>
        <div id="hidden17" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            <strong style="font-size:15px; float:left;">Ciasto: </strong></br>
            mleko 1 szklanka </br>
            jajka 2 sztuki </br>
            mąka 1.5 szklanki </br>
            sól 1 szczypta </br>
            olej 30 mililitrów </br>
            tłuszcz do smażenia 3 łyżki</br>
            <strong style="font-size:15px; float:left;">Farsz: </strong></br>
            piersi z kurczaka 400 gramów </br>
            Fix Kebab z sosem czosnkowym Knorr 2 łyżki </br>
            cebula 2 sztuki </br>
            ser żółty 200 gramów</br>
            jogurt naturalny lub majonez 100 gramów </br>
            olej roślinny 3 łyżki
        </div>
        <div id="hidden18" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Przygotuj ciasto na naleśniki, mieszając ze sobą:</br> mleko, jajka, mąkę, wodę, olej oraz odrobinę soli. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Miksuj wszystko razem do momentu uzyskania ciasta o gładkiej, jednolitej konsystencji. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Usmaż naleśniki. </br>
            <b style="font-size:16px;">Krok 4:</b>

            Piersi z kurczaka pokrój w paski. Fix Knorr wymieszaj z olejem,</br> natrzyj nim mięso i obsmaż je na patelni. </br>
            <b style="font-size:16px;">Krok 5:</b>

            Cebulę pokrój w plastry, dodaj na patelnię i smaż przez chwilę.</br> Całość wystudź i wymieszaj z tartym serem. </br>
            <b style="font-size:16px;">Krok 6:</b>
            Farsz zawiń w naleśniki, ułóż w żaroodpornym naczyniu i piecz</br> przez 20 minut w temperaturze 190 °C. Podawaj z sosem czosnkowym.
        </div>

        <div class="col-12">
            <figure>
                <a href="javascript: showHidden('hidden19'); showHidden('hidden20');"><img src="img/przepisy/posilki/kolacja/tatar-z-lososia-wedzonego.webp" /></a>
                <figcaption>Tatar z łososia wędzonego z warzywami </figcaption>
        </div>
        </figure>
        <div id="hidden19" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            papryka czerwona 1 sztuka </br>
            papryka zielona 1 sztuka </br>
            Przyprawa do kurczaka Knorr 1 łyżeczka </br>
            Ketchup Hellmann's Pikantny 4 łyżki</br>
            Sos Hellmann's Czosnkowy z jogurtem 2 łyżki </br>
            cukinia 1 sztuka </br>
            bakłażan 1 sztuka </br>
            pieczarki 12 sztuk </br>
            oliwa z oliwek 5 łyżek</br>
            ząbki czosnku 2 sztuki</br>
            tymianek świeży, gałązka 2 sztuki </br>
            gałązka rozmarynu </br>
            świeża bazylia kilka listków do dekoracji </br>
            ocet balsamiczny 1 łyżeczka </br>
            cukier 0.5 łyżeczki </br>
            Pieprz czarny z Wietnamu mielony Knorr </br>
        </div>
        <div id="hidden20" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Posiekaj drobno łososia.</br>
            <b style="font-size:16px;">Krok 2:</b>

            Ugotuj jajka na twardo, pokrój je w drobną kostkę, dodaj do łososia. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Umyj ogórka oraz paprykę.</br> Pokrój w drobną kostkę, oliwki w plasterki, następnie całość dodaj do łososia. </br>
            <b style="font-size:16px;">Krok 4:</b>

            Na koniec dodaj 3 łyżki oliwy i pokruszoną Przyprawę</br> w mini kostkach Smażona cebula oraz Pietruszka Knorr. Dokładnie wymieszaj, następnie podawaj.
        </div>

        <div class="col-12">
            <figure>
                <a href="javascript: showHidden('hidden21'); showHidden('hidden22');"><img src="img/przepisy/posilki/kolacja/warzywa-z-grilla.webp" /></a>
                <figcaption>Warzywa z grilla </figcaption>
        </div>
        </figure>
        <div id="hidden21" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            filety z kurczaka 4 sztuki </br>
            Fix Nagetsy </br> z sosem meksykańskim Knorr 1 opakowanie </br>
            jajka 3 sztuki </br>
            Majonez Hellmann's Babuni 5 łyżek </br>
            Ketchup Hellmann's Łagodny 4 łyżki </br>
            ser żółty tarty 50 gramów </br>
            woda 2 łyżki </br>
            natka pietruszki 2 łyżki
        </div>
        <div id="hidden22" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Wszystkie warzywa - papryki, cukinię oraz bakłażana pokrój w duże kawałki.</br> Pieczarki sparz krótko we wrzącej, lekko osolonej wodzie z dodatkiem octu, odcedź. </br>
            <b style="font-size:16px;">Krok 2:</b>

            W miseczce wymieszaj oliwę, przyprawę Knorr, ocet, cukier, posiekany czosnek oraz zioła.</br> Przygotowaną marynatą polej pokrojone warzywa i pieczarki.</br> Całość wymieszaj. Pozostaw na kilka minut w chłodnym miejscu. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Ketchup Hellmann’s wymieszaj z sosem Hellmann's Czosnkowym.</br> Tak przygotowany dip przełóż do miseczki i udekoruj listkami bazylii. </br>
            <b style="font-size:16px;">Krok 4:</b>

            Zamarynowane warzywa wyłóż na aluminiową tackę i opiecz na mocno rozgrzanym grillu ok. 6-8 minut.</br> Gotowe, grillowane warzywa podawaj z przygotowanym koktajlowym sosem.
        </div>

        <div class="col-12">
            <figure>
                <a href="javascript: showHidden('hidden23'); showHidden('hidden24');"><img src="img/przepisy/posilki/kolacja/warzywa-po-indyjsku.webp" /></a>
                <figcaption>Warzywa po indyjsku </figcaption>
        </div>
        </figure>
        <div id="hidden23" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            bakłażan 1 sztuka </br>
            cukinia 1 sztuka </br>
            Przyprawa do grilla Knorr 2 łyżki</br>
            papryka czerwona 1 sztuka </br>
            marchewka 1 sztuka </br>
            cebula czerwona 2 sztuki </br>
            ząbki czosnku 3 sztuki </br>
            świeża kolendra 0.5 pęczka </br>
            imbir małe kłącze 1 sztuka </br>
            olej 0.3 szklanki </br>
            olej sezamowy 0.3 szklanki </br>
            cytryna 2 sztuki </br>
            garam masala 1 łyżka
        </div>
        <div id="hidden24" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Bakłażana i cukinię pokrój w plastry. </br>Marchewkę obierz i pokrój podobnie. Paprykę oczyść z gniazd nasiennych i również pokrój w mniejsze kawałki.</br> Cebule pokrój w plastry. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Do miski wlej oba oleje, sok z cytryn, dodaj drobno posiekane chilli oraz czosnek. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Wsyp garam masalę, świeżo starty imbir oraz przyprawę Knorr. </br>
            <b style="font-size:16px;">Krok 4:</b>

            Do marynaty wsyp warzywa.</br> Delikatnie wszystko wymieszaj i pozostaw na 30 minut. </br>
            <b style="font-size:16px;">Krok 5:</b>

            Warzywa grilluj, aż będą dobrze zarumienione.</br> Po usmażeniu przełóż wszystkie do miski, w której pozostała marynata. </br>
            <b style="font-size:16px;">Krok 6:</b>
            Na końcu dodaj posiekaną kolendrę i natychmiast podawaj.
        </div>
        </div>
        </div>
    </section>

</body>

</html>