<?php

$n = $_GET["n"];
$y = 0;

for($x = 1;$x <= $n ; $x++){
    if($n % $x == 0){
        $y++;
    }
   
}
if($y == 2){
    echo" O Numero ". $n . " é Primo";
}
else{
    echo "O Numero ". $n . " não é Primo";
}