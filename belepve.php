<?php
session_start();
if(!isset($_SESSION['azonosito']))
{
    header("location: index.php");//bejentkezés nélkül vissza dobja a kezdő oldalra
}

?>




<!DOCTYPE html>
<html lang="hu">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style/bejelentkezve.css">
    <title>Edzés fal</title>
</head>

<body>

    <div class="container">
        
        <div class="topbar">
            <div class="logo">
                <h2>Kalória manager</h2>
            </div>
            <div class="search">
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <img src="img/doctor1.png" alt="">
            </div>
        </div>
        <div class="oldalsáv">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div>Annotáció</div>
                    </a>
                <li>
                    <li>
                        <a href="kijelentkezes.php">
                            <i class="fas fa-th-large"></i>
                            <div>Kijelentkezés</div>
                        </a>
                    <li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                    </div>
                    <div class="icon-box">
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                    </div>
                    <div class="icon-box">
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                      
                    </div>
                    <div class="icon-box">
                    </div>
                </div>
                <div class="card">
                    
                    <div class="icon-box">
                    </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart">
                    <h2>Éves adatok (Hónapokra bontva)</h2>
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="chart doughnut-chart">
                    <h2>Beosztás</h2>
                    <canvas id="doughnut"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="js/chart1.js"></script>
    <script src="js/chart2.js"></script>

</body>

</html>