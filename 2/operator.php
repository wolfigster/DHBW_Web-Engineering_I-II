<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Operator</title>
</head>
<body>

<table>
    <tr>
        <th>Schüler</th>
        <th>Note</th>
    </tr>


    <?php
    for($i = 0; $i < 10; $i++) {
        $rand = rand(1,6);
        echo "
    <tr>
        <td>".$i."</td>
        <td>".$rand."</td>
    </tr>";
    }
    ?>
</table>

</body>
</html>