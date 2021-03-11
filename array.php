<?php
    $title = "Array"; 
    include 'includes/header.php'; 
?>
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
<?php require 'includes/footer.php' ?>            
</body>
</html>