<?php // #basics-02_step7.php
$var = "Python is the best";

function replace_to_PHP($var){
  if (strlen($var) <= 1000) {
      return $var = str_replace("Python", "PHP", $var);}
      else{
          return $var;}
}
echo replace_to_PHP($var);
?>