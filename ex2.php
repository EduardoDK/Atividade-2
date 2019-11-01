<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];


function numerosInteiros($num1 , $num2){
for($num1 = $num1 +1;$num1 != $num2;$num1++){


   
    echo $num1 . "<br>";

    

   
   
}
}



if($num1 <= $num2){
numerosInteiros($num1,$num2);
}
else {
    numerosInteiros($num2,$num1);
}
