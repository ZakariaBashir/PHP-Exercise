<?php // #basics-02_step2.php
function greaterFn($num){
    if($num > 30){
        echo $num. " is greater than 30.";}
    else if($num > 20){
        echo $num. " is greater than 20";}
    else if($num > 10){
        echo $num. " is greater than 10";}
    return 'string';
  }
  greaterFn(40); // 40 is greater than 30
  echo "\n";
  greaterFn(21); // 21 is greater than 20
  echo "\n";
  greaterFn(12); // 12 is greater than 10
  echo "\n";
  greaterFn(8);  // 8 is less than 10
?>