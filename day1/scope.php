<?php 


//=========================================== Global scope

$x = 5;
$y = 10;

$regularFunction = function() {
//    echo "$x";  undefined
};
$regularFunction();  //output:  Undefined variable $x so use global keywords

$globalVariable = function() {
    global $x, $y;
    echo "$x $y";
};
$globalVariable();  // output: 5  10


//============================================ Local Scope
$localFunction = function() {
    $l = 30;
    echo $l;
};
// echo "$l";  // undefined
$localFunction();  // output: 30


$localFunctionTwo = function() {
    $l = 40;  //local variable with same name
    echo $l;
};
$localFunctionTwo();


//============================================ static Scope
//static is used to store current value after function called 
$staticFunction = function() {
    static $count = 0;
    echo $count;
    $count++;
};

$staticFunction();  // output: 0
$staticFunction();  // output: 1
$staticFunction();  // output: 2

?>