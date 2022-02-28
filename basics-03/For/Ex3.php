<?php // basics-03_For_Ex3.php

function Triangle($num)
{
    for ($i = 1; $i <= $num; $i++) {
        echo str_repeat("* ", $i) . "<br>";
    }
    for ($x = $num; $x >= 1; $x--) {
        echo str_repeat("* ", $x) . "<br>";
    }
}

Triangle(18);
?>