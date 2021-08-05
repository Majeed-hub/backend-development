<!-- db-update -->
<!DOCTYPE HTML>
<html>

<body>
    <h1> Update Customer </h1>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $dbname = "northwind";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id = $_GET["id"];
    $sql_query = "SELECT id,first_name,last_name,city,Age,job_title,business_phone,address from customers where id = $id";
    $records = $conn->query($sql_query);
    if ($records->num_rows > 0) {
        $row = $records->fetch_assoc();
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $city = $row["city"];
        $Age = $row["Age"];
        $Job_title = $row["job_title"];
        $Business_phone = $row["business_phone"];
        $Address = $row["address"];

    ?>
        <form action="db-save-update.php" method="post">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="first_name" value="<?php echo $first_name ?>"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="last_name" value="<?php echo $last_name ?>"></td>
                </tr>
                <tr>
                    <td>City: </td>
                    <td><input type="text" name="city" value="<?php echo $city ?>"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name="Age" value="<?php echo $Age ?>"></td>
                </tr>
                <tr>
                    <td>Job_title:</td>
                    <td><input type="text" name="Job_title" value="<?php echo $Job_title ?>"></td>
                </tr>
                <tr>
                    <td>Business phone:</td>
                    <td><input type="text" name="Business_phone" value="<?php echo $Business_phone ?>"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="Address" value="<?php echo $Address ?>">

                    </td>
                </tr>

                <input type="hidden" name="id" value="<?php echo $id ?>">


            </table>
            <br>
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