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
.treningi img {
    margin-top: 10px;
    max-width: 270px;
    height: 250px;
}

.treningi img:hover {
    transition: transform 2s;
    transform: scale(1.05);
}

.treningi figcaption {
    margin-top: 10px;
    color: white;
    font-size: 20px;
    float: left;
}

    </style>

</head>

<body>
 <?php require_once 'nawigacja.php' ?>

    <main>
        <section class="treningi">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 ">
                        <figure><a href=cw_klatka_piersiowa.php><img class="img-thumbnail" src="img/cw_klatka/klatka.jpg" /></a>
                            <figcaption>Ćwiczenia na klatkę piersiową</figcaption>
                    </div>
                    </figure>
                    <div class="col-sm-6 col-lg-3">
                        <figure><a href=cw_plecy.php><img class="img-thumbnail" src="img/cw_plecy/plecy.jpg" /></a>
                            <figcaption>Ćwiczenia na plecy</figcaption>
                    </div>
                    </figure>
                    <div class="col-sm-6 col-lg-3">
                        <figure><a href=cw_triceps.php><img class="img-thumbnail" src="img/cw_triceps/triceps.jpg" /></a>
                            <figcaption>Ćwiczenia na triceps</figcaption>
                    </div>
                    </figure>
                    <div class="col-sm-6 col-lg-3">
                        <figure><a href=cw_biceps.php><img class="img-thumbnail" src="img/cw_biceps/biceps.jpg" /></a>
                            <figcaption>Ćwiczenia na biceps</figcaption>
                    </div>
                    </figure>
                    <div class="col-sm-6 col-lg-3">
                        <figure><a href=cw_dwuglowe_uda.php><img class="img-thumbnail" src="img/cw_dwuglowe_uda/dwuglowe_uda.jpg" /></a>
                            <figcaption>Ćwiczenia na mięśnie dwugłowe uda</figcaption>
                    </div>
                    </figure>
                    <div class="col-sm-6 col-lg-3">
                        <figure><a href=cw_czworoglowe_uda.php><img class="img-thumbnail" src="img/cw_czworoglowe_uda/czworoglowe_uda.jpg" /></a>
                            <figcaption>Ćwiczenia na mięśnie czworogłowe uda</figcaption>
                    </div>
                    </figure>
                    <div class="col-sm-6 col-lg-3">
                        <figure><a href=cw_barki.php><img class="img-thumbnail" src="img/cw_barki/barki.jpg" /></a>
                            <figcaption>Ćwiczenia na barki</figcaption>
                    </div>
                    </figure>
                    <div class="col-sm-6 col-lg-3">
                        <figure><a href=cw_brzuch.php><img class="img-thumbnail" src="img/cw_brzuch/brzuch.jpg" /></a>
                            <figcaption>Ćwiczenia na brzuch</figcaption>
                    </div>
                    </figure>
                </div>
            </div>
        </section>
    </main>


</body>

</html>