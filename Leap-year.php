<?php
echo "<h1>program to find Leap year</h1>";
$year = 2020;
if(($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0) ){
echo "<h3> $year is a Leap year</h3>"; 
}
else{
    echo "<h3> $year is not a Leap year</h3>";
}