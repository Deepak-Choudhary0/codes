<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basics of PHP</title>
</head>
<body>
<div class="container">
This is my First PHP website..

<?php

/*
    Constants.. Constant is something whose value cannot be changed.
    A good practice is always to define it in the starting.
*/

define('pi',3.14);
$radius = 15;
$area = pi * $radius * $radius;
echo "<br><br>Area of circle having radius $radius cm is : $area cm square<br>";

/* 
    User Defined Functions
*/

function printing($values){
  echo "<br>The value is: $values <br>";
}

printing(56);

echo "<h1>This is my first php code.....</h1>";

// comments

/*This is
a multi line comment*/
// this is done using 
// ctrl + /h

echo "<br>a:",$a=25,"<br>"; //variable defining , php is dynamically type language so you doesnt need to specify variable type.
echo "b:",$b=40,"<br>";
$a=$b;
echo "<br>SUM:".$a+$b,"<br>";
echo "a :",$a,", b : $b","<br>";

//values

$variable1 = 5;
$variable2 = 2;
echo "<h1>values:-</h1>variable 1 : $variable1 <br>";
echo "variable 2 : $variable2 <br>";

// Arithmetic Operators 

echo "<h1>Arithmetic Operators:-</h1>";
echo "The value of varible1 + variable2 is ";
echo $variable1 + $variable2;
echo "<br>";
echo "The value of varible1 - variable2 is ";
echo $variable1 - $variable2;
echo "<br>";
echo "The value of varible1 * variable2 is ";
echo $variable1 * $variable2;
echo "<br>";
echo "The value of varible1 / variable2 is ";
echo $variable1 / $variable2;
echo "<br><br>";

// Assignment operators

echo "<h1>Assignment operators:-</h1>";

$variable1 = 100;

$variable2 = $variable1;
echo "the value of variable now is ";
echo $variable2;
echo "<br>";

$variable2 += 10;
echo "the value of variable now is ";
echo $variable2;
echo "<br>";

$variable2 -=10;
echo "the value of variable now is ";
echo $variable2;
echo "<br>";

$variable2 *=10;
echo "the value of variable now is ";
echo $variable2;
echo "<br>";

$variable2 /=10;
echo "the value of variable now is ";
echo $variable2;
echo "<br><br>";

// Comparison Operators

echo "<h1> Comparison Operators </h1>";
echo "The value of 1==4 is ";
echo var_dump(1==4);
echo "<br>";

echo "The value of 1!=4 is ";
echo var_dump(1!=4);
echo "<br>";

echo "The value of 1>=4 is ";
echo var_dump(1>=4);
echo "<br>";

echo "The value of 1<=4 is ";
echo var_dump(1<=4);
echo "<br>";

// Increment/Decrement Operators 

// Pre-increment (++i) − Before assigning the value to the variable, the value is incremented by one.
// Post-increment (i++) − After assigning the value to the variable, the value is incremented.

echo "<h1> Incremen/Decrement Operators </h1>";
echo $variable1++;
echo $variable1--;
echo ++$variable1;

echo --$variable1;
echo "<br>";
echo $variable1;

//Logical operators

/*

Operator Name EG          Result
and      AND  $x and $y   True if both $x and $y are true
or       OR   $x or $y    True if either $x or $y is true
xor      XOR  $x xor $y   True if either $x or $y is true, but not both
&&       And  $x && $y    True if both $x and $y are true
||       Or   $x || $y    True if either $x or $y is true
!        Not  !$x         True if $x is not true

*/

// Logical Operator
// and (&&)
// or (||)
// xor 
// !

// $myVar = (true and true);
// $myVar = (false and true);
// $myVar = (false and false);
// $myVar = (true and false);
// $myVar = (true or false);

// $myVar = (true xor true);
// $myVar = (false and true);
// $myVar = (false xor false);

echo "<h1> Logical Operators </h1>";
$myVar = (true and false);
echo "<br>";
echo var_dump($myVar);

//Data Types

/*
    Strings
    Integers
    Floating Point
    Boolean
    Array
    Object
*/

//  Strings

echo "<h1> Strings </h1>";

$str = "This this this";
echo $str. "<br>";
$lenn = strlen($str);
echo "The length of this string is ". $lenn . ". Thank you <br>";
echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
echo "The reversed string is ". strrev($str) . ". Thank you <br>";
echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
echo $lenn;

//  Arrays

echo "<h1> Arrays </h1>";
$languages = array("Python", "C++", "php", "NodeJs"); 
echo count($languages);   
echo $languages[0];


//If-Else

/*
    There are various ways to use if statements in PHP.
if
if-else
if-else-if
*/

echo "<h1> If/Else </h1>";

$age = 6;
if($age>18){
    echo "You can go to the party";
}
else if($age==7){
    echo "You are 7 years old";
}
else if($age==6){
    echo "You are 6 years old";
}
else{
    echo "You can not go to the party";
}


//  Loops

/*
    while
    Do_While
    For
    For each
*/

echo "<h1> Loops </h1>";

$a = 0;
while ($a <= 10) {
  echo "<br>The value of a is: ";
  echo $a;
  $a++;
}


// Iterating arrays in PHP using while loop

echo "<h1> While Loop </h1>";
$a = 0;
while ($a < count($languages)) {
  echo "<br>The value of language is: ";
  echo $languages[$a];
  $a++;
}

// Do while loop
$a = 200;
do {
  echo "<br>The value of a is: ";
  echo $a;
  $a++;
} while ($a < 10);

// For loop
for ($a=60; $a < 10; $a++) { 
  echo "<br>The value of a from the for loop is: ";
  echo $a;
}

foreach ($languages as $value) {
  echo "<br>The value from foreach loop is ";
  echo $value;
}


?>
</div>
</body>
</html>