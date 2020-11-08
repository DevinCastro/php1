<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="calculator.php" method="post">
        First Number: <input type="number" name='num1'> <br>
        Second Number: <input type="number" name='num2'> <br>
        Operator: <input type="text" name='op'> <br>
        <button>Submit</button> <br>
    </form>

    <?php

        function calc(){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            switch($op){
                case "+":
                    echo $num1 + $num2;
                break;
                case "-":
                    echo $num1 - $num2;
                break;
                case "*":
                    echo $num1 * $num2;
                break;
                case "/":
                    echo $num1 / $num2;
                break;
            }

        }

        calc();




    ?>

</body>
</html>