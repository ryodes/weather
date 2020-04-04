<?php

session_start();
$key = "6ca3af0577942eba4a74a9f86a5315fc";
$position = "";
if (isset($_POST["nom2passage"])) {
    $position = explode("/", $_POST["nom2passage"]);
}
$latitude = $position[0];
$longitude = $position[1];
$timeZone = $position[2];

$url = "https://api.darksky.net/forecast/" . $key . "/" . $latitude . "," . $longitude;

$json = file_get_contents($url);
$parsee = json_decode($json, true);


/******* STOCKAGE DES DONNEES  ********/
$temperature = floor($parsee["currently"]["temperature"]);

//Récupére la deuxième parti de la chaine de caractère timezone.
$humidity = $parsee["currently"]["humidity"] * 100;
$windSpeed = $parsee["currently"]["windSpeed"];
$icon = $parsee["currently"]["icon"];

$_SESSION["temperature"] = $temperature;
$_SESSION["zone"] = $timeZone;
$_SESSION["humidity"] = $humidity;
$_SESSION["windSpeed"] = $windSpeed;
$_SESSION["icon"] = $icon;

header('Location: ../Vue/afficheMeteo.php');
exit();
?>