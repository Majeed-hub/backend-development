<!-- db-update.php -->
<!DOCTYPE HTML>
<html>

<body>
    <h1> Update Person </h1>
    <?php

    $servername = "localhost";  // "127.0.0.1"
    $username = "root";
    $password = "";

    $dbname = "northwind";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id = $_GET["id"];

    $sql = "SELECT id, first_name, last_name, city FROM persons where id = $id";
    $records = $conn->query($sql);
 
    if ($records->num_rows > 0) {

        $row = $records->fetch_assoc();
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $city = $row["city"];
    ?>

        <form action="db-save.php" method="post">
            First Name: <input type="text" name="first_name" value="<?php echo $first_name ?>"><br><br>
            Last Name: <input type="text" name="last_name" value="<?php echo $last_name ?>"><br><br>
            City: <input type="text" name="city" value="<?php echo $city ?>"><br><br>
            <input type="hidden" name="id" value="<?php echo $id ?>"><br><br>

            <input type="submit">
        </form>

    <?php
    } else {
        echo "Some error occured in retrieving info..";
    }
    $conn->close();
    ?>

</body>

</html>