<?php
//7. Write a PHP script to generate simple random password 
//[do not use rand() function] from a given string.  
//Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'







function pass_gen($length){
    $data='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data),0,$length);//(shuffled array,start,length)

}
echo pass_gen(7);