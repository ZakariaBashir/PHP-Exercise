<?php // basics-03_For_Ex5.php
$string = "PHP is a programming language";
$len = strlen($string);
for($i=$len; $i > 0; $i--){
    echo $string[$i-1];
}
?>