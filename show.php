<?php
        require_once "connect.php";
        if(isset($_SESSION['zalogowany']))
        {
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            $user = $_SESSION['user'];
            $query = "SELECT * FROM pomiary_wagi WHERE id_user = '$id_user'";
            $result = $polaczenie->query($query);
            $chart_data = '';

            while ($row = mysqli_fetch_array($result))
            {
                $chart_data .= "{data_nr:'".$row["data_nr"]."', waga:".$row["waga"]."}, ";

            }

        }
        else
        {
            header('Location: index.php');
            exit();
        }

    ?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<title>Wykres</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <style>
        .container
        {
            background-color:#E0E0E0;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 15px;
            text-align: center;
            padding-top: 5px;
        }
        </style>
</head>
<body>
<br /><br />
    <div class="container" style="width:900px;">
        <h2 style="color:black">Wykres wagi</h2>
        <br /><br />
        <div id="chart"></div>
    </div>
</body>
</html>

<script>
Morris.Line({
    element: 'chart',
    data: [<?php echo $chart_data; ?>],
    xkey: 'data_nr',
    ykeys: ['waga'],
    labels: ['Waga']
});
</script>
<script src="script.js"></script>