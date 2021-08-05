<!-- db-save-update -->
<!DOCTYPE HTML>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<body>
    <h1> Update customer </h1>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $dbname = "northwind";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id = $_POST["id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $city = $_POST["city"];
    $Age = $_POST["Age"];
    $Job_title = $_POST["Job_title"];
    $Business_phone = $_POST["Business_phone"];
    $Address = $_POST["Address"];
    $sql_query = "UPDATE customers set first_name = '$first_name',last_name = '$last_name', city = '$city',Age = '$Age',job_title = '$Job_title',business_phone = '$Business_phone', address = '$Address' where id = '$id'";
    if ($conn->query($sql_query) === TRUE) {
        echo "1 row affected and updated succesfully";
    } else {
        echo "Error: " . $sql_query . "<br>" . $conn->error;
    }
    $conn->close();

    ?>
    <div>
        <a href="db-select.php" class="w3-button w3-black btn" style="text-decoration:none;">view Records</a>
    </div>
</body>

</html>