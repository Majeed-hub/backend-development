<!DOCTYPE html>
<html>

<body>

    <h2> JSON Decode </h2>
    <?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    $obj = json_decode($jsonobj); // JSON to PHP Object
    var_dump($obj); // Prints information of a variable

    // echo $obj->Peter . "<br>";
    // echo $obj->Ben . "<br>";
    // echo $obj->Joe . "<br>";

    ?>

</body>

</html>