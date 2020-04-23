<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>mächtig</title>
</head>
<body>
<form method="post">
    <input type="text" placeholder="Name" name="name" id="name">
    <button>Begrüßen</button>
</form>
<?php
function hallowelt() {
    echo "<h2>Hallo Welt</h2>";
}
function htmlLink($link) {
    echo "<a href=$link target=\"_blank\">$link</a>";
    echo "<br>";
}
function htmlDatumtext() {
    echo date('\D\a\s\ \J\a\h\r\ Y\.\ \E\s\ \i\s\t\ \d\e\r\ d\.\ \T\a\g\ \d\e\s\ m\.\ \M\o\n\t\a\g\s\.');
    echo "<br>";
}

htmlDatumtext();
htmlLink("https://www.php.net");
htmlLink("https://www.wolfig.de");

$user = "Nils";
if($user == "Nils") {
    echo "Du bist Nils";
} else {
    echo "Du bist nicht Nils";
}
?>
<br>
<br>
<?php

$name = $_POST["name"] ?? "";
if($name == "Peter") {
    echo "Guten Morgen ".$name;
} else {
    echo "Moin ".$name."! Wo ist Peter?";
}

?>


</body>
</html>