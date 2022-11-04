<?php
/*
This is a project that calculate Bobs earning, savings and expenses. 
Mainly focused on arrays 
*/

$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:

// Use $incomeSegments to calculate Bob’s $netIncome after this set of taxes.
$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

/*
Bob also has a social security tax that is a percentage of his total salary. This amount is stored in $socialSecurity. Subtract this from $netIncome.

Store the annual income after taxes in $annualIncome and print it to the screen.
*/

$netIncome -= $socialSecurity;
$annualIncome = $netIncome;
echo "Annual income before deducting annual expenses:\n$annualIncome\n";


/*
Bob has two annual expenses for vacations and car repairs. These are stored in $annualExpenses.

$annualExpenses is an associative array with the keys 'vacations' and 'carRepairs'.

Subtract each of these from $annualIncome and print the resulting amount to the screen.
*/

$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];
 
echo "\nAnnual income after calculation:\n$annualIncome\n";

/*Before deducting Bob’s monthly expenses, determine his $monthlyIncome from the current $annualIncome.

Print this value to the screen.*/ 

$monthlyIncome = $annualIncome / 12; 

echo "\nMonthly income before deducting monthly expenses:\n$monthlyIncome\n";

/*
Bob has three monthly expenses. These are stored in $monthlyExpenses with the keys:

'rent'
'utilities'
'healthInsurance'
Deduct these from $monthlyIncome and print the result to the screen.*/

$monthlyIncome -= $monthlyExpenses["rent"]; 
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\nMonthly income after calculation:\n$monthlyIncome \n";

/*
Before deducting Bob’s weekly expenses, determine his $weeklyIncome from the current $monthlyIncome. (assume an average of 4.33 weeks in a month for this exercise)

Print this value to the screen.*/

$weeklyIncome = $monthlyIncome/4.33; 
echo "\nWeekly income before calculation:\n$weeklyIncome\n";

/*
This time, you will be creating the array with Bob’s $weeklyExpenses. Use the following expenses:

gas: 25
food: 90
entertainment: 47
Create this array.*/

$weeklyExpenses = [
  "gas" => 25, 
  "food" => 90, 
  "entertainment" => 47
  ];
print_r ($weeklyExpenses);

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];
 
echo "\nWeekly income after calculation:\n$weeklyIncome\n";

/*
You’ve deducted all of Bob’s taxes and expenses at this point and have an amount that he is able to save each week in $weeklyIncome.

Multiply this by 52 to determine how much he can save for the year and print it to the screen.*/

$leftoverMoney = $weeklyIncome * 52;
echo "\nRemaining income: $leftoverMoney";




