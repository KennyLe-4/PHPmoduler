<?php
/* Write a function, returnSeason(). Your function should take in a string representing a month (e.g. "January"), and it should return which season that month falls in.

"December", "January", and "February" are "winter" months.
"March", "April", and "May" are "spring" months.
"June", "July", and "August" are "summer" months.
And "September", "October", and "November" are "fall" months.
Your function should use a switch statement and fall through to accomplish this task. */

 function returnSeason($month) {
   switch ($month) {
     Case "December":
     Case "January":
     Case "February":
     return "winter";
     Break;

     Case "March":
     Case "April":
     Case "May":
     return "spring";
     Break;

     Case "June":
     Case "July":
     Case "August":
     return "summer";
     Break;
     
     Case "September":
     Case "October":
     Case "November":
     return"fall";
     Break;
     
}
   }
     
echo returnSeason("February");
echo "\n\n";  
echo returnSeason("April");
echo "\n\n";
echo returnSeason("August");
echo "\n\n";
echo returnSeason("October"); 





   
  
