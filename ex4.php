<?php

$fat = $_GET["n"];

$n = 1;
for($fat;$fat > 1;$fat--){
  $n = $n*$fat;
}
echo $n;