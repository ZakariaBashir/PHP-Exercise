<?php // #basics-02_step9.php
function my_sqrt($n)
{
  $x = $n;
  $y = 1;
  while($x > $y)
  {
    $x = ($x + $y)/2;
    $y = $n/$x;
  }
  return $x;
}
print_r(my_sqrt(16)."\n");
print_r(my_sqrt(14)."\n");
?>