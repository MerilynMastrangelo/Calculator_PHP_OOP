<?php
include 'class/calc.class.php';
    if(isset($_POST['submit'])){
    //variable receives the data from form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['oper'];

    //ERROR HANDLING -- empty fields and check if it is an numerical number
    if(empty($num1) || empty($num2)){
        header("Location: ./index.php?error=emptyfield");
        exit();
    }else if(!is_numeric($num1) || !is_numeric($num2)){
        header("Location: ./index.php?error=notnumeric");
        exit();
    }
    else{
        //create an object
        $calculator = new Calc($num1, $num2, $operator);
        echo $calculator->calcMethod();
    }
  
}