<table>
    <tr>
        <th>Schüler</th>
        <th>Note</th>
    </tr>
<?php

$namen = array("Hans", "Tom", "Ben", "Anna", "Jim");
createtable($namen);

function createtable(array $names) {

    foreach($names as $name) {
        echo "<tr>
        <td>$name</td>
        <td>".rand(1,6)."</td>
        </tr>";
    }
}
?>

</table>

