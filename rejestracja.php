<?php

session_start();

if (isset($_POST['email'])) {

    $flaga = true;

    $nick = $_POST['nick'];
    if ((strlen($nick) < 4) || (strlen($nick) > 25)) {
        $flaga = false;
        $_SESSION['e_nick'] = "Nick musi posiadać od 4 do 25 znaków";
    }

    if (ctype_alnum($nick) == false) {
        $flaga = false;
        $_SESSION['e_nick'] = "Nick składa się tylko z liter i cyfr";
    }

    $email = $_POST['email'];
    $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

    if ((filter_var($emailB, FILTER_VALIDATE_EMAIL) == false) || ($emailB != $email)) {
        $flaga = false;
        $_SESSION['e_email'] = "Podaj poprawny adres e-mail";
    }


    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];

    if ((strlen($haslo1) < 8) || (strlen($haslo1) > 25)) {
        $flaga = false;
        $_SESSION['e_haslo'] = "Hasło musi posiadać od 8 do 25 znaków";
    }

    if ($haslo1 != $haslo2) {
        $flaga = false;
        $_SESSION['e_haslo'] = "Podane hasła nie są identyczne";
    }

    $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);


    if (!isset($_POST['regulamin'])) {
        $flaga = false;
        $_SESSION['e_regulamin'] = "Potwierdź akceptację regulaminu";
    }

    $_SESSION['fr_nick'] = $nick;


    $sekret = "6Lc_OAEVAAAAADV1ZaY0Mi92VKUuKGHtjC--kFnQ";

    $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $sekret . '&response=' . $_POST['g-recaptcha-response']);

    $odpowiedz = json_decode($sprawdz);

    if ($odpowiedz->success == false) {
        $flaga = false;
        $_SESSION['e_bot'] = "Potwierdź, że nie jesteś botem!";
    }

    require_once "connect.php";
    mysqli_report(MYSQLI_REPORT_STRICT);


    try {
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        if ($polaczenie->connect_errno != 0) {
            throw new Exception(mysqli_connect_errno());
        } else {

            $rezultat = $polaczenie->query("SELECT id FROM users WHERE email='$email'");

            if (!$rezultat) {
                throw new Exception($polaczenie->error);
            }
            $liczbaMaili = $rezultat->num_rows;


            if ($liczbaMaili > 0) {
                $flaga = false;
                $_SESSION['e_email'] = "Istnieje już konto przypisane do tego adresu e-mail";
            }


            $rezultat = $polaczenie->query("SELECT id FROM users WHERE user='$nick'");

            if (!$rezultat) {
                throw new Exception($polaczenie->error);
            }
            $liczbaNickow = $rezultat->num_rows;


            if ($liczbaNickow > 0) {
                $flaga = false;
                $_SESSION['e_nick'] = "Istnieje już użytkownik o takim nicku, wybierz inny";
            }


            if ($flaga == true) {

                if ($polaczenie->query("INSERT INTO users VALUES(NULL, '$nick', '$haslo_hash', '$email')")) {
                    $_SESSION['pomyslnaRejestracja'] = true;
                    header('Location: logowanie.php');
                } else {
                    throw new Exception($polaczenie->error);
                }
            }

            $polaczenie->close();
        }
    } catch (Exception $e) {
        echo '<span style="color:red;">Błąd</span>';
        echo "Informacja: " . $e;
    }
}

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Załóż konto</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css?version=51">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        .error {
            color: red;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .hdr {
            width: 300px;
            margin-bottom: 10px;
            margin-top: 5px;

        }

        .hdr>span {
            font-size: 25px;
            border: solid 1px;
            background-color: yellow;
        }

        .hdr>span>a {
            color: white;
            text-decoration: none;
        }

        .hdr>span>a:hover {
            background-color: rgb(255, 165, 0);
        }

        .formContent {
            background-color: #E0E0E0;
            color: black;
            width: 400px;
            padding: 30px 20px 30px 40px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            -webkit-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
            -moz-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
            box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
        }

        input[type=text],
        input[type=password] {
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

        input[type=submit] {
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

        input[type=submit]:hover {
            background-color: #37b93d;
        }

        input[type=checkbox] {
            margin: 10px;
        }

        .g-recaptcha {
            margin-top: 10px;
        }
    </style>
    </style>
</head>

<body>
    <?php require_once 'nawigacja.php' ?>

    <main>
        <section>
            <div class="formContent">
                <form method="post">
                    Nickname: <br /> <input type="text" value="
                    <?php
                    if (isset($_SESSION['fr_nick'])) {
                    echo $_SESSION['fr_nick'];
                    unset($_SESSION['fr_nick']);
                    }
                    ?>" name="nick" /><br />

                    <?php
                    if (isset($_SESSION['e_nick'])) {
                        echo '<div class="error">' . $_SESSION['e_nick'] . '</div>';
                        unset($_SESSION['e_nick']);
                    }
                    ?>
                    E-mail: <br /> <input type="text" name="email" /><br />
                    <?php
                    if (isset($_SESSION['e_email'])) {
                        echo '<div class="error">' . $_SESSION['e_email'] . '</div>';
                        unset($_SESSION['e_email']);
                    }
                    ?>
                    Hasło: <br /> <input type="password" name="haslo1" /><br />
                    <?php
                    if (isset($_SESSION['e_haslo'])) {
                        echo '<div class="error">' . $_SESSION['e_haslo'] . '</div>';
                        unset($_SESSION['e_haslo']);
                    }
                    ?>
                    Powtórz hasło: <br /> <input type="password" name="haslo2" /><br />

                    <label>
                        <input type="checkbox" name="regulamin" />Akceptuję regulamin
                    </label>
                    <?php
                    if (isset($_SESSION['e_regulamin'])) {
                        echo '<div class="error">' . $_SESSION['e_regulamin'] . '</div>';
                        unset($_SESSION['e_regulamin']);
                    }
                    ?>

                    <div class="g-recaptcha" data-sitekey="6Lc_OAEVAAAAADNYNKE_C2zkzmIsUQCsc-CXgi8d"></div>
                    <?php
                    if (isset($_SESSION['e_bot'])) {
                        echo '<div class="error">' . $_SESSION['e_bot'] . '</div>';
                        unset($_SESSION['e_bot']);
                    }
                    ?>


                    <br />

                    <input type="submit" value="Zarejestruj się" />
                </form>
        </section>
    </main>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>