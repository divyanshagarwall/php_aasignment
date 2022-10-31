<form method="get">
    Guess the number between 1-100:
    <input name="n"/>
    <button>Check</button>
</form>

<?php
session_start();
 $mynumber =rand(0,100);
 $_SESSION["n"]=$mynumber;

if(isset($_GET["n"]) && isset($_SESSION["n"])){
    if($mynumber==$_GET["n"])
    {
        echo "Guess is correct";
    }
    elseif($mynumber > $_GET["n"] ){
        echo "Guess is lower";
    }
    elseif($mynumber < $_GET["n"]){
        echo "Guess is higher";
    }
}


?>
