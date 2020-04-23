<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
</head>
<body>
<form action="essen.php" method="post">
    <select name="var1">
        <option>Kiwi</option>
        <option>Amsel</option>
        <option>Pinguin</option>
        <option>Adler</option>
        <option>Rabe</option>
    </select>
    <button type="submit">Select</button>
</form>


<?php
    //error_reporting(0);
    $var1 = $_POST["var1"] ?? '"Kein Vogel"';
    echo "<p>Sie haben folgendes augewählt: ".$var1."</p>";
?>

</body>
</html>