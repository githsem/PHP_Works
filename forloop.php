<?php
        $title = "Forloop"; 
        include 'includes/header.php'; 
?>
    <h2>For Statement</h2>
    
    <?php

        //For Loops
        for($count = 0; $count < 3; $count++){
            echo '<p>Hello World</p>';
        }
        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is $count</p>";
        }

    ?>
<?php include 'includes/footer.php' ?>   
</body>
</html>