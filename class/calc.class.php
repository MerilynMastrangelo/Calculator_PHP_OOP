<?php
class Calc{
    private $num1;
    private $num2;
    private $oper;

    public function __construct($num1, $num2, $oper){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->oper = $oper;
    }

    public function calcMethod(){
        switch($this->oper){
            case 'sum':
            $result = $this->num1 + $this->num2;
            break;

            case 'sub':
            $result = $this->num1 - $this->num2;
            break;

            case 'mul':
            $result = $this->num1 * $this->num2;
            break;

            case 'div':
            $result = $this->num1 / $this->num2;
            break;

            default: 
            $result = "Error";
            break;
            
        }
        //result to two decimal places
        return number_format($result, 2, ',', ' ');
    }
}
?>
