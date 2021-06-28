<?php

    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "pomiary";
    $polaczenie = mysqli_connect($host, $db_user, $db_password, $db_name);
    if(!$polaczenie) {
        die('Could not connect My Sql:' . mysqli_connect_error());
    }


?>