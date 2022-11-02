<?php
/*This function should take in a single number argument representing the number of items a customer has. If the customer has 12 items or fewer, the function should return "express lane". Otherwise, the function should return "regular lane". */

namespace Codecademy;
function ternaryCheckout($items)
{
  return $items <= 12 ? "express lane" : "regular lane";
}

/*Your function should take in a number representing an age, and return the string “yes” if the age is greater than or equal to 18, and the string “no” it’s not.*/

function ternaryVote ($age)
 {
   return $age >= 18 ? "yes" : "no";
 }

// Tests 
echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);