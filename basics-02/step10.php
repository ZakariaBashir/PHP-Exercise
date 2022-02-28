<?php // #basics-02_step10.php
    function check_palindrome($string)
    {
      if ($string == strrev($string))
          return 1;
      else
          return 0;
    }
    echo check_palindrome('madam')."\n";
?>