<!DOCTYPE html>
<html lang="en">

<head>
   
    <style>
        body {
            font-family: Arial, Helvetica;
        }
        input{
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h1>multiplication Program using Class & Object Demo</h1>
    <form action="" method="post">
        <label for="numberTxtBox">Number:</label>
        <input type="text" name="numberTxtBox"><br><br>
        <input type="submit">
    </form>
    
    <?php
    include 'multiplication.php';

    if (!empty($_POST))  
        $num = $_POST["numberTxtBox"];
        $m = new table($num);
         echo $m->multiply();
         ?>
</body>
</html>
