<?php
        $title = "Functions"; 
        include 'includes/header.php'; 
   ?>
<h2>Functions</h2>
        
        <?php
            //Defining a Function
            function writeMessage(){
                echo "You are very nice";
            }

            //Calling Function
            writeMessage();
            echo '<hr>';
            writeMessage();
            echo '<hr>';

            //Function with parameters
            function addFunction($num1, $num2){
                $sum = $num1 + $num2;
                return $sum;
            }
            echo addFunction(3,5);
            echo '<hr>';
            echo addFunction("3","5");
            echo '<hr>';

            function changeNumber(&$num){
                $num += 100;
            }
            $num = 200;
            changeNumber($num);
            echo $num;
            echo '<hr>';
        ?>
