<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        <div class="w3-container">
            <h1>Searched Customer Records </h1>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "northwind";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("connection unsuccessful" . $conn->connect_error);
            }
            $input = $_POST["input"];
            $sql_query = "SELECT id,first_name,last_name, job_title,address,business_phone,age,city from customers where first_name like '%$input%' or last_name like '%$input%' ";

            $records = $conn->query($sql_query);
            if ($records->num_rows > 0) {
                echo
                "<table class='w3-table-all w3-card-4'> <tr>  <th>ID</th>  <th>First Name</th>  <th>Last Name</th> <th>City</th><th>job_title</th><th>business_phone</th><th>age</th><th>address</th> </tr>";

                while ($row = $records->fetch_assoc()) {
                    $htmlData = "<tr>";
                    $htmlData .= "<td>" . $row["id"] . "</td>";
                    $htmlData .= "<td>" . $row["first_name"] . "</td>";
                    $htmlData .= "<td>" . $row["last_name"] . "</td>";
                    $htmlData .= "<td>" . $row["city"] . "</td>";
                    $htmlData .= "<td>" . $row["job_title"] . "</td>";
                    $htmlData .= "<td>" . $row["business_phone"] . "</td>";
                    $htmlData .= "<td>" . $row["age"] . "</td>";
                    $htmlData .= "<td>" . $row["address"] . "</td>";
                    $htmlData .= "</tr>";
                    echo $htmlData;
                }
                echo "</table>";
            } else {
                echo "0 results <br> no such customer exists in this data base";
            }
            $conn->close();
            ?>
            <br>

            <div>
                <a href="db-select.php" class="w3-button w3-black btn" style="text-decoration:none;">View all records</a>
            </div>
        </div>

    </body>

    </html>
</body>

</html>