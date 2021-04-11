<?php
        $title = "Switch"; 
        include 'includes/header.php'; 
   ?>
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
<?php include 'includes/footer.php' ?>    