<?php

$array = [1,30,5,10,30,17];
echo "<pre>";
print_r($array);
echo "</pre>";


sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);
echo "<pre>";
print_r($array);
echo "</pre>";

$a1=array_fill(0,4,"blue");
echo "<pre>";
print_r($a1);
echo "</pre>";

$ss = "today is a good day";
$aa = explode(" ", $ss);
print_r($aa);

$arr = array('hello','World','beautiful','day');
echo "<pre>";
echo implode(" " ,$arr);
echo "</pre>";
