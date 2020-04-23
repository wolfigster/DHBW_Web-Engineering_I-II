<?php
$var = array(14, 32, "a");
var_dump($var);
print_r($var);

echo "<br>";
foreach($var as $v) {
    echo "$v <br>";
}

echo "<br>";
$mensch1 = array(
    "name" => "Daniel Wierbicki",
    "geburtsdatum" => "27.0.7.1985",
    "groesse" => 1.85);
var_dump($mensch1);

$zitate = array(
    "Daman" => "Egal wie alt du bist, die Deckenbeleuchtung heißt großes Licht",
    "Marc" => "Hauptsache er ist drin, wie ist mir egal",
    "Johannes" => "Kanada besteht zu 50% aus A - K-N-A-D-A, Knada",
    "Yannis" => "Ich zieh die Starcoins nur so an und die Bitches nur so aus"
);
$autoren = array_keys($zitate);

echo "<br>";

$wochentag = array("mo" => "Montag",
    "di" => "Dienstag",
    "mi" => "Mittwoch",
    "do" => "Donnerstag",
    "fr" => "Freitag",
    "sa" => "Samstag",
    "so" => "Sonntag");
$krzl = array_keys($wochentag);

echo "<ol>";
foreach($wochentag as $tag) {
    echo "<li>$tag</li>";
}

foreach($krzl as $kurz) {
    echo "<li>$kurz</li>";
}

echo "</ol>";

