<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Follow each Link to the page example</h2>
    <ul>
        <li><a href="array.php">Array</a></li>
        <li><a href="forloop.php">For Loop</a></li>
        <li><a href="whiledowhile.php">While Loop</a></li>
        <li><a href="ifstatement.php">If Statement</a></li>
        <li><a href="switchstatement.php">Switch Statement</a></li>
        <li><a href="stringmanip.php">String</a></li>
        <li><a href="datetimemanip.php">Date Time</a></li>
        <li><a href="functions.php">Functions</a></li>
    </ul>

    <?php
        echo 'Hello PHP';
        echo '<hr>';
    ?>
    <?php
        $name = 'Hans';
        $age = 30;
        echo $name;
        echo '<h1> My name is : '.$name. '</h1>';
        echo '<h1> My age is : '.$age. '</h1>';
        echo "<h1> New $name</h1> ";
    ?>

</body>
</html>