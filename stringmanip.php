<?php
    $title = "String"; 
    include 'includes/header.php'; 
?>
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
            echo strlen($phrase1);
            echo '<hr>';
        ?>
<?php include 'includes/footer.php' ?>  
</body>
</html>