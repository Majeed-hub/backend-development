<?php
$Numbers = array(25, 64, 324, 12, 574);
$n = count($Numbers);

$largest = $Numbers[0];//25
$smallest = $Numbers[0];//25

for($i = 0; $i < $n; $i++ ){ 

$largest = ($Numbers[$i] > $largest) ? $Numbers[$i]  : $largest;
$smallest = ($Numbers[$i] < $smallest) ? $Numbers[$i]  : $smallest;     
 
}



// $largest = $Numbers[0];
// $Largestposition = 0;

// $smallest = $Numbers[0];
// $smallestposition = 0;

// // $i = 4
// for ($i = 0; $i < count($Numbers); $i++) {
    
//     if($Numbers[$i] > $largest){

//         $largest = $Numbers[$i];

//         $Largestposition = $i;
//     }
//     if($Numbers[$i] < $smallest ){

//         $smallest = $Numbers[$i];

//         $smallestposition = $i;
//     }
// }

echo "Largest number is $largest"." on index $Largestposition ";
echo "<br>";
echo "Smallest number is $smallest"." on index  $smallestposition";

