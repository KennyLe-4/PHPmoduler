<?php 
$a1 = ["frog" => "toad", "oats" => "chaf", "bull" => "cow", "dog" => "bone", "north" => "south"];
 
$a2=["bull" => "row", "dog" => "phone", "syrup" => "wig"];
 
$a3 = $a1 + $a2;
 
$arr = $a3 + ["north" => "mouth", "bread" => "head"];


print_r($a3);

?>