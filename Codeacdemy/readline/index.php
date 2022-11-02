<?php
/*The built-in readline() function takes a string with which to prompt the user. 
It waits for the user to enter text into the terminal and returns that value as a string*/

echo "Hello, there. What's your first name?\n";  

$name = readline(">> ");

$name_length = strlen($name);

if ($name_length > 8) {
  echo "Hi, ${name}. That's a long name.";
} elseif ($name_length > 3) {
  echo "Hi, ${name}.";
} else {
  echo "Hi, ${name}. That's a short name.";
}
