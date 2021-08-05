<?php
class table
{
    public $input;
    function __construct($num)
    {
        $this->input = $num;
    }
    
    function multiply(){
        $table ="";
        for($i = 1; $i <= 10;$i++)
        {
        $table .= " $this->input x $i = " . $this->input * $i . "<br>";
        }
        return $table;
    }
}