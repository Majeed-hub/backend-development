<?php
$n = 5;
$fact = 1;
for($i = 2; $i <= $n; $i++){
    $fact *= $i ;
echo " $fact  ";
}
echo '<br>';
echo $fact;
$array = array(34,36,235,756,786846,46,32);

foreach($array as $element){
    $result = ($element % 2 == 0) ? "even" : "odd";
    echo $result;
}
?>