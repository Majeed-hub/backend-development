<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px black solid;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "northwind";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("connection was failed" . $conn->connect_error);
    }
    $sql_query = "SELECT * from   customers where
    job_title = 'purchasing manager'
    or job_title = 'owner'";
    $records = $conn->query($sql_query);
    if ($records->num_rows > 0) {
        echo "<table>";
        echo "<tr>" . "<th>id</th>" . "<th>first Name</th>" . "<th>Last Name</th>" . "<th>job title</th>" .  "<th>city</th>" . "</tr>";
        while ($row = $records->fetch_assoc()) {
            echo "<tr>";
            echo   "<td>" . $row["id"] . " <td> " . $row["first_name"] . "<td> " . $row["last_name"] . "<td> ". $row["job_title"] . "<td> ". $row["city"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "query was unsuccessful";
    }
    $conn->close();
    ?>
</body>
</html>