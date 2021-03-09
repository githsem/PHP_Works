<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<h2>Array</h2>
        
        <?php
            //a variable
            $num = 3;

            //an array
            $numbers = array(1,34,3,54,25,6,77,8,900,10);

            echo $numbers[0];
            echo '<hr>';
            echo count($numbers);
            echo '<hr>';
            for($count = 0; $count<10;$count++){
                echo $numbers[$count];
                echo ',';
            }
        ?>
</body>
</html>