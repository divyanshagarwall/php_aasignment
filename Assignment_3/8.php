<?php

// // 8. Write a PHP script to replace the first 'the' of the following string with 'That'. 
// // Sample date : 'the moon is round in shape'

$str_1 = 'the moon is round in shape';
echo preg_replace('/the/', 'That', $str_1, 1)."\n"; //(patterns , replacement,string,limit,count)