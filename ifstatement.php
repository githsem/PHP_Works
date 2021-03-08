<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
    <?php
        echo '<h2>If Statements</h2>';
        $grade = 50;
        if($grade >= 50){
            echo '<h3 style="color : green"> You have passed </h3>';
        }
        else{
            echo '<h3 style="color : red"> You have failed </h3>';
        }

        $grade = 'A';
        if($grade == 'A'){
            echo '<h2 style="color : green"> You are SUPERSTAR! </h2>';
        }
        elseif ($grade == 'B'){
            echo '<h2 style="color : blue"> You did WELL! </h2>';
        }
        else {
            echo '<h2 style="color : red"> You have FAILED! </h2>';
        }
    ?>
</body>
</html>