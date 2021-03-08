<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <h2>Switch Statement</h2>
    <?php

        $grade = 'A';

        switch($grade){
            case 'A' : 
                echo '<h2 style="color : green"> You are SUPERSTAR! </h2>';
                break;
            case 'B':
                echo '<h2 style="color : blue"> You did WELL! </h2>';
                break; 
            default:
                echo '<h2 style="color : red"> You have FAILED! </h2>';    
                break;   
        }

    ?>
</body>
</html>