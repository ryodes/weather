<?php
require_once "../Controller/WeatherController.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="../css/weather-icons.css" rel="stylesheet" crossorigin="anonymous">
    <link href="../css/weather-icons-wind.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="../css/weather-icons-wind.css" rel="stylesheet" crossorigin="anonymous">
    <link href="../css/weather-icons-min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/weather.css">
    <title>Hello WeatherController!</title>
</head>

<body>
    <div class="main">
        <h1 class="display-4">Bienvenue sur la page Météo</h1>

        <div class="row">
            <div class="container">
                <div class="card-block p-25">
                    <h3>
                        <span class="font-size-30"></span><?php echo $zone ?>
                    </h3>
                    <p class="weather-day-date mb-30">
                        <span class="mr-5"><?php echo $jour ?></span><?php echo $JouNbANS ?>
                    </p>
                    <div class="mb-30">
                        <span>
                            <?php echo $icon ?>
                        </span>

                        <div class="inline-block">
                            <span class="font-size-50"><?php echo $degree ?>°
                                <span class="font-size-40">C</span>
                            </span>
                            <p class="text-center"><?php echo $temps ?></p>
                            <i class="wi wi-humidity"></i> <span><?php echo $humidity ?></span>%
                            <i class="wi wi-sandstorm"></i> <span><?php echo $vitesse ?></span>km/h
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="accueil">
            <a href="../../">Retour</a>
        </div>
    </div>

</body>

</html>