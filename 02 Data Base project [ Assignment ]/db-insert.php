<!-- db-insert.php -->
<!DOCTYPE HTML>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    td{
        text-align: left;
    }
</style>
</head>

<body>
    <div>
        <h2>insert operation</h2>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "northwind";


        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $city = $_POST["city"];
        $Age = $_POST["Age"];

        $Job_title = $_POST["Job_title"];
        $Business_phone = $_POST["Business_phone"];
        $Address = $_POST["Address"];
        $email = $_POST["email"];

        $sql = "INSERT INTO customers (first_name, last_name, city,Age,job_title,business_phone,address,email_address) VALUES ('$first_name', '$last_name', '$city','$Age','$Job_title','$Business_phone','$Address','$email')";

        //echo $sql . "<br>";

        $queryResult = $conn->query($sql); // firing the query & collecting the result

        if ($queryResult === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        ?>

        <div>
            <a href="db-select.php" class="w3-button w3-black btn" style="text-decoration:none;">View Records</a>
        </div>
    </div>
</body>

</html>