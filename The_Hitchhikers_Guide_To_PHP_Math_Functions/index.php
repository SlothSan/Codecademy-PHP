<?php
// I am sorry Douglas Adams. 
$initial = '555';
//To dec number
$a = octdec($initial);

echo "$a \n";
//degrees to Radian. 
$b = deg2rad($a);

echo "$b \n";

//Cosine of $b
$c = cos($b);

echo "$c \n";

//Round $c to 3 decimal places
$d = round($c, 3);

echo "$d \n";

//Natural log of $D
$e = log($d);

echo "$e \n";

//Absolute of $e
$f = abs($e);

echo "$f \n";

//inverse / arc cosine of $f
$g = acos($f);

echo "$g \n";

//convert radians to degrees. 
$h = rad2deg($g);

echo "$h \n";

//Round down $h (floor);

$i = round($h);

echo "$h \n";

//Subtract 47 from I to arrive at solution.

$j = $i - 47;

echo "$i is the meaning of life! \n";