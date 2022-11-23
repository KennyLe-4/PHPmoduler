<?php
$str = "Reven rasker over isen";
echo strlen($str) . "<br>";
$len = strlen($str);

$str = strtolower($str);
echo $str . "<br>";

$str = ucwords($str);
echo $str . "<br>";

$str = strtoupper($str);
echo $str . "<br>";

$str = "Web Database Applications with PHP and MySQL: Building Effective Database-Driven Web Sites";

$pos = strpos($str, "PHP");

$substr = substr($str, $pos);
echo $substr . "<br>";


$str = strtolower($str);
$str = ucfirst($str);
echo $str;

echo ucfirst(strtolower($str)) . "<br><br>";

$str = "Web Database Applications with PHP and MySQL: Building Effective Database-Driven Web Sites";

$crypto = md5($str);
echo "K1" . substr($crypto, rand(0, 10), 5);
echo chr(90);

echo "<br><br>";
echo date('l', );

echo mktime(0, 0, 0, 7, 1, 2000);
echo strtotime("now");
?>