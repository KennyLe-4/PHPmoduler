<?php 
$lodd = array();
echo "Dine lodd er ";
for ($i=1; $i<=5; $i++) 
{
    $dette_lodd = rand(1,100);
    $lodd[] = $dette_lodd;
    echo $dette_lodd . ", "; 
     
}
sort($lodd, SORT_DESC);
print_r($lodd);

$vinnerlodd = rand(1,100);
if(in_array($vinnerlodd, $lodd))
{
    echo "<br>Gratulerer! Du vant med lodd nr: " . $vinnerlodd; 

} else
{
    echo "Du vant dessverre ikke.";
}

?>