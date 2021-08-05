<!DOCTYPE html>
<html lang="en">

<head>

    <title>OOP in PHP</title>
    <style>

    </style>
</head>

<body>

    <?php

    class Product
    {
        private $Title;
        private $Description;
        private $Price;

        public function __construct($Title, $Description, $Price)
        {
            $this->Title = $Title;
            $this->Description = $Description;
            $this->Price = $Price;
        }
        //getter - a function that gets value of a property 
        public function getTitle()
        {
            return $this->Title;
        }
        public function getDescription()
        {
            return $this->Description;
        }
        public function getPrice()
        {
            return $this->Price;
        }


        // setters - a function that sets value of a property 
        public function setTitle($Title)
        {
            $TitleCount = strlen($Title);

            if ($TitleCount <= 225) {
                $this->Title = $Title;
            } else{
                return 0;
            }
        }
        public function setDescription($Description)
        {

            $this->Description = $Description;
        }
        public function setPrice($Price)
        {
            $PriceType = is_nan($Price);

            if ($PriceType) {
                return 0;
            } else {
                $this->Price = $Price;
            };
        }
    }

    $ProductOne = new Product("Iphone 11", "A product from Apple", 60000);
    $ProductOne->setPrice(50000);

    // $ProductOne->setTitle("akdHFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
    // $ProductOne->setPrice("twenty thousand");


    echo "Title : " . $ProductOne->getTitle() . '<br>';
    echo "Price : " . $ProductOne->getPrice() . '<br>';
    echo "Description :" . $ProductOne->getDescription() . '<br><hr>';

    $ProductTwo = new Product('Macbook pro', 'Premium Laptop', 120000);
    echo  "Title : " . $ProductTwo->getTitle() . '<br>';
    echo "Price : " . $ProductTwo->getPrice() . '<br>';
    echo "Description : " . $ProductTwo->getDescription() . '<br><hr>';

    ?>



</body>

</html>