<?php
session_start();
// echo "my name is " . $_SESSION["Name"] . "<br>";
// echo " age is " . $_SESSION["age"] . "<br>";
// echo "lives in " . $_SESSION["city"] . "<br>";

?>
<html>

<body>

    <?php
    // Echo session variables that were set on previous page
    echo "Welcome " . $_SESSION["Name"] . "<br>";
     echo " age is " . $_SESSION["age"] . "<br>";
    echo "lives in " . $_SESSION["city"] . "<br>";

    //print_r($_SESSION);

    // remove all session variables
    //session_unset();

    // destroy the session
    //session_destroy();
    ?>

</body>

</html>