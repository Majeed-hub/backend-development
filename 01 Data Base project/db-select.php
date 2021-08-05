<!-- db-select2.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table,
        td,
        th {
            border: 1px solid gray;
            border-collapse: collapse;
            padding: 3px;
        }

        h1 {
            text-align: center;
        }

        a {
            text-decoration: none;

        }

        .btn {
            color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="w3-container">
        <h1>View Records</h1>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "northwind";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, first_name, last_name, city FROM persons";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table class='w3-table-all w3-card-4'> <tr>  <th>ID</th>  <th>First Name</th>  <th>Last Name</th> <th>City</th> <th>Edit</th></tr>";

            while ($row = $result->fetch_assoc()) {
                $rowHtml =  "<tr>";
                $rowHtml .= "<td>" . $row["id"] . "</td>";
                $rowHtml .= "<td>" . $row["first_name"] . "</td>";
                $rowHtml .= "<td>" . $row["last_name"] . "</td>";
                $rowHtml .= "<td>" . $row["city"] . "</td>";
                $rowHtml .= "<td><a href='db-update.php?id=" . $row["id"] . "'>Update</a></td>";
                $rowHtml .= "</tr>";
                echo $rowHtml;
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <br>
        <div>
            <a href="db-insert.html" class="btn btn-secondary">Add Record</a>

        </div>
    </div>
</body>

</html>