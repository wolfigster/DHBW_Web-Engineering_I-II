<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Random</title>
</head>
<body>
<h1>Create Random numbers</h1>
<form method="post">
    <input id="amount" type="number" placeholder="amount" name="amount">
    <input id="min" type="number" placeholder="min" name="min">
    <input id="max" type="number" placeholder="max" name="max">
    <button type="submit">Create</button><button type="reset">Clear</button>
</form>


<?php
error_reporting(0);
$var1 = $_POST["amount"];
$var2 = $_POST["min"];
$var3 = $_POST["max"];
if(empty($var1) || empty($var2) || empty($var3)){
    echo "<p>Please enter all attributes.</p>";
} else {
    echo "<ul>";
    for($i = 0; $i < $var1; $i++) {
        $rand = rand($var2, $var3);
        echo "<li>".$rand."</li>";
    }
    echo "</li>";
}
?>

</body>
</html>