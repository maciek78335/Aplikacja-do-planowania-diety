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
                    <img src="img/cw_dwuglowe_uda/dw_zginanie_nog_hantla.jpg" alt="Zginanie nóg z hantlą między stopami">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Zginanie nóg z hantlą między stopami
                        </span>
                    </span>
                </span>
            </a>
            <div id="hidden1" style="display:none; ">Opis ćwiczenia</div>
            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_dwuglowe_uda/dw_zginanie_nog_maszyna.jpg" alt="Zginanie nóg na maszynie leżąc">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Zginanie nóg na maszynie leżąc
                        </span>
                    </span>
                </span>
            </a>
            
            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_dwuglowe_uda/dw_unoszenie_bioder_sztanga.jpg" alt="Unoszenie bioder ze sztangą w oparciu o ławeczkę">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Unoszenie bioder ze sztangą w oparciu o ławeczkę </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_dwuglowe_uda/dw_unoszenie_bioder.jpg" alt="Unoszenie bioder z uniesionymi palcami stóp">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Unoszenie bioder z uniesionymi palcami stóp
                        </span>
                    </span>
                </span>
            </a>

            <a class="atlas_exercise" >
                <span class="exercise-img">
                    <img src="img/cw_dwuglowe_uda/dw_zginanie_podudzia.jpg" alt="Zginanie podudzia z linką wyciągu stojąc">
                </span>
                <span class="exercise-description">
                    <span class="exercise-title">
                        <span class="title-exercise">
                            Zginanie podudzia z linką wyciągu stojąc
                        </span>
                    </span>
                </span>
            </a>


        </div>
    </div>


</body>

</html>