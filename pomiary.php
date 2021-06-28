<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <title>Pomiary wagi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <style>
        .formContent {
            background-color: #E0E0E0;
            color: black;
            width: 380px;
            padding: 40px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
            -webkit-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
            -moz-box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
            box-shadow: 3px 3px 30px 5px rgba(204, 204, 204, 0.9);
        }

        input[type=number],
        input[type=date] {
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

    </style>

</head>

<body>
    <?php require_once 'nawigacja.php' ?>

    <br /><br />
    <div class="formContent">

        <h2>Wpisz swoją aktualną wagę:</h2>
        <br />
        <form id="gotowe" action="" method="post">
            Waga: <br />
            <input type="number" name="waga" min=0 max=300 step=0.1 /><br />
            Data: <br />
            <input type="date" name="data_nr" /> <br />
            <input type="submit" onClick="loadDoc('show.php')" value="Zapisz wagę" />

        </form>


    </div>

    <?php
    require_once 'connect.php';

    if (isset($_POST['data_nr'])) {
        if (!empty($_POST['data_nr']) && (!empty($_POST['waga']))) {
            $flaga = true;
            $id_user = $_SESSION['id'];
            $waga = $_POST['waga'];
            $data_nr = $_POST['data_nr'];

            $sql = "INSERT INTO pomiary_wagi (waga, data_nr, id_user) VALUES ('$waga', '$data_nr', '$id_user')";

            if (mysqli_query($polaczenie, $sql)) {
                require 'show.php';
            } else {
                echo '<script>alert("Podana data była już podawana")</script>';
            }
            $polaczenie->close();
        } else {
            $flaga = false;
            echo '<script>alert("Wpisz dane całkowicie")</script>';
        }
    }


    ?>

    <script>
        function loadDoc(fileName) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("test").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", fileName, true);
            xhttp.send();
        }
    </script>
</body>

</html>