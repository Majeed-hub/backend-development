<?php
class Budget
{
    private $income;
    private $savings;
    private $expenses;
    private $tax;
    private $netIncome;

    //50,30,20 budget philosophy
    public function __construct($income,$tax)
    {
      $this->income = $income;
        $this->tax = $tax;    
    }
public function calculateNetIncome(){
    $this->netIncome = $this->income * $this->tax / 100;
         
}
public function calculateSavings(){
     $this->savings = $this->netIncome * 0.20;
}
public function calculateAffordability($price,$importance)
}
?>