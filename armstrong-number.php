# PHP file
<?php  
$num = $_POST["textBox"];  
function getArmstrong($num){
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total+=$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}
}
getArmstrong($num);