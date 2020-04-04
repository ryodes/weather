<?php
session_start();

if (!isset($_SESSION["temperature"])) {
    header('Location: ../../');
    exit();
}

function jourSemaine($n) {
    switch($n) {
        case 1:
            return "LUNDI";
        break;

        case 2:
            return "MADRI";
        break;

        case 3:
            return "MERCREDI";
        break;

        case 4:
            return "JEUDI";
        break;

        case 5:
            return "VENDREDI";
        break;

        case 6:
            return "SAMEDI";
        break;

        case 7:
            return "DIMANCHE";
        break;

        default:
            return "Unknow day";
    }
}

function tempsFr($temps) {
    switch($temps) {
        case "clear-day":
            return "Ensoleillé";
        break;
        case "clear-night":
            return "nuit claire";
        break;
        case "rain":
            return "pluie";
        break;
        case "snow":
            return "neige";
        break;
        case "sleet":
            return "grésil";
        break;
        case "wind":
            return "vent";
        break;
        case "fog":
            return "brouillard";
        break;
        case "cloudy":
            return "nuageux";
        break;
        case "partly-cloudy-day":
            return "Nuageux dans l'ensemble";
        break;
        case "partly-cloudy-night":
            return "Nuageux dans l'ensemble";
        break;

        default:
            return "Unknow time";
    }
}

function icon($temps) {
    switch($temps) {
        case "clear-day":
            return '<i class="wi wi-day-sunny"></i>';
        break;
        case "clear-night":
            return '<i class="wi wi-night-clear"></i>';
        break;
        case "rain":
            return '<i class="wi wi-rain"></i>';
        break;
        case "snow":
            return '<i class="wi wi-snow"></i>';
        break;
        case "sleet":
            return '<i class="wi wi-sleet"></i>';
        break;
        case "wind":
            return '<i class="wi wi-strong-wind"></i>';
        break;
        case "fog":
            return '<i class="wi wi-fog"></i>';
        break;
        case "cloudy":
            return '<i class="wi wi-cloudy"></i>';
        break;
        case "partly-cloudy-day":
            return '<i class="wi wi-day-cloudy"></i>';
        break;
        case "partly-cloudy-night":
            return '<i class="wi wi-night-alt-cloudy"></i>';
        break;

        default:
            return '<i class="wi wi-na"></i>';
    }
}


$degree = ceil(($_SESSION["temperature"] - 32)*5/9);
$jour = jourSemaine(date("N"));
$JouNbANS = date("d/m/Y");
$temps = tempsFr($_SESSION["icon"]);
$vitesse = round(1.406 * $_SESSION["windSpeed"],2);
$icon = icon($_SESSION["icon"]);
$zone = $_SESSION["zone"];
$humidity = $_SESSION["humidity"];
?>