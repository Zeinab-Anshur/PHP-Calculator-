<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculator</title> 
    </head>
<body>

    <form method="GET">
    <h1>Calculator</h1>
            <ul>
     <ol> Multiplication: * </ol>
     <ol> Substraction: - </ol>
     <ol> Division: / </ol>
     <ol> Addition: + </ol>
        </ul>
     <p>Enter first number:</p>
        <input type="text" name="cal1">
        <p>Enter second number:</p>
        <input type="text" name="cal2">
        <p>Enter the calculator symbol</p>
        <input type="text" name="symbol">
        <button>Calculate</button>
    </form>
    <?php
    $cal1= $_GET['cal1'];
    $cal2= $_GET['cal2'];
    $symbol =$_GET['symbol'];

    if($symbol == '+')
    {
        $add = $cal1 + $cal2;
        echo "Addition is:".$add;
    }
    else if($symbol == '-')
    {
        $subs = $cal1 - $cal2;
        echo "Substraction is:".$subs;
    }
     else if($symbol == '*')
    {
        $mul = $cal1 * $cal2;
        echo "Multiply is:".$mul;
    }
    else if($symbol == '/')
    {
        $div = $cal1 / $cal2;
        echo "Division is:".$div;
    }
      else
    { 
        echo "Oops ,something wrong in your code son";
    }
    ?>
    </body> 
</html>