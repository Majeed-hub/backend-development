<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <h2> JSON (JavaScript Object Notation) Encode </h2>
    <?php
    $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
    print_r($age);
    echo $age['Peter'];
    echo "<br>" . json_encode($age);

    $cars = array("Volvo", "BMW", "Toyota");
    echo json_encode($cars);
    ?>


</body>

</html>