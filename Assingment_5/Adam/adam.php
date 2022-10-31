<?php

$input_number= $_POST["n"];
$square_number= $input_number**2;

function reversedigit($n){
$reversenum=0;
while($n > 1){
    $rem=$n%10;
    $reversenum =($reversenum *10) +$rem;
    $n=($n/10);
}
return $reversenum;
}

$underroot=sqrt(reversedigit($square_number));

if(isset($_POST["submit"])){
    echo " input number is  : ".$input_number ."<br>";
    echo " Square of number is :". $square_number ."<br>";
    echo " reverse of number is :" . reversedigit($square_number)  ."<br>";
    echo " Underroot of number is : " .$underroot ."<br>";
    echo " Now again reverse number is : " . reversedigit($underroot) ."<br>";

    if($input_number == reversedigit($underroot) ){
        echo "  input number and last step of number is matched It is a ADAM NUMBER ";
    }
    else{
        echo "  input number and last step of number is not matched  It is  NOT a ADAM NUMBER ";

    }


}

?>