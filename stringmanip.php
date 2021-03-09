<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
<h2>String</h2>
        
        <?php
            //concatenation
            $phrase1 = "student who came late";
            $phrase2 = "in class, stand with";
            echo $phrase1;
            echo '<hr>';
            echo $phrase2;
            echo '<hr>';
            echo $phrase1.$phrase2;
            echo '<hr>';

            //transformation
            echo strtoupper($phrase1);
            echo '<hr>';
            echo str_repeat('abc',5);
            echo '<hr>';
            echo substr($phrase1,5,10);
            echo '<hr>';


        ?>
    
</body>
</html>