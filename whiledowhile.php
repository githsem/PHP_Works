<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Do While Loop</title>
</head>
<body>
    <h2>While Loop</h2>
        
        <?php
            $grade = 0;
            while($grade< 10){
                echo '<p> I am less than 10</p>';
                $grade++;
            }
            echo '<p> EXIT</p>';
        ?>
    <h2>Do While Loop</h2>    
        <?php
            do{
                echo '<p> I am Do While Loop</p>';
                $grade++;
            } while($grade< 10)
            

    ?>
</body>
</html>