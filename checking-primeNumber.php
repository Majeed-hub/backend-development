<h2>Checking if the entered number is prime number or not prime</h2>
<form action="" method="post">
    Enter a Number: <input type="text" name="input"><br><br>
    <input type="submit"  value="Submit">
</form>
<?php
$value = false;
if (!empty($_POST)) {
    $input = $_POST['input'];
    # checking if the entered number is divisible by any number from 2 to n-1 (n = entered number)
    # obviously it will be divisible by 1 and itself, if it is divisible by any other number then it is not prime number
    for ($i = 2; $i <= $input - 1; $i++) {
        if ($input % $i == 0) {
            $value = True;
        }
    }
    if ($value) {
        echo 'The Number ' . $input . ' is not prime';
    } else {
        echo 'The Number ' . $input . ' is prime';
    }
}
?>