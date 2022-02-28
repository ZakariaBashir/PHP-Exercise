<?php // #basics-02_step3.php
$var1 = 32;
$var2 = 45;
echo "\nBefore swapping:  ". $var1 . ',' . $var2;
list($var1, $var2) = array($var2, $var1);
echo "\nAfter swapping:  ". $var1 . ',' . $var2."\n";
?>