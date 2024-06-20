<?php
$a = $_GET["NumA"];
$b = $_GET["NumB"];
$c = $_GET["NumC"];

if($a == $b && $b == $c){
  echo "O triângulo é equilátero";
}elseif(($a == $b && $b != $c) || ($a == $c && $b != $c) || ($b == $c && $a != $c)){
  echo "O triângulo é isósceles";
}else{
  echo "O triângulo é escaleno";
}

?> 