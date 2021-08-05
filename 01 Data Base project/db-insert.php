<!-- db-insert.php -->
<!DOCTYPE HTML>
<html>

<body>
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
    // If it passes this means connection has been created 

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $city = $_POST["city"];

    $sql = "INSERT INTO persons (first_name, last_name, city) VALUES ('$first_name', '$last_name', '$city')";

    //echo $sql . "<br>";

    $queryResult = $conn->query($sql); // firing the query & collecting the result

    if ($queryResult === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // closing the connection
    $conn->close();

    ?>

    <div>
        <a href="db-select.php">View Records</a>
    </div>

</body>

</html>