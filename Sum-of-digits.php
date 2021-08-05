<?php
$n = 123;

function getSum($n){
    $sum = 0;
while ($n != 0){
    $sum += $n % 10;
    $n = $n / 10;
}
return $sum;
}
 $sum = getSum($n);
echo "Sum of entered digits is $sum";
