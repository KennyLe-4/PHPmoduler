<?php 
//The switch statement is similar to a series of IF statements on the same expression. 
//In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.
$rolle = "utleier";

switch ($rolle) {
  case "utleier":
    echo "Velkommen til siden for utleiere!";
    break;
  case "leietaker":
    echo "Velkommen til siden for leietakere!";
    break;
  default:
    echo "Du må logge inn for å bruke systemet vårt.";
  }


?> 