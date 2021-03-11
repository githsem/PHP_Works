<?php
        $title = "While"; 
        include 'includes/header.php'; 
   ?>
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
            } while($grade< 10);
            echo '<p> EXIT</p>';
    ?>
<?php include 'includes/footer.php' ?>      
</body>
</html>