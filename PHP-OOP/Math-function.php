<?php
class Math
{
    
    public static function countDigits($n)
    {
        $count = 0 ;
        while($n != 0){
            $n =
            $n = intdiv($n, 10);
            $count++;
            
        }
   
        return $count;
    }
    public static function calculateOddEven($n){
        if($n%2==0)
        {
            return "Even numeber";
        }else{
            return "Odd number";
        }

    }
}
$number = 123;

 echo Math::countDigits($number)."<br>";
echo Math::calculateOddEven($number) . "<br>";


?>
