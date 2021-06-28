<?php session_start(); ?>


<!DOCTYPE html>
<html lang="pl-Pl">

<head>
    <meta charset="utf-8" />
    <title>Planer diety</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .obrazy h3{
            margin-top: 5px;
        }

        .form {
            margin-bottom: 10px;
            margin-left: 10px;
        }
    </style>

</head>

<body style="color:white;">
    <?php require_once 'nawigacja.php' ?>

    <section class="obrazy">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Załaduj dwa zdjęcia z komputera</h3>
                    <form method="post" enctype="multipart/form-data">
                        <br />
                        <input type="file" name="image" />
                        <br /><br />
                        <input type="submit" name="submit" value="Upload" />
                    </form>
                </div>


                <div class="col-md-6 mt-2" >
                    <?php displayimage(); ?>
                </div>
                <div class="col-md-6 mt-2">
                    <?php displayimage(); ?>
                </div>
            </div>
        </div>
    </section>



    <?php
    $flaga = true;

    //jesli nie ma wybranego zdjecia, wyswietla komunikat nie dodajac pustego zdjecia do bazy
    if (isset($_POST['submit'])) {
        if (empty($_FILES['image']['tmp_name'])) {
            $flaga = false;
            echo "<script>alert('Wybierz zdjęcie');</script>";
        } else {
            $flaga = true;
            $size = getimagesize($_FILES['image']['tmp_name']);
            $image = addslashes($_FILES['image']['tmp_name']);
            $name = addslashes($_FILES['image']['name']);
            $id_user = $_SESSION['id'];
            $image = file_get_contents($image);
            $image = base64_encode($image);
            saveimage($name, $image, $id_user);
        }
    }

    function saveimage($name, $image, $id_user)
    {
        require "connect.php";
        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
        $query = "INSERT INTO images (name, image, id_user) VALUES ('$name', '$image', '$id_user')";
        $result = $con->query($query);
        if (!$result) {
            echo "<script>alert('Błąd. Zdjęcie niezaładowane.')</script>";
        }
    }
    function displayimage()
    {
        require "connect.php";
        $con = mysqli_connect($host, $db_user, $db_password, $db_name);
        $id_user = $_SESSION['id'];
        $query = "SELECT * from images WHERE id_user = '$id_user' ORDER BY id DESC LIMIT 1";
        $result = $con->query($query);
        while ($row = mysqli_fetch_array($result)) {
            $id_img = $row[0];
            $zdjecia = $row[2];

            echo '<img id =' . $id_img . ' height="300" width="350" padding="10" src="data:image;base64,' . $zdjecia . ' "> ';
        }
        $con->close();
    }
    ?>

</body>

</html>