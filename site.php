<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
    <?php
        echo "<h1>Hello World</h1>";
        echo "<p>this is a paragraph</p>";
        echo "<hr>";
        echo "not html";
        echo "<br>";

        // lets make a variable with $

        $name = "Devin";
        $age = 26;


        echo "My name is $name and I am $age years old";


        $phrase = "Whats up, how are you?";
        echo strtoupper($phrase);


        
        

    ?> -->



    <form action="site.php" method="get">

    
        Name: <input type="text" name="name">
        Age: <input type="number" name="age">
        Birthday: <input type="date" name="birthday">
        
        <button>Submit</button>

    </form>
    <br>

    <?php 

        $name = $_GET["name"];
        $age = $_GET["age"];
        $birthday = $_GET["birthday"];


        echo "Your name is $name <br>";
        echo "You are $age years old <br>";
        echo "Your birthday is $birthday <br>";
    ?>



</body>
</html>