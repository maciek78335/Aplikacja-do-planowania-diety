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
        .obiad img {
            margin-top: 10px;
            width: 300px;
            height: 250px;
            position: fixed-top;
        }

        .obiad figcaption {
            margin-top: 10px;
            color: white;
            font-size: 20px;
        }

    </style>

</head>

<body style="color:white">
<?php require_once 'nawigacja.php' ?>
    <section class="obiad">
        <div class="container" >
        <?php require_once 'scrollUp.php' ?>
            <div class="row">
                <div class="col-12">
                    <figure><a href="javascript: showHidden('hidden1'); showHidden('hidden2');"> <img src="img/przepisy/posilki/obiad/zapiekanka-z-kurczakiem.webp" /></a>
                        <figcaption>Zapiekanka z kurczakiem, mozarellą i pomidorami</figcaption>
                </div>
                </figure>
                <div id="hidden1" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                    pierś z kurczaka 500 gramów </br>
                    boczek 150 gramów </br>
                    Przyprawa do złotego kurczaka Knorr 3 łyżki</br>
                    ryż 250 gramów</br>
                    cebula 1 sztuka </br>
                    ząbki czosnku 2 sztuki</br>
                    pomidory 2 sztuki </br>
                    ser mozzarella 200 gramów</br>
                    świeżo mielony pieprz </br>
                    olej 15 mililitrów </br>
                    oliwa z oliwek 20 mililitrów
                </div>
                <div id="hidden2" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                    <b style="font-size:16px;">Krok 1:</b> Ugotuj ryż. </br>
                    <b style="font-size:16px;">Krok 2:</b>

                    Na rozgrzanym na patelni oleju smaż pokrojoną w kostkę cebulę</br> wraz z pokrojonym w paski bekonem, aż bekon będzie złocisty. </br>

                    <b style="font-size:16px;">Krok 3:</b>

                    Dodaj na patelnię pokrojoną pierś z kurczaka i posiekany czosnek </br> i smaż przez kolejne 5-8 minut, aż kurczak będzie gotowy. </br>
                    <b style="font-size:16px;">Krok 4:</b>

                    Dodaj na patelnię ryż i dokładnie wymieszaj go z kurczakiem i boczkiem, </br> po czym przełóż do żaroodpornego naczynia. </br>
                    <b style="font-size:16px;">Krok 5:</b>

                    Pokrój mozzarellę i pomidory w plastry i wykładaj na ryż na przemian: </br> mozzarella, pomidor, mozarella… </br>
                    <b style="font-size:16px;">Krok 6:</b>

                    Polej oliwą z oliwek. </br>
                    <b style="font-size:16px;">Krok 7:</b>

                    Piecz w piekarniku w 180 °C przez 10-15 minut. </br>
                </div>

            <div class="col-12">
                <figure><a href="javascript: showHidden('hidden3'); showHidden('hidden4');"> <img src="img/przepisy/posilki/obiad/curry-z-kurczaka.webp" /></a>
                    <figcaption>Curry z kurczaka</figcaption>
            </div>
            </figure>
            <div id="hidden3" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
                ryż 150 gramów </br>
                pierś z kurczaka 2 sztuki </br>
                Fix Smażony ryż po chińsku Knorr 1 opakowanie </br>
                pomidor 3 sztuki </br>
                biała cebula 2 sztuki </br>
                zielony groszek 80 gramów </br>
                papryczka chili czerwona 1 sztuka </br>
                Curry Knorr 2 łyżeczki </br>
                Kmin rzymski z Indii mielony Knorr 1 łyżeczka </br>
                Gałka muszkatołowa z Indonezji Knorr 1 łyżeczka </br>
                ząbek czosnku 4 sztuki </br>
                sok z limonek 2 sztuki </br>
                bulion 1 szklanka </br>
                Cynamon z Wietnamu Knorr 1 szczypta </br>
                jogurt 100 mililitrów </br>
            </div>
            <div id="hidden4" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
                <b style="font-size:16px;">Krok 1:</b> Ryż ugotuj według wskazówek na opakowaniu tak, aby był sypki. </br> Po ugotowaniu odstaw do ostygnięcia. </br>
                <b style="font-size:16px;">Krok 2:</b>

                W dużym garnku podsmaż na oleju posiekany czosnek, chilli oraz cebulę. </br>

                <b style="font-size:16px;">Krok 3:</b>

                Gdy warzywa się zrumienią dodaj curry, kumin, cynamon i gałkę muszkatołową. </br>Podsmaż chwilę, żeby potrawa nabrała aromatu. </br>
                <b style="font-size:16px;">Krok 4:</b>

                Następnie dodaj rozdrobnione pomidory i sok z limonek i duś </br> przez około 10 minut aż powstanie gęsty sos. </br>
                <b style="font-size:16px;">Krok 5:</b>

                Fix Knorr wymieszaj ze szklanką bulionu. </br> Wlej powstały płyn do pomidorów i całość duś przez około 15 minut, aż sos zgęstnieje. </br>
                <b style="font-size:16px;">Krok 6:</b>

                Kurczaka pokrój w kostkę i wraz z groszkiem wrzuć do sosu. </br>
                <b style="font-size:16px;">Krok 7:</b>

                Do naczynia żaroodpornego wsyp ryż. </br> Następnie zalej go gęstym sosem z mięsem. Naczynie przykryj i piecz w 180 stopniach przez 20 minut. </br> Podawaj polane jogurtem. </br>
            </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden5'); showHidden('hidden6');"> <img src="img/przepisy/posilki/obiad/lasagne.webp" /></a>
                <figcaption>Lasagne</figcaption>
        </div>
        </figure>
        <div id="hidden5" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            cebula 2 sztuki </br>
            ząbek czosnku 2 sztuki 2 sztuki </br>
            Fix Lasagne Knorr 1 opakowanie</br>
            mięso mielone wołowe 500 gramów </br>
            czerwone wino 150 mililitrów </br>
            koncentrat pomidorowy 1 łyżka </br>
            makaron Lasagne 1 opakowanie </br>
            mleko 500 mililitrów </br>
            mąka 3 łyżki </br>
            masło 60 gramów </br>
            ser żółty 150 gramów</br>
            Gałka muszkatołowa z Indonezji Knorr 1 szczypta </br>
            oliwa 3 łyżki </br>
            woda 400 mililitrów
        </div>
        <div id="hidden6" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Cebule i czosnek pokrój w drobną kostkę, wrzuć na rozgrzaną oliwę. </br> Jak tylko się przesmażą dodaj mielone mięso i smaż powoli. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Wlej wino i poczekaj, aż odparuje. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Fix Knorr wymieszaj w 400 mililitrach wody i wlej do mięsa. </br> Całość duś powoli około 20 minut, mięso powinno być miękkie, a sos gęsty. </br>
            <b style="font-size:16px;">Krok 4:</b>

            W tym czasie przygotuj sos beszamel. W rondelku rozpuść masło i wsyp mąkę. </br> Mieszaj, aż mąka połączy się z tłuszczem. </br>
            <b style="font-size:16px;">Krok 5:</b>

            Teraz wlej mleko i energicznie mieszaj tak, aby rozbić wszystkie grudki. </br> Sos zagotuj, dopraw szczyptą soli oraz gałką muszkatołową. </br> Na końcu dodaj do gorącego sosu połowę startego sera (najlepszy będzie o wyrazistym smaku). </br> Mieszaj, aż ser się roztopi. </br>
            <b style="font-size:16px;">Krok 6:</b>

            Najlepiej w kwadratowym lub prostokątnym naczyniu żaroodpornym układaj lasagne. </br> Najpierw posmaruj dno sosem beszamel, następnie układaj surowy makaron tak, </br>aby płaty pokryły dno i lekko zachodziły jeden za drugi. </br>
            <b style="font-size:16px;">Krok 7:</b>

            Następnie ponownie posmaruj makaron sosem beszamel. </br> Później nałóż warstwę mięsa, następnie połóż drugą warstwę makaronu i beszamelu. </br> Czynność powtarzaj do wyczerpania mięsa. </br> Ostatnią warstwę przykryj makaronem i polej po wierzchu obficie pozostałym beszamelem. </br> Na końcu posyp serem i piecz w piekarniku rozgrzanym do 180 °C przez 30 minut. </br>
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden7'); showHidden('hidden8');"> <img src="img/przepisy/posilki/obiad/zapiekane-rurki-po-szwajcarsku.webp" /></a>
                <figcaption>Zapiekane rurki po szwajcarsku</figcaption>
        </div>
        </figure>
        <div id="hidden7" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            makaron rurki 200 gramów</br>
            pierś z kurczaka 150 gramów</br>
            Fix Rurki z kurczakiem w sosie pieczarkowym Knorr 1 opakowanie </br>
            woda 150 mililitrów </br>
            szynka konserwowa 100 gramów </br>
            ogórek konserwowy 4 sztuki </br>
            ser żółty, najlepiej ementaler lub gruyère 200 gramów</br>
            olej 5 łyżek </br>
            śmietana 150 mililitrów </br>
            natka pietruszki 0.5 pęczka</br>
        </div>
        <div id="hidden8" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Makaron ugotuj al dente według zaleceń producenta. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Na patelni rozgrzej olej i podsmaż pierś z kurczaka pokrojoną w paski. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Szynkę i ogórka pokrój w kostkę, dodaj do mięsa. </br>
            <b style="font-size:16px;">Krok 4:</b>

            Całość zalej 150 ml wody. </br>
            <b style="font-size:16px;">Krok 5:</b>

            Fix Knorr wymieszaj ze śmietanką i również wlej na patelnię. </br>
            <b style="font-size:16px;">Krok 6:</b>

            Wszystko zagotuj, dodaj makaron, wymieszaj i przełóż do naczynia żaroodpornego. </br>
            <b style="font-size:16px;">Krok 7:</b>

            Wierzch posyp sporą ilością startego sera i zapiekaj przez 20 minut w 180 °C. </br> Podawaj posypane posiekaną natką pietruszki.

        </div>
        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden9'); showHidden('hidden10');"> <img src="img/przepisy/posilki/obiad/kotlety-mielone-z-pieczarkami-i-serem.webp" /></a>
                <figcaption>Kotlety mielone z pieczarkami i serem</figcaption>
        </div>
        </figure>
        <div id="hidden9" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            mięso mielone wieprzowo-wołowe 500 gramów </br>
            jajko 1 sztuka </br>
            cebula średnia 1 sztuka </br>
            kajzerki (mogą być lekko czerstwe) 2 sztuki </br>
            bułka tarta 100 gramów</br>
            Przyprawa do mięs Knorr 1 łyżka</br>
            pieczarki 400 gramów</br>
            ser żółty starty 200 gramów </br>
            szczypior 1 pęczek </br>
            Delikat przyprawa uniwersalna Knorr 2 łyżki</br>
        </div>
        <div id="hidden10" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Pieczarki pokrój w plastry i podsmaż na patelni, następnie wystudź. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Szczypior drobno posiekaj i dodaj do pieczarek. </br> Całość przypraw Delikatem Knorr i wymieszaj. </br> Następnie dodaj starty ser i ponownie wymieszaj. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Namocz bułkę w wodzie lub mleku. </br> Gdy będzie już miękka odciśnij ją dokładnie. </br>
            <b style="font-size:16px;">Krok 4:</b>

            Namoczoną bułkę połącz z mielonym mięsem, jajkiem, przyprawą do mięs oraz startą cebulą. </br>
            <b style="font-size:16px;">Krok 5:</b>

            Masę wyrób dokładnie ręką. </br> Jeśli będzie zbyt luźna dodaj do niej nieco bułki tartej. </br>
            <b style="font-size:16px;">Krok 6:</b>

            Z mięsa uformuj placuszki. </br> Na środku każdego połóż troszkę farszu, który następnie zawiń w mięso mielone. </br> W ten sposób uformuj kotlety. </br> Gotowe kotlety obtocz w bułce tartej i smaż na rozgrzanym oleju na złoty kolor z obu stron. </br>
            <b style="font-size:16px;">Krok 7:</b>

            Usmażone kotlety podlej kilkoma łyżkami wody a następnie przykryj patelnię, </br> tak aby kotlety chwilę doszły. Kotlety podawaj z ziemniakami i surówką z kiszonego ogórka.
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden11'); showHidden('hidden12');"> <img src="img/przepisy/posilki/obiad/pulpety_gotowane_w_sosie_pomidorowym.webp" /></a>
                <figcaption>Gotowane pulpety w sosie pomidorowym</figcaption>
        </div>
        </figure>
        <div id="hidden11" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            mięso mielone np. z indyka 500 gramów</br>
            Naturalnie Smaczne Klopsiki </br> w sosie pomidorowym Knorr 1 opakowanie</br>
            kajzerka 1 sztuka</br>
            jajko 1 sztuka</br>
            oliwa z oliwek 3 łyżki</br>
            kapary 2 łyżki </br>
            pomidory pelati krojone 1 słoik </br>
            natka pietruszki 1 pęczek </br>
        </div>
        <div id="hidden12" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Kajzerkę namocz w wodzie, dokładnie odciśnij, </br> dodaj do mięsa mielonego. Posiekaj natkę pietruszki. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Połowę opakowania Knorr do pulpetów dodaj do mięsa mielonego, </br> wbij jajko i dokładnie wymieszaj. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Z powstałej masy uformuj małe okrągłe pulpeciki. </br> Obsmaż je delikatnie na rozgrzanej oliwie. </br>
            <b style="font-size:16px;">Krok 4:</b>

            Na patelnie wlej pomidory z puszki, </br> dodaj kapary i pozostałą część opakowania Knorr, </br> całość dokładnie wymieszaj, gotuj pod przykryciem 2 – 3 minuty. </br>Pulpetu podawaj z dowolnym dodatkiem skrobiowym, z wierzchu posyp natką pietruszki </br>
        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden13'); showHidden('hidden14');"> <img src="img/przepisy/posilki/obiad/kolorowe-risotto-z-kurczakiem.webp" /></a>
                <figcaption>Kolorowe risotto z kurczakiem</figcaption>
        </div>
        </figure>
        <div id="hidden13" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            filety z piersi kurczaka 200 gramów </br>
            gotowa mrożona mieszanka warzywna </br> (np. z papryką lub cukinią) 400 gramów </br>
            Bulionetka drobiowa Knorr 1 sztuka </br>
            Przyprawa do kurczaka Knorr </br>
            biała cebula 1 sztuka</br>
            ryż arborio 200 gramów </br>
            Mieszanka ziół i przypraw Zioła prowansalskie Knorr </br>
            starty żółty ser 3 łyżki</br>
            śmietana 4 łyżki </br>
            oliwa 1 łyżka </br>
            masło 20 gramów </br>
            woda 550 mililitrów</br>
        </div>
        <div id="hidden14" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Cebulę drobno pokrój i podsmaż ją w szerokim rondlu </br> na rozgrzanej oliwie wraz z surowym ryżem, przez 1 minutę. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Pierś z kurczaka pokrój w kostkę, </br> oprósz Przyprawą do kurczaka Knorr i obsmaż na patelni. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Do podsmażonego ryżu wlej 300 mililitrów wody oraz jedną bulionetkę Knorr. </br> Duś całość około 12 minut. </br>

            <b style="font-size:16px;">Krok 4:</b>

            Następnie dodaj mieszankę warzyw, kurczaka, </br> zioła prowansalskie oraz 250 mililitrów wody i duś kolejne 6 minut. </br>

            <b style="font-size:16px;">Krok 5:</b>

            Pod koniec duszenia dodaj starty żółty ser, śmietanę oraz masło. </br> Energicznie mieszaj i odstaw z ognia na kilka minut. </br> Natychmiast podawaj. </br>

        </div>

        <div class="col-12">
            <figure><a href="javascript: showHidden('hidden15'); showHidden('hidden16');"> <img src="img/przepisy/posilki/obiad/schab-po-meksykansku.webp" /></a>
                <figcaption>Schab po meksykańsku</figcaption>
        </div>
        </figure>
        <div id="hidden15" style="display:none; margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Składniki: </strong></br>
            schab 150 gramów </br>
            Fix Chili con carne Knorr 1 opakowanie </br>
            żółta papryka 100 gramów</br>
            cukinia 5 dekagramów </br>
            kukurydza z puszki 1 łyżka </br>
            ząbek czosnku 1 sztuka </br>
            ryż np. basmati 200 gramów </br>
            olej 1 łyżka </br>
            woda 300 mililitrów</br>
        </div>
        <div id="hidden16" style="display:none;             margin-left:30px; margin-top:10px; float:left;"><strong style="font-size:20px;">Przygotowanie krok po kroku: </strong></br>
            <b style="font-size:16px;">Krok 1:</b> Pokrój mięso w paski i podsmaż na rozgrzanej patelni. </br>
            <b style="font-size:16px;">Krok 2:</b>

            Paprykę oraz cukinię pokrój w paski, a czosnek rozetrzyj. </br> Następnie dodaj je do mięsa wraz z kukurydzą i duś razem przez kilka minut. </br>

            <b style="font-size:16px;">Krok 3:</b>

            Rozmieszaj Fix Chili Con Carne Knorr w 300 mililitrach zimnej wody po czym wlej do mięsa. </br> Gotuj jeszcze przez 10 minut. Podawaj danie z ryżem.
        </div>
        </div>
        </div>
    </section>
</body>

</html>