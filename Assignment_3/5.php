<?php
// 5. Write a PHP script to get the last three characters of a string. 
// Sample String : 'ak@creation.com'

$str_1='ak@creation.com';
$newstr= substr($str_1,-3);  
echo var_dump($newstr);
?>