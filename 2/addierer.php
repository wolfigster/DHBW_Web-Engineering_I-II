<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
</head>
<body>
<form action="addierer.php" method="post">
    <label for="var1">Number 1:
        <input id="var1" type="number" placeholder="Number 1" name="var1"><br>
    </label>
    <label for="var2">Number 2:
        <input id="var2" type="number" placeholder="Number 2" name="var2"><br>
    </label>
    <button type="submit">Calculate</button><button type="reset">Clear</button>
</form>


<?php
    error_reporting(0);
    $var1 = $_POST["var1"];
    $var2 = $_POST["var2"];
    if(empty($var1) || empty($var2)){
        echo "<p>Please enter all attributes.</p>";
    } else {
        echo "<p>".$var1." plus ".$var2." equals ".($var1+$var2)."</p>";
    }
?>

</body>
</html>