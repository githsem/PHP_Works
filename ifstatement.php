<?php
    $title = "IfStatement"; 
    include 'includes/header.php'; 
?>
    <h2>If Else Statements</h2>
    <?php    
        $grade = 50;
        if($grade >= 50){
            echo '<h3 style="color : green"> You have passed </h3>';
        }
        else{
            echo '<h3 style="color : red"> You have failed </h3>';
        }

        $grade = 'A';
        if($grade == 'A'){
            echo '<h2 style="color : green"> You are SUPERSTAR! </h2>';
        }
        elseif ($grade == 'B'){
            echo '<h2 style="color : blue"> You did WELL! </h2>';
        }
        else {
            echo '<h2 style="color : red"> You have FAILED! </h2>';
        }
    ?>
<?php include 'includes/footer.php' ?>    