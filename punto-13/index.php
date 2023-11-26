<?php

$sum = 0;
$arreglo = array(400, 800, 30, 10, 7);

foreach($arreglo as $num){
  $sum += $num;
}
print_r($arreglo);
echo "El total de la suma del arreglo es: ", $sum;
