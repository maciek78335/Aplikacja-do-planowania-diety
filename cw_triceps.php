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
                    <img src="img/cw_triceps/tr_prostowanie_ramion.jpg" alt="Prostowanie ramion z linkami wyciągu górnego">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Prostowanie ramion z linkami wyciągu górnego
                        </span>
                    </span>
                </span>
            </a>
            <div id="hidden1" style="display:none; ">Opis ćwiczenia</div>
            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_triceps/tr_wycisk_sztangi_wasko.jpg" alt="Wyciskanie sztangi na ławce poziomej wąsko">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Wyciskanie sztangi na ławce poziomej wąsko
                        </span>
                    </span>
                </span>
            </a>
           
            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_triceps/tr_francuskie_wyciskanie.jpg" alt="Rozpiętki ze sztangielkami w leżeniu na ławce skośnej">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Rozpiętki ze sztangielkami w leżeniu na ławce skośnej
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_triceps/tr_wycisk_sztangielki_jednoracz_zza_karku.jpg" alt="Wyciskanie sztangielki jednorącz zza karku">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Wyciskanie sztangielki jednorącz zza karku
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_triceps/tr_pompki_lawka.jpg" alt="Uginanie ramion z oparciem dłoni na ławeczce">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Uginanie ramion z oparciem dłoni na ławeczce
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_triceps/tr_pompki_porecze_triceps.jpg" alt="Pompki na triceps na poręczach">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Pompki na triceps na poręczach
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_triceps/tr_prostowanie_przedramion.jpg" alt="Prostowanie przedramion w pionie ze sztangielką trzymaną oburącz">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                        Prostowanie przedramion w pionie ze sztangielką trzymaną oburącz
                        </span>
                    </span>
                </span>
            </a>

        </div>
    </div>
</body>

</html>