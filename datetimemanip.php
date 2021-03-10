<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Dite Time</title>
</head>
<body>
<h2>Date Time</h2>
        
        <?php
            $datenow= getdate();
            echo $datenow["mday"];
            echo '<hr>';
            echo $datenow["mon"];
            echo '<hr>';
            echo $datenow["year"];
            echo '<hr>';
            echo '<hr>';
            echo '<hr>';
        ?>
</body>
</html>