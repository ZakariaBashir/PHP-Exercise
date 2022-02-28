<?php // basics-03_While_Ex3.php

function count_word_in($word,$text){
    $arr = explode($word, $text);
    $count = count($arr) -1 ;
    return "The word \"$word\" counted $count times";
}
echo count_word_in("book", "hello Mr. ibook, how are you Mr. ibook, how many ibooks do you read everymonth?");
echo "\n";

?>