<?php // basics-03_For_Ex4.php

function Z($n)
{
    for ($row = $n; $row > 0; $row--) {
        for ($column = 0; $column <= $n - 1; $column++) {
            if ((($row == $n or $row == 1) and $column >= 0 and $column <= $n) or $row + $column == $n)
                echo "*";
            else
                echo "&nbsp&nbsp";
        }
        echo "<br>";
    }
}
Z(7);