
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Factorial Program using Class & Object Demo</title>
    <style>
        body {
            font-family: Arial, Helvetica;
        }
    </style>
</head>

<body>
    <h1>Factorial Program using Class & Object Demo</h1>
    <form action="" method="post">
        <label for="numberTxtBox">Number:</label>
        <input type="text" name="numberTxtBox"><br><br>
        <input type="submit">
    </form>

    <?php
    include 'factorial.php';

    if (!empty($_POST))  // on submit of form
    {
        $num = $_POST["numberTxtBox"]; // read value of textbox
        $f = new Factorial();   // create an object of Factorial class
        $f->number = $num;   // set property number of factorial object
        echo "Factorial of $num = " . $f->getFactorial();
    }

    ?>

</body>
</html>