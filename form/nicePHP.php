<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Ergebnis</title>
</head>
<body>
<p>Es gibt eine neue Nachricht vom Kontaktformular.<br>
    Folgende Daten wurden übertragen:
</p>
<p>
    <?php echo
        '<b>Name: </b>' . $_POST["vn_name"] . '<br>
        <b>Mail: </b>' . $_POST["mail"] . '<br>
        <b>Kommentar: </b>' . $_POST["kommentar"] . '<br>'
    ?>
</p>
</body>
</html>