<!DOCTYPE html>
<html>

<body>
    <h2> Date Time Demo </h2>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";

    date_default_timezone_set("Asia/Calcutta");

    echo "The time is " . date("h:i:sa") . "<br>";
    echo "The date and time is " . date("d-m-Y h:i:sa");
    ?>

</body>

</html>