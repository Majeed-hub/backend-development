<!DOCTYPE html>
<html lang="en">
<head>
<style>
table,tr,td,th{
    border: 1px black solid; 
    border-collapse: collapse;
}
th,td{
    padding: 5px;
}
</style>
</head>
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

$sql_query = "SELECT id, first_name, last_name,city FROM customers where job_title = 'Owner' ";
$records = $conn->query($sql_query);

//echo "Number of rows returned " . $records->num_rows . "<br>";
if ($records->num_rows > 0) {
    // output data of each row
    echo "<table>";
    echo "<tr>"."<th>id</th>". "<th>first Name</th>" . "<th>Last Name</th>"."</tr>";
    while ($row = $records->fetch_assoc()) {
        echo "<tr>";
        echo   "<td>" . $row["id"] . " <td> " . $row["first_name"] . "<td> " . $row["last_name"]. "</td>";
        echo "</tr>";

    }
    echo "</table>";
} else {
    echo "Query wasn't successful";
}
$conn->close();
 ?>
</body>
</html>