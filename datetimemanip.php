<?php
    $title = "Date Time"; 
    include 'includes/header.php'; 
?>
<h2>Date Time</h2>      
        <?php
            $datenow= getdate();
            echo $datenow["mday"];
            echo '<hr>';
            echo $datenow["mon"];
            echo '<hr>';
            echo $datenow["year"];
            echo '<hr>';
        ?>
<?php include 'includes/footer.php' ?>        