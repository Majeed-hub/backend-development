<!DOCTYPE html>
<html lang="en">


<body style="text-align:center">
    <h3>Associative array</h3>
    <div>
        <?php
        $country_info = array(
            "IN" => "india",
            "UAE" => "United",
            "UK" => "united kingdom"
        );

        foreach ($country_info as $key => $value){
            echo "key = $key -> "." value = $value";
            echo "<br>";
        }
        ?>
    </div>
</body>
</html>