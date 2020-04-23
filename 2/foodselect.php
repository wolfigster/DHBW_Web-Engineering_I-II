<?php
$food = array("Pizza" => "Teig, Salami, Hilfe, Käse",
    "Hamburger" => "Brötchen, Patty, Käse, Sauce, Gurken",
    "Döner" => "Fleisch, Sauce, Zwebeln, Salat");

$essen = array_keys($food);

echo "<form method='post'><select name='food'>";
foreach ($essen as $item) {
    echo "<option>$item</option>";
}
echo "</select><button type='submit'>Zeig Zutaten</button></form>";
$zutaten = $_POST["food"] ?? '"Keine Essen ausgewählt"';
echo "<p>Sie benötigen für <strong>".$zutaten."</strong> folgende Zutaten: <i>".$food[$zutaten]."</i></p>";


