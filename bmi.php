<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Planer diety</title>
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('dieta.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
            color: white;
        }

        .btn {
            width: 100px;
            height: 50px;
            font-size: 20px;
            color: white;
            background-color: rgba(0, 89, 255, 0.521);
            border-radius: 10px;
            margin-top: 10px;
            margin-left: 100px;

        }

        .btnOblicz>.btn:hover {
            background-color: rgba(234, 0, 255, 0.562);

        }

        .name {
            width: 300px;
            font-size: 36px;
        }

        .name>span>a {
            background-color: orange;
            color: white;
            text-decoration: none;
            border: 2px solid;
            border-radius: 5px;
            padding: 5px 10px 5px 10px;
        }

        .name>span>a:hover {
            background-color: rgb(60, 255, 0);
        }

        .formContent {
            background-color: #E0E0E0;
            float: left;
            color: black;
            width: 350px;
            padding: 20px;
            margin-left: 100px;
            -webkit-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
            -moz-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
            box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
        }

        .opis {
            background-color: #E0E0E0;
            color: black;
            width: 350px;
            padding: 20px;
            float:left;
            margin-left:30px;

        }

        .mainArticle {
            margin-top: 30px;
        }

        input[type=text],
        input[type=number] {
            width: 300px;
            background-color: #efefef;
            color: #666;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
            padding: 5px;
            box-sizing: border-box;
            outline: none;
            margin-top: 10px;
        }

        input[type=submit],
        [type=reset] {
            width: 300px;
            background-color: #36b03c;
            font-size: 15px;
            color: white;
            padding: 10px 5px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type=submit],
        [type=reset]:hover {
            background-color: #37b93d;
        }
    </style>

    <script src="oblicz.js"></script>
</head>

<body>
    <?php require_once 'nawigacja.php' ?>


    <div>

        <main>
            <article class="mainArticle">
                <section>
                    <div class="formContent">
                        <p>Kalkulator BMI</p>
                        <form name="bmiKalkulator">
                            <div>
                                <label><input type="radio" id="Kobieta" name="gender" value="Kobieta">Kobieta</label>
                            </div>
                            <div>
                                <label><input type="radio" id="Mężczyzna" name="gender" value="Mężczyzna">Mężczyzna</label>
                            </div>
                            <div>
                                <p>Wpisz swój wzrost w cm: </p>
                                <input type="number" id="wzrost" name="wzrost" min="50" max="250">
                            </div>
                            <div>
                                <p>Wpisz swoją wagę w kg: </p>
                                <input type="number" id="waga" name="waga" min="5" max="250">
                            </div>
                            <div class="btnOblicz">
                                <input type="button" class="btn" value="Oblicz" onClick="oblicz()" />
                            </div>
                            <div class="rezultat">
                                <div>
                                    <p>Wynik to: </p>
                                    <input type="text" id="wynik" name="wynik" disabled />
                                </div>
                                <div>
                                    <p>Wynik sugeruje, że: </p>
                                    <input type="text" id="suggestion" name="suggestion" disabled />
                                </div>
                                <div>
                                    <input type="reset" Value="reset" />
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section>
                    <div class="opis">
                        <b>Zakresy wartości BMI: </b></br>
                        &lt 16 - wygłodzenie </br>
                        16 - 16.99 - wychudzenie </br>
                        17 - 18.49 - niedowaga </br>
                        18.5 - 24.99 - wartość prawidłowa </br>
                        25 - 29.99 - nadwaga </br>
                        30 - 34.99 - I stopien otyłości </br>
                        35 - 39.99 - II stopień otyłości </br>
                        &gt 40 - otyłość skrajna </br>
                    </div>
                </section>
            </article>
        </main>

</body>

</html>