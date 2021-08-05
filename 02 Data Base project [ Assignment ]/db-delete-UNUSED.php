<!-- db-delete -->
<!DOCTYPE HTML>
<html>

<head>

   
</head>

<body>
    <h1> Delete Customer </h1>
    <h3>Are you sure about deleting this record?</h3>
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
    $sql_query = "SELECT id,first_name,last_name,city from customers where id = $id";
    $records = $conn->query($sql_query);
    if ($records->num_rows > 0) {
        $row = $records->fetch_assoc();
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $city = $row["city"];

    ?>
        <form action="db-save-delete.php" method="post">
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
                <input type="hidden" name="id" value="<?php echo $id ?>">


            </table>
            <br>
            <input type="submit" value="proceed" >
        </form>
    <?php
    } else {
        echo "Some error occured in retrieving info..";
    }
    $conn->close();
    ?>
</body>

</html>