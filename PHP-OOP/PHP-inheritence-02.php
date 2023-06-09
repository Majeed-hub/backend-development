<!DOCTYPE html>
<html lang="en">

<head>
<style>
    body{
        margin: 12px;
    }
</style>
</head>

<body>
    <h2> Inheritence Practice Program </h2>
    <?php
    class SUV
    {
        public $length;
        public $offRoadCapability;
        public $passengerCapacity;
        public $type;
        public $model;

        function __construct($model)
        {
            $this->length = "6 Meters";
            $this->offRoadCapability = "Yes";
            $this->passengerCapacity = "7 seater";
            $this->type = "SUV";
            $this->model = $model;
        }
        function getDetails()
        {
            $htmlData =  "The  car can be as long as " . $this->length . "<br>" .
                "Off Road Capability " . $this->offRoadCapability . "<br>" .
                "Seating Capacity " . $this->passengerCapacity . "<br>" .
                "Car's type is " . $this->type . "<br>" .
                "Car model is " . $this->model . "<br>" . "<br>";
            return $htmlData;
        }
    }
    class Fortuner extends SUV
    {

        function FortunerDetails()
        {
            $htmlData = "Fortuner : Brand Name is Toyota" . "<br>" . " price is 43 lakhs " . "<br>" . "<br>";
            return $htmlData;
        }
    }
    class Sedan
    {
        public $length;
        public $offRoadCapability;
        public $passengerCapacity;
        public $type;
        public $model;

        function __construct($model)
        {
            $this->length = "5 Meters";
            $this->offRoadCapability = "No";
            $this->passengerCapacity = "5 seater";
            $this->type = "Sedan";
            $this->model = $model;
        }
        function getDetails()
        {
            $htmlData =  "The car can be as long as " . $this->length . "<br>" .
                "Off Road Capability " . $this->offRoadCapability . "<br>" .
                "Seating Capacity " . $this->passengerCapacity . "<br>" .
                "Car's type is " . $this->type . "<br>" .
                "Car model is " . $this->model . "<br>" . "<br>";
            return $htmlData;
        }
    }
    class Ciaz extends Sedan
    {
        function CiazDetails()
        {
            $htmlData = " Ciaz : Brand Name is Maruti suzuki " . "<br>" . " price is 11 lakhs " . "<br>" . "<br>";
            return $htmlData;
        }
    }

    $myFortuner = new Fortuner(2020);
    echo $myFortuner->FortunerDetails();
    echo $myFortuner->getDetails();


    $Sedan_obj = new Ciaz(2021);
    echo $Sedan_obj->CiazDetails();
    echo $Sedan_obj->getDetails();
    ?>
</body>

</html>