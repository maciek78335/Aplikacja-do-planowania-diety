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


</head>

<body>
<?php require_once 'nawigacja.php'; ?>
        <div class="exercises-list">
            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_brzuch/brz_brzuszki_obciazenie.jpg" alt="Brzuszki z obciążeniem">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Brzuszki z obciążeniem
                        </span>
                    </span>
                </span>
            </a>
            <div id="hidden1" style="display:none; ">Opis ćwiczenia</div>
            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_brzuch/brz_do_kostek.jpg" alt="Naprzemienne sięganie do kostek leżąc">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Naprzemienne sięganie do kostek leżąc
                        </span>
                    </span>
                </span>
            </a>
            
            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_brzuch/brz_przyciag_kolan.jpg" alt="Przyciąganie kolan do klatki piersiowej w zwisie na drążku">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                       Przyciąganie kolan do klatki piersiowej w zwisie na drążku
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_brzuch/brz_nogi_do_tylu.jpg" alt="Przenoszenie nóg do tyłu">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Przenoszenie nóg do tyłu
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_brzuch/brz_sklony_tulowia.jpg" alt="Skłony tułowia przy wyciągu">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Skłony tułowia przy wyciągu
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_brzuch/brz_skrety_tulowia.jpg" alt="Skręty tułowia z unoszeniem nóg">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Skręty tułowia z unoszeniem nóg
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_brzuch/brz_zginanie_tulowia_maszyna.jpg" alt="Zginanie tułowia na maszynie siedząc">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                           Zginanie tułowia na maszynie siedząc
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_brzuch/brz_wznosy_pilka.jpg" alt="Wznosy tułowia na piłce do ćwiczeń">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Wznosy tułowia na piłce do ćwiczeń
                        </span>
                    </span>
                </span>
            </a>

        </div>
    </div>

</body>

</html>