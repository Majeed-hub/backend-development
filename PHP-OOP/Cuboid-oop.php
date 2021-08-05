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
    <h2>Calculating volume of cuboid using class & object</h2>
    <?php
    class Cuboid
    {
        public $height;
        public $width;
        public $length;

        function __construct($h, $w, $l)
        {
            $this->height = $h;
            $this->width = $w;
            $this->length = $l;
        }
        function getVolume()
        {
            
            $volume = " volume of cuboid is  = " . $this->height*$this->width*$this->length . "<br>";
            
            return $volume;
        }
        function displayValues(){
           $values =" where <br> Height = $this->height <br> Width = $this->width <br> Length = $this->length ";
           return $values;
        }
   }


    $smallCuboid = new Cuboid(10, 20, 30);
    echo $smallCuboid->getVolume();
    echo $smallCuboid->displayValues();

    ?>
</body>

</html>