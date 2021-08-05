<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="w3-container">

        <h1>Customer Records </h1>
        <div style="margin: 50px;">
            <form action="" method="get">
                Search customer: <input type="search" name="searchText">
                <input type="submit" class="w3-button w3-black btn">
            </form>
        </div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "northwind";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("connection unsuccessful" . $conn->connect_error);
        }
        if (!empty($_GET)) {
            $searchText = $_GET["searchText"];
            $sql_query = "SELECT id,first_name,last_name, city from customers where first_name like '%$searchText%' OR last_name like '%$searchText%'";
        } else {
            $sql_query = "SELECT id,first_name,last_name, city from customers";
        }

        $records = $conn->query($sql_query);
        if ($records->num_rows > 0) {
            echo "<table class='w3-table-all w3-card-4'> <tr>  <th>ID</th>  <th>First Name</th>  <th>Last Name</th> <th>City</th> <th colspan='2' style='text-align:center;'>Edit</th> </tr>";

            while ($row = $records->fetch_assoc()) {
                $htmlData = "<tr>";
                $htmlData .= "<td>" . $row["id"] . "</td>";
                $htmlData .= "<td ><a href='select-detail-Info.php?id=" . $row["id"] . "' > " . $row['first_name'] . "</td>";
                $htmlData .= "<td>" . $row["last_name"] . "</td>";
                $htmlData .= "<td>" . $row["city"] . "</td>";
                $htmlData .= "<td><a href='db-update.php?id=" . $row["id"] . "'>Update</a></td>";
                $htmlData .= "<td><a href='db-delete.php?id=" . $row["id"] . "'>Delete</a></td>";
                $htmlData .= "</tr>";
                echo $htmlData;
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <br>
        <div style="text-align: center;">

            <a href="db-insert.html" class="w3-button w3-black btn" style="text-decoration:none;">Add customer</a>

        </div>
    </div>

</body>

</html>