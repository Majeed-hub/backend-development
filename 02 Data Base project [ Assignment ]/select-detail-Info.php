<!-- Customer Details -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: auto !important;
            display: inline-block !important;
            margin: 25px;

        }

        span {
            text-align: left !important;
            display: block !important;
        }

        td {
            text-align: right !important;
            /* padding: 12px 20px !important; */
            width: 200px;
            height: 42px;
            background-color: #fff;
            ;
        }

        .w3-table-all {
            border: none;
        }

        .w3-bordered tr,
        .w3-table-all tr {
            border-bottom: 1px #ddd solid;
        }

        .w3-table-all tr:last-child {
            border-bottom:none;
        }
    </style>
</head>

<body>
    <div class="w3-container">
        <h1> Customer Details </h1>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "northwind";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("connection unsuccessful" . $conn->connect_error);
        }
        $id = $_GET["id"];
        $sql_query = "SELECT id,first_name,last_name, job_title,address,business_phone,age,city from customers where id = $id ";

        $records = $conn->query($sql_query);
        if ($records->num_rows > 0) {

            echo "<table class='w3-table-all w3-card-4 ' >";
            while ($row = $records->fetch_assoc()) {

                $htmlData =  "<tr>" . "<td>" . "ID   " . "<td><span>" . $row["id"] . "</span></td>" . "</tr>";
                $htmlData .= "<tr>" . "<td>" . "First Name   " . "<td><span>" . $row["first_name"] . "</span></td>" . "</tr>";
                $htmlData .= "<tr>" . "<td>" . "Last Name   " . "<td><span>" . $row["last_name"] . "</span></td>" . "</tr>";
                $htmlData .= "<tr>" . "<td>" . "City   " . "<td><span>" . $row["city"] . "</span></td>" . "</tr>";
                $htmlData .= "<tr>" . "<td>" . "Job Title   " . "<td><span>" . $row["job_title"] . "</span></td>" . "</tr>";
                $htmlData .= "<tr>" . "<td>" . "Business Phone   " . "<td><span>" . $row["business_phone"] . "</span></td>" . "</tr>";
                $htmlData .= "<tr>" . "<td>" . "Age   " . "<td><span>" . $row["age"] . "</span></td>" . "</tr>";
                $htmlData .= "<tr>" . "<td>" . "Address   " . "<td><span>" . $row["address"] . "</span></td>" . "</tr>";

                echo $htmlData;
            }
            echo "</table>";
        } else {
            echo "0 results";
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