<?php 
$clc_float = 37.841;
$fahren_float = (9/5)* $clc_float+32;
$ream_float = (4/5)* $clc_float;
$kelv = $clc_float+273;

echo "Celcius = ". $clc_float;
echo "<br>===========Program Konversi Suhu==============<br>";

echo "Fahrenheit (F) = ".$fahren_float. "<br>";
echo "Reamur (R) = ".$ream_float. "<br>";
echo "Kelvin (K) = ". $kelv;


?>