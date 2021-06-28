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
                    <img src="img/cw_biceps/zginanie_ramion_sztanga.jpg" alt="Zginanie ramion ze sztangą nachwytem">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Zginanie ramion ze sztangą nachwytem
                        </span>
                    </span>
                </span>
            </a>
            <div id="hidden1" style="display:none; ">Opis ćwiczenia</div>
            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_biceps/sztanga_modlitewnik.jpg" alt="Zginanie ramion z hantlami na modlitewniku">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Zginanie ramion z hantlami na modlitewniku
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_biceps/uginanie_ramion_hantle.jpg" alt="Uginanie ramion z hantlami nachwytem">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Uginanie ramion z hantlami nachwytem
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_biceps/unoszenie_przedramienia_jednoracz.jpg" alt="Unoszenie przedramienia jednorącz">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Unoszenie przedramienia jednorącz
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_biceps/sztangielki_mlotkowy.jpg" alt="Unoszenie sztangielek w chwycie młotkowym">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Unoszenie sztangielek w chwycie młotkowym
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_biceps/biceps_wyciag_dolny.jpg" alt="Unoszenie przedramion na wyciągu dolnym">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Unoszenie przedramion na wyciągu dolnym
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_biceps/biceps_mlotkowy_lawka.jpg" alt="Zginanie przedramion w chwycie młotkowym siedząc na ławce">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Zginanie przedramion w chwycie młotkowym siedząc na ławce
                        </span>
                    </span>
                </span>
            </a>

        </div>
    </div>

</body>

</html>