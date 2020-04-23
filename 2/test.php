<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
</head>
<body>
<?php
    $name = "Marcel";
    $alter = 20;
    $groesse = 1.5;

    echo "<p>Ich heiße $name, bin $alter Jahre alt und $groesse m groß.</p>";
    $x = "y";
    $y = "$x";

    echo $y;
    echo '<p>Ich heiße '.$name.', bin '.$alter.' Jahre alt und '.$groesse.'m groß.</p>';
?>
</body>
</html>
