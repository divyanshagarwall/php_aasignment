<?php

// 9. Write a PHP script to find the first character that is different between two strings.  
// String1 : 'facebook'
// String2 : 'faceboll'





    $str_1 = 'football';
    $str_2 = 'footboll';
    $position = strspn($str_1 ^ $str_2, "\n");
    printf('First difference between two strings at position %d: "%s" vs "%s"',
    $position+1, $str_1[$position], $str_2[$position]);
 
    
  

?>