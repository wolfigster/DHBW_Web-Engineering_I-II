<?php
echo "<p>";
$artikel = array(
    array("Milch", 12512, 1.0),
    array("Zucker", 13412, 0.8),
    array("Kaffee", 14213, 2.5)
);

foreach ($artikel as $item) {
    foreach ($item as $i) {
        echo "$i <br>";
    }
}

echo "<br>";

$waren = array(
    array(
        "name" => "Apfel",
        "artNr" => 12332,
        "preis" => 1.0
    ),
    array(
        "name" => "Birne",
        "artNr" => 39123,
        "preis" => 0.8
    ),
    array(
        "name" => "Avocado",
        "artNr" => 31233,
        "preis" => 2.5
    ),
);

foreach ($waren as $item) {
    foreach ($item as $i) {
        echo "$i <br>";
    }
}

$personen = array(
    array("name" => "Sophia",
        "geburt" => 1990,
        "groesse" => 1.75),
    array("name" => "Peter",
        "geburt" => 1987,
        "groesse" => 1.79),
    array("name" => "Daniel",
        "geburt" => 1985,
        "groesse" => 1.85)
);

echo "<ul>";
foreach($personen as $person) {
    echo "<li><strong>".$person["name"]."</strong> ist ".$person["geburt"]." geboren und ".$person["groesse"]."m groß.</li>";
}
echo "</ul>";