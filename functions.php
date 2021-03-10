<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<h2>Functions</h2>
        
        <?php
            //Defining a Function
            function writeMessage(){
                echo "You are very nice";
            }

            //Calling Function
            writeMessage();
            echo '<hr>';
            writeMessage();
            echo '<hr>';

            //Function with parameters
            function addFunction($num1, $num2){
                $sum = $num1 + $num2;
                return $sum;
            }
            echo addFunction(3,5);
            echo '<hr>';
            echo '<hr>';
            echo '<hr>';
        ?>
    
</body>
</html>