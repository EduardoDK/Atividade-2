<?php

$numero = $_GET["numero"];

for($tabuada = 0 ;$tabuada <= 10; $tabuada++){
   echo  "$numero x $tabuada = " . $numero * $tabuada ."<br>";
}