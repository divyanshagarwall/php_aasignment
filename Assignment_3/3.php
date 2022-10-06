<?php
// 3. Write a PHP script to check whether a string contains a specific string?  
// Sample string : 'The quick black fox jumps over the white dog.'
// Check whether the said string contains the string 'over'.



$str_1=" The quick black fox jump over the white lazy dog ";
if (strpos($str_1,'over') !== false) //(!==)Returns true they are not of the same (true !== false) ---> returns
 {                                  // (true !== false) ---> returns true ; means present.
    echo 'Word is present.';
 }
else
 {
    echo 'Word is not  present.';
 }
?>