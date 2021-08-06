<?php
class Budget
{
    private $income;
    private $savings;
    private $expenses;
    private $tax;
    private $netIncome;
    private $amountLeft;


    //50,30,20 budget philosophy
    public function __construct($income,$tax)
    {
      $this->income = $income;
        $this->tax = $tax;    
    }
public function calculateNetIncome(){
        $this->amountLeft = $this->netIncome;

    $tax = $this->income * $this->tax / 100;      
     $this->netIncome = $this->income - $tax;
        
        return $this->netIncome;
    }
public function calculateSavings(){
     $this->savings = $this->netIncome * 0.20;
     $this->netIncome -= $this->savings;

     //assigning amount in another variable after calculating savings
        $this->amountLeft = $this->netIncome;
     return $this->savings;
}
public function calculateAffordability($price,$importance){
    $affordability = ($price / $this->amountLeft)*100;
    if($importance  && $affordability <= 50 ){
            return "needs : you afford this item";
    }else if( !$importance && $affordability <= 30 ){
            return "wants : you afford this item";

    }else {
        return "you don't afford this item";
    }
}
public function expense($amount){
        $affordability = ($amount / $this->netIncome) * 100;
        if ( $affordability <= 50 && $this->amountLeft != 0 ) {
            return $this->amountLeft  -= $amount;
        }
}

}
$personalBudget = new Budget(100000,10);
echo "your net income is = ". $personalBudget->calculateNetIncome()."<br>";
echo "your saving money is = ". $personalBudget->calculateSavings() . "<br>" . "<br>";
echo "affordability <br>".$personalBudget->calculateAffordability(20000,false) . "<br>";
echo "amount left from your salary is = " . $personalBudget->expense(5000) . "<br>";
echo "amount left from your salary is = " . $personalBudget->expense(10000) . "<br>";





?>