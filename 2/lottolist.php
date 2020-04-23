<?php

createLottoList();

function createLottoList() {
    $numbers = array();
    echo "<ul>";
    for($i = 0; $i < 6; $i++) {
        $numbers[] = rand(1, 49);
        echo "<li>".$numbers[$i]."</li>";
    }
    echo "</ul>";
}
?>
