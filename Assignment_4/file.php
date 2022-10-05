<?php
$string = $_POST['string'];
$number = $_POST['number'];
$remove_string = $_POST['remove_string'];
$add_string = $_POST['add_string'];
$compare_string = $_POST['compare_string'];
$substing = $_POST['substring'];
$substr = $_POST['substr'];
$chop_string = $_POST['chop_string'];
if(isset($_POST['Md5'])){
    echo md5($string);
}
if(isset($_POST['Number_format'])){
    echo number_format($number);
}
if(isset($_POST['Ord'])){
    echo ord($string);
}
if(isset($_POST['Rtrim'])){
    echo rtrim($string);
}
if(isset($_POST['Str_replace'])){
    echo str_replace($remove_string,$add_string,$string);
}
if(isset($_POST['Str_len'])){
    echo strlen($string);
}
if(isset($_POST['Strcasecmp'])){
    echo strcasecmp($string,$compare_string);
}
if(isset($_POST['Strpos'])){
    echo strpos($string,$substing);
}
if(isset($_POST['Substr'])){
    echo substr($string,$substr);
}
if(isset($_POST['Strtolower'])){
    echo strtolower($string);
}
if(isset($_POST['Bin2Hex'])){
    echo bin2hex($string);
}
if(isset($_POST['Chop'])){
    echo chop($string,$chop_string);
}

?>