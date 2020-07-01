<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <form action="calc.php" method="post">
        <input type="text" name="num1" placeholder="Insert a number">
        <select name="oper">
            <option value="sum">+</option>
            <option value="sub">-</option>
            <option value="mul">x</option>
            <option value="div">/</option>
        </select>
        <input type="text" name="num2" placeholder="Insert other number">
        <button type="submit" value="=" name="submit">=</button>
    </form>
    <?php 
        if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfield"){
            echo "Digit a number please.";
        }else if($_GET['error'] == "notnumeric"){
            echo 'You  did not digit a number. Digit a number please.';
        }
    }
    ?>
</body>
</html> 